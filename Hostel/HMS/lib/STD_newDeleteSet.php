<?php 
	$key = $_POST["regNo"];
	include('STD_Con.php');
	$isOK = TRUE;
	foreach ($key as $regNo)
	{
		include('STD_Con.php');

		//sql for basic student details
		$sql = "DELETE FROM new_student_detail WHERE reg_no ='$regNo';";
		// sql for student contact details
		$sql_Contact = "DELETE FROM new_student_contact WHERE reg_no ='$regNo';";
		// sql for gurdian details
		$sql_Gurdian = "DELETE FROM new_gurdian_detail WHERE reg_no ='$regNo';";
		
		//sql for image
		$sql_image = "DELETE FROM student_pic WHERE reg_No = '$regNo';";

		//run the queries
		if ($conn->query($sql) === TRUE && $conn->query($sql_Contact) === TRUE && $conn->query($sql_Gurdian) === TRUE &&  $conn->query($sql_image) === TRUE) 
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
	header("Location: ../Pages/main_admin/newReg.php");
	}
	
?>		