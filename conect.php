<?php

$dbcon = mysqli_connect('localhost', 'root', '','registration');

if (mysqli_connect_errno()) {
	echo "ไม่สามารถติดต่อฐานข้อมูลได้". mysqli_connect_errno();
	exit;

}

mysqli_set_charset ($dbcon, 'utf8');
	