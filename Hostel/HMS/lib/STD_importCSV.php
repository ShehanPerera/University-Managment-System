<?php
if (isset($_POST['submit'])) 
{
include('STD_Con.php');
 
//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");
 $c = 0;
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	// to avoid title row
	if ($c != 0) {
		$HosID = $data[22];
		$sql_available="SELECT `available` FROM `hostel_detail` WHERE `id`='$HosID';";
	$result_avail=$conn->query($sql_available);
	$row1=$result_avail->fetch_assoc();
		$avail=$row1["available"];
	if($avail>0)
	{


	//sql for basic student details
	$sql = "INSERT INTO student_detail (reg_no, full_name, name_initial, sex, nic, dob, faculty, course, year_of_study) VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."', '".$data[7]."', ".$data[8].");";
	// sql for student contact details
	$sql_Contact = "INSERT INTO student_contact(reg_no, contact_no, email, resedential_adress, district, gs_devision, ds_devision) VALUES ('".$data[0]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."')";
	// sql for gurdian details
	$sql_Gurdian = "INSERT INTO gurdian_detail (`reg_no`, `gurdian_name`, `relationship`, `contact_no`, `adress`, `police_station`, `emergency_name`, `emergency_no`) VALUES ('".$data[0]."', '".$data[15]."', '".$data[16]."', '".$data[17]."', '".$data[18]."', '".$data[19]."', '".$data[20]."', '".$data[21]."');";
	//sql for student hostel details
	$sql_Hostel = "INSERT INTO `student_hostel`(`reg_no`, `hostel_id`, `room_no`) VALUES ('$data[0]','$data[22]','$data[23]');";
//sql for payment details
	$sql_payment = "INSERT INTO `hostel_addmission`(`reg_No`, `Admission_date`, `vacate_date`) VALUES ('$data[0]',$data[24],$data[25]);";
// sql for set empty raw for image 
	$sql_Pic = "INSERT INTO `student_pic` (`reg_No`, `name`, `Image`) VALUES ('$data[0]', NULL, NULL)";
	// run queries
	$conn->query($sql);
	$conn->query($sql_Contact);
	$conn->query($sql_Gurdian);
	$conn->query($sql_Hostel);
	$conn->query($sql_payment);
	$conn->query($sql_Pic);
	$avail=$avail-1;

	$sql_update="UPDATE `hostel_detail` SET `available`='$avail' WHERE `id`='$hos';";
				$conn->query($sql_update);
	}
	}	
	$c++;
}
 
fclose($handle);
//print "Import done"
echo "<script type='text/javascript'>alert('Successfully Imported a CSV File for User!');</script>";
echo "<script>document.location='../Pages/Student/index.php'</script>";
//view upload form
}

?>