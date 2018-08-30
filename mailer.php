<?php

$to = 'maddybhtngr@gmail.com';

$subject = 'This is our subject';

$message = 'Hi there';

$headers = "From: The Sender Name <maddybhtngr@gmail.com>\r\n";
$headers .= "Reply-To replyto@maddybhtngr.com\r\n";
$headers .= "Content-type: text/html\r\n";


mail($to, $subject, $message, $headers);
?>