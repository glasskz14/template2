<?php
    require 'conectfromlost.php';

    $q = "SELECT * FROM founditem INNER JOIN typeitem ON founditem.found_id=typeitem.type_id ";

    $result = mysqli_query($dbcon, $q);
    ?>


<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/la.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Los Angeles</h3>
      <p><b>We had the best time playing at Venice Beach!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/ny.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/w3images/chicago.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Chicago</h3>
      <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
    </div>
  </div>


</head>


                <!-- Main -->
                    <div id="main">
                        <div class="inner">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                            <style>

.w3-btn {margin-bottom:10px;}
</style>

<div class="w3-container">

<p><CENTER>
<a href="test3.php" button class="w3-button w3-white w3-border w3-round-large" >รายการของหาย</a></button>
<a href="ProfileLost.html" button class="w3-button w3-white w3-border w3-round-large" >รายการของเจอ</a></button>
<a href="ProfileFound.html" button class="w3-button w3-white w3-border w3-round-large" >แอดอ</a></button>
<a href="EditProfile.html" button class="w3-button w3-white w3-border w3-round-large" >เเก้ขข้อมูลส่วนตัว</a></button>
</CENTER></p>
                           
                            
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


<body>
   <h2>รายการของหาย</h2>
<p>ตารางเเสดงรายการของกายทั้งหมด.</p>

<table>
  <tr>
    <th>รหัสของหาย</th>
    <th>ชื่อของหาย</th>
    <th>ประเภทของหาย</th>
    <th>สถานที่ของหาย</th>
    <th>วันที่</th>
    <th>เวลา</th>
    <th>ภาพ</th>

  </tr>
        <?php
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        ?>
  <tr>
    <td><?php echo $row ['found_id'];   ?></td>
    <td><?php echo $row ['name'];   ?></td>
    <td><?php echo $row ['typename'];   ?></td>
    <td></td>
    <td><?php echo $row ['date']; ?></td>
    <td><?php echo $row ['time']; ?></td>
 
  
    <td> 

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
  <img src="photolost/<?php echo $row['photo'] ?>"  width="100" height="50">
  <div class="dropdown-content">
    <img src="photolost/<?php echo $row['photo'] ?>"  width="400" height="600">
  </div>
</div></td>
        </tr>
           <?php 
         }



           ?>
</body>
</html>