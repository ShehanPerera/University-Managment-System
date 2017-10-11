<?php
include('STD_Con.php');
// basic info
$hid=$_POST["hid"];
$hname = $_POST["hname"];
$Ocontact = $_POST["Cont"];
$oaddress = $_POST["address"];
$Gender = $_POST["gender"];
$capasity = $_POST["Cap"];
$pay = $_POST["anual"];

$fill = $_POST['fill'];
$avail = $capasity-$fill;

$sql = "UPDATE `hostel_detail` SET `name`='$hname',`address`='$oaddress',`contact_no`=$Ocontact,`capacity`= $capasity,`available`= $avail ,`anual_payment`= $pay,`category`= '$Gender' WHERE `id`= '$hid' ;";

// run sql
if ($conn->query($sql) === TRUE) {
	
	header("Location: ..\Pages\main_admin\index.php");
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>