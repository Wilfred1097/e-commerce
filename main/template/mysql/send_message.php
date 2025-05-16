<?php
// Headers
header('Content-Type: application/json');

// Check for authentication
if (!isset($_COOKIE['DWHMA1'])) {
    echo json_encode(['success' => false, 'message' => 'Authentication required']);
    exit;
}

// Get database connection
require_once 'conn.php';

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Get data from POST request
$sender_username = isset($_POST['sender_username']) ? trim($_POST['sender_username']) : '';
$receiver_username = isset($_POST['receiver_username']) ? trim($_POST['receiver_username']) : '';
$message_text = isset($_POST['message_text']) ? trim($_POST['message_text']) : '';

// Validate inputs
if (empty($sender_username) || empty($receiver_username) || empty($message_text)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

try {
    // Current timestamp
    $timestamp = date('Y-m-d H:i:s');

    // Prepare SQL statement with is_read field
    $sql = "INSERT INTO messages (sender_username, receiver_username, message_text, timestamp, is_read)
            VALUES (:sender, :receiver, :message, :timestamp, TRUE)";

    $stmt = $pdo->prepare($sql);

    // Execute with array parameters
    $stmt->execute([
        ':sender' => $sender_username,
        ':receiver' => $receiver_username,
        ':message' => $message_text,
        ':timestamp' => $timestamp
    ]);

    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Message sent successfully',
        'data' => [
            'message_id' => $pdo->lastInsertId(),
            'timestamp' => $timestamp
        ]
    ]);

} catch (PDOException $e) {
    // Log error for administrator
    error_log('Database error: ' . $e->getMessage());

    // Return safe error message to user
    echo json_encode(['success' => false, 'message' => 'Database error occurred']);
}
?>