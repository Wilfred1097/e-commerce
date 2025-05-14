<?php
include './../../main/template/mysql/conn.php';

header('Content-Type: application/json');

try {
    // Check if category_name is set in the POST request
    if (!isset($_POST['category_name']) || empty($_POST['category_name'])) {
        echo json_encode(['status' => 'error', 'message' => 'Category name is required.']);
        exit;
    }

    // Get the category_name from the POST request
    $category_name = $_POST['category_name'];

    // Prepare the SQL query
    $sql = "
        SELECT
            products.*,
            product_category.name AS category_name
        FROM
            `products`
        JOIN product_category ON product_category.id = products.category_id
        WHERE product_category.name = :category_name
    ";

    // Execute the query using PDO
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
    $stmt->execute();

    // Fetch all results
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the results as JSON
    echo json_encode(['status' => 'success', 'data' => $products]);
} catch (Exception $e) {
    // Handle exceptions and return an error response
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>