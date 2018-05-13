<?php


require 'conectfromfound.php';

$found_id = $_GET ['found_id'];

$q = "DELETE FROM founditem WHERE found_id='$found_id'";

$result = mysqli_query($dbcon, $q);

if ($result) {
    header("location: 6.php");

}   else {
	echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
}

mysqli_close($dbcon);