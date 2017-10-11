<?php
$key = $_GET["key"];
include('STD_Con.php');
//Query
	$sql = "SELECT id, reg_no, type, Discription FROM student_log WHERE reg_no LIKE '%".$key."%' OR type LIKE '%".$key."%';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		//create table
		echo "<table class=\"table table-hover table-fixed\">
			<thead>
    		<tr>
    		<th class=\"col-xs-2\">Reg. No.</th>
    		<th class=\"col-xs-4\">Log type</th>
    		<th class=\"col-xs-6\">Discription</th>
    		</tr>
    		</thead>
    		<tbody>";
    		// Table content
		while($row = $result->fetch_assoc()) {
		echo"<tr id=\"".$row["id"]."\" onclick=\"Redirect(this.id)\">
			<td class=\"col-xs-2\">".$row["reg_no"]."</td>
			<td class=\"col-xs-4\">".$row["type"]."</td>
			<td class=\"col-xs-6\">".$row["Discription"]."</td>
			</tr>";
		}
		echo "
			</tbody>
			</table>";
		}
		else
		{
			echo "<table class=\"table table-hover\">
    			<tr>
    			<th class=\"col-xs-2\">Reg. No.</th><th>Log </th>
    			<th class=\"col-xs-4\">Log Type</th>
    			<th class=\"col-xs-6\">Discription</th>
    			</tr>
    			</table>";
		}
?>