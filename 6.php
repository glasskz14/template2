  <?php 
   session_start();
    require 'conectfromfound.php';

   

    $q = "SELECT * FROM founditem INNER JOIN typeitem ON founditem.found_id=typeitem.type_id INNER JOIN typeplace ON founditem.found_id=typeplace.place_id order by found_id desc";

    $result = mysqli_query($dbcon, $q);


?>
<!DOCTYPE HTML>

<html>
  <head>
    <title>รายการจัดการของที่เจอ  </title>
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
                  <span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST And FOUND  &nbsp;<?php
        echo "ยินดีต้อนรับผู้ดูเเล: ".$_SESSION ['Fname']  
        .$_SESSION ['Lname'] ;?></span> </span>
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
              <li><a href="indexadmim.php">หน้าเเรก (Home)</a></li>
              <li><a href="FromLost2.php">เเจ้งทำหาย (Lost)</a></li>
              <li><a href="FromFound2.php">เเจ้งเจอของ (Found)</a></li>
              
              <li><a href="logout.php">ออกจากระบบ(Logout)</a></li>
              <li><a href="About.php">เกี่ยวกับ (About)</a></li>
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

<h2>- รายการของเจอ -</h2>
<ul class="breadcrumb">
  <li><a href="indexadmin.php">หน้าเเรก</a></li>
  <li><a href="3.php">รายการของที่หาย</a></li>
  <li><a href="6.php">รายการของที่เจอ</a></li>
   <li><a href="user.php">รายการสมาชิก</a></li>
  <li><a href="graph.php">รายการสรุปผล</a></li>
  <li style="float:right"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
            
              <section>

                <h3>ตารางเเสดงของเจอทั้งหมด</h3>
                  <div class="table-wrapper">
                    <table class="alt">
                      <thead>
                        <tr>
                          <th>รหัสของ</th>
                          <th>รายการ</th>
                          
                          <th>ประเภท</th>
                          <th>สถานที่</th>
                          <th>เเก้ไข</th>
                          <th>ลบ</th>
                          <th>สถานะ</th>
                        </tr>
                      </thead>
                      <tbody> 
                        <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
    ?>  
                        <tr>
                          <td><a href="admin1.php?found_id=<?php echo $row['found_id']; ?>"><?php echo $row['found_id']; ?></td>
                          <td><?php echo $row ['name']; ?></td>
                          
                          <td><?php echo $row ['typename']; ?>  </td>
                          <td><?php echo $row ['placename']; ?>  </td>
                          <td><a href="fromupdatefound.php?found_id=<?php echo $row ['found_id']; ?>">เเก้ไข</a>  </td>
                          <td><a href="fromdeletefound.php?found_id=<?php echo $row ['found_id']; ?>">ลบ</a>  </td>
                          <td><?php echo $row ['status']; ?></td>
                        </tr>
                        




                       

                      </tbody>
                      
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
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
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
                <h2>Follow</h2>
                <ul class="icons">
                  <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                  <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                  <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                  <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                  <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            
          </footer>

      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </body>
</html>