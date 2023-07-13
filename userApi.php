<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conndb.php');
include('authentication.php');
//create api to fetch current user
$userProperties = $_SESSION['userProperties'];
 $email = $userProperties['userEmail'];
try{
    $user = $auth->getUserByEmail("$email");

}catch(Exception $e){

    echo "Failed to fetch user json data: ".$e->getMessage();

}

header('Content-Type: application.json');
echo json_encode($user);								

?>