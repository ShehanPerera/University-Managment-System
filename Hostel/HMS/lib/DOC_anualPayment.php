<?php
include('session.php');
include('STD_Con.php');
$key = $_GET["key"];
$hos_Id = $_SESSION['hostel_id'];
//Query

	$sql  = "SELECT s.name_initial, p.reg_No,p.Paid_amount,p.BalanceToPay FROM payment_details as p, (SELECT reg_No, max(payday) as mxpay FROM payment_details group by reg_No) as q, student_detail AS s, student_hostel as h WHERE p.reg_No = q.reg_No AND p.payday = q.mxpay AND s.reg_no = p.reg_No AND p.reg_No = h.reg_no AND h.hostel_id = '$key'";
	$sqlHos = "SELECT anual_payment, name, category FROM hostel_detail WHERE id = '$hos_Id'";
	$result = $conn->query($sql);
	$resultHos = $conn->query($sqlHos);
	if ($result->num_rows > 0 && $resultHos->num_rows == 1) {
		$rowHos = $resultHos->fetch_assoc();
		$anualFee = $rowHos['anual_payment'];
		$hosName = $rowHos['name'];
		$cat = $rowHos['category'];
		if($cat == 'male')
		{
			$cat = 'Boys';
		}
		else
		{
			$cat = 'Girls';
		}
		$year = date("Y");
		$hosName = strtoupper($hosName);
		$cat = strtoupper($cat);
		// title
		echo "<h4 align=\"center\">$hosName $cat HOSTEL RENT SCHEDULE - $year</h4>
				";
		// output data of each row
		//create table
		echo "<table class=\"table table-bordered table-fixed\">
		<thead>
    		<tr>
    		<th class=\"col-xs-1\">Serial No</th>
    		<th class=\"col-xs-2\">Name of Student</th>
    		<th class=\"col-xs-1\">Reg. No.</th>
    		<th class=\"col-xs-1\">fees recived for year</th>
    		<th class=\"col-xs-1\">fees resivable</th>
    		<th class=\"col-xs-3\">remarks</th>
    		</tr>
    		</thead>
    		<tbody>";
    		$count = 1;
		while($row = $result->fetch_assoc()) {
			// Asign values to variables
			$Sname = $row['name_initial'];
			$reg = $row['reg_No'];
			$totalRecived = $row['Paid_amount'];
			$BtoP = $row['BalanceToPay'];
			// Calculations
			$anualRecived = 0;
			$recivable = 0;
			$remark = "";
			$advanced = 0;
			if ($BtoP>=0) {
				$anualRecived = $anualFee - $BtoP;
				$recivable = $BtoP;
				$remark = "";
			}
			else
			{
				$anualRecived = $anualFee;
				$resivable = 0;
				$advanced = (-$BtoP);
				$remark = "already payed $advanced advance";
			}
			

		echo"
		<tr>
		<td class=\"col-xs-1\">".$count."</td>
		<td class=\"col-xs-2\">".$Sname."</td>
		<td class=\"col-xs-1\">".$reg."</td>
		<td class=\"col-xs-1\">".$anualRecived."</td>
		<td class=\"col-xs-3\">".$recivable."</td>
		<td class=\"col-xs-2\">".$remark."</td></tr>
		";
		$count++;
		}
		echo "
			</tbody></table>";
		}
		else
		{
			echo "<table class=\"table table-bordered\">
    			<tr>
    			<th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    			</tr>
    			<span id></span>
    			</table>";
		}
?>	