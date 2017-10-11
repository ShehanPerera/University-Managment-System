<?php
$key = $_GET["key"];
include('STD_Con.php');
//Query
	$sql = "SELECT s.reg_no, s.full_Name, s.year_of_study, s.faculty, s.course FROM student_detail as s, student_pic as p WHERE (s.full_Name LIKE '%".$key."%' OR s.reg_no LIKE '%".$key."%' OR s.faculty LIKE '%".$key."%' OR s.course LIKE '%".$key."%') AND s.reg_no = p.reg_No AND p.name IS NULL;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover\">
    		<tr>
    		<th></th><th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    		</tr>";
		while($row = $result->fetch_assoc()) {
		echo "<tr><td><input type=\"checkbox\" name = \"regNo[]\" id = \"regNo\" class = \"case\" value = \"".$row["reg_no"]."\"></td><td>".$row["reg_no"]."</td><td>".$row["full_Name"]."</td><td>".$row["year_of_study"]."</td><td>".$row["faculty"]."</td><td>".$row["course"]."</td></tr>";
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