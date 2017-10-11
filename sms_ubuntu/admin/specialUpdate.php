<?php
include('../connect.php');
session_start();

$Arrcodes   = $_POST['selcod'];
$yearcd   = $_POST['hsYearCd'];

foreach($Arrcodes as $psKey => $value){
	$sql = "INSERT INTO acyearsubject(yearcd, subjectcd) VALUES('$yearcd', '$value')";
  mysql_query($sql);
  $sql = "UPDATE student "
       . "   SET special    = 'y',";  
  mysql_query($sql);
}

header("location:acyear.php");
?>