<?php 
$key = $_GET['key'];
include('STD_Con.php');

//sql for basic student details
$sql = "DELETE FROM student_detail WHERE reg_no ='$key';";
// sql for student contact details
$sql_Contact = "DELETE FROM student_contact WHERE reg_no ='$key';";
// sql for gurdian details
$sql_Gurdian = "DELETE FROM gurdian_detail WHERE reg_no ='$key';";
//sql for student hostel details
$sql_Hostel = "DELETE FROM student_hostel WHERE reg_no ='$key';";
//sql for payment details
$sql_payment = "DELETE FROM payment_details WHERE reg_no ='$key';";
//sql for image
$sql_image = "DELETE FROM student_pic WHERE reg_No = '$key';";

//run the queries
if ($conn->query($sql) === TRUE && $conn->query($sql_Contact) === TRUE && $conn->query($sql_Gurdian) === TRUE && $conn->query($sql_Hostel) === TRUE && $conn->query($sql_payment) === TRUE && $conn->query($sql_image) === TRUE) 
{
	print '<script type="text/javascript">';
	print 'var r = alert("student data was Deleted successfully !");';
    print 'document.location.href = "..\Pages\Student\index.php";';
	print '</script>';
	header("Location: ..\Pages\Student\index.html");
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>