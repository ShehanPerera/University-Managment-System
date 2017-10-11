<?php
$key = $_GET["key"];
include('STD_Con.php');
//Query
	$sql = "SELECT reg_no, full_Name, year_of_study, faculty, course FROM new_student_detail WHERE (full_Name LIKE '%".$key."%' OR reg_no LIKE '%".$key."%' OR faculty LIKE '%".$key."%' OR course LIKE '%".$key."%') AND  	aproval= 0 ;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover\">
    		<tr>
    		<th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    		</tr>";
		while($row = $result->fetch_assoc()) {
		echo"<tr id=\"".$row["reg_no"]."\" onclick=\"Redirect(this.id)\"><td>".$row["reg_no"]."</td><td>".$row["full_Name"]."</td><td>".$row["year_of_study"]."</td><td>".$row["faculty"]."</td><td>".$row["course"]."</td></tr>";
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