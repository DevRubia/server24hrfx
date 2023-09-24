<?php
session_start();
//Include required PHPMailer files
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Get the data from the POST request
$data = json_decode(file_get_contents("php://input"));
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
	$mail->Subject = $data->subject;
//Set sender email
	$mail->setFrom('helpdesk.24hrfxtradingorg@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = $data->to_name.$data->message;
//Add recipient
	$mail->addAddress($data->recipientEmail);
//Finally send email
	if ( $mail->send() ) {
		    echo json_encode(["status" => "success", "message" => "success Backend .EmailTest sent successfully!"]);

	}else{
		
		echo json_encode(["status" => "error", "message" => "Backend Email Error could not be sent."]);
	}
}catch(Exception $e){
	echo "Failure on mail service, Attention needed by Developer on MailApiPortal";
}
//Closing smtp connection
	$mail->smtpClose();
