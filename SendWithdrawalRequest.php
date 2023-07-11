<?php
include('authentication.php');
$userProperties = $_SESSION['userProperties'];


$timestamp=time();
$formatDate = "Y-m-d";
$formatTime="h:i:s A";
$currentDate = date($formatDate);
$timestampPlus3Hours = $timestamp + (3 * 60 * 60);
// Format the new timestamp
$time = date($formatTime, $timestampPlus3Hours);
// $time = date($formatTime, $timePlus3Hours);
$pin = "AW-WIT8KEY";


if(isset($_POST['withdraw'])){

$pinValue=$_POST['pin'];

	if($pinValue==$pin){
		//setwithdrawalRequestDetail
		$paymentType=$_SESSION['paymentType'];
		$accountNo=$_SESSION['accountNo'];
		$accountName=$_SESSION['accountName'];
		$withdrawable=$_SESSION['withdrawable'];

}else{

	$_SESSION['status']="Invalid Withdrawal Key";
	header('Location: newDashboard.php');
	exit();

}
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

<p>
We have received your withdrawal request of $$withdrawable USD. 
</p>
<p>
Withdrawal made to: Account Number: $accountNo
</p>
<p>
Withdrawal made to: Account Name: $accountName
</p>
<p>
Withdrawal via, Account Type: $paymentType
</p>

<p>
 Your WITHDRAWAL REQUEST is being processed. We aim to process all withdrawals within 1 hour, but it may take longer depending on the number of investors being paid. </p>

 <p>Kindly clear insurance and withdrawals to access withdrawals.We will let you know when the process is completed. 

 For BANK withdrawals, it will take 3 to 5 working days for your funds to appear in your account, depending on the BANK.</p>


 <p>If you have any questions, contact us via help desk on our website.</p>

<p>
Our Official Pages.
</p>

<p>
Telegram : https://t.me/tg24HrFxTradingOrg
</p>

<p> 
Instagram : http://www.instagram.com/24hrfx_tradingorg 
</p>

<p>Kind regards, </p>
<p>Best Certified Investment Platform, </p>
<p>The 24hrfx Trading Org Team. $currentDate </p>
</h3> ";


$mail->addAddress($userProperties['userEmail']);
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
    header('Location: helpdesk.php');
    exit();
	}
}catch(Exception $e){
	$_SESSION['status']="failed host-Server error!!!";
    header('Location: newDashboard.php');
    exit();
}
//Closing smtp connection
	$mail->smtpClose();

	$_SESSION['status']="Withdrawal request statement has been processed..Check your Email:";
    header('Location: withdrawPopup.php');
    exit();
}else{
	$_SESSION['status']=" failed to deploy:";
    header('Location: helpdesk.php');
    exit();
}
}catch(Exception $e){
	$_SESSION['status']="failed client-server error!!!";
    header('Location: newDashboard.php');
    exit();
}
//Closing smtp connection
$mail->smtpClose();

?>