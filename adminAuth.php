<?php

include('conndb.php');

 if(isset($_SESSION['verifiedUserId']))

 {

if(isset($_SESSION['verifiedAdmin']) || isset($_SESSION['verifiedSuperAdmin'])){

    $uid = $_SESSION['verifiedUserId'];
    $idTokenString = $_SESSION['idTokenString'];


try {
    $verifiedIdToken = $auth->verifyIdToken($idTokenString);

    $claims = $auth->getUser($uid)->customClaims;

    if(isset($claims['admin']) == true || isset($claims['superAdmin']) == true){
        
       
    }else{
        header('location: logout.php');
        exit();
    }
  

} catch (FailedToVerifyToken $e) {
    //echo 'The token is invalid: '.$e->getMessage();
    $_SESSION['expiryStatus']="Token Expired/invalid. Login Again";
    header('Location: logout.php');
    exit();
}}
else{  
    $_SESSION['status']="Access denied..You are not verified Admin..Bigger Investments Timestamps will Automatically raise current investor profile";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
 }
 else{
    $_SESSION['status']="login to access this page";
    header('Location: landingpage .php');
    exit();
 }

?>