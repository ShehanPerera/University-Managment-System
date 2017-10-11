<?php

include('../connect.php');
session_start();
$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
	
//Sanitize the POST values
$indNo = clean($_POST['txtIndNo']);
$unit = clean($_POST['txtUnit']);
//$credit = clean($_POST['cboCredit']);
$grade = clean($_POST['cboGrade']);
$id = clean($_POST['hiId']);

	if ($grade=="A+" || $grade=="A") $points = 4.0;
	elseif($grade=="A-") $points = 3.7;
	elseif($grade=="B+") $points = 3.3;
	elseif($grade=="B") $points = 3.0;
	elseif($grade=="B-") $points = 2.7;
	elseif($grade=="C+") $points = 2.3;
	elseif($grade=="C") $points = 2.0;
	elseif($grade=="C-") $points = 1.7;
	elseif($grade=="D+") $points = 1.3;
	elseif($grade=="D") $points = 1.0;
	else $points = 0.0;

$sqlinno = "SELECT * FROM student WHERE indNo='$indNo'";
$resultinno = mysql_query($sqlinno);

$sqlcode = "SELECT * FROM subject WHERE code='$unit'";
$resultcode = mysql_query($sqlcode);

//$credit = "SELECT `credit` FROM subject WHERE code='$unit'";
$credit = substr($unit,8);

if(mysql_num_rows($resultinno)> 0 && mysql_num_rows($resultcode)> 0) {
		if($id == 0){	
			$sql = "INSERT INTO results (inum, unit, credit, grade, points)"
				   . " VALUES ('$indNo','$unit','$credit','$grade','$points')";
			mysql_query($sql);
			mysql_query("INSERT INTO log (RegNo, lname, position,action) VALUES ('$reg_no','$l_name','admin','".$unit." for ".$indNo." results has been added')");
		}
		else{
			$sql = "UPDATE results "
				   . "   SET inum    = '" . $indNo . "',"
				   . "       unit    = '" . $unit . "',"
				   . "       credit   = '" . $credit . "',"
				   . "       grade    = '" . $grade . "',"
				   . "       points    = '" . $points . "'"
				   . " WHERE id       = " . $id;
			mysql_query($sql);
			mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','admin','".$unit." for ".$indNo." results has been updated')");
		}
		header("location: results.php");
}
elseif (mysql_num_rows($resultinno) == 0){
		echo'<script>
			alert ("Sorry! Invalid Index Number!"); 
			window.location.href="results.php";
			</script>';
}
else if (mysql_num_rows($resultcode) == 0){
		echo'<script>
			alert ("Sorry! Invalid Subject!"); 
			window.location.href="results.php";
			</script>';
}
else{
		echo'<script>
			alert ("Sorry! Invalid Index Number Subject!"); 
			window.location.href="results.php";
			</script>';
}

?>