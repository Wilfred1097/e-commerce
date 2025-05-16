<?php
// Headers
header('Content-Type: application/json');

// Check for authentication
if (!isset($_COOKIE['DWHMA0'])) {
    echo json_encode(['success' => false, 'message' => 'Authentication required']);
    exit;
}

// Function for logging errors
function logError($message) {
    $logFile = 'order_errors.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

// Debug function
function logDebug($message, $data = null) {
    $logFile = 'order_debug.log';
    $timestamp = date('Y-m-d H:i:s');
    $dataStr = $data ? json_encode($data) : '';
    file_put_contents($logFile, "[$timestamp] $message $dataStr\n", FILE_APPEND);
}

try {
    // Get database connection
    require_once './../../main/template/mysql/conn.php';

    // Get JSON data from request
    $input = json_decode(file_get_contents('php://input'), true);
    logDebug("Received order data:", $input);

    // Validate required fields
    if (!isset($input['user_id']) || !isset($input['payment_method']) ||
        !isset($input['total_amount']) || !isset($input['items']) || empty($input['items'])) {
        echo json_encode(['success' => false, 'message' => 'Missing required order information']);
        exit;
    }

    // Sanitize inputs
    $userId = filter_var($input['user_id'], FILTER_SANITIZE_NUMBER_INT);
    $paymentMethod = filter_var($input['payment_method'], FILTER_SANITIZE_STRING);
    $deliveryAddress = filter_var($input['delivery_address'], FILTER_SANITIZE_STRING);
    $totalAmount = filter_var($input['total_amount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Start transaction
    $pdo->beginTransaction();

    // 1. Insert order into orders table
    $sql = "INSERT INTO orders (user_id, payment_method, delivery_address, total_amount, order_status, order_date)
            VALUES (:user_id, :payment_method, :delivery_address, :total_amount, 'Pending', NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':user_id' => $userId,
        ':payment_method' => $paymentMethod,
        ':delivery_address' => $deliveryAddress,
        ':total_amount' => $totalAmount
    ]);

    // Get the new order ID
    $orderId = $pdo->lastInsertId();
    logDebug("Created order with ID: $orderId");

    // 2. Insert order items and update inventory
    foreach ($input['items'] as $item) {
        logDebug("Processing item:", $item);

        // Extract product ID and quantity properly
        $productId = isset($item['productId']) ? (int)$item['productId'] :
                    (isset($item['id']) ? (int)$item['id'] : 0);

        $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;

        if (!$productId || !$quantity) {
            throw new Exception("Invalid product ID or quantity in order items");
        }

        logDebug("Looking up product ID: $productId, Quantity: $quantity");

        // Verify product exists and has enough inventory
        $productSql = "SELECT id, description, price, qty FROM products WHERE id = :product_id";
        $productStmt = $pdo->prepare($productSql);
        $productStmt->execute([':product_id' => $productId]);
        $product = $productStmt->fetch(PDO::FETCH_ASSOC);

        logDebug("Product data retrieved:", $product);

        if (!$product) {
            throw new Exception("Product ID {$productId} not found in database");
        }

        // Make sure we're using integers for comparison
        $availableQty = (int)$product['qty'];
        logDebug("Available quantity: $availableQty, Requested: $quantity");

        if ($availableQty < $quantity) {
            throw new Exception("Insufficient inventory for product ID {$productId}. Available: {$availableQty}, Requested: {$quantity}");
        }

        // Calculate subtotal
        $price = (float)$product['price'];
        $subtotal = $price * $quantity;
        logDebug("Price: $price, Subtotal: $subtotal");

        // Insert order item
        $itemSql = "INSERT INTO order_items (order_id, product_id, product_name, price, quantity, subtotal)
                    VALUES (:order_id, :product_id, :product_name, :price, :quantity, :subtotal)";

        $itemStmt = $pdo->prepare($itemSql);
        $itemStmt->execute([
            ':order_id' => $orderId,
            ':product_id' => $productId,
            ':product_name' => $product['description'],
            ':price' => $price,
            ':quantity' => $quantity,
            ':subtotal' => $subtotal
        ]);
        logDebug("Inserted order item");

        // Update inventory
        // $updateSql = "UPDATE products SET qty = qty - :quantity WHERE id = :product_id";
        // $updateStmt = $pdo->prepare($updateSql);
        // $updateStmt->execute([
        //     ':quantity' => $quantity,
        //     ':product_id' => $productId
        // ]);
        // logDebug("Updated inventory for product ID: $productId");
    }

    // 3. Add initial tracking record
    $trackingSql = "INSERT INTO order_tracking (order_id, status, comments, updated_by)
                    VALUES (:order_id, 'Pending', 'Order placed', :updated_by)";

    $trackingStmt = $pdo->prepare($trackingSql);
    $trackingStmt->execute([
        ':order_id' => $orderId,
        ':updated_by' => $userId
    ]);
    logDebug("Added tracking record");

    // Commit transaction
    $pdo->commit();
    logDebug("Transaction committed successfully");

    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Order placed successfully',
        'order_id' => $orderId,
        'order_date' => date('Y-m-d H:i:s')
    ]);

} catch (PDOException $e) {
    // Roll back transaction on error
    if (isset($pdo)) {
        $pdo->rollBack();
    }

    // Log error
    logError("Database error: " . $e->getMessage());
    logDebug("PDO exception:", ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);

    // Return error message
    echo json_encode([
        'success' => false,
        'message' => 'Database error occurred: ' . $e->getMessage()
    ]);

} catch (Exception $e) {
    // Roll back transaction on error
    if (isset($pdo)) {
        $pdo->rollBack();
    }

    // Log error
    logError("Processing error: " . $e->getMessage());
    logDebug("General exception:", ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);

    // Return error message
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>