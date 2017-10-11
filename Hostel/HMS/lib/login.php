<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['UserName']) || empty($_POST['password'])) {
$error = "UserName or Password is invalid";
}
else
{
// Define $UserName and $password
$SESuser=$_POST['UserName'];
$SESPassword=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include("STD_Con.php");
// To protect MySQL injection for Security purpose
$SESuser = stripslashes($SESuser);
$SESPassword = stripslashes($SESPassword);
// MD5 encription for pasword
$pwhash = md5($SESPassword);
// SQL query to fetch information of registerd users and finds user match.
$SESQuery = $conn->query("SELECT * FROM user_details WHERE pasword='$pwhash' AND UserName='$SESuser'");
$rows = $SESQuery->num_rows;
if ($rows == 1) {
$_SESSION['Loged_User']=$SESuser;
while($row = $SESQuery->fetch_assoc())
{ 
	$UType = $row['type'];
	$_SESSION['type'] = $UType;
	$SID = $row['user_id'];
}
if($UType != 'admin')
{
	$sql_Hos = "SELECT hostel_id FROM hostel_staff WHERE warden_id = '$SID' OR subwarden_id = '$SID';";
	$res = $conn->query($sql_Hos);
	$Hos_Rows = $res->num_rows;
	while($H_row = $res->fetch_assoc())
	{
		$HID = $H_row['hostel_id'];
		$_SESSION['HID'] = $HID;
	}
}

	 // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
$conn->close(); // Closing Connection
}
}
?>
