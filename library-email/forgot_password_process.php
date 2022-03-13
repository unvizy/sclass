<?php
if (isset($_POST['reset'])) {
    $email = $_POST['email'];
} else {
    exit();
}
// location template
$template_file = "template-reset.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'HSTKI2021@gmail.com';                     // SMTP username
    $mail->Password   = 'hstkitasik123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('HSTKI2021@gmail.com', 'Admin');
    $mail->addAddress($email);     // Add a recipient

    $Vkey = md5(time());

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    if(file_exists($template_file))
    $mail->Body = file_get_contents($template_file);
    else 
    die ("unable to locate template");

    $koneksi = new mySqli('127.0.0.1', 'root', '#Dij4min4m4n', 'sclass');

    if ($koneksi->connect_error) {
        die('Could not connect to the database.');
    }

    $verifyQuery = $koneksi->query("SELECT * FROM akun WHERE email = '$email'");

    if ($verifyQuery->num_rows) {
        $codeQuery = $koneksi->query("UPDATE akun SET Vkey = '$Vkey' WHERE email = '$email'");

        $mail->send();
        header("Location: success-send-reset.php");
    }
    $koneksi->close();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
