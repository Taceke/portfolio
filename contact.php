<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // ✅ Only this one is needed with Composer
require 'config.php'; // ✅ Include credentials

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP Setup
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            // $mail->Username = getenv('SMTP_USERNAME'); // NOT the email itself
            // $mail->Password = getenv('SMTP_PASSWORD'); // NOT the app password itself
            

            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
            
                     // ✅ App Password
            $mail->SMTPSecure = 'ssl';; 
            $mail->Port = 465;

            // Email Content
            $mail->setFrom('tajerkemer46031@gmail.com', $name); // use your own Gmail here
            $mail->addAddress('tajerkemer46031@gmail.com');     // receive it at same Gmail
            $mail->Subject = 'New Contact Message from Portfolio';
            $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            echo "<script>alert('✅ Message sent successfully!'); window.location.href='index.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('❌ Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('❗ Please fill in all fields.'); window.history.back();</script>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
