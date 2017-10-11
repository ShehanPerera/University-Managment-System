<?php
  include("session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../index.php');
  }
$utype=$_SESSION['usertype'];
//$hos=$_SESSION['hostel_id'];

$key = $_GET["key"];
include('STD_Con.php');
//Query
	// $sql = "SELECT reg_no, full_name, year_of_study, faculty, course FROM student_detail WHERE full_name LIKE '%".$key."%' OR reg_no LIKE '%".$key."%' OR faculty LIKE '%".$key."%' OR course LIKE '%".$key."%';";
	// $result = $conn->query($sql);
	
		$sql="SELECT * FROM user_details WHERE  user_id LIKE '%".$key."%' OR Name LIKE '%".$key."%' ;";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			echo "<table class=\"table table-striped table-fixed\">
			<thead>
    		<tr>
    		<th class=\"col-xs-2\"> Staff Id</th><th class=\"col-xs-4\">Name</th><th class=\"col-xs-2\">Type</th ><th class=\"col-xs-2\"></th>
    		</tr>
    		</thead>
    		<tbody>"; 
    		while($row = $result->fetch_assoc()) 
    		{
    			$id = $row["user_id"];
// -----------dispaly stuff details table-------------------------------------------------
				echo"<tr>
						<td class=\"col-xs-2\">".$row["user_id"]."</td>
						<td class=\"col-xs-4\">".$row["Name"]."</td>
						<td class=\"col-xs-2\">".$row["type"]."</td>
						<th class=\"col-xs-2\">
						<button type=\"button\" onclick=\"deleteUser('$id');\"class=\"btn btn-danger btn-xs ";
// ----------for disable delete button for loged in user----------------------------------
					if ($_SESSION['user_id'] == $id) {
						echo "disabled";
					}
				echo "\"><span class=\"glyphicon glyphicon-trash\"></button>
						<bu class=\"btn btn-warning btn-xs ";
// ----------for disable edit button for loged in user------------------------------------
					if ($_SESSION['user_id'] == $id) {
						echo "disabled";
					}	
				echo "\" href=\"#\"><span class=\"glyphicon glyphicon-edit\"></a>
						</th>
					</tr>";
			}
			echo "
			</tbody>
			</table>";
		
		}

	
		// output data of each row
		//create table
		else
		{
			echo "<table class=\"table table-hover\">
    			<tr>
    			<th>Staff Id. No.</th><th>Full Name</th><th>Contact No</th>
    			</tr>
    			<span id></span>
    			</table>";
		}
?>	