<?php

include('phpmailer.php');
include('class.smtp.php');
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "mytestmail3091@gmail.com";
$mail->Password = "webmynetestemail";
$mail->SetFrom("info@location-auto-montreal.com");
$mail->Subject = "Email testTest from Pruthviraj ";
$mail->Body = "test";
$mail->AddAddress("himanshumca@yahoo.in");
$mail->addCC("rathod@webmye.com");
//$mail->addCC("himanshu@webmye.com");
$mail->addCC("pruthviraj848@gmail.com");
?>
<pre>
<?php
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }



?>