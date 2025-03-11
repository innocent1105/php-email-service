<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer

$mail = new PHPMailer(true);

try {
    // System settings
    $mail->isSMTP();                                
    $mail->Host       = 'smtp.gmail.com';           
    $mail->SMTPAuth   = true;                  
    $mail->Username   = 'mugwadiinnocent@gmail.com';     // system source Gmail Address
    $mail->Password   = 'kemz bvyj ectc bife';       
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;                    

    // Email Header data
    $mail->setFrom('mugwadiinnocent@gmail.com', 'Your Name'); 
    $mail->addAddress('mugwadiinnocent@gmail.com', 'Recipient Name');
    $mail->Subject = 'Test Email';
    $mail->Body    = 'Hello, this is a test email from XAMPP using PHPMailer.';

    // Send Email
    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>
