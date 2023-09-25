<?php
header("Access-Control-Allow-Origin: *"); // Allow any origin to access this script
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

require './phpmailer/includes/PHPMailer.php';
require './phpmailer/includes/SMTP.php';
require './phpmailer/includes/Exception.php';

//Create instance of PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$userName = $_POST['from_name'];
$email  = $_POST['recipientEmail'];
$currentDate  = $_POST['currentDate'];

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
	$mail->Subject = "ACCOUNT REGISTRATION";
//Set sender email
	$mail->setFrom('helpdesk.24hrfxtradingorg@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "
    <h3>CONGRAGULATION User $userName .</h3>
    
    </br>
    
    <p> 
    WELCOME to 24HRFX TRADING ORG!
    </p>

	<p> You are almost ready to start interacting with our investment services.</p><p>
    Your account has been successfully created, and you're now part of a community of people who are passionate about current market trading trends. 
    Here at 24HRFX TRADING ORG, we believe that trading should be accessible to everyone, and our goal is to make your experience as smooth and enjoyable as possible.</p><p>
    Whether you're a seasoned trader enthusiast or just starting out, you'll get PROFIT from our services.
    To get started, we encourage you to start investmenting immmediately.
    We can't wait to see what adventures await you on 24HRFX TRADING ORG.
	</p>

    <p> If you have any questions or need help along the way, don't hesitate to reach out to our support team.

    </p>

    <p>
Our Opicial Pages.
</p>

<p>
Telegram : https://t.me/tg24HrFxTradingOrg
</p>

<p> 
Instagram : http://www.instagram.com/24hrfx_tradingorg 
</p>

<p>Kind regards,  </p>
<p>Best Certified Investment Platform, </p>
<p>The 24hrfx Trading Org Team. $currentDate </p>
</h3>";
//Add recipient
	$mail->addAddress($email);
//Finally send email
	if ( $mail->send() ) {
		   $_SESSION['status']="sign in was successful..Check email to make sure you receive information appropriately";
            header('Location: http://localhost/TestCaseProject/landingpage.php');
            exit();
	}else{
		$_SESSION['status']="sign in Email not sent ..sign in was not successful";
            header('Location: http://localhost/TestCaseProject/landingpage.php');
            exit();
		
	}
}catch(Exception $e){
	        $_SESSION['status']="sign in Email not sent ..debug Mailer";
            header('Location: http://localhost/TestCaseProject/landingpage.php');
            exit();
		;
}
//Closing smtp connection
	$mail->smtpClose();
?>
