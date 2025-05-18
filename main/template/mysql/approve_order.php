<?php
require 'conn.php';

header('Content-Type: application/json');

if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'Order ID not provided']);
    exit;
}

$order_id = $_GET['id'];

try {
    // Begin transaction
    $pdo->beginTransaction();

    // Step 1: Approve order in orders table
    $stmt1 = $pdo->prepare("UPDATE `orders` SET `order_status` = 'Processing' WHERE `order_id` = :order_id");
    $stmt1->execute(['order_id' => $order_id]);

    // Step 2: Update order_tracking table
    $stmt2 = $pdo->prepare("UPDATE `order_tracking` SET `status` = 'Processing', `comments` = 'Order Approved' WHERE `order_id` = :order_id");
    $stmt2->execute(['order_id' => $order_id]);

    // Step 3: Get product_id and ordered_quantity
    $stmt3 = $pdo->prepare("
        SELECT
            oi.product_id AS product_id,
            oi.quantity AS ordered_quantity
        FROM `orders`
        JOIN order_items AS oi ON oi.order_id = orders.order_id
        JOIN products AS p ON p.id = oi.product_id
        WHERE orders.order_id = :order_id
    ");
    $stmt3->execute(['order_id' => $order_id]);
    $items = $stmt3->fetchAll(PDO::FETCH_ASSOC);

    // Step 4: Subtract ordered_quantity from products.qty
    $stmt4 = $pdo->prepare("UPDATE `products` SET `qty` = `qty` - :ordered_quantity WHERE `id` = :product_id");

    foreach ($items as $item) {
        $stmt4->execute([
            'ordered_quantity' => $item['ordered_quantity'],
            'product_id' => $item['product_id']
        ]);
    }

    // Commit all changes
    $pdo->commit();

    echo json_encode([
        'success' => true,
        'message' => 'Order approved and inventory updated successfully.'
    ]);

} catch (Exception $e) {
    $pdo->rollBack();
    echo json_encode(['success' => false, 'message' => 'Failed to approve order: ' . $e->getMessage()]);
}
?>