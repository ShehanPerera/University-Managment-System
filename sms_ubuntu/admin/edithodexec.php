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
$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$department = clean($_POST['department']);
$email = clean($_POST['email']);
$RegNo = clean($_POST['RegNo']);
$password = clean($_POST['password']);

mysql_query("UPDATE  `student`.`hod` SET  `fname` =  '$fname',
`lname` =  '$lname',
`email` =  '$email',
`RegNo` =  '$RegNo',
`password` =  '$password',
`department` =  '$department',
`gender` =  '$gender',
`status` =  '$status',
`bday` =  '$bday' WHERE  `hod`.`id` =2");

header("location: hod.php");
?>