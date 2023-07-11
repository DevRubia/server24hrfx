<?php
session_start();
include('conndb.php');



if(isset($_POST['updateInformation']))
{
    $key=$_POST['key'];
    $accountNumber=$_POST['accountNumber'];
    $accountType=$_POST['accountType'];
    $accName=$_POST['accName'];
    
    
    $newData = [
        'accName' => $accName,
        'accountType' => $accountType,
        'accountNumber' => $accountNumber,
        
    ];   

    $updateResult = $database->getReference('users/'.$key)->update($newData);

    if($updateResult){
    $_SESSION['status']="Payment Information Update successful..login again to reflect changes";
    header('Location: newDashboard.php');
}else{
    $_SESSION['status']="Payment Information Update not successful";
    header('Location: newDashboard.php');
}

};
?>