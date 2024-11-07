<?php
	# Database Connection Variable
	
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$database = "cafftech";

	# Database Variable connection handle
	$conn = mysqli_connect($serverName, $username, $password, $database) or die(mysql_error());
?>