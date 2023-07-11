<?php
session_start();
include('conndb.php');

if(isset($_POST['userDelete'])){
$uid = $_POST['userDelete'];

try{
   $auth->deleteUser($uid);

   $_SESSION['status']="User deteted successfuly";
    header('Location: claims.php');
    exit();
}catch(Exception $e){
    $_SESSION['status']="User not deteted successfully";
    header('Location: claims.php');
    exit();
}


}



if(isset($_POST['deleteDb_php']))
{
    $delId = $_POST['deleteDb_php'];


    // $refTable = 'users/'.$delId;
    $deleteQueryResult = $database->getReference('users/'.$delId)->remove();

    if($deleteQueryResult)
    {
        $_SESSION['status']="User database deteted successful";
        header('Location: paid.php');
    }else{
        $_SESSION['status']="User database delete action failed";
        header('Location: paid.php');
    }

}
?>