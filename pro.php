 <?php
    session_start();
    require 'conectregistration.php';


    $User_id= $_GET['User_id'];

    $q = "SELECT * FROM member INNER JOIN typeitem ON member.User_id=typeitem.type_id INNER JOIN typeplace ON member.User_id=typeplace.place_id WHERE User_id='$User_id' "; 


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
  <li><a href="Lost4.php">รายการของที่หาย</a></li>
  <li><a href="lost5.php?name=<?php echo $row ['name']; ?>"><?php echo $rowlost['name']; ?></a></li>
  <li style="float:right"><a href="fromupdatelost2.php?lost_id=<?php echo $rowlost['lost_id']; ?>">เเก้ไขข้อมุล</a></li>
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
  <caption>- ข้อมูลของที่หาย - </caption> 


<body>


 <th>
  สถานะสิ่งของ  :  <?php echo $rowlost['status']; ?>
 </th>

<tr>
  
</tr>
 
 <td>
     รหัสของหาย  :  <?php echo $rowlost['User_id']; ?>
     <br>
    ชื่อของหาย  :    <?php echo $rowlost['name']; ?>
    <br>
    ชื่อผู้ที่ทำหาย  :    <?php echo $rowlost['fname']; ?>
    <br>
    ประเภทสิ่งของ  :    <?php echo $rowlost['typename']; ?>
    <br>
    สถานที่ทำหาย  :    <?php echo $rowlost['placename']; ?>
    <br>
    วันที่ทำหาย  :    <?php echo $rowlost['date']; ?>
    <br>
    เวลาที่ทำหาย  :    <?php echo $rowlost['time']; ?>
    <br>
     รายละเอียดต่างๆ  :    <?php echo $rowlost['description']; ?>
     <br>
   <center>
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
  <img src="photolost/<?php echo $rowlost['photo'] ?>"    width="300" height="200">
  <div class="dropdown-content">
    <img src="photolost/<?php echo $rowlost['photo'] ?>"  width="600" height="400">
  </div>
</div>
</center>

 </td>
  
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