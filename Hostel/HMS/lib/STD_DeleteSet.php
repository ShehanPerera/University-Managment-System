<?php 
	$key = $_POST["regNo"];
	
include("session.php");
$var_value = $_SESSION['hosid'];
	include('STD_Con.php');
	$isOK = TRUE;

	$sql_available="SELECT `available` FROM `hostel_detail` WHERE `id`='$var_value';";
	$result_avail=$conn->query($sql_available);
	$row1=$result_avail->fetch_assoc();
		$avail=$row1["available"];

	foreach ($key as $regNo)
	{
		$sql_std="INSERT INTO past_student_detail(reg_no,full_name,name_initial,sex,nic,dob,faculty,course,year_of_study,hostel_id) SELECT reg_no,full_name,name_initial,sex,nic,dob,faculty,course,year_of_study ,'$var_value'FROM student_detail WHERE reg_no ='$regNo';";
		$sql_con="INSERT INTO past_student_contact(`reg_no`, `contact_no`, `email`, `resedential_adress`, `district`, `gs_devision`, `ds_devision`) SELECT `reg_no`, `contact_no`, `email`, `resedential_adress`, `district`, `gs_devision`, `ds_devision` FROM new_student_contact WHERE reg_no='$regNo' ;";
		if($conn->query($sql_std) === TRUE && $conn->query($sql_con) === TRUE )
		{
			//sql for basic student details
			$sql = "DELETE FROM student_detail WHERE reg_no ='$regNo';";
		// sql for student contact details
			$sql_Contact = "DELETE FROM student_contact WHERE reg_no ='$regNo';";
		// sql for gurdian details
			$sql_Gurdian = "DELETE FROM gurdian_detail WHERE reg_no ='$regNo';";
		//sql for student hostel details
			$sql_Hostel = "DELETE FROM student_hostel WHERE reg_no ='$regNo';";
			$avail=$avail+1;
			$sql_update="UPDATE `hostel_detail` SET `available`='$avail' WHERE `id`='$hos';";
				$conn->query($sql_update);
		}
		
		

		
		
	
		if ( $conn->query($sql_Contact) === TRUE && $conn->query($sql_Gurdian) === TRUE && $conn->query($sql_Hostel) === TRUE) 
		{
			$isOK = TRUE;
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			$isOK = FALSE;
		}
	}
	if ($isOK) {
		print '<script type="text/javascript">';
		print 'alert("student data ware Deleted successfully !");';
		print '</script>';
		header("Location: ../Pages/hostel/outofDate.php");
	}
	
?>		