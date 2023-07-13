<?php
include('conndb.php');
$email = $_SESSION['userEmail'];
$user=$auth->getUserByEmail($email);
// $i=1;
header('Content-Type: application/json'); 

echo json_encode($user);
//  foreach($users){


// }
								
?>
