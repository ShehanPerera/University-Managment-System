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
$code = clean($_POST['code']);
$title = clean($_POST['title']);
$level = clean($_POST['level']);
$credit = clean($_POST['credit']);
$lecHrs = clean($_POST['lecHrs']);
$prHrs = clean($_POST['prHrs']);
$lecturer = clean($_POST['lecturer']);
$semi = clean($_POST['semi']);

mysql_query("INSERT INTO subject (code, title,level,credit,lecHrs,prHrs,lecturer,semi)
VALUES ('$code','$title','$level','$credit','$lecHrs','$prHrs' ,'$lecturer','$semi')");
header("location: subject.php");
?>