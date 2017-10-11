<?php 
  include("session.php");
  
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
  
 
 include('STD_Con.php');

	$key = $_POST["regNo"];
	$hos=$_POST["hostel"];
	$addate=$_POST["adDate"];
	$vcDate=$_POST["vcDate"];

	
	$sql_available="SELECT `available` FROM `hostel_detail` WHERE `id`='$hos';";
	$result_avail=$conn->query($sql_available);
	$row1=$result_avail->fetch_assoc();
		$avail=$row1["available"];
		//$count=$avail;
		//$echo "$avail";

	$isOK = TRUE;

foreach ($key as $regNo)
{
	if($avail>0)
	{
		$sql_std="INSERT INTO student_detail(reg_no,full_name,name_initial,sex,nic,dob,faculty,course,year_of_study) SELECT reg_no,full_name,name_initial,sex,nic,dob,faculty,course,year_of_study FROM new_student_detail WHERE reg_no ='$regNo';";
		
		$sql_gar="INSERT INTO gurdian_detail(reg_no, gurdian_name, relationship, contact_no, adress, police_station, emergency_name, emergency_no) SELECT reg_no, gurdian_name, relationship, contact_no, adress, police_station, emergency_name, emergency_no FROM new_gurdian_detail WHERE reg_no ='$regNo';";
		
		$sql_con="INSERT INTO student_contact(`reg_no`, `contact_no`, `email`, `resedential_adress`, `district`, `gs_devision`, `ds_devision`) SELECT `reg_no`, `contact_no`, `email`, `resedential_adress`, `district`, `gs_devision`, `ds_devision` FROM new_student_contact WHERE reg_no='$regNo' ;";
		
		$hos_pay="SELECT `anual_payment` FROM `hostel_detail` WHERE `id`='$hos';";
		$hos_add="SELECT `Admission_date` FROM `hostel_addmission` WHERE `reg_no`='$regNo';";
		
		$result=$conn->query($hos_pay);
		$row=$result->fetch_assoc();
			$amount=$row['anual_payment'];

		$sql_pay="INSERT INTO `payment_details`( `reg_No`, `Paid_amount`, `payment`, `BalanceToPay`, `payday`, `admition_Date`) VALUES ('$regNo',0,0,'$amount','0000-00-00','$addate');";
		$sql = "INSERT INTO student_hostel (reg_no,hostel_id,room_no) VALUES ('$regNo','$hos',0);";
		$sqldate="INSERT INTO `hostel_addmission`(`reg_no`, `Admission_date`, `vacate_date`) VALUES ('$regNo','$addate','$vcDate');";

			$sql_stddlt="DELETE FROM `new_gurdian_detail` WHERE `reg_no`='$regNo';";
			$sql_gardlt="DELETE FROM `new_student_contact` WHERE reg_no='$regNo';";
			$sql_condlt="DELETE FROM `new_student_detail` WHERE `reg_no`='$regNo';";		

		if ( $conn->query($sql_std) === TRUE && $conn->query($sql_gar) === TRUE && $conn->query($sql_con) === TRUE && $conn->query($sqldate)==TRUE && $conn->query($sql) === TRUE && $conn->query($sql_pay)) 
		{
			
			if ($conn->query($sql_stddlt) === TRUE && $conn->query($sql_gardlt) === TRUE && $conn->query($sql_condlt) === TRUE  ) 
			{
				$avail=$avail-1;
				echo "$avail";
	$sql_update="UPDATE `hostel_detail` SET `available`='$avail' WHERE `id`='$hos';";
				$conn->query($sql_update);
				$isOK=TRUE;

			}
		} 
		else {
			echo "Error: " . $sql_stddlt . "<br>" . $conn->error;
			echo "Error: " . $sql_gardlt . "<br>" . $conn->error;
			echo "Error: " . $sql_condlt . "<br>" . $conn->error;
			echo "Error: " . $sql_gar . "<br>" . $conn->error;
			echo "Error: " . $sql_con . "<br>" . $conn->error;
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "Error: " . $sql_std . "<br>" . $conn->error;

			$isOK = FALSE;
		}
	}
	else
	{
		print '<script type="text/javascript">';
 		print 'var r = alert("No More Space !");';
 		print '</script>';
	}
}
	if ($isOK) {
	print '<script type="text/javascript">';
 	print 'var r = alert("students Added successfully !");';
 	print '</script>';

	header("Location: ..\Pages\main_admin\add_new.php");
	
	}
	
?>		