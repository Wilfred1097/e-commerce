<?php
require 'conn.php';

header('Content-Type: application/json');

// Check if order_id is provided
if (!isset($_POST['id']) || !isset($_POST['status'])) {
    echo json_encode(['success' => false, 'message' => 'Order ID or status not provided']);
    exit;
}

$order_id = $_POST['id'];
$status = $_POST['status'];

try {
    // Begin transaction
    $pdo->beginTransaction();

    // Update orders table
    $stmt1 = $pdo->prepare("UPDATE `orders` SET `order_status` = :status, `date_updated` = NOW()  WHERE `order_id` = :order_id");
    $stmt1->execute([
        ':status' => $status,
        ':order_id' => $order_id
    ]);

    // Update order_tracking table
    $stmt2 = $pdo->prepare("UPDATE `order_tracking` SET `status` = :status, `date_updated` = NOW() WHERE `order_id` = :order_id");
    $stmt2->execute([
        ':status' => $status,
        ':order_id' => $order_id
    ]);

    // Commit changes
    $pdo->commit();

    echo json_encode(['success' => true, 'message' => 'Product Status updated successfully.']);

} catch (Exception $e) {
    // Rollback on error
    $pdo->rollBack();
    echo json_encode(['success' => false, 'message' => 'Failed to approve order: ' . $e->getMessage()]);
}
?>