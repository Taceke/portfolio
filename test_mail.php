<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yourgmail@gmail.com'; // replace
    $mail->Password   = 'your-app-password';   // app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('yourgmail@gmail.com', 'Portfolio Bot');
    $mail->addAddress('yourgmail@gmail.com', 'Tajer');

    $mail->Subject = 'Testing PHPMailer';
    $mail->Body    = 'If you see this, PHPMailer works from XAMPP!';

    $mail->send();
    echo 'Message has been sent!';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
