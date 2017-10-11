<?php
include('../connect.php');
session_start();
$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];

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
	
	
//get current year	
$sql = "SELECT * FROM acyear";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
$current_year = $row['yearcd'];}

//Sanitize the POST values
$RegNo = clean($_POST['txtRegNo']);
$indNo = clean($_POST['txtIndNo']);
$prefix = clean($_POST['cboPrefix']);
$fname = clean($_POST['txtFName']);
$lname = clean($_POST['txtLName']);
$gender = clean($_POST['cboGender']);
$address = clean($_POST['txtAddress']);
$email = clean($_POST['txtEmail']);
$phone = clean($_POST['txtPhone']);
$password = md5(clean($_POST['txtPassword']));
$level = clean($_POST['cboLevel']);
$course = clean($_POST['cboCourse']);
$id = clean($_POST['hiId']);

if($id == 0){
  $sql = "INSERT INTO student (RegNo, indNo, prefix, fname,lname, gender, address, email, phone, password, course, level,yearcd)"
       . " VALUES ('$RegNo','$indNo','$prefix','$fname','$lname','$gender','$address','$email','$phone', '$password', '$course','$level','$current_year')";
  
  mysql_query($sql);
  
  $sql = "INSERT INTO user (RegNo, password, position)"
       . " VALUES ('$RegNo','$password','student')";
  
  mysql_query($sql);
   mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','admin','".$fname." has been added')");
  /*
  $from='admin@studentguider.com';
  $subject = 'Student registation' ;
  $message = 'Hi! '.$fname.' You have been successfully registered with our system. User Name:  '.$RegNo.' Your password is:  '.$password .'Now you can log in. www.unistudentguider.com';
  mail($email, $subject,
  $message, "From:" . $from);
*/
}
else {
  $sql = "UPDATE student "
       . "   SET RegNo    = '" . $RegNo . "',"
       . "       indNo    = '" . $indNo . "',"
       . "       prefix   = '" . $prefix . "',"
       . "       fname    = '" . $fname . "',"
       . "       lname    = '" . $lname . "',"
       . "       gender   = '" . $gender . "',"
       . "       address  = '" . $address . "',"
       . "       email    = '" . $email . "',"
       . "       phone    = '" . $phone . "',"
       . "       course   = '" . $course . "',"
       . "       level    = '" . $level . "'"
      // . "       password = '" . $password . "'"
       . " WHERE id       = " . $id;
  
  mysql_query($sql);
 /*
  $sql = "UPDATE user "
       . "   SET password = '" . $password . "'"
       . " WHERE userid   = " . $id;
  
  mysql_query($sql);*/
  mysql_query("INSERT INTO log (RegNo, lname, position, action) VALUES ('$reg_no','$l_name','admin','".$fname."  profile has been updated')");
    /*
  $from='admin@studentguider.com';
  $subject = 'Alert' ;
  $message = 'Hi! '.$fname.' Your account has been edited. Your new password is:  '.$password .'Now you can log in. www.unistudentguider.com';
  mail($email, $subject,
  $message, "From:" . $from);
*/
  
}
header("location: student.php");
?>