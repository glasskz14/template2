<?php


require 'conectfromlost.php';

$lost_id = $_GET ['lost_id'];

$q = "DELETE FROM lostitem WHERE lost_id='$lost_id'";

$result = mysqli_query($dbcon, $q);

if ($result) {
    header("location: 3.php");

}   else {
	echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
}

mysqli_close($dbcon);