<?php
// Include database connection
include 'conn.php';

try {
    // Prepare SQL query to fetch product details
    $sql = "
        SELECT
            products.*,
            product_category.name AS category_name,
            GROUP_CONCAT(product_type.name) AS type_names
        FROM
            `products`
        JOIN product_category ON product_category.id = products.category_id
        JOIN product_type ON FIND_IN_SET(product_type.id, products.type_id)
        GROUP BY
            products.id;
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