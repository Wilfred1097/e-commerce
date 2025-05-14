<?php
// check-email.php
header('Content-Type: application/json');

// Include the database connection
include './../../main/template/mysql/conn.php';

// Get email from GET request, with default fallback
$email = $_GET['email'] ?? '';

if (empty($email)) {
    echo json_encode(['error' => 'Email is required.']);
    exit;
}

try {
    // Prepare the statement
    $stmt = $pdo->prepare('SELECT first_name, middle_name, last_name, gmail FROM users WHERE gmail = ?');

    if (!$stmt) {
        // Preparation failed
        echo json_encode(['error' => 'Failed to prepare statement.']);
        exit;
    }

    // Execute with parameter
    $stmt->execute([$email]);

    // Fetch the user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // User exists
        echo json_encode(['exists' => true, 'user' => $user]);
    } else {
        // User does not exist
        echo json_encode(['exists' => false]);
    }
} catch (PDOException $e) {
    // Handle any PDO errors
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?>