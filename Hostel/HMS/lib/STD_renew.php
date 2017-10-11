<?php 
  include("session.php");
  
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
  
 
 include('STD_Con.php');

	$key = $_POST["regNo"];
	$addate=$_POST["adDate"];
	$vcDate=$_POST["vcDate"];
	$year=$_POST["year"];
	
	$isOK = TRUE;
	

	foreach ($key as $regNo)
	{
		$sql_date="UPDATE `hostel_addmission` SET `Admission_date`='$addate',`vacate_date`='$vcDate' WHERE `reg_no`=' $regNo';";
		$sql_year="UPDATE `student_detail` SET `year_of_study` = '$year' WHERE `reg_no` = '$regNo';";
	
		if ( $conn->query($sql_date) === TRUE && $conn->query($sql_year) === TRUE ) 
		{
				$isOK = TRUE;
		} 
		else {
			echo "Error: " . $sql_date . "<br>" . $conn->error;
			echo "Error: " . $sql_year . "<br>" . $conn->error;
			$isOK = FALSE;
		}
	}
	if ($isOK) {
	print '<script type="text/javascript">';
 	print 'var r = alert("students Added successfully !");';
	//header("Location: ..\Pages\Hostel\renew.php");
	print '</script>';

	}
	
?>		