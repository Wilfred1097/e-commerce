<?php
require './../../main/template/mysql/conn.php';

$response = ['success' => false, 'orders' => []];
header('Content-Type: application/json');

// Check if the DWHMA0 cookie is set
if (!isset($_COOKIE['DWHMA0'])) {
    echo json_encode($response);
    exit;
}

// Decode cookie JSON
$userData = json_decode($_COOKIE['DWHMA0'], true);

// Validate decoded data and get user_id
if (!isset($userData['user_id'])) {
    echo json_encode($response);
    exit;
}

$userId = $userData['user_id'];

try {
    $stmt = $pdo->prepare("
        SELECT
            orders.*,
            order_tracking.status AS tracking_status,
            order_tracking.comments AS tracking_comments,
            order_items.quantity,
            products.description AS product_name,
            products.image AS product_image
        FROM orders
        JOIN order_tracking ON orders.order_id = order_tracking.order_id
        JOIN order_items ON order_items.order_id = orders.order_id
        JOIN products ON products.id = order_items.product_id
        WHERE orders.user_id = :user_id
        ORDER BY orders.order_date DESC
    ");
    $stmt->execute(['user_id' => $userId]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $groupedOrders = [];

    foreach ($rows as $row) {
        $orderId = $row['order_id'];

        // Initialize if first time seeing this order_id
        if (!isset($groupedOrders[$orderId])) {
            $groupedOrders[$orderId] = [
                'order_id' => $orderId,
                'user_id' => $row['user_id'],
                'delivery_address' => $row['delivery_address'],
                'payment_method' => $row['payment_method'],
                'total_amount' => $row['total_amount'],
                'order_date' => $row['order_date'],
                'tracking_status' => $row['tracking_status'],
                'tracking_status' => $row['tracking_status'],
                'tracking_comments' => $row['tracking_comments'],
                'refference_num' => $row['refference_num'],
                'products' => []
            ];
        }

        // Add product to the order
        $groupedOrders[$orderId]['products'][] = [
            'product_name' => $row['product_name'],
            'product_image' => $row['product_image'],
            'quantity' => $row['quantity']
        ];
    }

    $response['success'] = true;
    $response['orders'] = array_values($groupedOrders); // Reset keys to numeric

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>
