<?php
// Include database connection
include 'conn.php';
require 'check_cookies.php'; // Check if the cookie is present

try {
    // Query to fetch all transactions
    // $sql = "SELECT * FROM `orders` JOIN order_tracking ON order_tracking.order_id = orders.order_id JOIN users ON users.id = orders.user_id WHERE order_status IN ('Processing','Shipped')';";
    $sql = "SELECT products.id AS id, COUNT(DISTINCT orders.order_id) AS number_of_orders, products.* FROM `orders` JOIN order_items ON orders.order_id = order_items.order_id JOIN products ON order_items.product_id = products.id GROUP BY products.id ORDER BY number_of_orders DESC LIMIT 5;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch data as an associative array
    $best_selling = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Debugging: Check if data exists
    if (empty($best_selling)) {
        echo json_encode(["error" => "No data found in cedula_transactions"]);
        exit;
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($best_selling);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>