<?php
    session_start();
    require 'conectregistration.php';


    $User_id = $_GET['User_id'];
    $q = "SELECT * FROM memner INNER JOIN typeitem ON memner.User_id=typeitem.type_id INNER JOIN typeplace ON memner.User_id=typeplace.place_id WHERE User_id='$User_id' "; 


    $result = mysqli_query($dbcon, $q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Profile</title>
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
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST And FOUND</span>
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

<h2>- ข้อมูลส่วนตัว- </h2>
<ul class="breadcrumb">
  <li><a href="index.html">หน้าเเรก</a></li>
  <li><a href="Profile.html">ข้อมูลส่วนตัว</a></li>
</ul>
						
							<!-- Text -->
								<section>
									
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-btn {margin-bottom:10px;}
</style>
<body>

<div class="w3-container">

<p>
<a href="Profile.html" button class="w3-button w3-white w3-border w3-round-large" >ข้อมูลส่วนตัว</a></button>
<a href="ProfileLost.html" button class="w3-button w3-white w3-border w3-round-large" >ของที่เเจ้งหาย</a></button>
<a href="ProfileFound.html" button class="w3-button w3-white w3-border w3-round-large" >ของที่เเจ้งเจอ</a></button>
<a href="EditProfile.html" button class="w3-button w3-white w3-border w3-round-large" >เเก้ขข้อมูลส่วนตัว</a></button>
</p>
</div>


<p style="clear:both">

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {	
    padding: 5px;
    text-align: left;    
}
</style>

<h3>ข้อมูลส่วนตัว</h3>

<table style="width:100%">
	
	<tr>
		
    <th>รหัสผู้ใช้:</th>
    <td><?php echo $row['User_id']; ?></td>
  </tr>
  <tr>
    <th>ชื่อจิง:</th>
    <td><?phpe echo $row ['Fname']; ?></td>
  </tr>
  <tr>
    <th>นามสกุล:</th>
    <td><?phpe echo $row ['Lname']; ?></td>
  </tr>
  <tr>
    <th>เบอร์โทรศัพท์:</th>
    <td><?phpe echo $row ['Phonenumber']; ?></td>
  </tr>
  <tr>
    <th>อีเมลย์:</th>
    <td>lostnaja@gmail.com</td>
  </tr>
   

   


	
</table>


								
									<hr />
									

				
							<section>
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
							</section>
							
						</div>
					</footer>
					   <?php

              
               mysqli_free_result($result);
               mysqli_close($dbcon);
             ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>