
<?php
 include('../Hostel/HMS/lib/session.php');
	include('connection.php');

	$_SESSION['usertype']="";
		if(isset($_POST['submit']))
		{
			$username=$_POST["userName"];
			$password=$_POST["password"];
		
			$mdpass=md5($password);
			$result=mysql_query("SELECT * FROM user where username = '$username' and password = '$mdpass' and accept='true'" ) or die(mysql_error());
			
			$count=mysql_num_rows($result);
			$row=mysql_fetch_assoc($result);
				// echo $row['user_type'];
				// echo $row['username'];
				 
				 $id=$row['user_id'];
				  $accept=$row['accept'];
				$resultid=mysql_query("SELECT position FROM user where user_id = '$id'" ) or die(mysql_error());
				
				$row2=mysql_fetch_assoc($resultid);
				$r1=$row2['position'];
				
				if($count>0)
				{
					$result1=mysql_query("SELECT * FROM type where position='$r1'" ) or die(mysql_error());
					$result2=mysql_query("SELECT * FROM type where (position='$r1') && (position like '%,%') "  ) or die(mysql_error());
					$count2=mysql_num_rows($result2);
					$count1=mysql_num_rows($result1);
					$row1=mysql_fetch_array($result1);
				
				if($count2>0)
				{
					$_SESSION['Loged_User']=$row['username'];
					
					$result3=mysql_query("SELECT * FROM type where (position='$r1') && responsible like '%,%'" ) or die(mysql_error());
					$position=mysql_fetch_array($result3);
					$str=($position[1]);

					$pos= substr_count(($str), ',');
					
					$array=array();
					for( $i=0;$i<=$pos;$i++)
					{
					$position1 = array_shift((explode(",",$str ,2)));
					$array[$i]=$position1;
					$str=substr($str,(strpos($str, ','))+1);;
					
					}
					$_SESSION['$array2']=$array;
					if($accept == "true")
					{
					header("location:../UMS/index_multi.php");
					}
					else
					{
						header("location:UMSlogin.php");
					}
				}
						
			//adding start gayan

			 if($count1 > 0 and (($row1['responsible'] == "mainadmin")||(in_array("mainadmin", $_SESSION['position1']))) and $accept == "true" )
			{
				
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:admin/New_Profiles.php");
			
				
			}
			 else if($count1 > 0 and (($row1['responsible'] == "doctor")||(in_array("doctor", $_SESSION['position1']))) and $accept == "true" )
			{
				
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/doctor.php");
			
				
			}
			else if($count1 > 0 and(($row1['responsible'] == "technician")||(in_array("technician", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/technician.php");
			} 
			 else if($count1 > 0 and (($row1['responsible'] == "madmin")||(in_array("madmin", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/admin.php");
			}  
			 else if($count1 > 0 and (($row1['responsible'] == "receptionist")||(in_array("receptionist", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/resep.php");
			} 
			  else if($count1 > 0 and (($row1['responsible'] == "pharmacist")||(in_array("pharmacist", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../project/parmasist.php");
			} 
			else if($count1 > 0 and (($row1['responsible'] == "warden")||(in_array("warden", $_SESSION['position1']))) and $accept == "true" )
			{
					$_SESSION['usertype']="warden";
					 $_SESSION['id']=$id;
					
				session_start();
				$_SESSION['Loged_User']=$row['username'];

				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../Hostel/HMS/main.php");
			} 
			
			else if(($count1 > 0 and (($row1['responsible'] == "hadmin")||(in_array("hadmin", $_SESSION['position1']))) and $accept == "true" ))
			{
				//session_start();
				if(in_array("hadmin", $position))
					$_SESSION['usertype']="admin";

				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../Hostel/HMS/main.php");
				
			} 
			else if($count1 > 0 and (($row1['responsible'] == "padmin")||(in_array("padmin", $_SESSION['position1']))) and $accept == "true" )
			{
				session_start();
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:../physical education/project/Home1.php");
			} 
			
			else if($count1 > 0 and (($row1['responsible'] == "head")||(in_array("head", $_SESSION['position1']))||($row1['responsible'] == "student")) and $accept == "true" )
			{
				session_start();
			
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:index_R_S.php");
				
			} 
			
			else if($count1 > 0 and (($row1['responsible'] == "radmin")||(in_array("radmin", $_SESSION['position1']))) and $accept == "true" )
			{
				//session_start();
			
				$_SESSION['Loged_User']=$row['username'];
				$_SESSION['$array2']=array($row1['responsible']);
				header("location:index_R_S.php");
				
			} 

			
			//adding end gayan
			  else if($count=0) 
			{
				
				header("location:UMSlogin.php");
			
			}
			}			
			  else
			{
				
				header("location:UMSlogin.php");
			
			}  
			
		}

 include('../Hostel/HMS/lib/session.php'); // Includes Login Script

 if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="head")||(in_array("head",$_SESSION['position1'])))  &&($_SESSION['check']=="2"))  
		{
		header("location:../sms_ubuntu/hod/index.php");

		}
 else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="radmin")||(in_array("radmin",$_SESSION['position1'])))  &&($_SESSION['check']=="2"))  
		{
		header("location:../sms_ubuntu/admin/index.php");

		}
else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="student")||(in_array("student",$_SESSION['position1'])))  &&($_SESSION['check']=="2"))  
		{
		header("location:../sms_ubuntu/student/index.php");

		}
 else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="head")||(in_array("head",$_SESSION['position1']))) &&($_SESSION['User']=="1") )
		{
		header("location:../Resulteee_management_system/Instructor/index.php");

		} 
 else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['res']=="radmin")||(in_array("radmin",$_SESSION['position1']))) &&($_SESSION['User']=="1") )
		{
		header("location:../Resulteee_management_system/admin/index.php");

		} 


/* else if((isset($_SESSION['Loged_User'])) &&(($_SESSION['type1']=="admin")||($_SESSION['type1']=="subwarden") ||($_SESSION['type1']=="warden")||($_SESSION['type1']=="hadmin")))
{
 header("location:../Hostel/HMS/main.php");

}  */
 else if(!isset($_SESSION['Loged_User']))
{
	//echo $_SESSION['Loged_User'];
	//echo $_SESSION['type1'];
	header("location:UMSlogin.php");
}     
?>