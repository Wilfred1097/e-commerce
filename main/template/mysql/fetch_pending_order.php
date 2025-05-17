<?php
// Include database connection
include 'conn.php';
require 'check_cookies.php'; // Check if the cookie is present

try {
    // Query to fetch all transactions
    $sql = "SELECT orders.*, users.*, COUNT(order_items.order_id) AS item_quantity FROM `orders` JOIN order_tracking ON order_tracking.order_id = orders.order_id JOIN users ON users.id = orders.user_id JOIN order_items ON order_items.order_id = orders.order_id WHERE order_tracking.status = 'Delivered' GROUP BY orders.order_id, users.id;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch data as an associative array
    $pending_orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Debugging: Check if data exists
    if (empty($pending_orders)) {
        echo json_encode(["error" => "No data found in cedula_transactions"]);
        exit;
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($pending_orders);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>