<?php
$to = 'gldalibor@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$message .= "\r\n\r\n" . "Jmeno: " . $name . "\r\n" . "Email: " . $email;

mail(
    $to,
    $subject,
    $message,
    $additional_headers,
);

header('Location:http://daliborg.wz.cz/#contact');

?>