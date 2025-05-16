<?php
require_once 'conn.php';

if (!isset($_POST['sender_username'])) {
    echo json_encode(['error' => 'Sender username not provided']);
    exit;
}

$sender_username = $_POST['sender_username'];
// $sender_username = $_POST['sender_username'];
$admin_username = 'admin'; // The admin username

try {
    // Get both sides of the conversation between admin and user
    $sql = "
        SELECT
            messages.*,
            users.first_name,
            users.middle_name,
            users.last_name
        FROM
            messages
        JOIN
            users ON users.id = IF(messages.sender_username = :admin_username,
                                   messages.receiver_username,
                                   messages.sender_username)
        WHERE
            (messages.sender_username = :sender_username AND messages.receiver_username = :admin_username)
            OR
            (messages.sender_username = :admin_username AND messages.receiver_username = :sender_username)
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':sender_username' => $sender_username,
        ':admin_username' => $admin_username
    ]);

    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mark messages as read when admin views them


    echo json_encode($messages);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>