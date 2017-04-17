<?php

include("class.phpmailer.php");
include("class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

$from = 'support@cherritech.com';	// sender
//$to = $_POST['email'];
$to = "saziram@gmail.com";
$subject ="CFNET Registration";
$message = "Hello";

$mail = new PHPMailer();

include("mail_cont.php");

$mail->IsSMTP();
$mail->SMTPAuth   = true;                        // enable SMTP authentication
$mail->SMTPSecure = "ssl";                       // sets the prefix to the servier
$mail->Host       = "mail.cherritech.com";    // sets webserver as the SMTP server
$mail->Port       = 465;                         // set the SMTP port

$mail->Username   = "support@cherritech.com";     // webserver username
$mail->Password   = "support_123";          // webserver password, Some times if two step varification enabled in this mail id, Mail will not be sent.

$mail->From       = $from;
$mail->FromName   = "CFNET";
$mail->Subject    =  $subject;
$mail->AltBody    = ""; //Text Body
$mail->WordWrap   = 50; // set word wrap
$mail->MsgHTML($body);
$mail->AddAttachment($file,$name);             // attachment
$mail->AddAddress($to,$name);
$mail->AddReplyTo("support@cherritech.com","CFNET");
$mail->IsHTML(true); // send as HTML
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

?>
