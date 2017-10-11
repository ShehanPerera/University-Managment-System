<?php 
	$id = $_GET['id'];
	include 'STD_Con.php';
	// SQL for reading Id
	$sql = "SELECT COUNT(*) as c FROM user_details WHERE user_id = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo $row['c'];
 ?>