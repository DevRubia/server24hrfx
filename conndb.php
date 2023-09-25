<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\ServiceAccount;
use Kreait\Firebase\Auth;
use GuzzleHttp\Client;


$factory = (new Factory)
->withServiceAccount('hrfxtradingorg-firebase-adminsdk-lqotq-35c0ea2f2c.json')
->withDatabaseUri('https://hrfxtradingorg-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();


?>
