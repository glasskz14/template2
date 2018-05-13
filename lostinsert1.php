<?php

require 'conectfromlost.php';

$status = $_POST ['status'];
$name = $_POST ['name'];
$fname = $_POST ['fname'];
$place_id = $_POST ['place_id'];
$type_id = $_POST ['type_id'];
$date = $_POST ['date'];
$time = $_POST ['time'];
$description = $_POST ['description'];

// upload photo
$ext = pathinfo(basename($_FILES['photo'] ['name']), PATHINFO_EXTENSION);
$new_photo_name = 'img_'.uniqid().".".$ext;
$photo_path = "photolost/";
$upload_path = $photo_path.$new_photo_name;

// uploading
$success=  move_uploaded_file($_FILES['photo'] ['tmp_name'], $upload_path);
if ($success==FALSE) {
	header("location: lost3.php");
	exit();
}

$photo = $new_photo_name;

$q = "INSERT INTO lostitem (name, fname, place_id, type_id, date, time, description, photo, status) VALUES ('$name', '$fname', '$place_id', '$type_id', '$date', '$time', '$description', '$photo', '$status' )";

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

