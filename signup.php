<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include('conndb.php');

$timestamp=time();
$formatDate = "Y-m-d";
$formatTime="h:i:s A";
$currentDate = date($formatDate);


require './phpmailer/includes/PHPMailer.php';
require './phpmailer/includes/SMTP.php';
require './phpmailer/includes/Exception.php';

//Create instance of PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$userName=$_POST['username'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
$confirmPass=$_POST['ConfirmPassword'];
$countryCode=$_POST['countryCode'];
$phoneNumber=$countryCode . $phone;


//email address to check
$userEmail = $email;
$userPhone = $phoneNumber;

try {
  
    $user = $auth->getUserByEmail($userEmail);
    
    
     if($user !== null) {
    // User exists
    $_SESSION['status']="ALERT: Email address exists";
    header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
    exit();
     }
     
    
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    //echo $e->getMessage();
    $_SESSION['status']="Validating Entry";
    
 }

  
try  {
        $user1 = $auth->getUserByPhoneNumber($userPhone);
        
        if($user1 !== null) {
    // User exists
    $_SESSION['status']="ALERT:Phone Number exists";
    header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
    exit();
        
    }
}catch(\Kreait\Firebase\Exception\Auth\UserNotFound $e){
       $_SESSION['status']="Validating Entry";  
    }
  
//
$pattern = '/^[0-9]+$/';
//validate phoneNUmber
// Check if the numeric phone number has less than 10 digits or contains any letter characters
//ctype_digit(strval($value))
//

if (strlen($userPhone) <= 10) {
    // Throw an error or handle the validation failure
    $_SESSION['status']="ALERT:Invalid phone number! less or Invalid Charachters(*,+,|,?,/)";
    // You can also redirect the user back to the form or display an error message
    header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
    exit();
}

if(strlen($pass) < 8){
    $_SESSION['status']="ALERT:Password should be >= 8 charachters! include!@?/ Capital,upper,lowercase letters and numerics";
    header('Location: https://24hrfxtradingorg.co.ke/landingpage.php?error=shortPassword');
    exit();
}

//start of sign up Activation process
if($pass == $confirmPass){

    $userProperties = [
            'phone'=> $phoneNumber,
            'email' => $email,
            'password' => $pass,
            'displayName' => $fullname,
            'emailVerified'=> true
        ];   

        $createdUser = $auth->createUser($userProperties);

        if($createdUser){

            $uid = $createdUser->uid;

        $additionalProperties=[
            'accBal'=> 0,
            'timestamp'=> $currentDate,
            'countryCode'=>$countryCode,
            'earnedTotal'=>0,
            'withdrawal'=>0,
            'bonus'=>0,
            'userEmail' => $email,
            'name' => $userName,
            'accName' => $fullname,
            'accountType'=> 'Mpesa',
            'accountNumber'=>$phoneNumber,
            'status'=>'NewInvestorAccount',
            'insuarance'=>0,
            'withdrawalFund'=>0,
            'depTransaction'=>'recent Transactions'
        ];


             $customUserProperties = $database->getReference('users/'.$uid)->set($additionalProperties);
//send email to user first time signup

  
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
            header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
            exit();
	}else{
		$_SESSION['status']="sign in Email not sent ..sign in was not successful";
            header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
            exit();
		
	}
}catch(Exception $e){
	        $_SESSION['status']="sign in Email not sent ..debug Mailer";
            header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
            exit();
		;
}
//Closing smtp connection
	$mail->smtpClose();





            
        }else{
            $_SESSION['status']="sign in Error...";
            header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
            exit();
        }
}else{
    $_SESSION['status']="passwords do not match";
    header('Location:  https://24hrfxtradingorg.co.ke/landingpage.php');
    exit(); 
}




 
