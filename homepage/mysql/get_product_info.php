<?php
include './../../main/template/mysql/conn.php';

try {
    if (!isset($_GET['productIds'])) {
        throw new Exception('Missing productIds parameter');
    }

    $idsString = $_GET['productIds'];
    $idsArray = explode(',', $idsString);

    // Sanitize IDs
    $ids = array_map('intval', $idsArray);

    // Prepare placeholders for query
    $placeholders = implode(',', array_fill(0, count($ids), '?'));

    $sql = "
        SELECT
            products.*,
            product_category.name AS category_name
        FROM
            products
        JOIN
            product_category ON product_category.id = products.category_id
        WHERE
            products.id IN ($placeholders)
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($ids);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'status' => 'success',
        'data' => $products,
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
    ]);
}

$pdo = null;
?>