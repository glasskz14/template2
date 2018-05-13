<?php
/*
* connection database
*/
$Connect = mysql_connect('localhost', 'root', '') or die('Error connecting to MySQL');
mysql_select_db('webboard', $Connect) or die('Database sysapp does not exist!');
mysql_query('SET NAMES UTF8');
?>