<?php
require_once 'databaseconnection.php';
$code=$_POST['code'];
$sql="SELECT * FROM session WHERE Session_Code='$code'";
$res = mysql_fetch_array(mysql_query($sql));
header("Location:SessionDetails.php");
?>