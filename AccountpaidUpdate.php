<?php
session_start();
include('conndb.php');



if(isset($_POST['updateAccount']))
{
    
    $username=$_POST['username'];
    $Amount=$_POST['Amount'];
    $date=$_POST['date'];

    $username1=$_POST['username1'];
    $Amount1=$_POST['Amount1'];
    $date1=$_POST['date1'];
    
    $username2=$_POST['username2'];
    $Amount2=$_POST['Amount2'];
    $date2=$_POST['date2'];

    $username3=$_POST['username3'];
    $Amount3=$_POST['Amount3'];
    $date3=$_POST['date3'];

    $username4=$_POST['username4'];
    $Amount4=$_POST['Amount4'];
    $date4=$_POST['date4'];

    $paybill=$_POST['paybill'];
    $paybillName=$_POST['paybillname'];
    
    $paybill1=$_POST['paybill1'];
    $paybillName1=$_POST['paybillname1'];

    $paybill2=$_POST['paybill2'];
    $paybillName2=$_POST['paybillname2'];

    $newData = [
        'username' => $username,
        'Amount' => $Amount,
        'date' => $date,
        
        'username1' => $username1,
        'Amount1' => $Amount1,
        'date1' => $date1,
        
        'username2' => $username2,
        'Amount2' => $Amount2,
        'date2' => $date2,
        
        'username3' => $username3,
        'Amount3' => $Amount3,
        'date3' => $date3,
        
        'username4' => $username4,
        'Amount4' => $Amount4,
        'date4' => $date4,
        
        'PayBillname'=>$paybillName,
        'PayBill'=>$paybill,

        'PayBillname1'=>$paybillName1,
        'PayBill1'=>$paybill1,

        'PayBillname2'=>$paybillName2,
        'PayBill2'=>$paybill2,

    ];   

    $updateResult = $database->getReference('paidTable/')->getChild('Table/')->update($newData);

    if($updateResult){
    $_SESSION['status']="Top paid list Updated successful";
    header('Location: adminpaidReview.php');
}else{
    $_SESSION['status']="Top paid list Update not successful";
    header('Location: adminpaidReview.php');
}

};
?>