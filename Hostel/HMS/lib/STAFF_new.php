<?php
include('STD_Con.php');
// basic info
$idno = $_POST["idNo"];
$Name = $_POST["fullName"];
$sex = $_POST["Gender"];
$nic = $_POST["NIC"];
$contactNo = $_POST["SConNo"];
$email = $_POST["EMail"];
$resAddress = $_POST["Raddress"];
$serAddress = $_POST["Saddress"];



$sql = "INSERT INTO student_detail (id, full_name, gender,nic,contactNo,email,resedential_adress ) VALUES ('".$idno."', '".$fullName."', '".$sex."', '".$nic."', '".$contactNo."', '".$email."', '".$resAddress."');";

$sql_Service = "INSERT INTO student_contact(id, resedential_adress, service_adress, relevent_hostel1, relevent_hostel2,relevent_hoste3 ) VALUES ('$idno', no ,no, no)";


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

	if(img_size == FALSE)
	{
		echo "thats not an image";
	}
	else
	{
		$sql_img = "INSERT INTO `staff_Pic`(`reg_No`, `name`, `Image`) VALUES ('$idno','$img_name','$img');";
		if($conn->query($sql_img) === TRUE)
			$isImgSet = TRUE;
	}
}

// run sql
if ($conn->query($sql) === TRUE && $conn->query($sql_Service) === TRUE && $isImgSet) {
	print '<script type="text/javascript">';
	print 'var r = confirm("staff data was added successfully. do you want to add another staff?");';
	print 'if (r == true) {';
    print 'document.location.href = "..\Pages\Main\user.php";';
	print '} else {';
    print 'document.location.href = "..\Pages\Main\index.php";';
	print '} ';
	print '</script>';
	//header("Location: ..\Pages\Student\index.html");
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>