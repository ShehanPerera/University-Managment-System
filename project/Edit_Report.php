
<?php
error_reporting(0);
include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
  $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
       if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="technician")&& (!in_array("technician",$_SESSION['position1'])))
        {
          header('location:../UMS/UMSlogin.php');
        }
		
?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit_Report</title>

</head>


<body style="background-color:#bfe8f7;">

<h1> <center>Edit Test Details</center></h1>
<center><a href="technician.php">Home</a></center>
<form>
<table>
<tr>
	  <td  style="text-align: left;">Enter regno Number to edit:<br>
	  </td>
	  <td><input name ="user_name" type="text"><br>
	  </td>
	  </tr>
	  <tr><td>
	 <input type="submit" name="submit" value="Search"></td>
	 </tr>
	 </table>
<table>	
<?php
		include('conn.php');
			
				
			$result=mysqli_query($conn,"SELECT * FROM newmeduser");
		
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['reg'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['uname']."</font></td>";
				echo"<td><font color='black'>" .$test['email']."</font></td>";
				echo"<td><font color='black'>". $test['job']. "</font></td>";
				echo"<td><font color='black'>". $test['reg']. "</font></td>";
				echo"<td><font color='black'>". $test['user_type']. "</font></td>";	
				echo"<td> <a href ='view.php?regno=$id'>Edit</a>";
				echo"<td> <a href ='Delete_User.php?regno=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			include('conn.php');
$sql="UPDATE test SET test_result='$_POST[test_result]' WHERE stregno = '$_POST[stregno]'";


if(mysqli_query($conn,$sql))
{
	header("refresh:1; url=indextestupdate.php");
}
	
else
	echo "not update";
	
?>
			
			
			
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>