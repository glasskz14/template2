	 <?php
     session_start();
    require 'conectfromlost.php';

    $q = "SELECT * FROM lostitem INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id  INNER JOIN typeplace ON lostitem.lost_id=typeplace.place_id order by lost_id desc"; 

    
    $result = mysqli_query($dbcon, $q);
    ?>	

<!DOCTYPE HTML>

<html>
	<head>
		<title>รายการของที่หาย</title>
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
								<a href="indexwel.php" class="logo">
									<span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST And FOUND &nbsp;<?php
        echo "ยินดีต้อนรับคุณ: ".$_SESSION ['Fname']  
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
							<li><a href="indexwel.php">หน้าเเรก (Home)</a></li>
							<li><a href="Profile.php">ข้อมูลส่วนตัว (Profile)</a></li>
							<li><a href="FromLost1.php">เเจ้งทำหาย (Lost)</a></li>
							<li><a href="FromFound1.php">เเจ้งเจอของ (Found)</a></li>
							<li><a href="Register.php">สมัครสมาชิก (Register)</a></li>
							<li><a href="Login.php">เข้าสู่ระบบ (Login)</a></li>
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

<h2>- รายการของหาย -</h2>
<ul class="breadcrumb">
  <li><a href="indexwel.php">หน้าเเรก</a></li>
  <li><a href="Lost4.php">รายการของที่หาย</a></li>
  <li style="float:right"><a href="FromLost1.php">แจ้งของหาย</a></li>
</ul>

							<section>

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


  <p>ตารางเเสดงรายการของที่หาย  ทั้งหมด.</p>
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
        <td style="width: 10px;"><a href="Lost5.php?lost_id=<?php echo $row['lost_id']; ?>"><?php echo $row['lost_id']; ?></a></td>
        <td style="width: 150px;"><a href="Lost5.php?lost_id=<?php echo $row['lost_id']; ?>"><?php echo $row['name']; ?></a></td>
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
							
				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>