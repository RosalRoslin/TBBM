
<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}
require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody ="http://localhost/TBBM/trunk/changepass.php?active_code=$str&email=$email";
// $mail->IsSMTP();
// $mail->SMTPDebug = 0;
// $mail->SMTPAuth = TRUE;
// $mail->SMTPSecure = "tls";
// $mail->Port     = PORT;  
// $mail->Username = MAIL_USERNAME;
// $mail->Password = MAIL_PASSWORD;
// $mail->Host     = MAIL_HOST;
// $mail->Mailer   = MAILER;

// $mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
// $mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
// $mail->ReturnPath=SERDER_EMAIL;	

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
$mail->AddAddress($email);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);


if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
}

?>
