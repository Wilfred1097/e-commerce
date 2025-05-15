<?php
// Include database connection
include 'conn.php';
require 'check_cookies.php'; // Check if the cookie is present

try {
    // Prepare and execute query to fetch all types
    $stmt = $pdo->prepare("SELECT id, name FROM product_type");
    $stmt->execute();

    // Fetch all types
    $types = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output as JSON
    echo json_encode([
        'status' => 'success',
        'types' => $types,
    ]);
} catch (Exception $e) {
    // Handle errors
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
    ]);
}

// Close connection
$pdo = null;
?>