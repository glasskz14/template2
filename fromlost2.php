<?php
session_start();
      require 'conectfromlost.php';

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Fromlost2 เเจ้งรายการของหาย</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="indexadmin.php" class="logo">
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
							<li><a href="indexadmin.php">หน้าเเรก (Home)</a></li>
							<li><a href="Profile.php">ข้อมูลส่วนตัว (Profile)</a></li>
							<li><a href="FromLost2.php">เเจ้งทำหาย (Lost)</a></li>
							<li><a href="FromFound.php">เเจ้งเจอของ (Found)</a></li>
							
							<li><a href="Register.php">สมัครสมาชิก (Register)</a></li>
							<li><a href="Login.php">เข้าสู่ระบบ (Login)</a></li>
						</ul>
					</nav>

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

<h2>- เเจ้งรายการของหาย -</h2>
<ul class="breadcrumb">
  <li><a href="indexadmin.php">หน้าเเรก</a></li>
  <li><a href="3.php">รายการของที่หาย</a></li>
  <li><a href="6.php">รายการของที่เจอ</a></li>
  <li><a href="Fromlost2.php">เเจ้งรายการของที่หาย</a></li>
  
</ul>
							
							<!-- Form -->
								<section>
									<h2>แบบฟอร์มข้อมูล (Form)</h2>
									<form method="post" action="lostinsert2.php" enctype="multipart/form-data" id="form1">
                                        <div class="4u 12u$(small)">
												<input type="radio" id="status_0" name="status" value="ยังไม่ได้รับคืน" checked>
												<label for=status_0 >ยังไม่ได้รับคืน</label>											
												<input type="radio" id="status_1" name="status" value="ได้รับคืนเเล้ว">
												<label for="status_1">ได้รับคืนเเล้ว</label>
											</div>

										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
										     	<input type="text" name="name" id="name"  type="text" placeholder="ชื่อหัวข้อ" />
											</div>
											
											<div class="6u 12u$(xsmall)">
											   <input type="text" name="fname" id="fname"  type="text" placeholder="ชื่อ-นามสกุล" />
											</div>
											
											<div class="12u$">
												<div class="select-wrapper">

													<?php
                                                         $q = "SELECT * FROM typeitem";
                                                         $result = mysqli_query($dbcon, $q);
													?>
													<select name="type_id" id="type_id" >
														<option value="">- ประเภทสิ่งของ -</option>
														<?php
														while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
															echo "<option value='$row[0]'>$row[1]</option>";
														}

														?>														
													</select>
												</div>
												<br>
											
											<div class="12u$">
												<div class="select-wrapper">
													
														<?php
                                                         $q = "SELECT * FROM typeplace";
                                                         $result = mysqli_query($dbcon, $q);
													?>
													<select name="place_id" id="place_id" >
														<option value="">- สถานที่หาย-</option>
														<?php
														while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
															echo "<option value='$row[0]'>$row[1]</option>";
														}

														?>	

													</select>
												</div>
											</div>
											<br>
											<div class="6u$ 12u$(xsmall)">
												<input type="date" name="date" id="date" value="date" type="date" placeholder="Date" />
												: วันที่ของหาย
											</div>
											<br>
											<div class="6u$ 12u$(xsmall)">
												<input type="time" name="time" id="Time" value="" placeholder="Time" />
												: เวลาที่ของหาย
											</div>
											<br>

											<div class="12u$">
												<textarea name="description" id="description" placeholder="กรุณาใส่รายละต่าง เเละข้อมูลการติดต่อ" rows="6"></textarea>
											</div>
											<br>
											<div class="12u$">
												กรุณาใส่รูปภาพ
												<form name="photo" method="post"  enctype="multipart/form-data">
	                                             Picture : <input type="file" name="photo"><br>
	                                             <div class="12u$">
												<ul class="actions">
													<li><input type="submit" onclick="alert('บันทึกเเล้ว')" value="บันทึก" /></li>
												</ul>
											</div>
	                                           
	                                             </form>
											</div>

						

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>ส่งข้อความ</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="firstname" id="Firstname" placeholder="ชื่อ" />
									</div>
									<div class="field half">
										<input type="text" name="lastname" id="Lastname" placeholder="นามสกุล" />
									</div>
									<div class="field half first">
										<input type="email" name="email" id="E-mail" placeholder="Email" />
									</div>

									<div class="field half">
										<input type="text" name="phonnumber" id="Phonenumber" placeholder="เบอร์โทรศัพท์" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="ข้อความ"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="ส่งข้อความ" class="special" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
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