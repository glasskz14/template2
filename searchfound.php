<?php 
    require 'conectfromfound.php';


       $searchcat = $_POST ['searchcat'];

      $q = '%'.$searchcat."%";
   

     $q = "SELECT * FROM founditem INNER JOIN typeitem ON founditem.found_id=typeitem.type_id INNER JOIN typeplace ON founditem.found_id=typeplace.place_id WHERE name LIKE '$q' order by found_id desc";

    $result = mysqli_query($dbcon, $q);


?>


<!DOCTYPE HTML>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
</style>


<ul class="topnav">
  <li><a class="active" href="index.php">หน้าเเรก</a></li>
  <li><a href="lostlist.php">รายการของหาย</a></li>
  <li><a href="foundlist.php">รายการของเจอ</a></li>
  <li class="right"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
</head>

                <!-- Main -->
                    <div id="main">
                        <div class="inner">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                            <style>

.w3-btn {margin-bottom:10px;}
</style>

<div class="w3-container">

<p><CENTER>
<form action="foundlist.php" method="post">
<label>ค้นหา: </label><input type="text" size="40px" name="searchcat"/>
<input type="submit" name="submit" id="submit" value="ยกเลิก" >
</form>
</CENTER></p>
                           
                            
                            <style>
                            table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#FFF0F5;}
</style>

<body>
   <h2>รายการของที่พบเจอ</h2>
<p>ตารางเเสดงรายการของที่เจอทั้งหมด.</p>
<table>
    <tr>
      <th>รหัสของ</th>
      <th>ชื่อสิ่งของ</th>
      <th>ชื่อ สกุล</th>
      <th>ประเภท</th>
      <th>สถานที่</th>
      
      <th>ภาพ</th>
      <th>เเก้ไข</th>
      <th>ลบ</th>
      <th>สถานะ</th>


    </tr>
    <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
    ?>
    <tr>
      <td><?php echo $row ['found_id']; ?></td>
      <td><?php echo $row ['name']; ?></td>
      <td><?php echo $row ['fname']; ?></td>
      <td><?php echo $row ['typename']; ?></td>
      <td><?php echo $row ['placename']; ?></td>
      
      <td><style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.desc {
    padding: 15px;
    text-align: center;
}
</style>
<div class="dropdown">
  <img src="photofound/<?php echo $row['photo'] ?>"  width="100" height="50">
  <div class="dropdown-content">
    <img src="photofound/<?php echo $row['photo'] ?>"  width="300" height="200">
  </div>
</div></td>
      <td><a href="fromupdatefound.php?found_id=<?php echo $row ['found_id']; ?>">เเก้ไข</a></td>
      <td><a href="fromdeletefound.php?found_id=<?php echo $row ['found_id']; ?>">ลบ</a></td>
        <td><?php echo $row ['status']; ?></td>

    </tr>
    <?php

           }
           mysqli_free_result($result);
           mysqli_close($dbcon);
    ?>
</body>
</html>