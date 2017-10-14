<?php
include('../connection.php');

$querycount ="SELECT MAX(user_id) AS MAX_ID FROM user";
$max=mysql_query($querycount);
$query_row =mysql_fetch_array($max);
$maxnu=$query_row['MAX_ID'];

	$id=$maxnu+1;
	if(!empty($_POST['title']))
	{
	$title=$_POST['title'];
	}
	else
	{
		$title="Mr";
	}
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$nic=$_POST['nic'];
	$emails=$_POST['email1'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$user1=$_POST['user_name'];
	$pass=md5($_POST['password']);
	
	  $Student="false"; $image="";
	$hostelid=""; $reg_no="";   $department=""; $course=""; $level=""; $combination=""; $special="";
	$position="";
	if(!empty($_POST['image']))
	{
	$image=$_POST['image'];
	{
	$image=file_get_contents($image);
	$image=base64_encode($image);
	}
	}
	if(!empty($_POST['position']))
	{
	$position=implode(',',$_POST['position']);
	}
	if(!empty($_POST['hostelid1']))
	{
	$hostelid=$_POST['hostelid1'];
	}
	if(!empty($_POST['hostelid2']))
	{
	$hostelid=$_POST['hostelid2'];
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
	
	$str=$position;
	$position1=array();
	
	$pos= substr_count(($str), ',');
					
					$array=array();
					for( $i=0;$i<=$pos;$i++)
					{
					$position1 = array_shift((explode(",",$str ,2)));
					$array[$i]=$position1;
					$str=substr($str,(strpos($str, ','))+1);;
					
					}
					$position1=$array;
					
					
//RMS===============================================================================================================
	
include('../../Resulteee_management_system/config.php');
		$pass=md5($_POST['password']);
		/* if($position=="student")
		{ */
			
		 if((in_array("student",$position1)))
		 {
			 $name =$title." ".$fname." ".$lname;
			//echo $position;
			 mysqli_query($con,"insert into student(id,name,email,pass,index_no,status,course) values('$id','$name','$emails','$pass','$reg_no','1','$combination')");
		 }
		//echo "jhjhgj";
		else if((in_array("head", $position1)))
		{
			$name =$title." ".$fname." ".$lname;
			//echo $name;
		 mysqli_query($con,"insert into instructor(id,name,email,pass,dept,mob,status) values('$id','$name','$emails','$pass','$department','$phone','1')");
		}
		
//RMS END===========================================================================================================		
		
//SMS============================================================================================================	
		
		include('../../sms_ubuntu/connect.php');
	
	//$query = mysql_query("INSERT INTO user(user_id,title,first_name,last_name,nic,email,contact,address,username,password,department,reg_no,course,level,special,combination,position,image,accept) VALUES('$id','$title','$fname','$lname','$nic','$emails','$phone','$address','$user1','$pass','$department','$reg_no','$course','$level','$special','$combination','$position','$image','true')") or die (mysql_error());
	//$pass=md5($_POST['password']);	
	 //$pass=md5($pass);
	  if((in_array("head", $position1)))
		{
		 
			mysql_query("INSERT INTO hod(id,fname,lname,email,RegNo,password,department,gender,phone) values('$id','$title.$fname','$lname','$emails','$reg_no','$pass','$department','','$phone')");
			//mysql_query("INSERT INTO user(id,RegNo,password,position) values('$id','$reg_no','$pass','$position')");			
		} 
	  if((in_array("student",$position1)))
		 {
			
			 mysql_query("INSERT INTO student(id,RegNo,indNo,prefix,fname,lname,gender,address,email,phone,password,course,level,yearcd,subject_combination,special) VALUES('$id','$user1','$reg_no','$title','$fname','$lname','Male','$address','$emails','$phone','$pass','$course','$level','','$department','$special')");
			 //mysql_query("INSERT INTO user(id,RegNo,password,position) values('$id','$reg_no','$pass','$position')");
		 }
		 
		 
//SMS END =========================================================================================================

//UMS===============================================================================================================
include('../connection.php');


	$query = mysql_query("INSERT INTO user(user_id,title,first_name,nic,email,contact,address,last_name,password,username,image,action,department,reg_no,hostelid,course,level,special,combination,position,accept) VALUES('$id','$title','$fname','$nic','$emails','$phone','$address','$lname','$pass','$user1','$image','no','$department','$reg_no','$hostelid','$course','$level','$special','$combination','$position','true')") or die (mysql_error());
		


	if(!$query)
	{
		echo "<script type='text/javascript'>alert('Account Not Saved')</script>";
			
		
	}
	else
	{
		
		echo "<script type='text/javascript'>alert('Account Saved Succesfully');window.location = \"View_Profiles.php\"</script>";
	
		
	}

		include('../../Hostel/HMS/lib/STD_Con.php');
		/* $sql = "INSERT INTO user_details (user_id, Name, UserName, pasword,type,Frist_login) VALUES ('$id', '$fname', '$user1', '$pass','$position','no');";

		if ($conn->query($sql) === TRUE)
			{ */
		
			
			  if(in_array("warden", $position1))
			{
				// INSERT INTO hostel_staff (hostel_id,warden_id,subwarden_id) VALUES ('$hostelid', '$id','no');";
				$sql1 = "UPDATE hostel_staff SET warden_id='$id' WHERE hostel_id='$hostelid';";
				if ($conn->query($sql1) === TRUE)
				{
					
				}
			} 	 
			 else if(in_array("subwarden", $position1))
			{
				$sql2 =  "UPDATE hostel_staff SET subwarden_id='$id' WHERE hostel_id='$hostelid';";
				if ($conn->query($sql2) === TRUE)
				{
					
				}
			}
			
		
	?>

