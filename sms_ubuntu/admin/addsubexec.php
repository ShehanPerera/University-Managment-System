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
$code = clean($_POST['txtCode']);
$title = clean($_POST['txtTitle']);
$level = clean($_POST['cboLevel']);
$credit = clean($_POST['txtCredit']);
$lecHrs = clean($_POST['txtLecHrs']);
$prHrs = clean($_POST['txtPrHrs']);
$lecturer = clean($_POST['txtLecturer']);
$semi = clean($_POST['txtSemi']);
$id = clean($_POST['hiId']);

$regno = $_SESSION['SESS_REG_NO'];
$lname = $_SESSION['SESS_LAST_NAME'];

if($id == 0){
  mysql_query("INSERT INTO subject (code, title,level,credit,lecHrs,prHrs,lecturer,semi)
  VALUES ('$code','$title','$level','$credit','$lecHrs','$prHrs' ,'$lecturer','$semi')");
  
  mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$regno','$lname','student','".$title." subject has been added')");
}
else{
  $sql = "UPDATE subject "
       . "   SET code     = '" . $code . "',"
       . "       title    = '" . $title . "',"
       . "       level    = '" . $level . "',"
       . "       credit   = '" . $credit . "',"
       . "       lecHrs   = '" . $lecHrs . "',"
       . "       prHrs    = '" . $prHrs . "',"
       . "       lecturer = '" . $lecturer . "',"
       . "       semi     = '" . $semi. "'"
       . " WHERE id       = " . $id;
  
  mysql_query($sql);
   mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$regno','$lname','student','".$title." subject has been edited')");
}
header("location: subject.php");
?>