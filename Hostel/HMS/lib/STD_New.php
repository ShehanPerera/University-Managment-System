<?php
include('STD_Con.php');
// basic info
$regNo = $_POST["regNo"];
$fullName = $_POST["fullName"];
$iniName = $_POST["NameWitnI"];
$sex = $_POST["Gender"];
$nic = $_POST["NIC"];
$dob = $_POST["DOB"];
$faculty = $_POST["Faculty"];
$course = $_POST["Course"];
$year = $_POST["Year"];
// Student contact details
$contactNo = $_POST["SConNo"];
$email = $_POST["EMail"];
$resAddress = $_POST["Saddress"];
$district = $_POST["SRDistrict"];
$gsDiv = $_POST["SGSDiv"];
$dsDiv = $_POST['SDSDiv'];
// Guedian details
$gurdianName = $_POST["GName"];
$relation = $_POST["relationShip"];
$GcontNo = $_POST["GContact"];
$GAddress = $_POST["Gaddress"];
$GPoliceStation = $_POST["PoliceSt"];
$EMName = $_POST["Em_Name"];
$EMCont = $_POST["Em_No"];
// Student Hostel DEtails
$HostelID = $_POST["HostelID"];
// $BlockNo = $_POST["B_No"];
$RoomNo = $_POST["R_No"];
//sql for basic student details
$sql = "INSERT INTO student_detail (reg_no, full_name, name_initial, sex, nic, dob, faculty, course, year_of_study) VALUES ('".$regNo."', '".$fullName."', '".$iniName."', '".$sex."', '".$nic."', '".$dob."', '".$faculty."', '".$course."', ".$year.");";
// sql for student contact details
$sql_Contact = "INSERT INTO student_contact(reg_no, contact_no, email, resedential_adress, district, gs_devision, ds_devision) VALUES ('".$regNo."','".$contactNo."','".$email."','".$resAddress."','".$district."','".$gsDiv."','".$dsDiv."')";
// sql for gurdian details
$sql_Gurdian = "INSERT INTO gurdian_detail (`reg_no`, `gurdian_name`, `relationship`, `contact_no`, `adress`, `police_station`, `emergency_name`, `emergency_no`) VALUES ('".$regNo."', '".$gurdianName."', '".$relation."', '".$GcontNo."', '".$GAddress."', '".$GPoliceStation."', '".$EMName."', '".$EMCont."');";
//sql for student hostel details
$sql_Hostel = "INSERT INTO `student_hostel`(`reg_no`, `hostel_id`, `room_no`) VALUES ('$regNo','$HostelID','$RoomNo');";
//sql for payment details
// upload photo
//file properties
$file = $_FILES['pro_Picture']['tmp_name'];
$isImgSet = FALSE;
if(!isset($file))
{
	echo "please select image";
}
else
{
	$img = addslashes(file_get_contents($file));
	$img_name = addslashes($_FILES['pro_Picture']['name']);
	$img_size = getimagesize($file);

	if($img_size == FALSE)
	{
		echo "thats not an image";
	}
	else
	{
		$sql_img = "INSERT INTO `student_Pic`(`reg_No`, `name`, `Image`) VALUES ('$regNo','$img_name','$img');";
		if($conn->query($sql_img) === TRUE)
			$isImgSet = TRUE;
	}
}

// run sql
if ($conn->query($sql) === TRUE && $conn->query($sql_Contact) === TRUE && $conn->query($sql_Gurdian) === TRUE && $conn->query($sql_Hostel) === TRUE && $isImgSet) {
	print '<script type="text/javascript">';
	print 'var r = confirm("student data was added successfully. do you want to add another student?");';
	print 'if (r == true) {';
    print 'document.location.href = "..\Pages\Student\student_new.php";';
	print '} else {';
    print 'document.location.href = "..\Pages\Student\index.php";';
	print '} ';
	print '</script>';
	//header("Location: ..\Pages\Student\index.html");
	echo "Error: " . $sql . "<br>" . $conn->error;
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>