
<?php

include('conectfromlost.php');
$date_a=date("d/m/y");
$sql = "INSERT INTO meslost (lost_id, caeatedate, details, name) values ($lost_id, '$caeatedate', '$details', '$name')"; // กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูลแบบคีย์ในคำสั่ง SQL
$dbquery = mysql_db_query($dbname, $sql);
// ปิดการติดต่อฐานข้อมูล
mysql_close();
echo "<Font Size=4><B>ขอบคุณสำหรับคำตอบ $name </B><BR>";
echo "<A HREF=\"โม.php?lost_id=$lost_id\">กลับไปหน้ากระทู้ ".sprintf("<B><FONT COLOR=\"Blue\">%05d</FONT></B>", $lost_id	)."</A>";
?>