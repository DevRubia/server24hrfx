<?php
session_start();
include('conndb.php');

if(isset($_POST['userClaim']))
{
    $uid=$_POST['claimUid'];
    $role=$_POST['role'];
    
    if($role=='admin'){
        $auth->setCustomUserClaims($uid, ['admin' => true]);
        $msg="User is Admin";
    }
    elseif($role=='superAdmin'){
        $auth->setCustomUserClaims($uid, ['superAdmin' => true]);
        $msg="User is superAdmin";
    }
    elseif($role=='no-Role'){
        $auth->setCustomUserClaims($uid, null);
        $msg="role is user";
    }
    if($msg){
        $_SESSION['status']="$msg";
        header("Location: claims.php?id=$uid");
        exit();
    }          
    }else{
        $_SESSION['status']="Failed to update password/Invalid email";
        header("Location: claims.php?id=$uid");
        exit();
    }
    
    

?>