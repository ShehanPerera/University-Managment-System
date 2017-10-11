
<?php
//error_reporting(0);
	
	$id=$_POST['id'];
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$title=$_POST['title'];
	$phone="";
	if(!empty($_POST['phone']))
	{
	$phone=implode($_POST['phone']);
	}
	
	$nic=$_POST['nic'];
	$emails=$_POST['email1'];
	$position="";	  $Student="false"; $image="";
	$hostelid1="";    $department="";  $level=""; $combination=""; $special="";
	
	
	if(!empty($_POST['position']))
	{
	$position=implode(',',$_POST['position']);
	}
	
	if($position!='student')
	{
	$username=$_POST['user_name1'];
	
	}
	else
	{
	$username=$_POST['user_name'];
	}

	if(!empty($_POST['hostelid1']))
	{
	$hostelid1=$_POST['hostelid1'];
	}
	
	
	if(!empty($_POST['department1']))
	{
	$department=$_POST['department1'];
	}
	
	if($position=="student")
	{
	
	
	$level=$_POST['level'];
	
	$special=$_POST['special'];
	$combination=$_POST['combination'];
	}
	
	
	
	
	
	include('../connection.php');
	//gayan
	//echo "gjgjh";
	$resultid=mysql_query("SELECT * FROM user where user_id = '$id'" ) or die(mysql_error());
				$count=mysql_num_rows($resultid);
				$row2=mysql_fetch_assoc($resultid);
				$r1=$row2['position'];
		$str=$r1;
		 $old=$str;
		 
	
	
					$pos= substr_count(($str), ',');
					
					$array=array();
					for( $i=0;$i<=$pos;$i++)
					{
					$position1 = array_shift((explode(",",$str ,2)));
					$array[$i]=$position1;
					$str=substr($str,(strpos($str, ','))+1);;
					
					}
					$position1=$array;

					//new position add karanakota
					$str1=$position;
					$new =$str1;

					$pos1= substr_count(($str1), ',');
					
					$array1=array();
					for( $ii=0;$ii<=$pos1;$ii++)
					{
					$position2 = array_shift((explode(",",$str1 ,2)));
					$array1[$ii]=$position2;
					$str1=substr($str1,(strpos($str1, ','))+1);;
					
					}
					$position2=$array1;
					
					if($old!=$new)
					{
						$action=$new;
					}
					else
					{
						$action='no';
					}
				
	//SMS ====================================================================================================
	include('../../sms_ubuntu/connect.php');

			if((in_array("head", $position1))&&(in_array("head", $position2)))
			{
				
			$ab= "UPDATE hod SET fname='$title.$fname',lname='$lname',email='$emails',phone='$phone',department='$department' WHERE id='$id' ";
				 if(mysql_query($ab))
					{
						
					}
			}
			/* Shehan=============================================================================================================================
			if((in_array("head", $position1))&&(!in_array("head", $position2)))
			{
				 $q ="DELETE FROM hod WHERE id='".$id."'";
					 if(mysql_query($q))
					{
						
					}
			}
			if((!in_array("head",$position1))&&(in_array("head",$position2)))
			{
				mysql_query("INSERT INTO hod(id,fname,lname,email,RegNo,password,department,gender,phone) values('$id','$title.$fname','$lname','$emails','$reg_no','','$department','','$phone')");
			}
			*/
			
			if((in_array("student", $position1))&&(in_array("student", $position2)))
			{
				
				$a= "UPDATE student SET fname='$fname',lname='$lname',email='$emails',phone='$phone',level='$level',subject_combination='$department',special='$special' WHERE id='$id' ";
				 if(mysql_query($a))
					{
						//echo "hgguy";
					}
			}
			
	// END SMS==================================================================================================		
			
		
	
	
	
//RMS===========================================================================================================	
	//head start
