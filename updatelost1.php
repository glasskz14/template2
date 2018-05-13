<?php
  require 'conectfromlost.php';


  $status = $_POST ['status'];
  $lost_id = $_POST['lost_id'];
  $name = $_POST['name'];
  $fname = $_POST ['fname'];
  $place_id = $_POST ['place_id'];
  $type_id = $_POST ['type_id'];
  $date = $_POST ['date'];
  $time = $_POST ['time'];
  $description = $_POST ['description'];

 $q = "UPDATE lostitem SET status='$status' , name='$name', fname='$fname' , place_id='$place_id', type_id='$type_id', date='$date', time='$time', description='$description' WHERE lost_id='$lost_id'";

 $result =mysqli_query($dbcon, $q);

 if ($result) {
 	header("location: lost3.php");
 	
 } else {
 	header("location: fromupdatelost.php").mysqli_error($dbcon); 
 }