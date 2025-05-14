<?php
include 'conn.php';

header('Content-Type: application/json');

// Check for typeId instead of categoryId
if (!isset($_POST['typeId'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Product type ID not provided.'
    ]);
    exit;
}

$typeId = intval($_POST['typeId']); // Use typeId here

try {
    // Prepare delete statement
    $stmt = $pdo->prepare("DELETE FROM product_type WHERE id = :id");
    $stmt->bindParam(':id', $typeId, PDO::PARAM_INT); // Bind typeId
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Product type deleted successfully.'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Product type not found or already deleted.'
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
?>