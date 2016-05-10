<?php
session_start();
date_default_timezone_set("Asia/Kuala_Lumpur");


//db connection
$servername = "localhost";
$user = "root";
$pass = "64190ce566aaf8de976be99b94b79682";
$dbname = "thesis";
$db = mysqli_connect($servername,$user,$pass,$dbname);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//session control
if(!isset($_SESSION['username']) || $_SESSION['username'] == " "){
	$_SESSION['uid'] = uniqid();
	$_SESSION['type'] = 'visitor';
	header("Location: index.php");
}
var_dump($_SESSION);
?>