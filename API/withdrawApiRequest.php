<?php
header("Access-Control-Allow-Origin: *"); // Allow any origin to access this script
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");


$timestamp=time();
$formatDate = "Y-m-d";
$formatTime="h:i:s A";
$currentDate = date($formatDate);
$time = date($formatTime, $timestamp);
$space='--';
$time1 = date("h:i A", strtotime("+2 hours", strtotime($time))); // add 2 hours to $time and format it
 // output the new time value
$date = $currentDate.$space.$time1;

if($_SERVER["REQUEST_METHOD"] == "POST"){

//setwithdrawalRequestDetail
$paymentType=$_POST['paymentType'];
$accountNo=$_POST['accountNo'];
$accountName=$_POST['accountName'];
$withdrawable=$_POST['withdrawable'];
$usermail=$_POST['usermail'];
$name=$_POST['name'];	
	
// // insuranceTransactionId
// $insuaranceTransactionId=$GLOBALS['InsuaranceId'];

// //withdrawalTransactionId
// $insuaranceTransactionIdW=$GLOBALS['activationTransaction'];
    
    //Begin Email Send
}
//Include required PHPMailer files

require './phpmailer/includes/PHPMailer.php';
require './phpmailer/includes/SMTP.php';
require './phpmailer/includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
$userProperties = $_SESSION['userProperties'];
$name=$userProperties['name'];
$usermail=$userProperties['userEmail'];

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
$mail->Subject = "WITHDRAWAL REQUEST";
//Set sender email
$mail->setFrom('helpdesk.24hrfxtradingorg@gmail.com');
//Enable HTML
$mail->isHTML(true);
//Attachment
//$mail->addAttachment('img/attachment.png');
//Email body
$mail->Body = "<h3>
<h3>Hello $name,</h3>
<br/>

<h5>
We have received your withdrawal request of $$withdrawable USD. 
</h5>
<h5>
Withdrawal made to: Account Number: $accountNo
</h5>
<h5>
Withdrawal made to: Account Name: $accountName
</h5>
<h5>
Withdrawal via, Account Type: $paymentType
</h5>

 Your WITHDRAWAL REQUEST is being processed. We aim to process all withdrawals within 1 hour, but it may take longer depending on the number of investors being paid. 

Kindly clear insurance and withdrawals to access withdrawals.We will let you know when the process is completed. 

 For BANK withdrawals, it will take 3 to 5 working days for your funds to appear in your account, depending on the BANK. 


If you have any questions, contact us via help desk on our website.

<h3>
Our Official Pages.
</h3>

<h4>
Telegram : https://t.me/tg24HrFxTradingOrg
</h4>

<h4> 
Instagram : http://www.instagram.com/24hrfx_tradingorg 
</h4>

<h5>Kind regards, </h5>
<h5>Best Certified Investment Platform, </h5>
<h5>The 24hrfx Trading Org Team. $currentDate </h5>
</h3> ";


$mail->addAddress($userEmail);
//Finally send email
if ( $mail->send() ) {

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
	$mail->Subject = "Withdrawal Request";
//Set sender email
	$mail->setFrom('helpdesk.24hrfxtradingorg@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body



	$mail->Body = "Withdrawal request from: <h2>$name </h2>,
    <h4>User withdrawal amount Request: $ $withdrawable</h4>
    <h4>User Request Name(Account Name): $accountName</h4>
    <h4>User Account number wire Request: $accountNo</h4>
	<h4>user email: $usermail  </h4>
    <h4>User payment-type by: $paymentType</h4>
    <p></p>
    <h4>user Request sent on:Date sent $currentDate . Time: $time</h4>

   <h4> Validate client Request.Remember to update their dashboard status.</h4>

    <h3>Regards, 24hrfx Team</h3>

    ";
//Add recipient
	$mail->addAddress('helpdesk.24hrfxtradingorg@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		$_SESSION['status']="Withdrawal request statement has been processed..Check your Email:";
   
   

	}else{
		
		$_SESSION['status']=" Admin request failed to deploy: Send your withdraw details below";
    header('Location: https://24hrfxtradingorg.co.ke/helpdesk.php?status=error');
    exit();
	}
}catch(Exception $e){
	$_SESSION['status']="failed!!!";
    header('Location: https://24hrfxtradingorg.co.ke/newDashboard.php?status=success');
    exit();
}
//Closing smtp connection
	$mail->smtpClose();

	$_SESSION['status']="Withdrawal request statement has been processed..Check your Email:";
    header('Location: https://24hrfxtradingorg.co.ke/withdrawPopup.php?status=success');
    exit();
}else{
	$_SESSION['status']=" failed to deploy:";
    header('Location: https://24hrfxtradingorg.co.ke/helpdesk.php?status=error');
    exit();
}
}catch(Exception $e){
	$_SESSION['status']="failed!!!";
    header('Location: newDashboard.php');
    exit();
}
//Closing smtp connection
$mail->smtpClose();

?>
