<?php
include('../connect.php');
session_start();

$Arrcodes   = $_POST['selcod'];
$student_id = $_SESSION['SESS_MEMBER_ID'];
$level      = $_SESSION['SESS_LEVEL'];

$regno = $_SESSION['SESS_REG_NO'];
$lname = $_SESSION['SESS_LAST_NAME'];

mysql_query("DELETE FROM studentsubject WHERE student_id = " . $student_id . " AND level = '" . $level . "'") ;

foreach($Arrcodes as $psKey => $value){
	$sql = "INSERT INTO studentsubject(student_id, subject_id,level) VALUES($student_id, $value, '$level')";
  mysql_query($sql);
}
mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$regno','$lname','student','subject selection form has been submitted')");

header("location:mysubject.php");
?>