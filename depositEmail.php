<?php
include('authentication.php');
$userProperties = $_SESSION['userProperties'];

$timestamp=time();
$formatDate = "Y-m-d";
$formatTime="h:i:s A";
$currentDate = date($formatDate);
$time = date($formatTime, $timestamp);


if(isset($_POST['confirmDeposit'])){

    $accName=$_SESSION['accname'];
    $accNumber=$_SESSION['accnumber'];
    $depoAmt=$_SESSION['depoAmt']; 
    $transactionId=$_SESSION['transactionId'];
    $paymentMeans=$_SESSION['paymentMeans'];
    
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
$mail->Subject = "DEPOSIT STATEMENT VERIFICATION";
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

 We have received your Deposit statements for $$depoAmt USD. 
<h3>
Deposited made by: Account Number: $accNumber
</h3>
<h3>
Deposited made by: Account Name: $accName
</h3>
<h3>
Deposited via, Account Type: $paymentMeans
</h3>
<h3>
 Your deposit request is being validated... We aim to process all deposits immediately after deposits are made to our Agents all around the world.
 </h3>
 <h3>
 Refresh your sessions and login later for Account update. STRICTLY MAKE YOUR WITHDRAW AFTER 24hrs.Repeated deposit statements with wrong transaction ID's may lead to account DEACTIVATION.
 </h3>
 <h3>
 As a member of our platform, you manage your own account by making deposits and withdrawals. 
</h3>

<h3>
If you have any questions, contact us via help desk on our website.
</h3>

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
<h5>The 24hrfx Trading Org Team.</h5>
</h3> ";
//Add recipient


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
	$mail->Subject = "DEPOSIT VALIDATION";
//Set sender email
	$mail->setFrom('helpdesk.24hrfxtradingorg@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body



	$mail->Body = "<h2>Deposit Confirmation request from: $name </h2>,
    <h4>User deposited Amount: $ $depoAmt</h4>
    <h4>User deposited Account by Name: $accName</h4>
    <h4>User deposited Account by number: $accNumber</h4>
    <h4>User Email: $usermail</h4>
    <h4>User deposited payment-type by: $paymentMeans</h4>
    <h4>User Deposited Transaction code: $transactionId</h4>
    <p></p>
    <h4>User deposit sent on: Date sent: $currentDate . Time: $time</h4>

   <h4> Validate client Request.Remember to update their dashboard status.</h4>

    <h3>Regards, 24hrfx Team</h3>

    ";
//Add recipient
	$mail->addAddress('helpdesk.24hrfxtradingorg@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		$_SESSION['status']="processed!!!";
    
	}else{
		
		$_SESSION['status']="failed!!!";
    header('Location: newDashboard.php');
    exit();;
	}
}catch(Exception $e){
    $_SESSION['status']="failed!!!";
    header('Location: newDashboard.php');
    exit();
}
//Closing smtp connection
	$mail->smtpClose();


    $_SESSION['status']="Deposit statement has been processed..Check your Email:";
    header('Location: depositPopup.php');
    exit();
}else{
    $_SESSION['status']=" Admin request failed to deploy: Send your deposit details below";
    header('Location: helpdesk.php');
    exit();
    
}
}catch(Exception $e){
echo "failed to create email one body";
}
//Closing smtp connection
$mail->smtpClose();

?>