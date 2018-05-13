 <?php
    session_start();

    require 'conectregistration.php';


    $User_id = $_GET['User_id'];

    $q = "SELECT * FROM member
     WHERE User_id='$User_id' "; 


    $result = mysqli_query($dbcon, $q);
    $rowlost = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Lost ของที่หาย</title>
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
  
  
  
</ul>

							<section>

               <center>
              <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 30px;
    text-align: left;
}
</style>

<table style="width:65%">
  <caption>- ข้อมูลผู้ใช้งาน - </caption> 


<body>

   <center>
 <th>
   <?php
        echo "ยินดีต้อนรับคุณ: ".$_SESSION ['Fname']  
        .$_SESSION ['Lname'] ;?>
 </th>
</center>
<tr>
  
</tr>
 <center>
 <td>
   <?php echo "หมายเลขสมาชิก: ".$_SESSION ['User_id']   ;?>
    
     <br>
    <?php echo "ชื่อสมาชิก: ".$_SESSION ['Fname']   ;?>
    <br>
    <?php echo "นามสกุล: ".$_SESSION ['Lname']   ;?>
    <br>
    อีเมล  :    <?php echo $rowlost['Email']; ?>
    <br>
     เบอร์โทรศัพท์ :    <?php echo $rowlost['Phonenumber']; ?>
    <br>
    
      </center>
     <br>
   
   
</div>
</center>

 </td>
   </center>
</table>

 <hr/>
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