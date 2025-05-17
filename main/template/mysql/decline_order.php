<?php
require 'conn.php';

header('Content-Type: application/json');

// Check if order_id is provided
if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'Order ID not provided']);
    exit;
}

$order_id = $_GET['id'];
$reasons = $_GET['reason'];

try {
    // Begin transaction
    $pdo->beginTransaction();

    // Update orders table
    $stmt1 = $pdo->prepare("UPDATE `orders` SET `order_status` = 'Cancelled', `reasons` =  :reasons WHERE `order_id` = :order_id");
    $stmt1->execute([
        'order_id' => $order_id,
        'reasons' => $reasons // assuming $reason contains the reason string
    ]);

    // Update order_tracking table
    $stmt2 = $pdo->prepare("UPDATE `order_tracking` SET `status` = 'Cancelled', `reasons` = :reasons, `comments` = 'Order Decline' WHERE `order_id` = :order_id");
    $stmt2->execute([
        'order_id' => $order_id,
        'reasons' => $reasons,
    ]);

    // Commit changes
    $pdo->commit();

    echo json_encode(['success' => true, 'message' => 'Order approved successfully.']);

} catch (Exception $e) {
    // Rollback on error
    $pdo->rollBack();
    echo json_encode(['success' => false, 'message' => 'Failed to approve order: ' . $e->getMessage()]);
}
?>
