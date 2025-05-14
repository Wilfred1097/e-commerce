<?php
// Include database connection
include './../../main/template/mysql/conn.php';

try {
    // Prepare SQL query to fetch product details
    $sql = "
        SELECT
            products.*,
            product_category.name AS category_name
        FROM
            products
        JOIN
            product_category ON product_category.id = products.category_id
        LIMIT 6;
    ";
    $stmt = $pdo->prepare($sql);

    // Execute the query
    $stmt->execute();

    // Fetch all results
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the results as JSON
    echo json_encode([
        'status' => 'success',
        'data' => $products,
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