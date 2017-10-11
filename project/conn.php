<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
$db = "healthcen";
	// Create connection
	$conn = mysqli_connect ($servername, $username, $password,$db); 
	
	//database connection
	
	//mysqli_select_db for new version of php.
	
	
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
?>