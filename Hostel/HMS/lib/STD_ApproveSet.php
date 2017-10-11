<?php 
	$key = $_POST["regNo"];
	include('STD_Con.php');
	$isOK = TRUE;
	
	foreach ($key as $regNo)
	{
		include('STD_Con.php');

		//sql for basic student details
		$sql = "UPDATE new_student_detail SET aproval=1 WHERE reg_no ='$regNo';";
		

		//run the queries
		if ($conn->query($sql) === TRUE ) 
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