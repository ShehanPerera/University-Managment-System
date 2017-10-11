<?php
include ('conn.php'); //connect the connection page

 include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
       if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="madmin")&& (!in_array("madmin",$_SESSION['position1']))))
        {
          header('location:../UMS/UMSlogin.php');
        }
?>

<!Doctype html>
<html>
<title>
RECEPTIONIST
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
		<li><a class="active" href="admin.php">Home</a></li>
		
		<li style="float:right"><a href= "logout.php">Logout</a></li>
		
	</ul>
<html>

	<body style="background-color:#bfe8f7;">
	<br>
	<br>
	<br>
<center><h1>Search By Registation Number</h1></center>
<center><form action="indexreupdate.php" method="post"></center>
<center><input type="text" name="valuetosearch" placeholder="valuetosearch"><br><br></center>
<center><input type="submit" name="search" value="filter_a_detail"><br><br></center>
</form>
</body>
</html>
<?php
//include('session.php');
include('conn.php');
if(isset($_POST['search']))
{
	$valuetosearch=$_POST['valuetosearch'];
	$quary="select * from studentdetails where stregno LIKE '%".$valuetosearch."%'";
	//$searchresult=filtertable($quary);
	$record=mysqli_query($conn,$quary);
	while($row=mysqli_fetch_array($record))
{
	echo "<tr> <form action=resetrecep.php method=post>";
	
	echo "<td><br>stregno: <input type=text name=stregno value='".$row['stregno']."'></td></br>";
	echo "<td>";
	echo "<td><br> faculty:<input type=text name=faculty value='".$row['faculty']."'></td></br>";
		echo "<td><br> fullname:<input type=text name=fullname value='".$row['fullname']."'></td></br>";
	echo "<td><br> address:<input type=text name=address value='".$row['address']."'></td></br>";
		echo "<td><br>dob: <input type=text name=dob value='".$row['dob']."'></td></br>";
	echo "<td> <br>lastschool:<input type=text name=lastschool value='".$row['lastschool']."'></td></br>";
	echo "<td>";
		echo "<td><br> password:<input type=text name=password value='".$row['password']."'></td></br>";
		echo "<td>";
	echo "<td> <br>petname:<input type=text name=petname value='".$row['petname']."'></td></br>";
		echo "<td> <br>tpno:<input type=text name=tpno value='".$row['tpno']."'></td></br>";
	echo "<td><br> illness:<input type=text name=illness value='".$row['illness']."'></td></br>";
		echo "<td><br> fartheroccup:<input type=text name=fartheroccup value='".$row['fartheroccup']."'></td></br>";
	echo "<td><br> fatherage:<input type=text name=fatherage value='".$row['fatherage']."'></td></br>";
		echo "<td><br> motheroccup:<input type=text name=motheroccup value='".$row['motheroccup']."'></td></br>";
	echo "<td><br> motherage:<input type=text name=motherage value='".$row['motherage']."'></td></br>";
	echo "<td><br> usertype:<input type=text name=usertype value='".$row['usertype']."'></td></br>";
	echo "<td><br> <input type=submit></td></br>";
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






