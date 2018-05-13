<?php
      require 'conectregistration.php';

      $User_id = $_GET['User_id'];
      $qfound = "SELECT * FROM member WHERE User_id = '$User_id'";
      $resfound = mysqli_query($dbcon, $qfound);
      $rowfound = mysqli_fetch_array($resfound, MYSQLI_ASSOC);

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Fromfound เเก้ไขข้อมูล</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.c ss" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.phph" class="logo">
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
							<li><a href="Register.html">สมัครสมาชิก (Register)</a></li>
							<li><a href="Login.html">เข้าสู่ระบบ (Login)</a></li>
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

<h2>- เเก้ไขรายชื่อสมาชิก- </h2>
<ul class="breadcrumb">
  <li><a href="user.php">รายการสมาชิก</a></li>
  <li><a href="fromupdateuser.html">เเก้ไขข้อมูลสมาชิก</a></li>

</ul>
							
							<!-- Form -->
								<section>
									<h2>แบบฟอร์มเเก้ไขข้อมูล (Form)</h2>
									<form method="post" action="updateuser.php" enctype="multipart/form-data" id="form1">


										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
											<input type="text" name="Fname" id="Fname" value="<?php echo $rowfound ['Fname']; ?>" type="text" placeholder="=ชื่อ" />
											</div>

											<div class="6u 12u$(xsmall)">
											   <input type="text" name="Lname" id="Lname" value="<?php echo $rowfound ['Lname']; ?>" type="text" placeholder="ชื่อ-นามสกุล" />
											</div>

											<div class="6u 12u$(xsmall)">
											   <input type="text" name="Email" id="Email" value="<?php echo $rowfound ['Email']; ?>" type="text" placeholder="ชื่อ-นามสกุล" />
											</div>
											
											<div class="6u 12u$(xsmall)">
											   <input type="text" name="Passsword" id="Passsword" value="" type="text" placeholder="Passsword" />
											</div>

											<div class="6u 12u$(xsmall)">
											   <input type="text" name="Phonenumber" id="Phonenumber" value="<?php echo $rowfound ['Phonenumber']; ?>" type="text" placeholder="ชื่อ-นามสกุล" />
											</div>

 
											
											
									
	                                             <div class="12u$">
												<ul class="actions">
													
													<input type="hidden" name="User_id" value="<?php echo $rowfound ['User_id']; ?>">
													<input type="submit" value="เเก้ไขเรียบร้อย" />
												</ul>
											</div>
	                                           
	                                             </form>
											</div>


				
							
						</div>
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