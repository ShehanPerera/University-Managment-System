<?php
include_once('conn.php');
include_once ('User_Registration.php');

if(isset($_POST['submit']))
  {
    	
	$name=$_POST['uname'];
	$email=$_POST['email'];
	$job=$_POST['job'];
	$regno=$_POST['regno'];    
	$user_type=$_POST['user_type'];
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
  $repassword=md5('$password');
  
	$insertuser = "INSERT INTO  newmeduser (uname,email,job,reg,user_type,user_name,password)
    VALUES ('$name','$email','$job','$regno','$user_type','$user_name','$repassword')";
	
	


	if(!mysqli_query($conn, $insertuser )) 
	{
		echo "Error: " . $insertuser  . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
  }
 ?>
 