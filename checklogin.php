<?php

session_start();

include('connection/config.php');

// Define $username and $password
$username=$_POST['username']; 
$password=$_POST['password'];

// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username); 
$password = mysql_real_escape_string($password); 

//Check username and password from database
$sql="SELECT * FROM login WHERE username='$username' and password='$password'";

$result=mysqli_query($db,$sql);

$row=mysqli_fetch_array($result);

$NRIC = $row['NRIC'];

$_SESSION['NRIC'] = $NRIC;

//echo $_SESSION['studentID'];


//If username and password exist in our database then create a session. //Otherwise echo error.
if($row){
	$_SESSION['username'] = $_POST['username'];

	//level 1 is for admin
	if ($row['level']==1){

		header("location: admin.php"); 
	

	//level 0 is for end-user
	}else{

		header("location: main.php"); 

		//$_SESSION['NRIC'] = $row['NRIC'];

	}

} else {

	header("location: index.php");
}


?>