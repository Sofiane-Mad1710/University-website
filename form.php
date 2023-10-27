<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_form = 'sofianemahdi89@gmail.com'
$email_subject = 'New form submission'
$email_body = "User Name :$name.\n".
							"User email :$visitor_email.\n".
							"Subject :$subject.\n".
							"User message :$message.\n";
$to = 'sofianemahdi89@gmail.com';
$headers = "from: $email_form \r\n";
$headers .= "Reply_to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")
?>