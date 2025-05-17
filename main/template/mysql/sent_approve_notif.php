<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$email = $_POST['email'] ?? '';
$fname = $_POST['first_name'] ?? '';
$lname = $_POST['last_name'] ?? '';

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
    We are happy to inform you that your placed order in Dumingag Women Handicrafts Makers Association is Approved!
    <p style='font-size: 14px; color: #666;'>Please visit your Account page to track your order and receive the latest updates on its status.</p>";

    $mail->send();
    // echo 'OTP has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
