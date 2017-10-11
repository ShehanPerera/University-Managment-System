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
$ccode = clean($_POST['ccode']);
$description = clean($_POST['description']);
$id = clean($_POST['id']);

mysql_query("UPDATE course SET coursecode='$ccode', description='$description' WHERE id='$id'");
header("location: course.php");
?>