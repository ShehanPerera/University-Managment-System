<?php
include('STD_Con.php');
// basic info
$hid=$_POST["hid"];
$hname = $_POST["hname"];
$Ocontact = $_POST["Ocontact"];
$oaddress = $_POST["oaddress"];
$Gender = $_POST["Gender"];
$capasity = $_POST["capasity"];
$contact_no=$_POST["Ocontact"];
$pay = $_POST["pay"];

$sql = "INSERT INTO hostel_detail (id,name,address,contact_no,capacity,available,category, anual_payment) VALUES ('".$hid."','".$hname."', '".$oaddress."','".$contact_no."','".$capasity."',  '".$capasity."', '".$Gender."', '$pay');";

$sql_staff = "INSERT INTO hostel_staff(hostel_id,warden_id,subwarden_id) VALUES ('$hid', 'no' ,'no')";

	

// run sql
if ($conn->query($sql) === TRUE && $conn->query($sql_staff)==TRUE) {
// run sql
if ($conn->query($sql) === TRUE && $conn->query($sql_staff)==TRUE) {
	
//this is already implimented system
	header("Location: ..\Pages\main_admin\index.html");
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>