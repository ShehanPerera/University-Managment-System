<?php
	include('STD_Con.php');
	$key = $_GET['key'];

	$sql_basic="SELECT * FROM new_student_detail WHERE reg_no='".$key."';";
	$sql_Contact="SELECT * FROM new_student_contact WHERE reg_no='".$key."';";
	$sql_guardient="SELECT * FROM new_gurdian_detail WHERE reg_no='".$key."';";
	
	

	$result_Main = $conn->query($sql_basic);
	$result_Contact = $conn->query($sql_Contact);
	$result_guardient = $conn->query($sql_guardient);
	
	

	// get primery details
	if ($result_Main->num_rows > 0)
	{
		while($row = $result_Main->fetch_assoc())
		{
			$regNo = $row['reg_no'];
			$fName = $row['full_name'];
			$intName = $row['name_initial'];
			$sex = $row['sex'];
			$NIC = $row['nic'];
			$dob = $row['dob'];
			$faculty = $row['faculty'];
			$course = $row['course'];
			$yer = $row['year_of_study'];
		}
	}

// get student contact details
	if ($result_Contact->num_rows > 0)
	{
		while($row = $result_Contact->fetch_assoc())
		{
			$contactNo = $row['contact_no'];
			$email = $row['email'];
			$resAddress = $row['resedential_adress'];
			$district = $row['district'];
			$gsDiv = $row['gs_devision'];
			$dsDiv = $row['ds_devision'];
		}
	}
//get gurdian details
	if($result_guardient->num_rows > 0)
	{
		while($row = $result_guardient->fetch_assoc())
		{
			$gurdianName = $row["gurdian_name"];
			$relation = $row["relationship"];
			$GcontNo = $row["contact_no"];
			$GAddress = $row["adress"];
			$GPoliceStation = $row['police_station'];
			$EMName = $row["emergency_name"];
			$EMCont = $row["emergency_no"];
		}
	}

?>