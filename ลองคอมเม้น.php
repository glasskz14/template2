  <?php
    require 'conectfromlost.php';


    $lost_id = $_GET['lost_id'];

    $q = "SELECT * FROM lostitem  INNER JOIN typeitem ON lostitem.lost_id=typeitem.type_id INNER JOIN typeplace ON lostitem.lost_id=typeplace.place_id  WHERE lost_id='$lost_id' "; 

    


    $result = mysqli_query($dbcon, $q);
    $rowlost = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
                  <span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST And FOUND</span>
                </a>

              

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
  <li><a href="lost2.php?name=<?php echo $row ['name']; ?>"><?php echo $rowlost['name']; ?></a></li>
  <li style="float:right"><a href="fromupdatelost.php?lost_id=<?php echo $rowlost['lost_id']; ?>">เเก้ไขข้อมุล</a></td></li>
</ul>



                          
<body>                      
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
     รหัสของหาย  :  <?php echo $rowlost['lost_id']; ?>
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

<table>
  <?php
    require 'conectfromlost.php';


    $lost_id = $_GET['lost_id'];

    $q = "SELECT * FROM lostitem  INNER JOIN meslost ON lostitem.lost_id=meslost.mes_id  "; 


    $result = mysqli_query($dbcon, $q);
    $rowmes = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>

 
              <section>

                 <style>

                              table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
  }

  tr:hover {background-color:#FFF0F5;}
  </style>


  <p>ตารางเเสดงรายการของที่หาย  ทั้งหมด.</p>
  <table>
      <tr>
        <th>รหัสของ</th>
       
        
        
              

          </tr>
          <?php
               while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                 
          ?>
          <tr>
       
        <td style="width: 30px;"><?php echo $rowmes['message']; ?></td>
        
       

      </tr>

             <?php

               }
               mysqli_free_result($result);
               mysqli_close($dbcon);
             ?>

                     
                    </table>
                  </div>
                </section>
 <form method="post" action="mesinsert.php" enctype="multipart/form-data" id="form1">
                  <div class="12u$">
                  <textarea name="message" id="message" placeholder="รายละเอียด" rows="6"></textarea>
              </div>
               </hr>
                <br>
              <div class="12u$">
               <ul class="actions">
                <center>
                        <li><P Align=right><input type="submit" value="บันทึก" class="special" /></P></li>
                <li><P Align=right><input type="reset" value="ยกเลิก" /></P></li>
                        </center></ul>

</body>

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