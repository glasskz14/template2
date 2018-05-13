<?php
  $dbcon = mysqli_connect('localhost', 'root', '', 'registration' ) or die ('ไม่ติดต่อได้'). mysqli_connect_error();

mysqli_set_charset ($dbcon, 'utf8');

  $q = "SELECT * FROM  member";

  $result = mysqli_query($dbcon, $q);

  if ($result){
  	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  		echo "รหัสสินค้า".$row['User_id']. "<br>";
  		echo "รหัสสินค้า".$row['Email']. "<br>";
  		echo "รหัสสินค้า".$row['Fname']. "<br>";
  		echo "รหัสสินค้า".$row['Lname']. "<br>";
  		echo "รหัสสินค้า".$row['Phonenumber']. "<br>";
  		echo "<hr>";

  	}
  	mysqli_free_result($result);

  } 
  
  else {
  	echo "เเสดงไม่ได้";
  }
  mysqli_close($dbcon);
