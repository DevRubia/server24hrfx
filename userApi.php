<?php
include('conndb.php');
//create api to fetch current user
$email = $_SESSION['userEmail'];
$user=$auth->getUserByEmail($email);

header('Content-Type: application/json'); 

echo json_encode($user);
								
?>
