
<?php
session_start();
$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];
// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from student where id='$id'";
 
 
 mysql_query( $sql);
 
  $RegNo="select RegNo from student where id='$id'";
  
  
  $sql1 = "delete from user where RegNo='$RegNo'";
 mysql_query( $sql1);
 
 mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','admin','".$RegNo." admin has been deleted')");

}

?>