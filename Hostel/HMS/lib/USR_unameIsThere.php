<?php 
	$un = $_GET['uName'];
	include 'STD_Con.php';
	// SQL for reading Id
	$sql = "SELECT COUNT(*) as c FROM user_details WHERE UserName = '$un'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo $row['c'];
 ?>