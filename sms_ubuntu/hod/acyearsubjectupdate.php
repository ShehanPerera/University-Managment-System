<?php
include('../connect.php');
session_start();

$Arrcodes   = $_POST['selcod'];
$yearcd   = $_POST['hsYearCd'];

mysql_query("DELETE FROM acyearsubject WHERE yearcd = '" . $yearcd . "'") ;

foreach($Arrcodes as $psKey => $value){
	$sql = "INSERT INTO acyearsubject(yearcd, subjectcd) VALUES('$yearcd', '$value')";
  mysql_query($sql);
}

header("location:acyearsubjectedit.php?hsYearCd=$yearcd");
?>