<?php
$to      = 'pruthviraj@gmail.com';
$subject = 'It will not work on localhost!';
$message = 'PHP mail default';
$headers = 'From: pruthviraj848@gmail.com' . "\r\n" .
    'Reply-To: pruthviraj848@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>