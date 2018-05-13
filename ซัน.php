<?php
    require 'conectfromlost.php';

    $q = "SELECT * FROM lostitem INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id  INNER JOIN typeplace ON lostitem.lost_id=typeplace.place_id"; 

    
    $result = mysqli_query($dbcon, $q);
    ?>


 <!DOCTYPE HTML>
<html>
   <title>found ของที่เจอ</title>
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

              <!-- Nav -->
                <nav>
                  <ul>
                    <li><a href="#menu">Menu</a></li>
                  </ul>
                </nav>

            </div>
          </header>


        <!-- Menu -->
          <nav id="menu">
            <h2>Menu</h2>
            <ul>
              <li><a href="index.php">หน้าเเรก (Home)</a></li>
              <li><a href="Profile.php">ข้อมูลส่วนตัว (Profile)</a></li>
              <li><a href="FromLost.php">เเจ้งทำหาย (Lost)</a></li>
              <li><a href="FromFound.php">เเจ้งเจอของ (Found)</a></li>
              <li><a href="Register.php">สมัครสมาชิก (Register)</a></li>
              <li><a href="Login.php">เข้าสู่ระบบ (Login)</a></li>
            </ul>
          </nav>


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

<h2>- รายการของหาย -</h2>
<ul class="breadcrumb">
  <li><a href="index.php">หน้าเเรก</a></li>
  <li><a href="Lost3.php">รายการของที่หาย</a></li>
  <li><a href=""></a></li>
</ul>


<body>                            
 
 <style type="text/css">
 a{
 text-decoration: none;
 color: #666666;
 }
 a:hover{
 color: yellowgreen;
 }
 .table{
 padding: 0;
 width: 1200px;
 font-size: 13px;
 }
 table.table thead tr{
 background-color: #000000;
 color: #FFFFFF;
 }
 table.table thead tr th{
 border: 1px solid #CCCCCC;
 padding: 5px;
 margin: 0px;
 }
 table.table tbody tr td{
 border-bottom: 1px solid #CCCCCC;
 padding: 5px;
 }
 </style>
 

<body>

<p>ตารางเเสดงรายการของที่เจอทั้งหมด.</p>
<a href="new_topic.php">ตั้งกระทู้ คลิกที่นี้</a>
<center>
 <table border="0" cellpadding="0" cellspacing="0" align="center" class="table">
 <thead>
 <tr>
 <th style="width: 30px;">ลำดับ</th>
 <th style="width: 200px;">หัวข้อกระทู้</th>
 <th style="width: 30px;">เวลา</th>
 <th style="width: 30px;">ว/ด/ป</th>
 <th style="width: 50px;">ผู้ทำหาย</th>
    </tr>
  </thead>
  <?php
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      
  ?>
    <tr>
 <td style="text-align: center;"><?php echo $row['lost_id'];  ?></td>
 <td><a href="lost1.php.php?id=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></td>
 <td style="text-align: center;"><?php echo $row ['time']; ?></td>
 <td style="text-align: center;"><?php echo $row ['date']; ?></td>
 <td style="text-align: center;"><?php echo $row ['fname']; ?></td>
 </tr>
 </body>
 </table>
 </center>
   <?php

     }
     mysqli_free_result($result);
           mysqli_close($dbcon);
   ?>
</body>
</html>