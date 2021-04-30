<?php
$name = $_POST['name'];
$user_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'walaito.github.io';
$email_subject = 'new form submission';
$email_body = "user name: $name.\n"."user email: $user_email.\n"."user message: $message.\n";

$to = "walaipornto@gmail.com"
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $user_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html")

?>