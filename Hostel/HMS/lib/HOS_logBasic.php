<?php
$key = $_GET["key"];
include('STD_Con.php');
//Query
	$sql = "SELECT reg_no, full_Name, year_of_study, faculty, course FROM student_detail WHERE full_Name LIKE '%".$key."%' OR reg_no LIKE '%".$key."%' OR faculty LIKE '%".$key."%' OR course LIKE '%".$key."%';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover\">
    		<tr>
    		<th>Log id</th><th>Reg. No.</th><th>Type</th><th>Description</th>

    		</tr>";
		while($row = $result->fetch_assoc()) {
		echo"<tr id=\"".$row["reg_no"]."\" onclick=\"Redirect(this.id)\"><td>".$row["reg_no"]."</td><td>".$row["full_Name"]."</td><td>".$row["year_of_study"]."</td><td>".$row["faculty"]."</td></tr>";
		}
		echo "</table>";
		}
		else
		{
			echo "<table class=\"table table-hover\">
    			<tr>
    			<th>Log id</th><th>Reg. No.</th><th>Type</th><th>Description</th>

    			</tr>
    			<span id></span>
    			</table>";
		}
?>	