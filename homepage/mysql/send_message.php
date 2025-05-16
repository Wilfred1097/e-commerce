<?php
// Set proper content-type header first to avoid any output before headers
header('Content-Type: application/json');

// Ensure no warnings or notices interfere with JSON output
error_reporting(E_ERROR);
ini_set('display_errors', 0);

if (!isset($_COOKIE['DWHMA0'])) {
    echo json_encode(['success' => false, 'message' => 'Authentication required']);
    exit;
}

// Log function to help debug
function logError($message) {
    $logFile = 'message_upload_errors.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

try {
    require_once './../../main/template/mysql/conn.php';

    // Check if it's a POST request with form data
    $sender_username = isset($_POST['sender_username']) ? trim($_POST['sender_username']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    $is_read = isset($_POST['is_read']) ? (int)$_POST['is_read'] : 0;

    // If not form data, try to get from JSON input
    if (empty($sender_username) && empty($_FILES)) {
        $input = json_decode(file_get_contents('php://input'), true);
        $message = trim($input['message'] ?? '');
        $sender_username = trim($input['sender_username'] ?? '');
        $is_read = isset($input['is_read']) ? (int)$input['is_read'] : 0;
    }

    if ($sender_username === '') {
        echo json_encode(['success' => false, 'message' => 'Invalid input: Missing sender']);
        exit;
    }

    // If no message and no image, reject
    if ($message === '' && !isset($_FILES['image'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid input: No content']);
        exit;
    }

    $receiver_username = 'admin'; // or determine based on context
    $image_path = null;

    // Handle image upload if present
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Create upload directory
        $upload_dir = 'upload/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        // Generate unique filename
        $file_extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $filename = 'msg_' . uniqid() . '_' . time() . '.' . $file_extension;
        $target_file = $upload_dir . $filename;

        // Validate file type
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($file_extension, $allowed_types)) {
            echo json_encode(['success' => false, 'message' => 'Invalid file type. Only JPG, JPEG, PNG and GIF allowed.']);
            exit;
        }

        // Move the uploaded file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image_path = $target_file;
        } else {
            $upload_error = error_get_last();
            logError("Upload failed: " . ($upload_error ? $upload_error['message'] : 'Unknown error'));
            echo json_encode(['success' => false, 'message' => 'Failed to upload image: Permission issue']);
            exit;
        }
    }

    // Insert message with image path if available
    $sql = "INSERT INTO messages (sender_username, receiver_username, message_text, image_path, is_read)
            VALUES (:sender, :receiver, :message, :image_path, :is_read)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':sender' => $sender_username,
        ':receiver' => $receiver_username,
        ':message' => $message,
        ':image_path' => $image_path,
        ':is_read' => $is_read,
    ]);

    $response = [
        'success' => true,
        'message' => 'Message sent successfully',
        'data' => [
            'id' => $pdo->lastInsertId(),
            'image_path' => $image_path
        ]
    ];

    echo json_encode($response);

} catch (PDOException $e) {
    logError("Database error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Database error occurred']);
} catch (Exception $e) {
    logError("General error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'An unexpected error occurred']);
}
?>