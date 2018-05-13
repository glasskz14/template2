  <?php
    session_start();
   
    ?>  

<!DOCTYPE HTML>

<html>
  <head>
    <title>รายการจัดการของที่หาย</title>
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
                <a href="indexadmin.php" class="logo">
                  <span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST And FOUND  &nbsp;<?php
        echo "ยินดีต้อนรับผู้ดูเเล: ".$_SESSION ['Fname']  
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
              <li><a href="FromLost2.php">เเจ้งทำหาย (Lost)</a></li>
              <li><a href="FromFound2.php">เเจ้งเจอของ (Found)</a></li>
              
              <li><a href="logout.php">ออกจากระบบ(Logout)</a></li>
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
  <li style="float:right"><a href="FromLost1.php">แจ้งของหาย</a></li>
</ul>

 <!-- Main -->
          <div id="main">
            <div class="inner">

<section>
<?php
require  'conectfromlost.php';
$query = "SELECT COUNT(lost_id) AS totol, DATE_FORMAT(date, '%D') AS date
  FROM lostitem
  GROUP BY DATE_FORMAT(date, '%D%')
  ";
  $result = mysqli_query($dbcon, $query);
  $resultchart = mysqli_query($dbcon, $query);
   $datesave = array();
  $totol = array();

  while($rs = mysqli_fetch_array($resultchart)){
    $datesave[] = "\"".$rs['date']."\"";
    $totol[] = "\"".$rs['totol']."\"";
  }
  $datesave = implode(",", $datesave);
  $totol = implode(",", $totol);

  ?> 

 <style>

                              table {
      border-collapse: collapse;
      width: 80%;
      height: 30%;

  }

  th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      
  }

  tr:hover {background-color:#FFF0F5;}
  </style>


  <p>ตารางเเสดงรายการของที่หาย  ทั้งหมด.</p>
  <table>
    <center>
      <tr>
        <th style="width: 15px;">รหัสของ</th>
        <th style="width: 15px;">ชื่อสิ่งของ</th>
        
          </tr>
          <?php
               while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                 
          ?>
          <tr>
            <center>
        <td style="width: 15px;"><?php echo $row['date'];?></a></td>
        <td style="width: 15px;"><?php echo $row['totol'];?></a></td>
        </center>
        
       </center>

      </tr>

             <?php

               }
               mysqli_free_result($result);
               mysqli_close($dbcon);
             ?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
  <hr>
  <p align="center">

   <!--devbanban.com-->

  <canvas id="myChart" width="1700px" height="500px"></canvas>
  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [<?php echo $datesave;?>

          ],
          datasets: [{
              label: 'รายงานภาพรวม แยกตามรายวัน (ไฟล์)',
              data: [<?php echo $totol;?>
              ],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 2
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
  </script>
  </div>
  </div>
</p>
<center></font>
  <div id="non-printable"><a href="4.php" class="w3-btn w3-display-bottom middle w3-round-xxlarge w3-blue" style="width:100px" onclick="myFunction() "  >พิมพ์</a>&nbsp;&nbsp;
<a href="4.php" class="w3-btn w3-display-bottom middle w3-round-xxlarge w3-red" style="width:100px">ย้อนกลับ</a></center>
<br>

</div>
<script>
function myFunction() {
    window.print();

}

</script>
</html>

</div>

</form>
                     
                    </table>
                    </center>
                  </div>
                  </center>
                </section>

</center>
</body>
 

       
              


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
            
          </footer>

      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      
      <script src="assets/js/main.js"></script>

  </body>
</html>