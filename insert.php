<?php
require 'conectfrom.php'; 


$typename = 'typename';

$query = "INSERT INTO typeitem (type_id, typename) VALUES ('', 'เเมว')";


$result = mysqli_query($dbcon, $query);

if ($result){
	echo "เรียบร้อย";
} else{
	echo"ผิดพลาด" .mysqli_error($dbcon);
}