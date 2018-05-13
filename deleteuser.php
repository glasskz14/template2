<?php


require 'conectregistration.php';

$User_id = $_GET ['User_id'];

$q = "DELETE FROM member WHERE User_id='$User_id'";

$result = mysqli_query($dbcon, $q);

if ($result) {
    header("location: user.php");

}   else {
	echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
}

mysqli_close($dbcon);