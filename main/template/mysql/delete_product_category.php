<?php
include 'conn.php';

header('Content-Type: application/json');

if (!isset($_POST['categoryId'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Product Category ID not provided.'
    ]);
    exit;
}

$categoryId = intval($_POST['categoryId']);

try {
    // Prepare delete statement
    $stmt = $pdo->prepare("DELETE FROM product_category WHERE id = :id");
    $stmt->bindParam(':id', $categoryId, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Product Category deleted successfully.'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Product Category not found or already deleted.'
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
?>