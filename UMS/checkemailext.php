<?php 
	 include 'connection.php';
		//$username=$conn->real_escape_string($_POST["username"]);
	 $email1="";$usernic="";
	 	if((!empty($_POST['email1'])))
	 	{
	 	$email1=$_POST['email1'];
	 	 
		
		$checkdata="select * from user where email='".$email1."'";
		$query=mysql_query($checkdata);
		//$results=$conn->query($query);
		//$numRows=$results->num_rows;

		if(mysql_num_rows($query)>0)
		{

			 //echo '<span style="color:red;text-align:center;"> Email already exist!</span>' ;
			 	 echo '4';
		}
		else
		{
			//echo "Email Available " ;
			 echo '5';
		}
	}
	 if((!empty($_POST['nic'])))
	 	{
		 $usernic=$_POST['nic'];
		
		$checkdata1="select * from user where  nic='".$usernic."'";
		$query=mysql_query($checkdata1);
		//$results=$conn->query($query);
		//$numRows=$results->num_rows;

		if(mysql_num_rows($query)>0)
		{

			 //echo '<span style="color:red;text-align:center;"> Email already exist!</span>' ;
			 	 echo '6';
		}
		else
		{
			//echo "Email Available " ;
			 echo '7';
		}
	}


/*
 if(isset($_POST['user_name']))
{
 $name=$_POST['username'];

 $checkdata=" SELECT username FROM user WHERE username='$name' ";

 $query=mysql_query($checkdata);

			 if(mysql_num_rows($query)>0)
			 {
			  echo "User Name Already Exist";
			 }
			 else
			 {
			  echo "OK";
			 }
}*/

 ?>