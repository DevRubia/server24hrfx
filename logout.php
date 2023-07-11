<?php
session_start();

unset($_SESSION['verifiedUserId']);
unset($_SESSION['idTokenString']);

//witjdrawal
unset($_SESSION['paymentType']);
unset($_SESSION['accountNo']);
unset($_SESSION['accountName']);
unset($_SESSION['withdrawable']);
unset($_SESSION['InsuaranceId']);
unset($_SESSION['activationTransaction']);

//deposit
unset($_SESSION['accname']);
unset($_SESSION['accnumber']);
unset($_SESSION['depoAmt']); 
unset($_SESSION['transactionId']);
unset($_SESSION['paymentMeans']);

unset($_SESSION['getAmount']);

if(isset($_SESSION['verifiedSuperAdmin'])){
    unset($_SESSION['verifiedSuperAdmin']);
    $_SESSION['status'] = "verifiedSuperAdmin Logged out successfully"; 

}elseif(isset($_SESSION['verifiedAdmin']));
{
    unset($_SESSION['verifiedAdmin']);
    $_SESSION['status'] = "verifiedAdmin Logged out successfully"; 
}
if(isset($_SESSION['expiryStatus'])){
    $_SESSION['status'] = "Session Expired";   
    header('Location: landingpage.php');
    exit();
}
 else{
        $_SESSION['status'] = "session Logged out successfully";
        header('Location: landingpage.php');
    exit();
    }

$_SESSION['status']="Logged Out successfully";
    header('Location: landingpage.php');
    exit();


?>