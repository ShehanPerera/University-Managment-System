
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }

   
 ?>



<?php
include('STD_Con.php');
$key = $_GET['key'];

$sql_hostel ="SELECT * FROM hostel_detail WHERE id='".$key."';";
$sql_warden = "SELECT * FROM  hostel_staff where hostel_id = '$key';";
$sql_subW = "SELECT s.subwarden_id, u.Name FROM user_details as u, hostel_staff as s WHERE s.subwarden_id = u.user_id AND s.hostel_id = '$key';";
	//student_hostel
	//$result_pay = $conn->query($sql_payment);
	        $result_hos = $conn->query($sql_hostel);
	$res_war = $conn->query($sql_warden);
	$res_sub = $conn->query($sql_subW);
$subId = '';$warId = '';

if ($result_hos->num_rows > 0)
	{
		while($row = $result_hos->fetch_assoc())
		{
			$hosid     = $row['id'];
			$name      = $row['name'];
			$address   = $row['address'];
			$capacity  = $row['capacity'];
			$available = $row['available'];
			$ContactNo = $row['contact_no'];
			$anualPay  = $row['anual_payment'];
			$cat       = $row['category'];
		}
	}

	if ($res_war->num_rows > 0)
	{
		while($row = $res_war->fetch_assoc())
		{
			$warId  = $row['warden_id'];
		
			
		}
	}

	if ($res_sub->num_rows > 0)
	{
		while($row = $res_sub->fetch_assoc())
		{
			$subId   = $row['subwarden_id'];
			
		}
	}
	


	
	include('connection.php');
		
	$resultid="SELECT * FROM user where user_id = '$warId'" ;
	$resid=$conn->query($resultid);
	if ($resid->num_rows > 0)
	{
		while($row2 = $resid->fetch_assoc())
		{
	
		$wrName = $row2['first_name'];
		}
	}
	
	$resultid2="SELECT * FROM user where user_id = '$subId'";
	$resid2=$conn->query($resultid2);
	
	if ($resid2->num_rows > 0)
	{
		while($row3 = $resid->fetch_assoc())
		{
	
		$subName = $row3['first_name'];
		}
	}
	
	if(!isset($warId, $wrName))
	{
			$warId = '';
			$wrName = '';
	}

	if(!isset($subId, $subName))
	{
			$subId = '';
			$subName = '';
	}

	
?>