<?php
session_start();
include('conndb.php');



if(isset($_POST['updateAccount']))
{
    $key=$_POST['key'];
    $earnedTotal=$_POST['earnedTotal'];
    $accountBal=$_POST['accountBal'];
    $bonusAmt=$_POST['bonusAmt'];
    $withdrawable=$_POST['withdrawable'];
    $insuarance=$_POST['insuarance'];
    $withdrawalFund=$_POST['withdrawalFund'];
    $status=$_POST['status'];
    $depositStatus=$_POST['depositStatus'];
    $newData = [
        'earnedTotal' => $earnedTotal,
        'accBal' => $accountBal,
        'bonus' => $bonusAmt,
        'withdrawal'=> $withdrawable,
        'insuarance'=>  $insuarance,
        'withdrawalFund'=> $withdrawalFund,
        'status'=> $status,
        'depTransaction'=> $depositStatus,
    ];   

    $updateResult = $database->getReference('users/'.$key)->update($newData);

    if($updateResult){
    $_SESSION['status']="User Update successful";
    header('Location: paid.php');
}else{
    $_SESSION['status']="User Update not successful";
    header('Location: paid.php');
}

};
?>