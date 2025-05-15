<?php
// Check if the 'brgy' cookie is present
if (!isset($_COOKIE['DWHMA1'])) {
    echo json_encode([
        "status" => "error",
        "message" => "Access denied!"
    ]);
    http_response_code(403); // Forbidden
    exit;
}
?>