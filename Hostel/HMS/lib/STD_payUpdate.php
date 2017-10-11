<?php
include('STD_Con.php');

$regNo = $_GET["RegNo"];
$date=$_GET["payDate"];
$amount=$_GET["amount"];
$paid=$_GET["Overpaid"];
$Bal = $_GET["req"];
$ADMD = $_GET["admDate"];
// Calculations
$paid = $paid+$amount;
$Bal = $Bal-$amount;
$new_amount=$amount+$paid;



$sql ="INSERT INTO `payment_details`(`reg_No`, `Paid_amount`, `payment`, `BalanceToPay`, `payday`, `admition_Date`) VALUES ('$regNo',$paid,$amount,$Bal, '$date', '$ADMD');";

// run sql
if ($conn->query($sql) === TRUE) {
	header("Location: ..\Pages\main_admin\index.php");
} 


else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>