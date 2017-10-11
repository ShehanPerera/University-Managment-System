<?php
include('STD_Con.php');
// basic info
$regNo = $_POST["regNo"];
$type = $_POST["LType"];
$date = $_POST["LDate"];
$disc = $_POST["discription"];
//sql for basic student details
$sql = "INSERT INTO student_log (reg_No, type, date, discription) VALUES ('".$regNo."', '".$type."', '".$date."', '".$disc."');";

// run sql
if ($conn->query($sql) === TRUE) {
	//header("Location: ..\Pages\Student\index.html");
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>