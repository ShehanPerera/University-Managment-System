<?php
if (isset($_POST['submit'])) 
{
include('STD_Con.php');
 
//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");
 $c = 0;
 $newValue = 0;
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	// to avoid title row
	if ($c != 0) {
	$sql_PAyCheck = "SELECT Paid_amount FROM payment_details WHERE reg_No = '$data[0];";
	$res = $conn->query($sql_PAyCheck);
	
	if($res->num_rows > 0)
	{
		while($row = $res->fetch_assoc())
		{
			
			$paid = $row['Paid_amount'];
			echo "$paid";
			$newValue = $paid + $data[1];
		}
	}	
		$sql_payment = "UPDATE INTO payment_details SET Paid_amount = $newValue, Final_payday = '$data[2]' WHERE reg_No = $data[0];";
		// run queries
		$conn->query($sql_payment);
	}	
	$c++;
}
 
fclose($handle);
header("Location: ..\Pages\main_admin\index.html");
}
?>