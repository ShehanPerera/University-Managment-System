<?php
include('../connect.php');
session_start();

$pre1   = $_POST['pre1'];
$pre2   = $_POST['pre2'];
$pre3   = $_POST['pre3'];

$regno = $_SESSION['SESS_REG_NO'];
$lname = $_SESSION['SESS_LAST_NAME'];

	$sql1 ="DELETE FROM student_combination "
     . " WHERE RegNo = '" . $regno . "'";
	mysql_query($sql1);


	$sql2 = "INSERT INTO student_combination(RegNo, com_id,preference_order)"
           . " VALUES('$regno','$pre1','1')";
	$sql3 = "INSERT INTO student_combination(RegNo, com_id,preference_order)"
           . " VALUES('$regno','$pre2','2')";
	$sql4 = "INSERT INTO student_combination(RegNo, com_id,preference_order)"
           . " VALUES('$regno','$pre3','3')";
	mysql_query($sql2);
	mysql_query($sql3);
	mysql_query($sql4);
  
  
mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$regno','$lname','student','subject combination form submitted')");
header("location:subject_combination.php");
?>