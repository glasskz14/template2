<?php
 session_start();

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login เข้าสู่ระบบ</title>
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
									<span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST And FOUND &nbsp;<?php
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
							<li><a href="index.php">หน้าเเรก (Home)</a></li>
							<li><a href="Profile.php">ข้อมูลส่วนตัว (Profile)</a></li>
							<li><a href="FromLost.php">เเจ้งทำหาย (Lost)</a></li>
							<li><a href="FromFound.php">เเจ้งเจอของ (Found)</a></li>
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
  <li><a href="indexadmin.php">หน้าเเรก</a></li>
  <li><a href="3.php">รายการของที่หาย</a></li>
  <li><a href="6.php">รายการของที่เจอ</a></li>
   <li><a href="user.php">รายการสมาชิก</a></li>
  <li><a href="graph.php">รายการสรุปผล</a></li>
  <li style="float:right"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
						
							<section>

                <h3>กราฟเเละรายงานสรุปผล</h3>
                  <div class="table-wrapper">
                    <table class="alt">
                      <thead>
                        <tr>
                          <th>รายการ</th>
                          <th>หน้าเเสงรายการ</th>
                          <th>จำนวน</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>จำนวนสมาชิก</td>
                          <td>สมาชิกทั้งหมดในระบบ</td>
                          <td><?php
require 'conectfromlost.php';
$sql1="SELECT count( lost_id) AS totallost
FROM lostitem"; 
$result1=mysqli_query($dbcon,$sql1);
$row=mysqli_num_rows($result1); 
$rown=mysqli_fetch_array($result1); 
echo $rown['totallost'];
?></td>
                        </tr>
                        <tr>
                          <td>จำนวนของที่หาย</td>
                          <td>

                           <style>
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
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>



<div class="dropdown">
  <span>กราฟเเสดงจำนวนของหาย </span>
  <div class="dropdown-content">
    <p><a href="graph1.php" target="_blank">รายวัน</a></p>
    <p><a href="graph11.php" target="_blank">รายเดือน</a></p>
    <p><a href="graph111.php" target="_blank">รายปี</a></p>
  </div>
</div>


                          </td>
                          <td><?php
require 'conectregistration.php';
$sql1="SELECT count( user_id) AS totalmember
FROM member"; 
$result1=mysqli_query($dbcon,$sql1);
$row=mysqli_num_rows($result1); 
$rown=mysqli_fetch_array($result1); 
echo $rown['totalmember'];
?></td>
                        </tr>
                        <tr>
                          <td>จำนวนของเจอ</td>
                          <td>  <style>
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
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>



<div class="dropdown">
  <span>กราฟเเสดงจำนวนของที่เจอ </span>
  <div class="dropdown-content">
    <p><a href="graph2.php" target="_blank">รายวัน</a></p>
    <p><a href="graph22.php" target="_blank">รายเดือน</a></p>
    <p><a href="graph222.php" target="_blank">รายปี</a></p>
  </div>
</div></td>
                          <td><?php
require 'conectfromfound.php';
$sql1="SELECT count(found_id) AS totalfound
FROM founditem"; 
$result1=mysqli_query($dbcon,$sql1);
$row=mysqli_num_rows($result1); 
$rown=mysqli_fetch_array($result1); 
echo $rown['totalfound'];
?></td>
                        </tr>
                       
 <tr>
                         
                        
                        
                          </td>
                        </tr>


                      </tbody>
                      	
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                  </div>
                </section>


</body>

								</section>
							<section>
								
						
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