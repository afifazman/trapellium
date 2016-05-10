<?php
	include "/connection/config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>UTM Thesis Printing Service</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	<link href="assets/css/styles2.css" rel="stylesheet">
    <link href="assets/css/mystyle.css" rel="stylesheet">
    <?php
    	$path = split('/', $_SERVER['PHP_SELF']);
    	$filename = substr($path[2],0,strpos($path[2], ".php"));
    	if($filename!='index'){
    		echo '<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
    	}
    ?>
</head>
<body>