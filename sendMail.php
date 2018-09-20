<?php
include_once 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'info@bandungdigitalvalley.com';
$mail->Password = 'Pass@w0rd26';
$mail->SMTPSecure = 'ssl';

$mail->From = 'info@bandungdigitalvalley.com';
$mail->FromName = 'Bandung Digital Valley';
$mail->addAddress('recipient@example.com');

$mail->isHTML(true);

$mail->Subject = 'Test Mail Subject!';
$mail->Body    = 'This is SMTP Email Test';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
}
?>
