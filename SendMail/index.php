<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$recipient_email = "sample@gmail.com";
$subject = "Sản phẩm mới";
$body = "Bạn có một sản phẩm chưa xem, có thể bạn thích.";


$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '4fbee9e80b0911';
$mail->Password = '8e89c4e63713ae';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

$mail->setFrom('abc@gmail.com', 'Đoàn Quang Huy');
$mail->addAddress($recipient_email);

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->CharSet = 'UTF-8';

if (!$mail->send()) {
    echo 'Gửi email thất bại: ' . $mail->ErrorInfo;
} else {
    echo 'Email đã được gửi thành công';
}
