<?php
include ('conn.php');
	$sql="SELECT * FROM tabletavai";
	
	$records=mysqli_query($conn,$sql);
	
	?>

	
<!Doctype html>
<html>
<title>
DOCTOR
</title>
<link href="css/admin.css" type="text/css" rel="stylesheet" />
<body>
	
		<div class="flex-container">
		<header>
		<img src="images/logo.jpg" align ="left" alt="healthcentre" width="150" height="150">
		<h1>Patient and Resource Management System </h1>
		<h2>Health Center University of Jaffna</h2>
		</header>
	<ul>
		<li><a class="active" href="doctor.php">Home</a></li>
		
		<li style="float:right"><a href= "logout.php">Logout</a></li>
		
	</ul>



<body style="background-color:#bfe8f7;">
<table BORDER=1>
<tr>
<th></th>
<th>tabletName</th>
<th>storkAvail</th>
</center>
</tr>


<tr>
<td> <?php echo $row['tabletName']; ?> </td>
<td> <?php echo $row['storkAvail']; ?> </td>
</tr>

</table>
</form>
</body>
</html>
