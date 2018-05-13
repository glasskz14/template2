<?php 
    
require 'conectfromlost.php';

      $lost_id = $_GET['lost_id'];
      $qlost = "SELECT * FROM lostitem INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id  INNER JOIN typeplace ON lostitem.lost_id=typeplace.place_id WHERE lost_id='$lost_id'";
      $reslost = mysqli_query($dbcon, $qlost);
      $rowlost = mysqli_fetch_array($reslost, MYSQLI_ASSOC);

     
 ?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Lost รายการของหายที่ 1</title>
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
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST and Found</span>
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

<h2>- ของหาย -</h2>
<ul class="breadcrumb">
  <li><a href="index.php">หน้าเเรก</a></li>
  <li><a href="Lost3.php">รายการของที่หาย</a></li>
  <li><a href="Lost1.php">รายการของที่หายที่ 1</a></li>
  <li style="float:right"><a href="fromupdatelost.php">เเก้ไขข้อมูล</a></li>

</ul>



<a><?php echo $rowlost['name']; ?></a>
	<p><span class="image left"><img src="images/pic14.jpg" style="width:380px;height:400px;" alt="" /></span>

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
 	รหัสของหาย:<?php echo $rowlost['name']; ?>
 </th>

<tr>
	
	

</tr>
 
 <td>
 	3*32*32*3
 </td>
<
  
</table>
</body>
</p>




                             <hr/>
                            <div class="12u$">
									<textarea name="demo-message" id="demo-message" placeholder="รายละเอียด" rows="6"></textarea>
							</div>
							 </hr>
							  <br>
							<div class="12u$">
							 <ul class="actions">
							 	<center>
				                <li><P Align=right><input type="submit" value="บันทึก" class="special" /></P></li>
								<li><P Align=right><input type="reset" value="ยกเลิก" /></P></li>
												</center></ul>

							
							
						</div>
					</div>
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
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								
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