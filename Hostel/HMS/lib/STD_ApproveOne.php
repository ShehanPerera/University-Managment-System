<?php 
	$key = $_POST["regNo"];
	include('STD_Con.php');
	$isOK = TRUE;
	echo "$key";
		//sql for basic student details
		$sql = "UPDATE new_student_detail SET aproval=1 WHERE reg_no ='$key';";
		

		//run the queries
		if ($conn->query($sql) === TRUE ) 
		{
			$isOK = TRUE;
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			$isOK = FALSE;
		}
	
	if ($isOK) {
		print '<script type="text/javascript">';
		print 'alert("Student aprroved !");';
		print '</script>';
		header("Location: ../Pages/main_admin/newReg.php");
	}
	
?>		