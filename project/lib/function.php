<?php
include("conn.php");
function auth($username,$password){
	$result = mysqli_query("select * from user where username='$username' AND password='$password'");
	
	if(mysqli_num_rows($result)==1){
		return true;
	}else {
		return false;
	}
}

function userType($username,$password){
	$result = mysqli_query("select usertype from user where username='$username'AND password='$password'");
	
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_array($result);
		return $row['usertype'];
	}
}
function getMedicine($type){
	$query="SELECT*FROM  medicines where type='$type'";
	$result=mysqli_query($query)or die(mysqli_error());
	
	echo "<table>
	<tr >
	<th>Select</th>
	<th>Drug-name</th>	
	</tr>";
	echo "<tr><td colspan='6'>&nbsp</td></tr>";
	
	while($row=mysqli_fetch_row($result))
	{
		echo "<tr style='color:black'>";
		echo "<td align='center' ><input type='checkbox' name='drug_name[]' value='".$row[0]."'/></td>";
		echo "<td align='center'>".$row[0]."</td>";
		echo "<td>No of medicines :</td>";
		$no=$row[3];
		echo "<select name='".$row[0]."'>";
		for($i=5;$i<=$no/5;$i++){
		echo "<option value='".$i."'>".$i."</option>";
	} 				
	echo "</tr>";
	}
	echo "</table>";	
}
function addSelectedMedicines($drug_name,$noofmedicines){
	$sql = "INSERT INTO prescription(drug_name,noofmedicines) VALUES ('$drug_name','$noofmedicines')";
	$result = mysqli_query($sql)or die(mysqli_error());
	
}
function userId($stregno){
	$result = mysqli_query("select * from student_details where stregno='$stregno'");
	
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_array($result);
	}
}	
function username($userid){
	$result = mysqli_query("select username from person_details where person_id='$userid'");
	
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_array($result);
		return $row['username'];
	}
}
?>

