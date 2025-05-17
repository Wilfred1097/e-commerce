<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$email = $_POST['email'] ?? '';
$fname = $_POST['first_name'] ?? '';
$lname = $_POST['last_name'] ?? '';
$reason = $_POST['reason'] ?? '';

if (empty($email) || empty($fname) || empty($lname)) {
    echo "Error: Missing required fields.";
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'catalanwilfredo97@gmail.com';
    $mail->Password = 'sykmmtpojmudqbik';
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom('catalanwilfredo97@gmail.com', 'Dumingag Women Handicrafts Makers Association');
    $mail->addAddress($email, "$fname $lname");

    $mail->isHTML(true);
    $mail->Subject = 'Order Status';
    $mail->Body = "
    Good day Mr/Mrs. $fname $lname,<br><br>
    We regret to inform you that your order with Dumingag Women Handicrafts Makers Association has been declined.<br><br>
    Reasons: $reason.<br><br>
    <p style='font-size: 14px; color: #666;'>We appreciate your interest and support. We encourage you to explore our other products and stay connected for new collections.</p><br><br>";

    $mail->send();
    // echo 'OTP has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
