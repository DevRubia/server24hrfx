<?php
include('conndb.php');
$users=$auth->listUsers();
$i=1;
 foreach($users as $row){
    header('Content-Type: application/json'); 

echo json_encode($row);
//separate each json
echo "\n"; 
};

?>