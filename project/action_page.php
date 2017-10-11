<?php
/* include('../Hostel/HMS/lib/session1.php'); // Includes Login Script

if(isset($_SESSION['Loged_User']))
{
header("location:admin.php");
} */
?>


<?php
	include('../UMS/connection.php');
		if(isset($_POST['submit']))
		{
			$username=$_POST["userName"];
			$password=$_POST["password"];
		
			$mdpass=md5($password);
			$result=mysql_query("SELECT * FROM user where username = '$username' and password = '$mdpass'" ) or die(mysql_error());
			
			$count=mysql_num_rows($result);
			$row=mysql_fetch_array($result);
				// echo $row['user_type'];
				// echo $row['user_name'];
				// echo $row['password'];
				// echo $count;
				
				
			//adding start gayan

			 
			 if($count > 0 and $row['position'] == "doctor" )
			{
				session_start();
				$_SESSION['user_name1']=$row['username'];
				header("location:doctor.php");
				
			}
			else if($count > 0 and $row['technician'] == "true" )
			{
				session_start();
				$_SESSION['user_name2']=$row['username'];
				
				header("location:technician.php");
			} 
			else if($count > 0 and $row['admin'] == "true" )
			{
				session_start();
				$_SESSION['user_name3']=$row['username'];
				$_SESSION['Loged_User']=$username;
				header("location:admin.php");
			}
			 else if($count > 0 and $row['receptionist'] == "true" )
			{
				session_start();
				$_SESSION['user_name4']=$row['username'];
				header("location:resep.php");
			} 
			 else if($count > 0 and $row['pharmacist'] == "true" )
			{
				session_start();
				$_SESSION['user_name5']=$row['username'];
				header("location:parmasist.php");
			} 
			
			//adding end gayan
			  else
			{
				
				header("location:../UMS/UMSlogin.php");
			}  
				// header("location:technician.php");				//$type = $row['user_type'];
				
				// if($type=='doctor')
			// {
				// header('location:doctor.php');  
						
			// }
			
			// else
			// {
				// header('location:admin.php');  
			// }
				
		// switch($row['user_type'])
		// {

            // case 'admin':
                // header("location:admin.php");
                // break;

            // case 'technician':
                // header("location:technician.php");
                // break;

            // case 'pharmacist':
                // header("location:parmasist.php.php");
                // break;

            // case 'doctor':
                // header("location:doctor.php");
                // break;
			
			 // case 'receptionist':
                // header("location:resep.php");
                // break;
			// default : 
				// header("location:..php");
				

			
		// }
		}
?>