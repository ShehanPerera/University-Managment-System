<!Doctype html>
<?php
include ('conn.php'); //connect the connection page

  include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
       if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="pharmacist")&& (!in_array("pharmacist",$_SESSION['position1']))))
        {
          header('location:../UMS/UMSlogin.php');
        }
?>
<html>
<title>
PHARMACIST
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
	<?php
			
			echo'<a class="brand" href="../UMS/index_multi.php">UMS</a>';
			
			?>
		<li><a class="active" href="parmasist.php">Home</a></li>
		
		<li style="float:right"><a href= "logout.php">Logout</a></li>
	</ul>

<html>
<body style="background-color:#bfe8f7;">
<fieldset>
<center><h2>Search By Tablet Name</h2></center>
<br>

<center><form action="indexupdate.php" method="post"></center>
<center><input type="text" name="valuetosearch" placeholder="tabletname to search"><br><br></center>
<center><input type="submit" name="search" value="search"><br><br></center>
</fieldset>
</form>
</body>
<center><table BORDER=2>
<tr>
<th>Tablet Name</th>&nbsp;<th>Tablet Available</th>

</table></center>
</html>
<br>
<br>
<center>
<?php
//include('session.php');
include('conn.php');
if(isset($_POST['search']))
{
	$valuetosearch=$_POST['valuetosearch'];
	$quary="select * from tabletavai where tabletName LIKE '%".$valuetosearch."%'";
	//$searchresult=filtertable($quary);
	$record=mysqli_query($conn,$quary);
	while($row=mysqli_fetch_array($record))
{
	echo "<tr> <form action=updatedrugs.php method=post>";
	
	echo "<td> <input type=text name=tabletName value='".$row['tabletName']."'></td>";
	echo "<td> <input type=text name=storkAvail value='".$row['storkAvail']."'></td>";
	
	echo "<td> <input type=submit name=edit>";
	echo "</form> </tr>";
	
}
}
/* else
{
	$quary="select * from tabletavai";
	$searchresult=filtertable($quary);
}
function filtertable($quary)
{
	include('conn.php');
	$filterresult=mysqli_query($conn,$quary);
	return $filterresult;
	
} */
?>
</center>