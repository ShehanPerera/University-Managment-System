<?php 
	$regNo = $_POST['regNo'];
	if(isset($_POST['Edit']))
	{
		header("location: ../Pages/Student/student_editOne.php?key=$regNo");
	}
	elseif (isset($_POST['Delete'])) 
	{
		header("location: STD_DeleteOne.php?key=$regNo");
	}
 ?>