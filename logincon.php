<?php
require 'conect.php'; // เชื่อมต่อกับตัวconnect

$Email = mysqli_real_escape_string ($dbcon, $_POST['Email']);
$Password = mysqli_real_escape_string  ($dbcon, $_POST['Password']);

// เลืแกตัวใช้งาน
$sql = "SELECT * FROM member WHERE Email=? AND Password=?";
$stmt = mysqli_prepare($dbcon, $sql);
mysqli_stmt_bind_param($stmt, "ss", $Email, $Password );
mysqli_execute($stmt);

// คอยบอกว่าดึงอะไรมาบ้าง
$result_user = mysqli_stmt_get_result($stmt);

if ($result_user->num_rows == 1) {
	session_start ();
	$row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);
	$_SESSION['User_id'] = $row_user['User_id'];
	$_SESSION['Fname'] = $row_user['Fname'];
	$_SESSION['Lname'] = $row_user['Lname'];
	$_SESSION["level"] = $row_user["level"];
	 if($_SESSION["level"]=="a"){

	    header("location: 3.php");
	     }

                      if ($_SESSION["level"]==""){  //ถ้าเป็น member ให้กระโดดไปหน้า index.php
                      $_SESSION['Fname'] = $row_user['Fname'];
                      $_SESSION['Lname'] = $row_user['Lname'];
                        Header("Location: indexwel.php");

                      }

} else {
	echo "<script type='text/javascript'>";
	echo "alert('อีเมล หรือ รหัสผ่านผิด กรุณาลองอีกครั้ง');";
	echo "location = 'login.php'; ";
	echo "</script>";
}