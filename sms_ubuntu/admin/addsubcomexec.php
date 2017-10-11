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
$subject1 = clean($_POST['txtSub1']);
$subject2 = clean($_POST['txtSub2']);
$subject3 = clean($_POST['txtSub3']);
$id = clean($_POST['hiId']);

if($id == 0){
  mysql_query("INSERT INTO subject_com (subject1, subject2,subject3)
  VALUES ('$subject1','$subject2','$subject3')");
}
else{
  $sql = "UPDATE subject "
       . "   SET subject1	= '" . $subject1 . "',"
       . "       subject2	= '" . $subject2 . "',"
       . "       subject3	= '" . $subject3 . "',"
       . " WHERE id       = " . $id;
  
  mysql_query($sql);
  
}
header("location: subject_combination.php");
?>