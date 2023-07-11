<?php
session_start();
 include('conndb.php');

  if(isset($_SESSION['verifiedUserId']))

  {
     $uid = $_SESSION['verifiedUserId'];
     $idTokenString = $_SESSION['idTokenString'];


 try {
     $verifiedIdToken = $auth->verifyIdToken($idTokenString);
    

        if ($verifiedIdToken === 0) {
            $_SESSION['expiryStatus'] = "Token Expired/invalid. Login Again";
            header('Location: logout.php');
            exit();
        }
  

 } catch (FailedToVerifyToken $e) {
     //echo 'The token is invalid: '.$e->getMessage();
     $_SESSION['expiryStatus']="Token Expired/invalid. Login Again";
     header('Location: logout.php');
     exit();
 }
  }
  else{
     $_SESSION['status']="login to access this page";
     header('Location: landingpage.php');
     exit();
  }

?>