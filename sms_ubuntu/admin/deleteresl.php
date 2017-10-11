
<?php
session_start();
$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];
// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from results where id='$id'";
  
 $indNo="select inum from results where id='$id'";
 $unit="select unit from results where id='$id'";
 
 mysql_query( $sql); 
 mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','admin','".$unit." for ".$indNo." Department Head has been deleted')");
}
?>