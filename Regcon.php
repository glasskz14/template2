<?php

require 'conect.php';

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Phonenumber = $_POST['Phonenumber'];


$query = "INSERT INTO member (Email, Password, Fname, Lname, Phonenumber )  VALUES ('$Email', '$Password', '$Fname', '$Lname', '$Phonenumber')";

$result = mysqli_query($dbcon, $query);

if ($result) {
	header("location: login.php");
} else {
	echo ("location: register.php"). mysqli_error($dbcon);
}

mysqli_close($dbcon);