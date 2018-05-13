<!DOCTYPE html>
<html>
<body>

<?php
require 'conectfromfound.php';
$sql1="SELECT count(status) AS totalfound1
FROM founditem"; 
$result1=mysqli_query($dbcon,$sql1);
$row=mysqli_num_rows($result1); 
$rown=mysqli_fetch_array($result1); 
  
if ($status = "1") {
  echo "Have a good day!";

  
} else ($status = "0") {
  echo "Have a good night!".mysqli_errno($dbcon);
} 
echo $rown['totalfound1'];
?>


<?php
require 'conectfromfound.php';
$sql1="SELECT count(found_id) AS totalfound
FROM founditem"; 
$result1=mysqli_query($dbcon,$sql1);
$row=mysqli_num_rows($result1); 
$rown=mysqli_fetch_array($result1); 
echo $rown['totalfound'];
?>
 
</body>
</html>