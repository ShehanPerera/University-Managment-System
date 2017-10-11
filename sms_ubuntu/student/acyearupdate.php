<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str){
  $str = @trim($str);
  if(get_magic_quotes_gpc()){
    $str = stripslashes($str);
  }
  return mysql_real_escape_string($str);
}

//Sanitize the POST values
$yearcd = clean($_POST['txtYearCd']);
$fromdt = clean($_POST['txtFromDt']);
$todt   = clean($_POST['txtToDt']);
$status = clean($_POST['cboStatus']);
$id     = clean($_POST['hiId']);

if($id == 0){
  mysql_query("INSERT INTO acyear (yearcd, fromdt,todt,status)
  VALUES ('$yearcd','$fromdt','$todt','$status')");
}
else{
  $sql = "UPDATE acyear "
       . "   SET yearcd   = '" . $yearcd . "',"
       . "       fromdt   = '" . $fromdt . "',"
       . "       todt     = '" . $todt . "',"
       . "       status   = '" . $status . "'"
       . " WHERE id       = " . $id;
  
  mysql_query($sql);
}

if($status == "ACTIVE"){
  $sql = "UPDATE student "
       . "   SET level  = '2G',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '1G'"
       . "   AND yearcd = '" . ($yearcd-1) . "'";

  mysql_query($sql);

  $sql = "UPDATE student "
       . "   SET level  = '3G',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '2G'"
	   . "   AND special  = ''"
       . "   AND yearcd = '" . ($yearcd-1) . "'";
  
  mysql_query($sql);
  
   $sql = "UPDATE student "
       . "   SET level  = '3M',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '2G'"
	   . "   AND special  = 'y'"
       . "   AND yearcd = '" . ($yearcd-1) . "'";
  
  mysql_query($sql);
  
  

  $sql = "UPDATE student "
       . "   SET level  = '2S',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '1S'"
       . "   AND yearcd = '" . ($yearcd-1) . "'";
  
  mysql_query($sql);

  $sql = "UPDATE student "
       . "   SET level  = '3S',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '2S'"
       . "   AND yearcd = '" . ($yearcd-1) . "'";
  
  mysql_query($sql);
  
    $sql = "UPDATE student "
       . "   SET level  = '4S',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '3S'"
       . "   AND yearcd = '" . ($yearcd-1) . "'";
  
  mysql_query($sql);
  
    $sql = "UPDATE student "
       . "   SET level  = '4M',"
       . "       yearcd = '" . $yearcd . "'"
       . " WHERE level  = '3M'"
       . "   AND yearcd = '" . ($yearcd-1) . "'";
  
  mysql_query($sql);
}
header("location: acyear.php");
?>