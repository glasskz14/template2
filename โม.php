<?php
      require 'conectfromlost.php';

      $lost_id = $_GET['lost_id'];
      $qlost = "SELECT * FROM lostitem WHERE lost_id='$lost_id'";
      $reslost = mysqli_query($dbcon, $qlost);
      $rowlost = mysqli_fetch_array($reslost, MYSQLI_ASSOC);

?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<body>
<u><strong>แสดงกระทู้: <?php echo $result ['lost_id']; ?> </strong></u><strong> </strong>[<a href="post.php">ตั้งกระทู้ใหม่</a>]<br>
<form name="form1" method="post" action="reply.php">
<strong><u>ร่วมตอบคำถาม</u></strong><br>
ชื่อ<br>
<input name="name" type="text" id="name" size="30">
<br>
รายละเอียด<br>
<textarea name="message" cols="30" rows="5" wrap="VIRTUAL" id="message"></textarea>
<br>
อีเมล์<br>
<input name="email" type="text" id="email" size="30">
<br>
<input type="submit" name="Submit" value="ตั้งคำถาม">
<input type="reset" name="Submit2" value="ยกเลิก">
<input type="hidden" name="id_quiz" value="<? echo $id_quiz;?>">
</form>
</body>
</html>