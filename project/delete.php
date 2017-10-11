

<!DOCTYPE html>
<html>
<title>
Delete Report
</title>

<title>health center</title>
</head>
<body>
<fieldset>
<center><h3>Deleted User Details</h3></center>
<br>

<center><form action="delete.php" method="post"></center>
<center><h4>Enter the Registration Number to Delete Details</h4></center>
<center><input type="text" name="valuetosearch" placeholder="Registration Number"><br><br></center>
<center><input type="submit" name="search" value="search"><br><br></center>
</fieldset>
</form>
</body>
</html>
<br>
<br>
<center><table border=1>

<center>

<?php
//include('session.php');
include('conn.php');
if(isset($_POST['search']))
{
	$valuetosearch=$_POST['valuetosearch'];
	$quary="delete from newmeduser where reg LIKE '%".$valuetosearch."%'";
	//$searchresult=filtertable($quary);
	$record=mysqli_query($conn,$quary);
	header("location:admin.php");
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