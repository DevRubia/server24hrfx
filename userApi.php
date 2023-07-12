<?php
include('conndb.php');
$users=$auth->listUsers();
// $i=1;
header('Content-Type: application/json'); 

echo json_encode($users);
//  foreach($users){


// }
								
?>