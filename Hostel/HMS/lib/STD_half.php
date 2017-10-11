<?php
$key = $_GET["key"];
include('STD_Con.php');
//Query
	$sql = "SELECT reg_No, Full_Payment,Paid_amount, Final_payday FROM payment_details WHERE regNo LIKE '%".$key."%';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover\">
    		<tr>
    		<th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    		</tr>";
		while($row = $result->fetch_assoc()) {
		echo"<tr id=\"".$row["reg_No"]."\" onclick=\"Redirect(this.id)\"><td>".$row["reg_No"]."</td><td>".$row["full_Name"]."</td><td>".$row["year_of_study"]."</td><td>".$row["faculty"]."</td><td>".$row["course"]."</td></tr>";
		}
		echo "</table>";
		}
		else
		{
			echo "<table class=\"table table-hover\">
    			<tr>
    			<th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    			</tr>
    			<span id></span>
    			</table>";
		}
?>	