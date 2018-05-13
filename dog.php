<?php
   require 'conectfromlost.php';

   $searchcat = $_POST ['searchcat'];

   $p = '%'.$searchcat."%";

   $q = "SELECT * FROM lostitem INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id INNER JOIN typeplace ON lostitem.lost_id=typeplace.place_id WHERE name LIKE '$p' ";

   $result = mysqli_query($dbcon, $q);

?>



 <!DOCTYPE HTML>
<html>
   <title>lost ของที่หาย</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  </head>
  <body>
    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Header -->
          <header id="header">
            <div class="inner">

              <!-- Logo -->
                <a href="index.php" class="logo">
                  <span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST and Found</span>

                </a>

              

        <!-- Main -->
          <div id="main">
            <div class="inner">
              <style>
ul.breadcrumb {
    padding: 8px 16px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {display: inline;}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumb li a {color: green;}
</style>

<h2>- รายการของที่เจอ -</h2>
<ul class="breadcrumb">
  <li><a href="index.php">หน้าเเรก</a></li>
  <li><a href="found2.php">รายการของที่เจอ</a></li>
  <li style="float:right"><a href="fromfound.php">แจ้งเจอของ </a></li>
</ul>


<body>
      <h2>ค้นหา</h2>
    <form action="dog.php" method="post" name="searchcat"/>
    <label>ค้นหา: </label><input type="text" size="40px" name="searchcat"/>
    <br>
    <center>
    <input type="submit" name="submit" id="submit" value="ค้นหา" >
    <input type="reset" name="reset" id="reset" value="ยกเลิก" >
    </center>
    </form>
<br>


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
<p>ตารางเเสดงรายการของที่หายทั้งหมด.</p>
<table>
    <tr>
      <th>รหัสของ</th>
      <th>ชื่อสิ่งของ</th>
      <th>ชื่อ สกุล</th>
      <th>ประเภท</th>
      <th>ผู้ทำหาย</th>
      

    </tr>
    <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
    ?>
    <tr>
      <td style="width: 10px;"><a href="Lost2.php?lost_id=<?php echo $row['lost_id']; ?>"><?php echo $row['lost_id']; ?></a></td>
      <td style="width: 150px;"><a href="lost2.php?lost_id=<?php echo $row['lost_id']; ?>"><?php echo $row['name']; ?></a></td>
      <td style="width: 20px;"><?php echo $row ['time']; ?></td>
      <td style="width: 20px;"><?php echo $row ['date']; ?></td>
      <td style="width: 30px;"><?php echo $row ['fname']; ?></td>
      
     

    </tr>
    <?php

           }
           mysqli_free_result($result);
           mysqli_close($dbcon);
    ?>
</body>
</html>