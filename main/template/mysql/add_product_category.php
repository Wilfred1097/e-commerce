<?php
// Include database connection
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data
    $categoryName = $_POST['categoryName'] ?? null;

    // Validate input
    if (!$categoryName) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Product Category name is required.',
        ]);
        exit;
    }

    try {
        // Prepare SQL statement using PDO
        $stmt = $pdo->prepare("INSERT INTO product_category (name) VALUES (:name)");
        $stmt->bindParam(':name', $categoryName);

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(201);
            echo json_encode([
                'status' => 'success',
                'message' => 'Product Category added successfully.',
            ]);
        } else {
            throw new Exception("Failed to insert category.");
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage(),
        ]);
    }
}

// Close database connection
$pdo = null;
?>