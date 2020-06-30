<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];]

$email_from = 'hemmerlea2@gmail.com';

$email_subject = 'newFormSubmission';

$email_body = "Username: $name.\n".
"User email: $visitor_email.\n".
"User Message: $message.\n".

$to = "hemmerlea2@gmail";

$headers = "From: $email_from \r\n";
$headers = "Reply-to: visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);
header ("Location: index.html");

?>