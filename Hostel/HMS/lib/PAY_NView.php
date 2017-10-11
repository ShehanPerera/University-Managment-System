<?php
include('session.php');
$key = $_GET["key"];
include('STD_Con.php');
//Query
if($_SESSION['type'] == 'admin')
{
	$sql = "SELECT s.name_initial, s.nic, p.reg_No,p.Paid_amount,p.BalanceToPay FROM payment_details as p, (SELECT reg_No, max(payday) as mxpay FROM payment_details group by reg_No) as q, student_detail AS s WHERE p.reg_No = q.reg_No AND p.payday = q.mxpay AND s.reg_No = p.reg_No AND p.Paid_amount = 0";
}
else
{
	$HID = $_SESSION['HID'];
	$sql = "SELECT s.name_initial, s.nic, p.reg_No,p.Paid_amount,p.BalanceToPay FROM payment_details as p, (SELECT reg_No, max(payday) as mxpay FROM payment_details group by reg_No) as q, student_detail AS s, student_hostel as h WHERE p.reg_No = q.reg_No AND p.payday = q.mxpay AND s.reg_No = p.reg_No AND p.reg_No = h.reg_no AND h.hostel_id = '$HID' AND p.Paid_amount = 0";
}
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-bordered table-fixed\">
		<thead>
    		<tr>
    		<th class=\"col-xs-1\">No</th>
    		<th class=\"col-xs-2\">Name of Student</th>
    		<th class=\"col-xs-1\">Nic No</th>
    		<th class=\"col-xs-1\">Reg. No.</th>
    		<th class=\"col-xs-1\">Paid amount</th>
    		
    		</tr>
    		</thead>
    		<tbody>";
    		$count = 1;
		while($row = $result->fetch_assoc()) {
		echo"
		<tr id=\"".$row["reg_No"]."\" onclick=\"Redirect(this.id)\">
		<td class=\"col-xs-1\">".$count."</td>
		<td class=\"col-xs-2\">".$row["name_initial"]."</td>
		<td class=\"col-xs-1\">".$row["nic"]."</td>
		<td class=\"col-xs-1\">".$row["reg_No"]."</td>
		<td class=\"col-xs-1\">".$row["Paid_amount"]."</td>
		</tr>
		";
		$count++;
		}
		echo "
			</tbody></table>";
		}
		else
		{
			echo "<table class=\"table table-bordered table-fixed\">
		<thead>
    		<tr>
    		<th class=\"col-xs-1\">No</th>
    		<th class=\"col-xs-2\">Name of Student</th>
    		<th class=\"col-xs-1\">Nic No</th>
    		<th class=\"col-xs-1\">Reg. No.</th>
    		<th class=\"col-xs-1\">Paid amount</th>
    		
    		</tr>
    		</thead></table>";
		}
?>	