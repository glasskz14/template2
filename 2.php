<?php
require 'conectfromlost.php';
$sql1="SELECT count( lost_id) AS totalmember
FROM lostitem"; 
$result1=mysqli_query($dbcon,$sql1);
$row=mysqli_num_rows($result1); 
$rown=mysqli_fetch_array($result1); 
echo $rown['totalmember'];
?>

<!DOCTYPE HTML>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h2>รายการขอที่หาย</h2>
<p>ตารางเเสดงรายการของที่หายทั้งหมด.</p>
    <table>
        <tr>
            <th>ของทั้งหมด</th>
            <th>คณะ</th>
            


        </tr>
        <tr>
 	<td></td>

<td>
	

</td>
 </tr>
 </body>
 </html>
