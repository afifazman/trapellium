<?php
include('connection/config.php');

session_start();
session_destroy();


//mysqli_refresh($db,MYSQLI_REFRESH_HOSTS);

header("Location: index.php");



?>