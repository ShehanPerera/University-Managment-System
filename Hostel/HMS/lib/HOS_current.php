<?php
  include("session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }

   $var_value = $_SESSION['hosid'];


$key = $_GET["key"];


include('STD_Con.php');
//Query
	
	$sqlall="SELECT  
           student_detail.reg_no
          , student_detail.full_Name
          , student_detail.year_of_study
          , student_detail.faculty
          , student_detail.course
          ,student_hostel.reg_no
          ,student_hostel.room_no
          ,student_hostel.hostel_id 
      FROM student_detail,student_hostel 
      WHERE student_hostel.hostel_id = '$var_value' AND student_detail.reg_no = student_hostel.reg_no ; ";
	
	$result = $conn->query($sqlall);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover\">
    		<tr>
    			<th>Reg. No.</th><th>Full Name</th><th>Room No</th><th>Faculty</th><th>course</th>
    		</tr>";
		while($row = $result->fetch_assoc()) {
		
		echo"<tr id=\"".$row["reg_no"]."\" onclick=\"Redirect(this.id)\"><td>".$row["reg_no"]."</td><td>".$row["full_Name"]."</td><td>".$row["room_no"]."</td><td>".$row["faculty"]."</td><td>".$row["course"]."</td></tr>";
		}
		echo "</table>";
		}
		else
		{
			echo "<table class=\"table table-hover\">
    			<tr>
    			<th>Reg. No.</th><th>Full Name</th><th>Room No</th><th>Faculty</th><th>course</th>
    			</tr>;
    			<span id></span>
    			</table>";

		}
?>	