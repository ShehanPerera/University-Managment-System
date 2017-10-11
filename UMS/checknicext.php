<?php 
	 include 'connection.php';
		//$username=$conn->real_escape_string($_POST["username"]);
	 	$usernic=$_POST['nic'];
		$checkdata="select * from user where nic='".$usernic."'";
		$query=mysql_query($checkdata);
		//$results=$conn->query($query);
		//$numRows=$results->num_rows;

		if(mysql_num_rows($query)>0)
		{

			// echo '<span style="color:red;text-align:center;">NIC already exist!</span>';
			 echo '2';

		}
		else
		{
			//echo "<span style='font-color:red'>NIC Available</span> ";
			 echo '3';
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