
<?php
session_start();
// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');

$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];

if($_GET['id'])
{
$id=$_GET['id'];



 $sql = "delete from hod where id='$id'";
 mysql_query( $sql);
 

}
 mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','admin','".$department." Department Head has been deleted')");
?>