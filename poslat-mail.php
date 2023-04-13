<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$to = 'glda@protonmail.ch';
$from = 'email@daliborg.8u.cz';
$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$subject = addslashes($_POST['subject']);
$message = 'Jmeno odesilatele: ' . $name . "\r\n" . 'Email: ' . $email;
$message .= "\r\n" . addslashes($_POST['message']);
$headers = 'From:' . $from;
mail($to, $subject, $message, $headers);
header('Location:http://daliborg.8u.cz/#contact');
?>