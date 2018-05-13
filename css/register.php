<?php

$email = "";
$password = "";
$errors = array();

$db = mysql_connect('localhost', '', 'register');

// if the register button is clicked
if (isset($_POST['register'])) {
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password_1']);
	$password = mysql_real_escape_string($_POST['password_2']);
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$tel = mysql_real_escape_string($_POST['tel']);

	// ensure that form field are filled properly
	if (empty($email)) {
		array_push($errors, "email is required"); 
	}
	if (empty($password_1)) {
		array_push($errors, "password is required"); 
	}
	if (empty($password_2)) {
		array_push($errors, "the two password do not match"); 
	}

	// if there are no error, user to database 
	if (count($error) == 0){
		$password = md5($password_1); //encrypt paswword
		$sql = "INSERT INTO users (username, email, password)
		         VALUES ('$email', $password)";
		         msqli_query($db, $sql);
	}

}

?>