<?php

include("connection/config.php");

$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];  
$username=$_POST['username']; 
$password=$_POST['password']; 
$NRIC=$_POST['NRIC'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$level=$_POST['level'];


//$sql = "INSERT INTO user (name, email, password, level) VALUES ('John', 'john@doe.com', '12345', '0')";

$sql1 = "INSERT INTO login (username, password, NRIC, level) VALUES ('$username', '$password', '$NRIC', '$level')";
$sql2 = "INSERT INTO personal (FirstName, LastName, NRIC, tel, email) VALUES ('$firstname', '$lastname', '$NRIC', '$tel', '$email')";

if (mysqli_query($db, $sql1) && mysqli_query($db, $sql2)) {
    header('location:index.php');
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

?>