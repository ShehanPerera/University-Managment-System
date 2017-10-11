<?php
include('../connect.php');
//$id=$_SESSION['SESS_MEMBER_ID'];
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
$prefix = clean($_POST['cboPrefix']);
$fname = clean($_POST['txtFName']);
$lname = clean($_POST['txtLName']);
$gender = clean($_POST['cboGender']);
$address = clean($_POST['txtAddress']);
$email = clean($_POST['txtEmail']);
$phone = clean($_POST['txtPhone']);
$level = clean($_POST['cboLevel']);
$course = clean($_POST['cboCourse']);
$id = clean($_POST['hiId']);


  $sql = "UPDATE student "
       . "   SET prefix   = '" . $prefix . "',"
       . "       fname    = '" . $fname . "',"
       . "       lname    = '" . $lname . "',"
       . "       gender   = '" . $gender . "',"
       . "       address  = '" . $address . "',"
       . "       email    = '" . $email . "',"
       . "       phone    = '" . $phone . "',"
       . "       course   = '" . $course . "',"
       . "       level    = '" . $level . "'"
       . " WHERE id       = " . $id;
  
  mysql_query($sql);
  
    /*
  $from='admin@studentguider.com';
  $subject = 'Alert' ;
  $message = 'Hi! '.$fname.' Your account has been edited. Your new password is:  '.$password .'Now you can log in. www.unistudentguider.com';
  mail($email, $subject,
  $message, "From:" . $from);
*/

header("location: Profile.php");
?>