<?php
$key = $_GET["key"];
include('STD_Con.php');
include("session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }

    $var_value = $_SESSION['hosid'];

//
$date=date("Y/m/d");

	$sql_out="SELECT hostel_addmission.reg_no ,student_hostel.* FROM hostel_addmission,student_hostel WHERE (student_hostel.hostel_id='$var_value'  AND  hostel_addmission.vacate_date<'$date') AND hostel_addmission.reg_no=student_hostel.reg_no GROUP BY hostel_addmission.reg_no;";

	$result = $conn->query($sql_out);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "$var_value";
		echo "<table class=\"table table-hover\">
    		<tr>
    		<th></th><th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    		</tr>";
		while($row1 = $result->fetch_assoc()) {
			$regno=$row1["reg_no"];

			$sql = "SELECT `reg_no`, `full_name`,`faculty`, `course`, `year_of_study` FROM student_detail WHERE reg_no ='$regno' ;";
			$result_detail = $conn->query($sql);
			$row = $result_detail->fetch_assoc();

		echo "<tr><td><input type=\"checkbox\" name = \"regNo[]\" id = \"regNo\" class = \"case\" value = \"".$row["reg_no"]."\"></td><td>".$row["reg_no"]."</td><td>".$row["full_name"]."</td><td>".$row["year_of_study"]."</td><td>".$row["faculty"]."</td><td>".$row["course"]."</td></tr>";
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