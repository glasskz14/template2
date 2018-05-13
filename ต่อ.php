<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<body>
<u><strong>แสดงกระทู้ webthaidd.com</strong></u><strong> </strong>[<a href="post.php">ตั้งกระทู้ใหม่</a>]<br>
<?
include('config.inc.php');
$sql = "select * from quiz order by id_quiz desc";
$dbquery = mysql_db_query($dbname, $sql);

// หาจำนวนเรกคอร์ดข้อมูลในตาราง
$num_rows = mysql_num_rows($dbquery);
// เริ่มวนรอบแสดงข้อมูล
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$id_quiz = $result[id_quiz];
$title = $result[title];
$name = $result[name];
$message = $result[message];
$email = $result[email];
$date_q = $result[date_q];
$count_q = $result[count_q];

echo "<FONT COLOR=\"red\"><b>".sprintf("%05d", $id_quiz)."</b></FONT>"; //แสดงหมายเลขแบบมีเงื่อนไข
echo " <A HREF=\"show_ans.php?id_quiz=$id_quiz\" target=\"$id_quiz\">$title</A> <FONT COLOR=\"blue\">$date_q</FONT> $name<BR>"; //เราใส่ Tag Link ลงไปนะครับ แต่เราฝากค่ากระทู้ไปด้วยนะครับจะได้ตอบถูกข้อ

$i++;
}
// ปิดการติดต่อฐานข้อมูล
mysql_close();
?>
</body>
</html>