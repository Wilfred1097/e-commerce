<?php
require 'conn.php';

header('Content-Type: application/json');

// Check if order_id is provided
if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'Order ID not provided']);
    exit;
}

$order_id = $_GET['id'];

try {
    // Begin transaction
    $pdo->beginTransaction();

    // Update orders table
    $stmt1 = $pdo->prepare("UPDATE `orders` SET `order_status` = 'Processing' WHERE `order_id` = :order_id");
    $stmt1->execute(['order_id' => $order_id]);

    // Update order_tracking table
    $stmt2 = $pdo->prepare("UPDATE `order_tracking` SET `status` = 'Processing', `comments` = 'Order Approved' WHERE `order_id` = :order_id");
    $stmt2->execute(['order_id' => $order_id]);

    // Commit changes
    $pdo->commit();

    // After successful update
    echo json_encode([
        'success' => true,
        'message' => 'Order approved successfully.'
    ]);

} catch (Exception $e) {
    // Rollback on error
    $pdo->rollBack();
    echo json_encode(['success' => false, 'message' => 'Failed to approve order: ' . $e->getMessage()]);
}
?>
