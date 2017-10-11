<?php
$error = "";
$isRegOk = true;
include('STD_Con.php');
$key = $_GET["key"];

	$sql_payment  ="SELECT * FROM payment_details WHERE reg_No='$key' ORDER BY payday DESC LIMIT 1;";
	$sql_student  ="SELECT name_initial, reg_no FROM student_detail WHERE reg_no='".$key."';";
	$sql_hostel   = "SELECT H.anual_payment FROM student_hostel as S, hostel_detail as H WHERE H.id = S.hostel_id;";
	
	$result_pay   = $conn->query($sql_payment);
	$result_std   = $conn->query($sql_student);
	$result_anual = $conn->query($sql_hostel);
// get data from payment details
if ($result_pay->num_rows > 0)
	{
		while($row = $result_pay->fetch_assoc())
		{
			$paid     = $row['Paid_amount'];
			$date     = $row['payday'];
			$adm_date = $row['admition_Date'];
			$required = $row['BalanceToPay'];
		}
		
	}
	else
	{
		$paid     = 0;
		$date     = "";
	}
// get Anual Hospal fee

if ($result_anual->num_rows > 0)
	{
		while($row = $result_anual->fetch_assoc())
		{
			$anual_pay = $row['anual_payment'];
		}
	}
// get name
if ($result_std->num_rows > 0)
	{
		while($row = $result_std->fetch_assoc())
		{
			$intName = $row['name_initial'];
			$regNo = $row['reg_no'];
		}
	}
// Calculations
	$lableR = '';
	$valueR = 0;
if((!isset($required)) && isset($regNo, $anual_pay))
{
	$required = $anual_pay;
}
if (isset($regNo, $anual_pay, $intName, $required)) {
	// if student has to pay
	if ($required>=0) {
		$lableR = '<label>Required Payment</label>';
		$valueR = $required;
		$style  = 'has-error';
	}
	// 
	else
	{
		$lableR = '<label>Already Payed</label>';
		$valueR = $required*(-1);
		$style  = 'has-success';
	}
	$anualPaid = $anual_pay - $required;
	if ($anualPaid>$anual_pay) {
		$anualPaid = $anual_pay;
	}
}
// Is there is nothing set
else
{
	$regNo = '';
	$anualPaid = '';
	$intName = '';
	$paid = '';
	$anual_pay = '';
	$valueR = '';
	$isRegOk = false;
}
?>