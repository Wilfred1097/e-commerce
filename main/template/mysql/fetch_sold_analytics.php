<?php
require_once 'conn.php';

header('Content-Type: application/json');

try {
    // Prepare the SQL query
    $sql = "
        SELECT
            DATE(date_updated) AS update_date,
            SUM(total_amount) AS total_amount_sum
        FROM
            orders
        GROUP BY
            DATE(date_updated)
        ORDER BY
            update_date
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Prepare data for JSON response
    $data = [];
    foreach ($results as $row) {
        $data[] = [
            'date' => $row['update_date'],
            'total_amount' => (float)$row['total_amount_sum']
        ];
    }

    // Send JSON response
    echo json_encode(['success' => true, 'data' => $data]);
    echo json_encode($data);
} catch (PDOException $e) {
    // Send error as JSON
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>