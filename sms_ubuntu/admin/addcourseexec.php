<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$coursecode = clean($_POST['coursecode']);
$description = clean($_POST['description']);

mysql_query("INSERT INTO course (coursecode, description)
VALUES ('$coursecode','$description')");
header("location: course.php");
?>