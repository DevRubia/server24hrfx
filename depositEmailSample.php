<?php
include('authentication.php');
$userProperties = $_SESSION['userProperties'];
$uid= $_SESSION['verifiedUserId'] ;
$timestamp=time();
$formatDate = "Y-m-d";
$formatTime="h:i:s A";
$currentDate = date($formatDate);
$time = date($formatTime, $timestamp);
$space='--';
$time1 = date("h:i A", strtotime("+2 hours", strtotime($time))); // add 2 hours to $time and format it
 // output the new time value
$date = $currentDate.$space.$time1;

if(isset($_POST['confirmDeposit'])){

    $accName=$_SESSION['accname'];
    $accNumber=$_SESSION['accnumber'];
    $amount=$_SESSION['depoAmt']; 
    $transactionId=$_SESSION['transactionId'];
    $Account=$_SESSION['paymentMeans'];
    $Review='24hrs';
    $status='sent';
    
}
//transactions
$newData = [
    'status' => $status,
    'Review' => $Review,
    'Account' => $Account,
    'transactionId'=> $transactionId,
    'amount'=>  $amount,
    'indexOn'=>  $date
];   

$customUserProperties = $database->getReference('users/'.$uid.'/transactions/')->push($newData);


require './phpmailer/includes/PHPMailer.php';
require './phpmailer/includes/SMTP.php';
require './phpmailer/includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($customUserProperties)
{
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
    <p>
     We have received your Deposit statements for $$amount USD. 
     </p>
    <p>
    Deposited made by: Account Number: $accNumber
    </p>
    <p>
    Deposited made by: Account Name: $accName
    </p>
    <p>
    Deposited via, Account Type: $Account
    </p>
    <p>
     Your deposit request is being validated... We aim to process all deposits immediately after deposits are made to our Agents all around the world.
     
     Refresh your sessions and login later for Account update.</p><p> STRICTLY MAKE YOUR WITHDRAW AFTER 24hrs 
    
     However, Repeated deposit statements with wrong transaction ID's may lead to account DEACTIVATION.</p><p>
     
     As a member of our platform, you manage your own account by making deposits and withdrawals. 
    
    
    
    If you have any questions, contact us via help desk on our website.
    </p>
    
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
    <p>The 24hrfx Trading Org Team.</p>
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
        <p>User deposited Amount: $ $amount</p>
        <p>User deposited Account by Name: $accName</p>
        <p>User deposited Account by number: $accNumber</p>
        <p>User Email: $usermail</p>
        <p>User deposited payment-type by: $Account</p>
        <p>User Deposited Transaction code: $transactionId</p>
        <p></p>
        <p>User deposit sent on: Date sent: $currentDate . Time: $time1  .
    
        Validate client Request.Remember to update their dashboard status.</p>
    
        <h4>Regards, 24hrfx Team</h4>
    
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
    

    $_SESSION['status']="Deposit transactions sent successfully";
    header('Location: depositPopup.php');
}else{
    $_SESSION['status']="Action needed..Error CRUD OOP";
    header('Location: deposit.php');
}


?>