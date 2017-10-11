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
$id = clean($_POST['id']);

mysql_query("UPDATE subject SET code='$code', title='$title', level='$level', credit='$credit', lecHrs='$lecHrs', prHrs='$prHrs', lecturer='$lecturer', semi='$semi' WHERE id='$id'");
header("location: subject.php");
?>

