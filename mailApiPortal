<?php
session_start();
//Include required PHPMailer files
require './phpmailer/includes/PHPMailer.php';
require './phpmailer/includes/SMTP.php';
require './phpmailer/includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create instance of PHPMailer


	$mail = new PHPMailer(true);
//Set mailer to use smtp
try{
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "helpdesk.24hrfxtradingorg@gmail.com";
//Set gmail password
	$mail->Password = "opnytybzkqaymojo";
//Email subject
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('helpdesk.24hrfxtradingorg@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>24hrfx Trading Org </h1></br><p>Congragulations user fadhili for creating an account</p>
	,<p>We're thrilled to welcome you to 24hrfx Trading Org! Your account has been successfully created, and you're now part of a community of people who are passionate about [website's focus].

	At 24hrfx Trading Org, we believe that [website's focus] should be accessible to everyone, and our goal is to make your experience as smooth and enjoyable as possible. Whether you're a seasoned [website's focus] enthusiast or just starting out, you'll find a wealth of information and resources here to help you reach your goals.
	
	To get started, we encourage you to explore our [features/resources/etc.]. You can also connect with other members of the community and share your own experiences and knowledge by [participating in discussions/etc.].
	
	We can't wait to see what adventures await you on 24hrfx Trading Org. If you have any questions or need help along the way, don't hesitate to reach out to our support team.
	
	Wishing you all the best,
	
	The 24hrfx Trading Org Team.<p>";
//Add recipient
	$mail->addAddress('rubbyfadhili@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		echo "24hrfxtradingorg Email service working Correctly!";
	}else{
		
		echo "Message could not be sent. Mailer Error: ";
	}
}catch(Exception $e){
	echo "Failure on mail service, Attention needed by Developer";
}
//Closing smtp connection
	$mail->smtpClose();
