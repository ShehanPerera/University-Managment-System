<?php

include('HMS/lib/STD_Con.php');
// basic info
$regNo = $_POST["regNo"];
$fullName = $_POST["name"];
$iniName = $_POST["iniName"];
$sex = $_POST["Gender"];
$nic = $_POST["nic"];
$dob = $_POST["DOB"];
$faculty = $_POST["Faculty"];
$course = $_POST["Course"];
$year = $_POST["year"];
// Student contact details
$contactNo = $_POST["phone"];
$email = $_POST["email"];
$resAddress = $_POST["Saddress"];
$district = $_POST["SDistrict"];
$gsDiv = $_POST["GSD"];
$dsDiv = $_POST['DSD'];
// Guedian details
$gname=$_POST["Gname"];
$relation = $_POST["Relationship"];
$GcontNo = $_POST["Gcontact"];
$GAddress = $_POST["Gaddress"];
$GPoliceStation = $_POST["police"];
$emName = $_POST["EName"];
$emContsct = $_POST["Econtact"];
//sql for basic student details
if(isset($regNo,$fullName,$iniName,$sex,$nic,$dob,$faculty,$course,$year,$contactNo,$email,$resAddress,$district,$gsDiv,$dsDiv,$gname,$relation,$GcontNo,$GAddress,$GPoliceStation,$emName,$emContsct))
{
$sql = "INSERT INTO new_student_detail (reg_no, full_name, name_initial, sex, nic, dob, faculty, course, year_of_study, aproval) VALUES ('".$regNo."', '".$fullName."', '".$iniName."', '".$sex."', '".$nic."', '".$dob."', '".$faculty."', '".$course."', ".$year.", 0);";
// sql for student contact details
$sql_Contact = "INSERT INTO new_student_contact(reg_no, contact_no, email, resedential_adress, district, gs_devision, ds_devision) VALUES ('".$regNo."','".$contactNo."','".$email."','".$resAddress."','".$district."','".$gsDiv."','".$dsDiv."')";
// sql for gurdian details
$sql_Gurdian = "INSERT INTO new_gurdian_detail (`reg_no`, `gurdian_name`, `relationship`, `contact_no`, `adress`, `police_station`) VALUES ('".$regNo."', '".$gname."', '".$relation."', '".$GcontNo."', '".$GAddress."', '".$GPoliceStation."');";

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
$conn->query($sql); 
$conn->query($sql_Contact);
$conn->query($sql_Gurdian) ;

	
	header("Location:Success.php#Register");
}
else
{

}
?>
