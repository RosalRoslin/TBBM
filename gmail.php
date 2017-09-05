<?php
require 'PHPMailer/PHPMailerAutoload.php';
//require 'contact.php';
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'roslin.albert@gmail.com';          // SMTP username
$mail->Password = 'RajeshRosal'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('roslin.albert@gmail.com.com', 'The Big Beach Marathon');
$mail->addReplyTo('roslin.albert@gmail.com', 'The Big Beach Marathon');
$mail->addAddress('roslin.albert@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent ="Name: ".$_POST["firstname"]."<br> Email: ".$_POST["email"]." <br>Website: ".$_POST["website"]."<br> Message: ".$_POST["message"].""; 

$mail->Subject = 'Email from User';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
