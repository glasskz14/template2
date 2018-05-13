<?php

require 'conectfromlost.php';

$status1 = $_POST ['status1'];


$q = "INSERT INTO lostitem (status1) VALUES ( '$status1' )";

$result = mysqli_query($dbcon, $q);

if ($result) {
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกเรียบร้อย');";
  echo "location = 'lost4.php'; ";
  echo "</script>";
  
} else {
  echo "ไม่สำเร็จ".mysqli_errno($dbcon);
}

mysqli_close($dbcon);

