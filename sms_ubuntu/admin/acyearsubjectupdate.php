<?php
include('../connect.php');
session_start();

$Arrcodes   = $_POST['selcod'];
$yearcd   = $_POST['hsYearCd'];

$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];

mysql_query("DELETE FROM acyearsubject WHERE yearcd = '" . $yearcd . "'") ;

foreach($Arrcodes as $psKey => $value){
	$sql = "INSERT INTO acyearsubject(yearcd, subjectcd) VALUES('$yearcd', '$value')";
  mysql_query($sql);
}
mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','student','Subject has been offered in ".$yearcd."')");
header("location:acyearsubjectedit.php?hsYearCd=$yearcd");
?>