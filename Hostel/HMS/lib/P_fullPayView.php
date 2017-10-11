<?php
include('STD_Con.php');
$key = $_GET["key"];

$sql_payment ="SELECT * FROM payment_details WHERE  	reg_No='".$key."';";
$sql_student ="SELECT name_initial FROM student_detail WHERE reg_no='".$key."';";
	
	$result_pay = $conn->query($sql_payment);
	$result_std = $conn->query($sql_student);

if ($result_pay->num_rows > 0)
	{
		while($row = $result_pay->fetch_assoc())
		{
			$regNo = $row['reg_No'];
			$fullamount=$row['Full_Payment'];
			$paid = $row['Paid_amount'];
			$date = $row['Final_payday'];
			$pay=$fullamount-$paid;
		}
	}

if ($result_std->num_rows > 0)
	{
		while($row = $result_std->fetch_assoc())
		{
			$intName = $row['name_initial'];
		}
	}

?>