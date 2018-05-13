<?php
      require 'conectfromfound.php';

      $found_id = $_GET['found_id'];
      $qfound = "SELECT * FROM founditem WHERE found_id='$found_id'";
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

<h2>- เเก้ไขรายการของที่เจอ- </h2>
<ul class="breadcrumb">
  <li><a href="ลอง.php">หน้าดูข้อมูล</a></li>
  <li><a href="fromupdatefound.html">เเก้ไขรายการของที่เจอ</a></li>

</ul>
							
							<!-- Form -->
								<section>
									<h2>แบบฟอร์มเเก้ไขข้อมูล (Form)</h2>
									<form method="post" action="updatefound1.php" enctype="multipart/form-data" id="form1">

										<div class="4u 12u$(small)">
												<input type="radio" id="status_0" name="status" value="ยังไม่ได้รับคืน" <?php if ($rowfound['status']=='ยังไม่ได้รับคืน') echo"checked"; ?> checked>
												<label for=status_0 >ยังไม่ได้รับคืน</label>											
												<input type="radio" id="status_1" name="status" value="ได้รับคืนเเล้ว" <?php if ($rowfound['status']=='ได้รับคืนเเล้ว') echo"checked"; ?> >
												<label for="status_1">ได้รับคืนเเล้ว</label>
											</div>
										

										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="<?php echo $rowfound ['name']; ?>" type="text" placeholder="ชื่อหัวข้อ" />
											</div>

											<div class="6u 12u$(xsmall)">
											   <input type="text" name="fname" id="fname" value="<?php echo $rowfound ['fname']; ?>" type="text" placeholder="ชื่อ-นามสกุล" />
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
														<option value="">- สถานที่เจอของ-</option>
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
												<input type="date" name="date" id="date" value="<?php echo $rowfound ['date']; ?>" type="date" placeholder="Date" />
												: วันที่เจอของ
											</div>
											<br>
											<div class="6u$ 12u$(xsmall)">
												<input type="time" name="time" id="Time" value="<?php echo $rowfound ['time']; ?>" placeholder="Time" />
												: เวลาที่เจอของ
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
													
													<input type="hidden" name="found_id" value="<?php echo $rowfound ['found_id']; ?>">
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