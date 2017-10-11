<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>index</title>

</head>


<body style="background-image:url(images/ab1.jpg); background-size: cover;">
<h1> <center>Edit User Details</center></h1>
<center><a href="admin.php">Home</a></center>
<form>
<table>
<tr>
	  <td  style="text-align: left;">Enter User Registration Number to edit:<br>
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
			include("conn.php");
			
				
			$result=mysql_query("SELECT * FROM newmeduser WHERE regno='2013SP000'");
		
			while($test = mysql_fetch_array($result))
			{
				$id = $test['regno'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['uname']."</font></td>";
				echo"<td><font color='black'>" .$test['email']."</font></td>";
				echo"<td><font color='black'>". $test['job']. "</font></td>";
				echo"<td><font color='black'>". $test['regno']. "</font></td>";
				echo"<td><font color='black'>". $test['user_type']. "</font></td>";	
				echo"<td> <a href ='view.php?regno=$id'>Edit</a>";
				echo"<td> <a href ='Delete_User.php?regno=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>