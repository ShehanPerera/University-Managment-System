<?php
include('../connect.php');
session_start();

$Arrcodes   = $_POST['selcod'];
$id		= $_POST['id'];

foreach($Arrcodes as $psKey => $value){
 $sql = "INSERT INTO student(special) VALUES('".$id."')";
  mysql_query($sql);
}

header("location:student.php");
?>