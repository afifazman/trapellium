<?php

$servername = "localhost";
$user = "user";
$pass = "user1234";
$dbname = "thesis";


$db = mysqli_connect($servername,$user,$pass,$dbname);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//mysqli_close($db);



?>