<?php
include('../connect.php');
session_start();

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
$fname = clean($_POST['txtFName']);
$lname = clean($_POST['txtLName']);
$department = clean($_POST['cboDepartment']);
$email = clean($_POST['txtEMail']);
$RegNo = clean($_POST['txtRegNo']);
$password = clean($_POST['pasPassword']);
$id = clean($_POST['hiId']);

$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];

if($id == 0){
mysql_query("INSERT INTO hod (fname, lname, department,email,RegNo,password)
VALUES ('$fname','$lname','$department','$email','$RegNo','$password')");

 mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','student','".$department." Department Head has been added')");

mysql_query("INSERT INTO user (RegNo, password, position)
VALUES ('$RegNo','$password','hod')");
header("location: hod.php");

 /*
  $from='admin@studentguider.com';
  $subject = 'User registation' ;
  $message = 'Hi! '.$fname.' You have registered with our system. User Name:  '.$RegNo.' Your password is:  '.$password .'Now you can log in. www.unistudentguider.com';
  mail($email, $subject,
  $message, "From:" . $from);
*/
}
else{
 $sql = "UPDATE hod "
       . "   SET fname      = '" . $fname . "',"
	   . "       lname      = '" . $lname . "',"
       . "       email      = '" . $email . "',"
       . "       RegNo      = '" . $RegNo . "',"
       . "       password   = '" . $password . "',"
       . "       department = '" . $department . "',"   
       . " WHERE id         = "  . $id;
  
  mysql_query($sql);
mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','student','".$department." Department Head has been updated')");
  /*
  $from='admin@studentguider.com';
  $subject = 'Alert' ;
  $message = 'Hi! '.$fname.' Your account has been edited. Your new password is:  '.$password .'Now you can log in. www.unistudentguider.com';
  mail($email, $subject,
  $message, "From:" . $from);
*/
 
header("location: hod.php");
}
?>