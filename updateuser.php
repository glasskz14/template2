<?php
  require 'conectregistration.php';

  $User_id = $_POST['User_id'];
  $Fname = $_POST ['Fname'];
  $Lname = $_POST['Lname'];
  $Email = $_POST ['Email'];
  $Password = $_POST ['Password'];
  $Phonenumber = $_POST ['Phonenumber'];
 

 $q = "UPDATE member SET Fname='$Fname' , Lname='$Lname', Email='$Email' , Password='$Password', Phonenumber='$Phonenumber',  WHERE User_id='$User_id'";

 $result =mysqli_query($dbcon, $q);

 if ($result) {
 	header("location: user.php");
 	
 } else {
 	header("location: fromupdateuser.php").mysqli_error($dbcon); 
 }