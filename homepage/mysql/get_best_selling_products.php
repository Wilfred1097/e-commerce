<?php
// Include database connection
include './../../main/template/mysql/conn.php';

header("Content-Type: application/json");

try {
    // Prepare SQL query to fetch product details
    $sql = "SELECT p.id AS id, COUNT(DISTINCT o.order_id) AS number_of_orders, p.owner, GROUP_CONCAT(DISTINCT pt.name ORDER BY pt.name) AS product_types, p.price, p.image FROM products p JOIN order_items oi ON oi.product_id = p.id JOIN orders o ON o.order_id = oi.order_id LEFT JOIN product_type pt ON FIND_IN_SET(pt.id, p.type_id) WHERE p.qty >= 1 GROUP BY p.id ORDER BY number_of_orders DESC LIMIT 6;";
    $stmt = $pdo->prepare($sql);

    // Execute the query
    $stmt->execute();

    // Fetch all results
    $best_products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the results as JSON
    echo json_encode([
        'status' => 'success',
        'data' => $best_products,
    ]);
} catch (Exception $e) {
    // Handle query errors
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
    ]);
}

// Close database connection
$pdo = null;
?>