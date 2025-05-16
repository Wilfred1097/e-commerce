<?php
// Check if the 'DWHMA0' cookie is present
if (!isset($_COOKIE['DWHMA0'])) {
    // Return error response
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Authentication required']);
    exit;
}

// Decode the cookie JSON to extract user_id
$cookieValue = $_COOKIE['DWHMA0'];
$userId = null;

try {
    $cookieData = json_decode($cookieValue, true);
    if (json_last_error() === JSON_ERROR_NONE && isset($cookieData['user_id'])) {
        $userId = $cookieData['user_id'];
    } else {
        // Invalid cookie format
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Invalid authentication cookie']);
        exit;
    }
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Invalid cookie data']);
    exit;
}

// Database connection
require_once './../../main/template/mysql/conn.php';

try {
    // Fetch messages involving the user_id
    $sql = "SELECT
                messages.*,
                users.first_name,
                users.middle_name,
                users.last_name
            FROM
                messages
            JOIN users on users.id = messages.sender_username
            WHERE
                (
                    sender_username = :user_id AND receiver_username = 'admin'
                ) OR(
                    sender_username = 'admin' AND receiver_username = :user_id
                ) OR(
                    sender_username = :user_id AND receiver_username = :user_id
                )"; // Adjust as per your schema

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    // Fetch all messages
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mark messages as read
    $updateSql = "UPDATE messages SET is_read = TRUE
                  WHERE receiver_username = :user_id AND is_read = FALSE";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
    $updateStmt->execute();

    // Return messages
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'messages' => $messages]);

} catch (PDOException $e) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>