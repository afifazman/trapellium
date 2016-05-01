<?php

include("connection/config.php");

$NRIC=$_POST['NRIC'];
$studentID=$_POST['studentID'];  
$program=$_POST['program']; 
$faculty=$_POST['faculty']; 
$title=$_POST['title'];
$supervisor=$_POST['supervisor'];


$sql = "INSERT INTO submission (NRIC, studentID, program, faculty, title, supervisor) VALUES ('$NRIC', '$studentID', '$program', '$faculty', '$title', '$supervisor')";

if (mysqli_query($db, $sql)) {
    header('location:order-list.php');
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

?>