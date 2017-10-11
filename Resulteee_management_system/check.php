<?php
  include('../Hostel/HMS/lib/session1.php'); // Includes Login Script

if(isset($_SESSION['Loged_User']))
{
echo "<script>window.location='../Resulteee_management_system/admin'</script>";
}  
?>





<?php


session_start();
include('config1.php');
extract($_POST);
extract($_GET);

/* if(isset($_POST['login']))
{
	$email_id=$_POST['email'];
	$password=$_POST['pass']; */
	$pass=md5($password);
	$que=mysqli_query($con1,"select username,pasword from test1 where username='$email_id' and pasword='$pass' and student='true' ");
	
	 $row= mysqli_num_rows($que);
	 if($row)

	 {
		 $_SESSION['student']=$email_id;
		echo "<script>window.location='../Resulteee_management_system/index.php'</script>";
	 	
	 }
	
    
	
	 
	 
	  $pass1=md5($password);
	$que1=mysqli_query($con1,"select * from test1 where username='$email_id' and pasword='$pass' and hod='true'  ");
	 $row2= mysqli_num_rows($que1);
	 
	 if($row2)
	 {
		  while($query_row = mysqli_fetch_assoc($que1))
		  {
		 $_SESSION['staff']=$query_row['first_name'];
		 $c=$query_row['action'];
		  }
		  if($c==0)
		  {
			 // $_SESSION['Loged_User1']=$c; 
		  echo "<script>window.location='../Resulteee_management_system/Instructor'</script>";
		  }
		  else
		  {
			  echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Yo are not activate</font>"; 
		  }
	 }
	 	
	 
	 
	  if((isset($_SESSION['Loged_User']))||($_SESSION['res']=="radmin"))
        {
          header('location:Resulteee_management_system/admin');
        
	 } 
	  else
	 {
		 //$er="Invalid  Login";
		//header("location:index.php?err=$er");
		//exit;
	 echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid  Login</font>";
	 }
	


	?>