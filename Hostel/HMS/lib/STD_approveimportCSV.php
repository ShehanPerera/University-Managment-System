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
	//sql for basic student details
	$sql = "INSERT INTO new_student_detail (`reg_no`, `full_name`, `name_initial`, `sex`, `nic`, `dob`, `faculty`, `course`, `year_of_study`, `aproval`) VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."', '".$data[7]."', ".$data[8].",'no');";
	// sql for student contact details
	$sql_Contact = "INSERT INTO new_student_contact(reg_no, contact_no, email, resedential_adress, district, gs_devision, ds_devision) VALUES ('".$data[0]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."')";
	// sql for gurdian details
	$sql_Gurdian = "INSERT INTO new_gurdian_detail (`reg_no`, `gurdian_name`, `relationship`, `contact_no`, `adress`, `police_station`, `emergency_name`, `emergency_no`) VALUES ('".$data[0]."', '".$data[15]."', '".$data[16]."', '".$data[17]."', '".$data[18]."', '".$data[19]."', '".$data[20]."', '".$data[21]."');";
 
	$sql_Pic = "INSERT INTO `student_pic` (`reg_No`, `name`, `Image`) VALUES ('$data[0]', NULL, NULL)";
	// run queries
	$conn->query($sql);
	$conn->query($sql_Contact);
	$conn->query($sql_Gurdian);
	$conn->query($sql_Pic);
	}	
	$c++;
}
 
fclose($handle);
//print "Import done"
// echo "<script type='text/javascript'>alert('Successfully Imported a CSV File for User!');</script>";
// echo "<script>document.location='../Pages/main_admin/newReg.php'</script>";
//view upload form
}
?>