<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'project'; 

	$connection = mysqli_connect('localhost', 'root', '','project');
	$con_db=mysqli_select_db($connection,'project');

	// Checking the connection
	if (mysqli_connect_error()) {
		die('Database connection failed ' . mysqli_connect_error());
	}

?>