include('../../Resulteee_management_system/config.php');		
		if((in_array("head", $position1))&&(in_array("head", $position2)))
		{
			$name =$title." ".$fname." ".$lname;
			mysqli_query($con,"update instructor set name='$name',email='$emails',dept='$department' where id='$id'");
		}
		/*Shehan =======================================================================================================================================
		if((in_array("head", $position1))&&(!in_array("head", $position2)))
		{
			mysqli_query($con,"delete from instructor where id='$id'");
		}
		if((!in_array("head", $position1))&&(in_array("head", $position2)))
		{
			$name =$title." ".$fname." ".$lname;
			//echo $name;
		 mysqli_query($con,"insert into instructor(id,name,email,pass,dept,mob,status) values('$id','$name','$emails','$pass','$department','$phone','1')");
		}
//head end
*/
		if((in_array("student", $position1))&&(in_array("student", $position2)))
			{
				$name =$title." ".$fname." ".$lname;
			
			mysqli_query($con,"update student set name='$name',email='$emails',course='$combination' where id='$id'");
			}
			
	
// END RMS============================================================================================================
	
$n=$username;

//start hostelid
include('../../Hostel/HMS/lib/STD_Con.php');
		/* if((in_array("warden", $position1))&&(!in_array("warden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET warden_id='no' WHERE warden_id='$id';";
					if ($conn->query($sql1) === TRUE)
				{
					
				}
		}*/
		if((!in_array("warden", $position1))&&(in_array("warden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET warden_id='$id' WHERE hostel_id='$hostelid1';";
				if ($conn->query($sql1) === TRUE)
				{
					
				}
		}
		/* if((in_array("subwarden", $position1))&&(!in_array("subwarden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET subwarden_id='no' WHERE subwarden_id='$id';";
					if ($conn->query($sql1) === TRUE)
				{
					
				}
		}
		if((!in_array("subwarden", $position1))&&(in_array("subwarden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET subwarden_id='$id' WHERE hostel_id='$hostelid1';";
				if ($conn->query($sql1) === TRUE)
				{
					
				}
		}*/
		if((in_array("subwarden", $position1))&&(in_array("warden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET subwarden_id='no',warden_id='$id' WHERE hostel_id='$hostelid1';";
				if ($conn->query($sql1) === TRUE)
				{
					
				}
		}
		


//end hostel 
	
$username=$n;

//UMS==========================================================================================================
			
include('../connection.php');

if(!empty($_POST['image']))
	{
		
	$image=$_POST['image'];
	{
	$image=file_get_contents($image);
	$image=base64_encode($image);
	if(!empty($_POST['password']))
	{
		$password=md5($_POST['password']);
	$sql = "UPDATE user SET title='$title',action='$action',username='$username',password='$password',image='$image',first_name='$fname',last_name='$lname',nic='$nic',email='$emails',department='$department',level='$level',special='$special',combination='$combination',hostelid='$hostelid' where user_id='$id'";
	}
	else
	{
	$sql = "UPDATE user SET title='$title',action='$action',username='$username',image='$image',first_name='$fname',last_name='$lname',nic='$nic',email='$emails',department='$department',level='$level',special='$special',combination='$combination',hostelid='$hostelid' where user_id='$id'";
	
	}
	}
	}
else
{
if(!empty($_POST['password']))
	{
				
		$password=md5($_POST['password']);
	$sql = "UPDATE user SET title='$title',action='$action',username='$username',password='$password',first_name='$fname',last_name='$lname',nic='$nic',email='$emails',department='$department',level='$level',special='$special',combination='$combination',hostelid='$hostelid1' where user_id='$id'";
	}
	else
	{
	$sql = "UPDATE user SET title='$title',action='$action',username='$username', first_name='$fname',last_name='$lname',nic='$nic',email='$emails',department='$department',level='$level',special='$special',combination='$combination',hostelid='$hostelid1' where user_id='$id'";
		
	}		
}
	
	if(!mysql_query($sql))
	{
		echo "Account Not Saved";

		
	}
	else
	{
		
		echo "<script type='text/javascript'>alert('Account Saved Succesfully');
		window.location.href='editpage.php';
		</script>";
	}
	

	
	



?>
