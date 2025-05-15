<?php
session_start();
require './../../main/template/mysql/conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Retrieve POST data
$email = $_POST['gmail'] ?? '';
$fname = $_POST['first_name'] ?? '';
$mname = $_POST['middle_name'] ?? '';
$lname = $_POST['last_name'] ?? '';
$otp = $_POST['otp'] ?? '';

// Validate required fields
if (empty($email) || empty($fname) || empty($mname) || empty($lname) || empty($otp)) {
    echo json_encode(['status' => 'error', 'message' => 'Error: Missing required fields.']);
    exit;
}

$mail = new PHPMailer(true);
$response = ['status' => 'error', 'message' => ''];


// SMTP_HOST=smtp.gmail.com
// SMTP_USERNAME=catalanwilfredo97@gmail.com
// SMTP_PASSWORD=sykmmtpojmudqbik
// SMTP_PORT=587
// SMTP_FROM_EMAIL=mr.daotz97@gmail.com
// SMTP_FROM_NAME=SmartSpot

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'catalanwilfredo97@gmail.com';
    $mail->Password = 'sykmmtpojmudqbik';
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    // Recipients
    $mail->setFrom('mr.daotz97@gmail.com', 'Dumingag Women Handicrafts Makers Association');
    $mail->addAddress($email, "$fname $mname $lname");

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'OTP Confirmation Code';
    $mail->Body = "
    Good day Mr/Mrs. $fname $mname $lname,<br><br>
    Your OTP code is: <b>$otp</b><br><br>
    <p style='font-size: 14px; color: #666;'>Please do not share this OTP with anyone. For your security, this code is intended for your use only and should remain confidential.</p>";

    $mail->send();

    // Prepare and execute the query to update the OTP
    $stmt = $pdo->prepare("UPDATE users SET reset_code = ? WHERE gmail = ?");
    try {
        $stmt->execute([$otp, $email]);
        $_SESSION['user_email'] = $email;
        $response['status'] = 'success';
        $response['message'] = 'OTP has been sent';
    } catch (PDOException $e) {
        $response['message'] = "Error updating OTP: " . $e->getMessage();
    }

    // No need to close the statement explicitly
    // To close the PDO connection:
    $pdo = null;
} catch (Exception $e) {
    $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// Send JSON response
echo json_encode($response);
?>
