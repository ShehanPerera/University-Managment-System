
<?php
include('../connection.php');

$user_id=$_REQUEST['user_id'];


			//gayan
			$resultid=mysql_query("SELECT * FROM user where user_id = '$user_id'" ) or die(mysql_error());
				
				$row2=mysql_fetch_assoc($resultid);
				$r1=$row2['position'];
				$r2=$row2['hostelid'];
				
										
					
					$str=$r1;

					$pos= substr_count(($str), ',');
					
					$array=array();
					for( $i=0;$i<=$pos;$i++)
					{
					$position1 = array_shift((explode(",",$str ,2)));
					$array[$i]=$position1;
					$str=substr($str,(strpos($str, ','))+1);;
					
					}
					$position1=$array;
					
								
			//gayan
				 include('../../Hostel/HMS/lib/STD_Con.php');
				if(in_array("warden", $position1))
				{
					$sql1 = "UPDATE hostel_staff SET warden_id='no' WHERE hostel_id='$r2';";
					if ($conn->query($sql1) === TRUE)
				{
					
				}
										
				} 
				
				if(in_array("subwarden", $position1))
				{
					$sql1 = "UPDATE hostel_staff SET subwarden_id='no' WHERE hostel_id='$r2';";
					if ($conn->query($sql1) === TRUE)
				{
					
				}
										
				} 
				include('../../Resulteee_management_system/config.php');
				if(in_array("student", $position1))
				{
					
					mysqli_query($con,"delete from student where id='$user_id'");
				}
				if(in_array("head", $position1))
				{
					
					mysqli_query($con,"delete from instructor where id='$user_id'");
				}
				include('../../sms_ubuntu/connect.php');
				if(in_array("student", $position1))
				{
					 $q ="DELETE FROM student WHERE id='".$user_id."'";
					 if(mysql_query($q))
					{
						//echo "hgguy";
					}
				}
				if(in_array("head", $position1))
				{
					
					$qq ="DELETE FROM hod WHERE id='".$user_id."'";
					if(mysql_query($qq))
					{
						//echo "hgguy";
					}
				}
			//gayan
				include('../connection.php');
				  $query ="DELETE FROM user WHERE user_id='".$user_id."'";
  
	            $result =mysql_query($query);
	             if($result)
	             {
					 echo $user_id;
					
					echo "<script type='text/javascript'>alert('Delete successfully');window.location =\"View_Profiles.php\"</script>";
	             	
	             }
	             
	             else
				{

					echo "<script type='text/javascript'>alert('Delete is faild');window.location =\"View_Profiles.php\"</script>";
	             
				}
			  

	    	
			
?>