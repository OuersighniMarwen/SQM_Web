<?php

require 'Mailer/PHPMailerAutoload.php';
//include'livraison.php';


		$msg=" Voir Nos Promotion ! Voir Le SITE";

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'borgie.contact@gmail.com';                 // SMTP username
$mail->Password = 'B123456789';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('borgie.contact@gmail.com', 'enjoy');
$mail->addAddress('malek.fenina@esprit.tn','Joe User');
$mail->addAddress('chiheb.berrich@esprit.tn','Joe User');     // Add a recipient

$mail->isHTML(true);

$mail->Subject = 'Enjoy';
$mail->Body    = $msg;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
header("location:index.php");
?>

