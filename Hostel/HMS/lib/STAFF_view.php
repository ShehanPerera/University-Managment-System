<?php<?php
$key = $_GET["key"];
include('STD_Con.php');
//Query
	$sql = "SELECT id, Full_name, gender, nic, contactNo,email,resdential_adress FROM staff_detail WHERE full_Name LIKE '%".$key."%' OR id LIKE '%".$key."%' ;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover\">
    		<tr>
    		 <th>id. No.</th><th>Full Name</th><th>Contact No</th>
    		</tr>";
		while($row = $result->fetch_assoc()) {
		echo" <tr id=\"".$row["id"]."\" onclick=\"Redirect(this.id)\"><td>".$row["id"]."</td><td>".$row["Full_name"]."</td><td>".$row["contactNo"]."</td><td>";
		}
		echo "</table>";
		}
		else
		{
			echo "<table class=\"table table-hover\">
    			<tr>
    			 <th>id. No.</th><th>Full Name</th><th>Contact No</th>
    			</tr>
    			<span id></span>
    			</table>";
		}
?>	
	