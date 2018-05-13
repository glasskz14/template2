<?php
    session_start();
    require 'conectregistration.php';
   
    $q = "SELECT * FROM member "; 

    
    $result = mysqli_query($dbcon, $q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    ?>  

<!DOCTYPE HTML>

<html>

	<head>
		<title>LOST AND FOUND </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />	
	</head>
	

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/11.svg" alt="" style="" /></span><span class="title">LOST AND FOUND  &nbsp;<?php
        echo "ยินดีต้อนรับคุณ: ".$_SESSION ['Fname']  
        .$_SESSION ['Lname'] ;?></span> </span>

								</a>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header style="background-image :url('images/img-011.jpg')  ">
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

                                 
                                <br>
                                <br>
								<b><p class="serif">LOST AND Found  <br>ศูนย์รวมของหายเพื่อการส่งคืน</p></b>



	</center>
		<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #9933CC;
}
</style>

<ul>
  <li><a class="active" href="index.php">หน้าเเรก</a></li>
  <li><a href="fromlost.php">เเจ้งของที่หาย</a></li>
  <li><a href="fromfound.php">เเจ้งของที่เจอ</a></li>
  <li style="float:right"><a href="logout.php">ออกจากระบบ</a></li>
  <li style="float:right;"><a href="3.php">กลับหน้าผู้เเล</a></li>
</ul>
</header>
                  

							
							<body>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="lost4.php">
										 <h1>ของหาย</h1>
										<div class="content">
											<p> 
											</p>
										</div>
									</a>
										</article>
									<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
										<a href="found3.php">
										<h2> <h1>เจอของ</h1>Found </h2> 
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article>
						
                                    <form action="cat.php" method="post">
                                        <label>ค้นหา: </label><input type="text" size="40px"  name="searchdog " placeholder="ค้นหาของที่เจอ" />
                                        <br>
                                        <center>
    <input type="submit" name="submit" id="submit" value="ค้นหา" >
    <input type="reset" name="reset" id="reset" value="ยกเลิก" >
    </center>
    </form>

                                    
                           
                                <br>
                                <center>
                                     <form action="dog.php" method="post">
                                        <label></label><input type="text" size="40px" name="searchcat" placeholder="ค้นหาของที่หาย" />
                                        <br>
                                        <center>
    <input type="submit" name="submit" id="submit" value="ค้นหา" >
    <input type="reset" name="reset" id="reset" value="ยกเลิก" >
                              

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