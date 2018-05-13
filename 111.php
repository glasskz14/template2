  <?php
    require 'conectfromlost.php';

    $q = "SELECT * FROM lostitem INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id  INNER JOIN typeplace ON lostitem.lost_id=typeplace.place_id order by lost_id desc"; 

    
    $result = mysqli_query($dbcon, $q);
    ?>


    <!DOCTYPE HTML>
<html>
   <title>Lost ของที่หาย</title>
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

<h2>- รายการของหาย -</h2>
<ul class="breadcrumb">
  <li><a href="index.php">หน้าเเรก</a></li>
  <li><a href="Lost3.php">รายการของที่หาย</a></li>
  <li style="float:right"><a href="FromLost.php">แจ้งของหาย</a></li>
</ul>



                          
<body>      
 </tr>
        <?php
             while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
               
        ?>                      
                        

    



        
             <?php

               }
               mysqli_free_result($result);
               mysqli_close($dbcon);
             ?>
</body>
</html>