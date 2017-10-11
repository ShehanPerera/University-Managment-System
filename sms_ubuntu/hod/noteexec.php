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
$position = clean($_POST['position']);
$message = clean($_POST['message']);

mysql_query("INSERT INTO notificatiion (position, message)
VALUES ('$position','$message')");
header("location: note.php");
?>