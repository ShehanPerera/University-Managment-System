<?php
$key = $_GET["key"];
include("session.php");
include('STD_Con.php');

$hid=$_SESSION['hostel_id'];

//Query
	$sql = "SELECT s.reg_no, s.full_Name, s.year_of_study, s.faculty, s.course FROM student_detail as s, student_hostel as p WHERE (s.full_Name LIKE '%".$key."%' OR s.reg_no LIKE '%".$key."%' OR s.faculty LIKE '%".$key."%' OR s.course LIKE '%".$key."%') AND s.reg_no = p.reg_No AND room_no='0' AND p.hostel_id='$hid';";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover table-fixed\">
			<thead>
    		<tr>
    		<th class=\"col-xs-2\">Reg. No.</th><th class=\"col-xs-4\">Full Name</th><th class=\"col-xs-2\">Year</th><th class=\"col-xs-2\">faculty</th><th class=\"col-xs-2\">Course</th>
    		</tr>
    		</thead>
    		<tbody>";
		while($row = $result->fetch_assoc()) {
		echo"<tr id=\"".$row["reg_no"]."\" onclick=\"Redirect(this.id)\"><td class=\"col-xs-2\">".$row["reg_no"]."</td><td class=\"col-xs-4\">".$row["full_Name"]."</td><td class=\"col-xs-2\">".$row["year_of_study"]."</td><td class=\"col-xs-2\">".$row["faculty"]."</td><td class=\"col-xs-2\">".$row["course"]."</td></tr>";
		}
		echo "
			</tbody>
			</table>";
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