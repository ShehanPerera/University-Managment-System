<?php
include('../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$pass=$_SESSION['SESS_PASS_WORD'];
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
$cpassword = clean($_POST['txtPassword']);
$npassword = clean($_POST['txtPassword1']);
$rpassword = clean($_POST['txtPassword2']);

if ( $npassword == $rpassword && md5($cpassword) == $pass ){
  $sql = "UPDATE student "
       . "SET password = '" . md5($password) . "'"
       . "WHERE id     = " . $id;
  
  mysql_query($sql);
  
  $sql = "UPDATE user "
       . "   SET password = '" . md5($password) . "'"
       . " WHERE userid   = " . $id;
  
  mysql_query($sql);
} 
header("location: Profile.php");
    /*
  $from='admin@studentguider.com';
  $subject = 'Alert' ;
  $message = 'Hi! '.$fname.' Your account has been edited. Your new password is:  '.$password .'Now you can log in. www.unistudentguider.com';
  mail($email, $subject,
  $message, "From:" . $from);
*/
 
?>