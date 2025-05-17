<?php
require_once 'conn.php';

header('Content-Type: application/json');

try {
    // Prepare the SQL query with recursive CTE
    $sql = "
        WITH RECURSIVE last_7_days AS (
            SELECT CURDATE() - INTERVAL 6 DAY AS date_val
            UNION ALL
            SELECT date_val + INTERVAL 1 DAY
            FROM last_7_days
            WHERE date_val + INTERVAL 1 DAY <= CURDATE()
        )
        SELECT
            d.date_val AS update_date,
            COALESCE(SUM(o.total_amount), 0) AS total_amount_sum
        FROM
            last_7_days d
        LEFT JOIN
            orders o ON DATE(o.date_updated) = d.date_val
        GROUP BY
            d.date_val
        ORDER BY
            d.date_val
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
} catch (PDOException $e) {
    // Send error as JSON
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
