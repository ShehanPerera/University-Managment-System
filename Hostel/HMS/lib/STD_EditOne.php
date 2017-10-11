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
$HostelName = $_POST["HostelNm"];
$BlockNo = $_POST["B_No"];
$RoomNo = $_POST["R_No"];
//sql for basic student details
$sql = "UPDATE student_detail SET full_name = '$fullName', name_initial = '$iniName', sex = '$sex', nic = '$nic', dob = '$dob', faculty = '$faculty', course = '$course', year_of_study = '$year' WHERE reg_no = '$regNo';";
// sql for student contact details
$sql_Contact = "UPDATE student_contact SET contact_no = '$contactNo', email = '$email', resedential_adress = '$resAddress', district = '$district', gs_devision = '$gsDiv', ds_devision = '$dsDiv' WHERE reg_no = '$regNo';";
// sql for gurdian details
$sql_Gurdian = "UPDATE gurdian_detail SET gurdian_name = '$gurdianName', relationship = '$relation', contact_no = '$GcontNo', adress = '$GAddress', police_station = '$GPoliceStation', emergency_name = '$EMName', emergency_no = '$EMCont' WHERE reg_no = '$regNo';";
//sql for student hostel details
$sql_Hostel = "UPDATE student_hostel SET hostel_name = '$HostelName', room_no = '$RoomNo'WHERE reg_no = '$regNo';";
// run sql
if ($conn->query($sql) === TRUE && $conn->query($sql_Contact) === TRUE && $conn->query($sql_Gurdian) === TRUE && $conn->query($sql_Hostel) === TRUE) {
	print '<script type="text/javascript">';
	print 'alert("student data was Updated successfully!");';
    print 'document.location.href = "..\Pages\Student\index.php";';
	print '</script>';
	//header("Location: ..\Pages\Student\index.html");
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>