
<!DOCTYPE HTML>

<html>

	<head>
		<title>LOST AND FOUND </title>
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
									<span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST AND FOUND</span>

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
							<header style="background-image :url('images/humen.jpg')  ">
								<br>
								<center>
                                      <style>
                                          p.serif {
                                       font-family: "Times New Roman", Times, serif;
                                       font-size: 60px;
                                       text-shadow: 3px 2px gray;
                                                   }

                                       p.sansserif {
                                       font-family: Arial, Helvetica, sans-serif;
                                                   }
                                       </style>

     
                               
								<b><p class="serif">LOST AND Found  <br>ศูนย์รวมของหายเพื่อการส่งคืน</p></b>

								
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-btn {margin-bottom:10px;}
</style>

<div class="w3-container">
<p><CENTER>
<a href="fromlost.php" button class="w3-button w3-white w3-border w3-round-large" >เเจ้งหาย</a></button>
<a href="fromfound.php" button class="w3-button w3-white w3-border w3-round-large" >เเจ้งเจอ</a></button>
</CENTER></p>
</div>	
</header>


							<body>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/w644.jpg" alt="" />
									</span>
									<a href="lost3.php">
										<h2> <h1>ของหาย</h1>Lost</h2> 
										<div class="content">
											<p> 
											คุณสามารถเข้ามาดูได้ว่าใช่ของที่คุณทำหาย หร่อเปล่า</p>
										</div>
									</a>
										</article>
									<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
										<a href="found2.php">
										<h2> <h1>เจอของ</h1>Found </h2> 
										<div class="content">
											<p>คุณสามารถเข้ามาดูได้ว่า ใช่ของที่คุณทำหายหรือไม่</p>
										</div>
									</a>
								</article>
								<article>
									<form action="lostlist.php">
                            <select required >
                                 <option value="0">- ประเภทสิ่งของ -</option>
                                 <option value="1">โทรศัพท์/โทรศัพท์มือถือ</option>
                                 <option value="2">บัตรประชาชน/บัตรนักศึกษา/บัตรATM/บัตรอื่นๆ</option>
                                 <option value="3">กระเป๋า/กระเป๋าสตางค์</option>
                                 <option value="4">แฟรชไดร์ฟ/CD/DVD</option>
                                 <option value="5">คอมพิวเตอร์/แท็บเล็ต/ipad/วิทยุ</option>
                                 <option value="6">พัสดุไปรษณีย์/จดหมาย</option>
                                 <option value="7">เสื้อผ้า/เครื่องประดับ</option>
                                 <option value="8">หนังสือ/สมุด/เอกสาร</option>
                                 <option value="9">ยา/อุปกรณ์การแพทย์</option>
                                 <option value="10">สายชาร์ต/หูฟัง/อุปกรณ์เชื่อมต่อ/ลำโพง</option>
                                 <option value="11">อุปกรณ์กีฬา</option>
                                 <option value="12">อุปกรณ์แต่งหน้า/เครื่องสำอาง</option>
                                 <option value="13">ยานพาหนะ</option>
                                  <option value="14">อุปกรณ์เครื่องเขียน</option>
                                 <option value="15">กุญแจ/พวงกุญแจ</option>
                                 <option value="16">อื่นๆ</option>
                            </select>
                                <br>
                                <center>
                              <input type="submit" value="ค้นหา"  >
                                   </form>
                                <br>
                                <br><form action="/action_page.php">
                            <select required >
                                 <option value="Place ID">- สถานที่ -</option>
                                 <option value="1"> คณะวิทยาศาสตร์ </option>
                                 <option value="2">คณะทันตแพทยศาสตร์ </option>
                                 <option value="3">คณะวิศวกรรมศาสตร์ </option>
                                 <option value="4">คณะเภสัชศาสตร์ </option>
                                 <option value="5"> คณะทรัพยากรธรรมชาติ </option>
                                 <option value="6"> คณะวิทยาการจัดการ </option>
           	                      <option value="7">คณะอุตสาหกรรมเกษตร </option>
                                 <option value="8">คณะศิลปศาสตร์ </option>
                                 <option value="9">คณะการจัดการสิ่งแวดล้อม</option>
                                 <option value="10">คณะแพทยศาสตร์ </option>
                                 <option value="11">คณะเศรษฐศาสตร์ </option>
                                 <option value="12">คณะพยาบาลศาสตร์ </option>
                                 <option value="13">คณะนิติศาสตร์ </option>
                                 <option value="14">คณะเทคนิคการแพทย์</option>
                                 <option value="15">คณะการแพทย์แผนไทย</option>
                                 <option value="16">โครงการจัดตั้งวิทยาลัยนานาชาติ </option>
                                 <option value="17">โครงการจัดตั้งคณะสัตวแพทยศาสตร์
</option>
                                 <option value="18">สนามล่าง</option>
                                 <option value="19">สนามบน
</option>
                                 <option value="20">ลานพระบิดา</option>
                                 <option value="21">โรงพยาบาล มอ </option>
                                 <option value="22">ปั้มน้ำมันบางจาก 
</option>
                                 <option value="23">ที่จอดรถโรงช้าง</option>
                                 <option value="24">รถไฟฟ้ามอ</option>
                                 <option value="25">โรงช้าง</option>
                                 <option value="26">ตึกประวัติ</option>
                                 <option value="27">sport complex
</option>
                                 <option value="28">อ่างเก็บน้ำ
</option>
                                 <option value="29">ตึกฟัก</option>
                                 <option value="30">ศูนย์คอมพิวเตอร์</option>
                                 <option value="31">ธนาคารไทยพาณิชย์</option>
                                 <option value="32">บ้านพักอาจารย์ </option>
                                 <option value="33">ศุนย์การเรียนรู้คุณหญิงหลง</option>
                                 <option value="34">ศุนย์ดับเพลิง มอ </option>
                                 <option value="35">ตลาดเกษตร มอ 
</option>
                                 <option value="36">ประตูศรีตรัง
</option>
                                 <option value="37">ประตูหน้า มอ </option>
                                 <option value="38">ประตู 108</option><option value="39">ประตูโรงพยาบาล มอ </option>
                                 <option value="40">หอ 1</option>
                                 <option value="41">หอ 2</option>
                                 <option value="42">หอ 3</option>
                                 <option value="43">หอ 4</option>
                                 <option value="44">หอ 5</option>
                                 <option value="45">หอ 6</option>
                                 <option value="46">หอ 7</option>
                                 <option value="47">หอ 8</option>
                                 <option value="48">หอ 9</option>
                                 <option value="49">หอ 10</option>
                                 <option value="50">หอ 11</option>
                                 <option value="51">หอ 12</option>
                                 <option value="52">หอ 13</option>
                                 <option value="53">หอ 14</option>
                                 <option value="54">หอ 15</option>
                                 <option value="55">สนามซอฟบอล</option>
                                 <option value="56">สยามเทนนิส</option>
                                 <option value="57">ตึกกิจกรรมนักศึกษา</option>
                                 
  
  
</select>
<br>
<center>
<input type="submit" value="ค้นหา"  >
</center>


</form>

								</article>
								
							</section>
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