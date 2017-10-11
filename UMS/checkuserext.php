<?php 
	 include 'connection.php';
		//$username=$conn->real_escape_string($_POST["username"]);
	 	$username=$_POST['user_name'];
	 	$button=false;
		$checkdata="select * from user where username='".$username."'";
		$query=mysql_query($checkdata);
		//$results=$conn->query($query);
		//$numRows=$results->num_rows;

		if(mysql_num_rows($query)>0)
		{

			 // echo '<span style="color:red;text-align:center;">UserName already exist!</span>';
			 echo '1';


		}
		else
		{
			// echo "UserName Available ";
			echo '0';
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