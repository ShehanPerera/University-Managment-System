<?php
	include('STD_Con.php');
	$key = $_GET['key'];
// Query for take log data
	$sql_LOG="SELECT * FROM student_log WHERE id='".$key."';";

	$result_LOG = $conn->query($sql_LOG);
// get Log details
	if ($result_LOG->num_rows == 1)
	{
		while($row = $result_LOG->fetch_assoc())
		{
			$regNo = $row['reg_No'];
			$date = $row['date'];
			$type = $row['type'];
			$Discription = $row['Discription'];
		}
	}

// get student contact details
	$sql_std="SELECT * FROM student_detail WHERE reg_no='".$regNo."';";
	$result_std = $conn->query($sql_std);

	if ($result_std->num_rows > 0)
	{
		while($row = $result_std->fetch_assoc())
		{
			$Sname = $row['name_initial'];
			$Faculty = $row['faculty'];
		}
	}

?>