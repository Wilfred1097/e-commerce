<?php
require 'conn.php'; // Include your database connection file

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Invalid JSON input']);
    exit;
}

$startDate = $input['startDate'];
$endDate = $input['endDate'];
$reportType = $input['reportType'];


// Sanitize date inputs (crucial for security)
$startDate = date('Y-m-d', strtotime($startDate));
$endDate = date('Y-m-d', strtotime($endDate));
// Validate dates
if (!$startDate || !$endDate || !strtotime($startDate) || !strtotime($endDate)) {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Invalid date format. Use YYYY-MM-DD']);
    exit;
}

try {
    $stmt = $pdo->prepare("
        SELECT
            orders.*,
            users.*,
            COUNT(order_items.order_id) AS item_quantity
        FROM
            orders
        JOIN order_tracking ON order_tracking.order_id = orders.order_id
        JOIN users ON users.id = orders.user_id
        JOIN order_items ON order_items.order_id = orders.order_id
        WHERE
            order_tracking.status = :reportType
            AND orders.order_date BETWEEN :startDate AND :endDate
        GROUP BY
            orders.order_id,
            users.id
    ");

    $stmt->bindParam(':reportType', $reportType, PDO::PARAM_STR);
    $stmt->bindParam(':startDate', $startDate, PDO::PARAM_STR);
    $stmt->bindParam(':endDate', $endDate, PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetchAll();

    // Check for empty results
    if (empty($results)) {
        http_response_code(200); // OK, but no data
        echo json_encode([]);
        exit;
    }


    echo json_encode($results);


} catch (PDOException $e) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Database query failed: ' . $e->getMessage()]);
}

?>