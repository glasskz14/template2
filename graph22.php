  <?php
    session_start();
   
    ?>  

<!DOCTYPE HTML>

<html>
  <head>
    <title>รายการจัดการของที่เจอ</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Header -->
          <header id="header">
            <div class="inner">

            

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
    padding: 5px 0px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {display: inline;}
ul.breadcrumb li+li:before {
    padding: 2px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumb li a {color: green;}
</style>

<div id="printable">
  <font face = "verdana">
  <center><img src="images/11.svg" width="170" height="170"> <P><h5>ตารางเเสดงของเจอในเเต่ละวัน</h5></center>
  
  
<br>

 <!-- Main -->
          <div id="main">
            <div class="inner">

<section>
<?php
require  'conectfromfound.php';
$query = "SELECT COUNT(found_id) AS totol, DATE_FORMAT(date, '%M') AS date
  FROM founditem
  GROUP BY DATE_FORMAT(date, '%M%')
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

 <center><style>

                              table {
      border-collapse: collapse;
      width: 40%;
      margin: 50px;

      

  }

  th, td {
      padding: 1px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      
  }

  tr:hover {background-color:#FFF0F5;}
  </style><center>


 <center> <table>
    <center>
      <br>

      <tr>
        <th style="width: 15px;" align="center">รหัสของ</th>
        <th style="width: 15px;" align="center">ชื่อสิ่งของ</th>
        
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
</center>
</div>
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
              label: 'รายงานภาพรวม แยกตามรายเดือน (สิ่งของ)',
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
 

</div>
<script>
function myFunction() {
    window.print();

}

</script>
</html>

</div>

</form>

                     
                    </table><center>
                    </center>
                  </div>
                  </center>
                </section>

</center>
</body>
 

       
              


                </section>

                 <CENTER>

<div id="non-printable"><a href="graph.php"  button type="button" class="btn btn-info" onclick="myFunction() "  >พิมพ์</a>&nbsp;&nbsp;
<a href="graph.php" button type="button" class="btn btn-danger" >ย้อนกลับ</a></center>
<br>
              <section>
              


                

      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      
      <script src="assets/js/main.js"></script>

  </body>
</html>