<?php
  require 'conectfromfound.php';

  $status = $_POST ['status'];
  $found_id = $_POST['found_id'];
  $name = $_POST['name'];
  $fname = $_POST ['fname'];
  $place_id = $_POST ['place_id'];
  $type_id = $_POST ['type_id'];
  $date = $_POST ['date'];
  $time = $_POST ['time'];
  $description = $_POST ['description'];

 $q = "UPDATE founditem SET status='$status' ,name='$name', fname='$fname', place_id='$place_id', type_id='$type_id', date='$date', time='$time', description='$description' WHERE found_id='$found_id' ";

 $result =mysqli_query($dbcon, $q);

 if ($result) {
      header("location: 6.php");
 	
 } else {
 	 header("location: fromupdatefound.php").mysqli_error($dbcon); 
 }

  ?>