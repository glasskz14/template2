<?php 
    require 'conectfromfound.php';

    $q = "SELECT * FROM lostitem INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id";

    $result = mysqli_query($dbcon, $q);


?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ตาราง</title>
	<style>
		table, th, td{

			border: 1px solid black;
			border-collapse: collapse;
		}


	</style>
</head>
<body>
	<table style="width: 900px">
		<tr>
			<th>รหัสของหาย</th>
			<th>ชื่อหัวข้อ</th>
			<th>ประเภท</th>
			<th>วันที่</th>
			<th>เวลา</th>
			<th>ภาพ</th>
		</tr>
		<?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
		?>

		<tr>
			<td><?php echo $row ['lost_id']; ?></td>
			<td><?php echo $row ['name']; ?></td>
			<td><?php echo $row ['typename']; ?></td>
			<td><?php echo $row ['time']; ?></td>
			<td><<?php echo $row ['date']; ?></td>
			<td></td>
		</tr>
		<?php
	           }
	           mysqli_free_result($result);
	           mysqli_close($dbcon);

		?>

</body>
</html>