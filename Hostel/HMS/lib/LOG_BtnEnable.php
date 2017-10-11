<?php
	include('STD_Con.php');
	$key = $_GET['key'];
	$sql="SELECT name_initial, faculty FROM student_detail WHERE reg_no='".$key."';";
	$result = $conn->query($sql);
	// Check whether
	if ($result->num_rows == 1)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
 ?>
