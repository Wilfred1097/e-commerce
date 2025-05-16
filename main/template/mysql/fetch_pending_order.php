<?php
// Include database connection
include 'conn.php';
require 'check_cookies.php'; // Check if the cookie is present

try {
    // Query to fetch all transactions
    $sql = "SELECT * FROM `orders` JOIN order_tracking on order_tracking.order_id = orders.order_id JOIN users ON users.id = orders.user_id WHERE order_status = 'Pending';";
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