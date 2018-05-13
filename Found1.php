  <?php
  
    require 'conectfromfound.php';


    $found_id = $_GET['found_id'];

    $q = "SELECT * FROM founditem INNER JOIN typeitem ON founditem.found_id=typeitem.type_id INNER JOIN typeplace ON founditem.found_id=typeplace.place_id WHERE found_id='$found_id' "; 


    $result = mysqli_query($dbcon, $q);
    $rowfound = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>


    <!DOCTYPE HTML>
<html>
   <title>Found ของที่เจอ</title>
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
                  <span class="symbol"><img src="images/11.svg" alt="" /></span><span class="title">LOST and Found </span>

                </a>

              <!-- Nav -->
                <nav>
                  <ul>
                    <li><a href="#menu">Menu</a></li>
                  </ul>
                </nav>

            </div>
          </header>


        


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

<h2>- รายการของเจอ -</h2>
<ul class="breadcrumb">
  <li><a href="index.php">หน้าเเรก</a></li>
  <li><a href="found2.php">รายการของที่เจอ</a></li>
  <li><a href="found1.php?name=<?php echo $row ['name']; ?>"><?php echo $rowfound['name']; ?></a></li>
  
  
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
  <caption>- ข้อมูลของที่เจอ - </caption> 


<body>


 <th>
  สถานะสิ่งของ  :  <?php echo $rowfound['status']; ?>
 </th>

<tr>
  
</tr>
 
 <td>
     รหัสของหาย  :  <?php echo $rowfound['found_id']; ?>
     <br>
    ชื่อของหาย  :    <?php echo $rowfound['name']; ?>
    <br>
    ชื่อผู้ที่ทำหาย  :    <?php echo $rowfound['fname']; ?>
    <br>
    ประเภทสิ่งของ  :    <?php echo $rowfound['typename']; ?>
    <br>
    สถานที่ทำหาย  :    <?php echo $rowfound['placename']; ?>
    <br>
    วันที่ทำหาย  :    <?php echo $rowfound['date']; ?>
    <br>
    เวลาที่ทำหาย  :    <?php echo $rowfound['time']; ?>
    <br>
     รายละเอียดต่างๆ  :    <?php echo $rowfound['description']; ?>
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
  <img src="photofound/<?php echo $rowfound['photo'] ?>"    width="300" height="200">
  <div class="dropdown-content">
    <img src="photofound/<?php echo $rowfound['photo'] ?>"  width="600" height="400">
  </div>
</div>
</center>

 </td>
  
</table>

 <hr/>
              
              
              
            </div>
          </div>
        </div>


        
             <?php

              
               mysqli_free_result($result);
               mysqli_close($dbcon);
             ?>
             </center>






</body>
</html>