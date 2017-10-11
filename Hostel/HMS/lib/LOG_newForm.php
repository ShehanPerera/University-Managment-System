<?php
	include('STD_Con.php');
	$key = $_GET['key'];
	$sql="SELECT name_initial, faculty FROM student_detail WHERE reg_no='".$key."';";
	$result = $conn->query($sql);
	// Check whether
	if ($result->num_rows == 1)
	{
		while($row = $result->fetch_assoc())
		{
			$intName = $row['name_initial'];
			$faculty = $row['faculty'];
		}
		echo "<table class=\"frmTable\">
			<tr>
				<td><label for=\"SName\">Name</label></td>
				<td><input type=\"text\" name=\"SName\" disabled=\"disable\" value=\"$intName\" class=\"form-control\"></td>
				<td><label for=\"Faculty\">Faculty</label></td>
				<td><input type=\"text\" name=\"Faculty\" disabled=\"disable\" value=\"$faculty\" class=\"form-control\"></td>
			</tr>
			<tr>
				<td><label for=\"logDate\">Date</label></td>
				<td><input type=\"date\" class=\"form-control\" name=\"LDate\"></td>
				<td><label for=\"LogType\">Log Type</label></td>
				<td>
					<select name=\"LType\" class=\"form-control\" required>
		          	<optgroup label=\"type of Log:\">
		            	<option value=\"Medical\">Medical</option>
		            	<option value=\"warning\">Warning</option>
		            	<option value=\"Suspend\">Suspend</option>
		          </optgroup>
				</td>
			</tr>
			<tr>
			<td colspan='2'><label for=\"discription\">Log Discription</label></td>
			</tr>
			<tr>
			<td colspan='4'><p><textarea name=\"discription\" id=\"discription\" class=\"form-control\" rows=\"7\" columns=\"40\"></textarea></p></td>
			</tr>
		</table>";
	}
	else
	{
		echo "<div class=\"alert alert-danger\" style=\"padding:1px; text-align:center\">Sorry, Your Reg. No is not exsisting.</div>";
	}
 ?>
