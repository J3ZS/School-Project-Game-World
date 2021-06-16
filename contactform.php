<?php

include 'inc/databaseGames.php';

$name=$_REQUEST['name'];
$lastname=$_REQUEST['lastname'];
$phone=$_REQUEST['phone'];
$city=$_REQUEST['city'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];

// Inserting data into the 'contact' table

$sql="INSERT INTO contactform(firstname,lastname,phone,city,email,message) VALUES ('$firstname','$lastname','$phone','$city','$email','$msg')";

$result = $conn->query($sql) or die (mysqli_error($conn));

mysqli_close($conn);

header("location:contact.php?note=Success!");

?>