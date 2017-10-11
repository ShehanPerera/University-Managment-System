<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }

   
include('STD_Con.php');

$hosid=$_POST['hosid'];
$hosname=$_POST['Name'];
$cap=$_POST['cap'];
$block=$_POST['block'];
$category=$_POST['category'];
$vserid=$_POST['vserid'];
$sserid=$_POST['sserid'];

$sql = "UPDATE hostel_detail  SET name='$hosname',capacity='$cap' ,category='$category' WHERE id ='$hosid';";

if ($conn->query($sql) === TRUE ) {
	// print '<script type="text/javascript">';
	// print 'alert("student data was Updated successfully!");';
 	//print 'document.location.href = "..\Pages\Main\hostel_view.php";';
	// print '</script>';
	// //header("Location: ..\Pages\Student\index.html");
	echo "dsfsdf";
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		alert();
	</script>
</body>
</html>