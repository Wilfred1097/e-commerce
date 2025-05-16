<?php
// Include your database connection
require_once 'conn.php';

try {
    // Prepare and execute the SQL query
    $sql = "SELECT u.first_name, u.middle_name, u.last_name, m.message_text, m.sender_username FROM messages m JOIN users u ON u.id = m.sender_username WHERE m.id IN ( SELECT MAX(id) FROM messages GROUP BY sender_username );";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output as JSON
    header('Content-Type: application/json');
    echo json_encode($results);
} catch (PDOException $e) {
    // Handle exceptions
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Database error: ' . $e->getMessage()
    ]);
}
?>