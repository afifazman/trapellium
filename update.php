<?php

include("connection/config.php");

$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];   
$NRIC=$_POST['NRIC'];
$tel=$_POST['tel'];
$email=$_POST['email'];


$sql = "UPDATE personal SET FirstName='$firstname', LastName='$lastname', tel='$tel', email='$email' WHERE NRIC='$NRIC'";

if (mysqli_query($db, $sql)) {
    header('location:main.php');
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

?>