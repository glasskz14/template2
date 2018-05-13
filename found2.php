<?php 

    require 'conectfromfound.php';


    $q = "SELECT * FROM founditem INNER JOIN typeitem ON founditem.found_id=typeitem.type_id INNER JOIN typeplace ON founditem.found_id=typeplace.place_id order by found_id desc";

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
                  <span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST and Found </span>

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

<h2>- รายการของที่เจอ -</h2>
<ul class="breadcrumb">
  <li><a href="index.php">หน้าเเรก</a></li>
  <li><a href="found2.php">รายการของที่เจอ</a></li>
  
</ul>


<body>                            
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
<p>ตารางเเสดงรายการของที่เจอทั้งหมด.</p>
<table>
    <tr>
      <th>รหัสของ</th>
      <th>รายการ</th>
      <th>เวลา</th>
      <th>วันที่</th>
      
      <th>สถานะ</th>
      

    </tr>
    <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
    ?>
    <tr>
      <td style="width: 10px;"><a href="found1.php?found_id=<?php echo $row['found_id']; ?>"><?php echo $row['found_id']; ?></a></td>
      <td style="width: 150px;"><a href="found1.php?found_id=<?php echo $row['found_id']; ?>"><?php echo $row['name']; ?></a></td>
      <td style="width: 20px;"><?php echo $row ['time']; ?></td>
      <td style="width: 20px;"><?php echo $row ['date']; ?></td>
      <td style="width: 30px;"><?php echo $row ['status']; ?></td>
      
     

    </tr>
    <?php

           }
           mysqli_free_result($result);
           mysqli_close($dbcon);
    ?>

 </table>
                  </div>
                </section>


</body>
</section>
              <section>
               <style>
.center{
    text-align: center;
}

.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 3px 8px;
    text-decoration: none;
    transition: background-color .2s;
    border: 1px solid #ddd;
    margin: 0 2px;
}

.pagination a.active {
    background-color: #66CCFF;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>



<div class="center">
  <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
  </div>
</div>

            
          </footer>

      </div>

    
  </body>
</html>

