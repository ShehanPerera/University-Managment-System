
<?php
	
	$id=$_POST['id'];
	
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$nic=$_POST['nic'];
	$emails=$_POST['email1'];
	$position="";	  $Student="false"; $image="";
	$hostelid=""; $hostelid1=""; $hostelid2="";$reg_no="";   $department=""; $course=""; $level=""; $combination=""; $special="";

	$title='';
	$phone="";
	if(!empty($_POST['title']))
	{
	$title=$_POST['title'];
	}
	if(!empty($_POST['phone']))
	{
	$phone=$_POST['phone'];
	}
	if(!empty($_POST['position']))
	{
	$position=implode(',',$_POST['position']);
	}
	if(!empty($_POST['hostelid1']))
	{
	$hostelid1=$_POST['hostelid1'];
	}
	
	if(!empty($_POST['department']))
	{
	$department=$_POST['department'];
	}
	if(!empty($_POST['department1']))
	{
	$department=$_POST['department1'];
	}
	
	if(!empty($_POST['reg_nos']))
	{
	$reg_no=$_POST['reg_nos'];
	$level=$_POST['level'];
	$course=$_POST['course'];
	$special=$_POST['special'];
	$combination=$_POST['combination'];
	}
	
	include('connection.php');
	//gayan
	//echo "gjgjh";
	$resultid=mysql_query("SELECT * FROM user where user_id = '$id'" ) or die(mysql_error());
				$count=mysql_num_rows($resultid);
				$row2=mysql_fetch_assoc($resultid);
				$r1=$row2['position'];
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

					//new position add karanakota
					$str1=$position;

					$pos1= substr_count(($str1), ',');
					
					$array1=array();
					for( $ii=0;$ii<=$pos1;$ii++)
					{
					$position2 = array_shift((explode(",",$str1 ,2)));
					$array1[$ii]=$position2;
					$str1=substr($str1,(strpos($str1, ','))+1);;
					
					}
					$position2=$array1;
	
	include('../sms_ubuntu/connect.php');

			if((in_array("head", $position1))&&(in_array("head", $position2)))
			{
				
			//	mysql_query("INSERT INTO hod(id,fname,lname,email,RegNo,password,department,gender,phone) values('$id','$title.$fname','$lname','$emails','$reg_no','$pass','$department','','$phone')");
				$ab= "UPDATE hod SET department='$department' WHERE id='$id' ";
				 if(mysql_query($ab))
					{
						//echo "hgguy";
					}
			}
			if((in_array("head", $position1))&&(!in_array("head", $position2)))
			{
				 $q ="DELETE FROM hod WHERE id='".$id."'";
					 if(mysql_query($q))
					{
						//echo "hgguy";
					}
			}
			if((!in_array("head", $position1))&&(in_array("head", $position2)))
			{
				mysql_query("INSERT INTO hod(id,fname,lname,email,RegNo,password,department,gender,phone) values('$id','$title.$fname','$lname','$emails','$reg_no','$pass','$department','','$phone')");
			}
			
			
			if((!in_array("student", $position1))&&(in_array("student", $position2)))
			{
				 mysql_query("INSERT INTO student(id,RegNo,indNo,prefix,fname,lname,gender,address,email,phone,password,course,level,yearcd,subject_combination,special) VALUES('$id','$user1','$reg_no','$title','$fname','$lname','Male','$address','$emails','$phone','$pass','$course','$level','','$department','$special')");
			}
			if((in_array("student", $position1))&&(in_array("student", $position2)))
			{
				$a= "UPDATE student SET level='$level',subject_combination='$department',special='$special' WHERE id='$id' ";
				 if(mysql_query($a))
					{
						//echo "hgguy";
					}
			}
			if((in_array("student", $position1))&&(!in_array("student", $position2)))
			{
				 $b ="DELETE FROM student WHERE id='".$id."'";
				 if(mysql_query($b))
					{
						//echo "hgguy";
					}
			}
			
			
			
			
			
	
	
	
	
	//head start
include('../Resulteee_management_system/config.php');		
		if((in_array("head", $position1))&&(in_array("head", $position2)))
		{
			//$name =$title." ".$fname." ".$lname;
			mysqli_query($con,"update instructor set dept='$department' where id='$id'");
		}
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
		
		if((!in_array("student", $position1))&&(in_array("student", $position2)))
			{
				 $name =$title." ".$fname." ".$lname;
			//echo $position;
			 mysqli_query($con,"insert into student(id,name,email,pass,index_no,status,course) values('$id','$name','$emails','$pass','$reg_no','1','$combination')");
			}
		if((in_array("student", $position1))&&(in_array("student", $position2)))
			{
			mysqli_query($con,"update student set course='$combination' where id='$id'");
			}
			
		if((in_array("student", $position1))&&(!in_array("student", $position2)))
			{
			mysqli_query($con,"delete from student where id='$id'");
			}
//head end


//start hostelid
include('../Hostel/HMS/lib/STD_Con.php');
		 if((in_array("warden", $position1))&&(!in_array("warden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET warden_id='no' WHERE warden_id='$id';";
					if ($conn->query($sql1) === TRUE)
				{
					
				}
		}
		if((!in_array("warden", $position1))&&(in_array("warden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET warden_id='$id' WHERE hostel_id='$hostelid1';";
				if ($conn->query($sql1) === TRUE)
				{
					
				}
		}
		 if((in_array("subwarden", $position1))&&(!in_array("subwarden", $position2)))
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
		}
		if((in_array("subwarden", $position1))&&(in_array("warden", $position2)))
		{
			$sql1 = "UPDATE hostel_staff SET subwarden_id='no',warden_id='$id' WHERE hostel_id='$hostelid1';";
				if ($conn->query($sql1) === TRUE)
				{
					
				}
		}
		


//end hostel 
	
	
	
	
	
	
	
	include('connection.php');
	
if(!empty($_POST['image']))
	{
	$image=$_POST['image'];
	{
	$image=file_get_contents($image);
	$image=base64_encode($image);
	
	
	$sql = "UPDATE user SET title='$title',contact='$phone',image='$image',first_name='$fname',last_name='$lname',nic='$nic',email='$emails',position='$position',department='$department',reg_no='$reg_no',course='$course',level='$level',special='$special',combination='$combination',hostelid='$hostelid' where user_id='$id'";
		
	
	}
	}
else
{

	
	$sql = "UPDATE user SET title='$title',contact='$phone',first_name='$fname',last_name='$lname',nic='$nic',email='$emails',position='$position',department='$department',reg_no='$reg_no',course='$course',level='$level',special='$special',combination='$combination',hostelid='$hostelid' where user_id='$id'";
		
			
}
		if(!mysql_query($sql))
	{
		echo "Account Not Saved";

		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Account Saved Succesfully');
		window.location.href='editpage.php?user_id='+".$id."
		</script>";
	}
	

?>
