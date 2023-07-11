<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\ServiceAccount;
use Kreait\Firebase\Auth;
use GuzzleHttp\Client;


$factory = (new Factory)
->withServiceAccount('clientdb-e7462-firebase-adminsdk-iqoz7-7a99bd3e81.json')
->withDatabaseUri('https://clientdb-e7462-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();


?>