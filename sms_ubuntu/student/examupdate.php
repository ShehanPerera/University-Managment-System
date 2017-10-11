<?php
include('../connect.php');
session_start();

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str){
  $str = @trim($str);
  if(get_magic_quotes_gpc()){
    $str = stripslashes($str);
  }
  return mysql_real_escape_string($str);
}

//Sanitize the POST values
$regno = $_SESSION['SESS_REG_NO'];


$lname = $_SESSION['SESS_LAST_NAME'];


$poArray1 = $_POST;
$poArray2 = $_POST;

echo $_POST . "<br/>";

$sql = "DELETE FROM examapp "
     . " WHERE regno = '" . $regno . "'";
      
mysql_query($sql);

foreach($poArray1 as $psKey => $psValue){
  if(strlen($psValue) > 10 ){ 
    if(substr($psValue,0,6)=="EX-VAL"){
      $poArr2 = explode("|", $psValue);

      $category    = $poArr2[1];
      $subjectcode = $poArr2[2];
      $level       = $poArr2[3];

      $sql = "INSERT INTO examapp(regno, level, subjectcode, category)"
           . " VALUES('$regno','$level','$subjectcode','$category')";
		   
		   

      mysql_query($sql);
    }
  }  
}
foreach($poArray2 as $psKey => $psValue){
  if(strlen($psValue) > 10 ){ 
    if(substr($psValue,0,6)=="EX-PRO"){
      $poArr3 = explode("|", $psValue);

      $category    = $poArr3[1];
      $subjectcode = $poArr3[2];
      $level       = $poArr3[3];

      $sql = "INSERT INTO examapp(regno, level, subjectcode, category)"
           . " VALUES('$regno','$level','$subjectcode','$category')";		   		   
      mysql_query($sql);
    }
  }  
}
mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$regno','$lname','student','Exam form has been submitted')");
header("location: exam.php");
?>