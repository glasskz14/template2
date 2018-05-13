<?php
  require 'conectfromlost.php';
  
  $message = $_POST ['message'];
 


  $q =  "INSERT INTO meslost (message, lost_id) VALUES ('$message', '$lost_id')"; 

  $result = mysqli_query($dbcon, $q);

if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกเรียบร้อย');";
	echo "location = 'ลองหา.php'; ";
	echo "</script>";
	
} else {
	echo "ไม่สำเร็จ".mysqli_errno($dbcon);
}

mysqli_close($dbcon);