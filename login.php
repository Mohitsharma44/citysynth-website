<?php session_start();?>
<?php
	$connection = mysql_connect("localhost","citysynth","pHAf5EKA3-un");
	if(!$connection)
		die("DATABASE CONNECTION FAILURE" . mysql_error());
	$db_select = mysql_select_db("citysynth",$connection);
	if(!$db_select)
		die("DATABASE SELECT FAILURE" . mysql_error());
?>