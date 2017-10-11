<?php
	include 'STD_Con.php';
	//sesson start
	$hosadmin=true;
	session_start();
	if(!empty($_SESSION['User']))
	{
	$_SESSION['check']=$_SESSION['User'];
	}
	//echo $_SESSION['check'];
	$logedUser = $_SESSION['Loged_User'];
	//$array2=array();
	//$ses_conform =$_SESSION['Loged_User'];
	//$position=array();
	$position=$_SESSION['$array2'];
	$_SESSION['position1']=$position;
	 if(in_array("warden",$position))
	{
		$_SESSION['type1']="warden";
		//echo $_SESSION['type1'];
	} 
	else if(in_array("hadmin",$position))
	{
		$_SESSION['type1']="admin";
		//echo $_SESSION['type1'];
	}
	else if(in_array("subwarden",$position))
	{
		$_SESSION['type1']="subwarden";
		//echo $_SESSION['type1'];
	}
	 else if(in_array("padmin",$position))
	{
		$_SESSION['type1']="padmin";
		
	} 
	else if(in_array("radmin",$position))
	{
		$_SESSION['type1']="radmin";
		
	} 
	else if(in_array("hadmin",$position))
	{
		$_SESSION['type1']="hadmin";
		
	} 
	else if(in_array("madmin",$position))
	{
		$_SESSION['type1']="madmin";
		
	} 
	else if(in_array("mainadmin",$position))
	{
		$_SESSION['type1']="mainadmin";
		
	} 
	else if(in_array("student",$position))
	{
		$_SESSION['type1']="student";
		
	} 
	//print_r($position);
	//echo $_SESSION['type1'];
	
	// $ses_sql = "SELECT * FROM user_Details WHERE UserName = '$logedUser'";

	// $ses_result = $conn->query($ses_sql);

		//echo $logedUser;

	// $ses_row = $ses_result->fetch_assoc();
	// $ses_id=$ses_row['user_id'];
	// $ses_conform = $logedUser ;
	// $ses_name = $ses_row['Name'];
	// $ses_type = $ses_row['type'];
	// $ses_log=$ses_row['Frist_login'];
	// $_SESSION['userState']=$ses_log;
	// $_SESSION['usertype']=$ses_type;
	//echo $_SESSION['usertype'];
	// $ses_id= $_SESSION['id'];
	// $ses_type=$_SESSION['usertype'];
	
	//$_SESSION['type1'] =$ses_type;
	// $_SESSION['user_id'] = $ses_id;
	
	
	// =============================================================================================================================================================================================================================================================================================================================================================
	include('connection.php');
	 $ses_sql1 = "SELECT * FROM user WHERE username = '$logedUser'";
	

	$ses_result1 = $conn->query($ses_sql1);
 
 

	 $ses_row1 = $ses_result1->fetch_assoc();
	$id=$ses_row1['user_id']; 
	$_SESSION['id']=$id;
	// $ses_name = $ses_row['warden'];
	$ses_conform = $logedUser;
	$_SESSION['ses_conform']=$ses_conform ;
	 $ses_type1 = $ses_row1['first_name'];
	 $ses_type2 = $ses_row1['last_name'];
	 $ses_type3 = $ses_row1['title'];
	 $_SESSION['usertype3']=$ses_type1;
	 $_SESSION['usertype1']=$ses_type2;
	$_SESSION['usertype2']=$ses_type3;
	$res=$ses_row1['position'];
	$_SESSION['position']=$res;
	$_SESSION['accept']=$ses_row1['accept'];
	$_SESSION['image']=$ses_row1['image'];
	$_SESSION['emails']=$ses_row1['email'];
	
		 $ses_sql2 = "SELECT * FROM type WHERE position = '$res'";
		
		$ses_result2 = $conn->query($ses_sql2);

		 $ses_row2 = $ses_result2->fetch_assoc();
		 
		 $ses_pos = $ses_row2['responsible'];
		 $_SESSION['res']= $ses_pos;
		// echo $ses_conform;
		
		
	include 'STD_Con.php';
	 if((in_array("warden",$position))||(in_array("subwarden",$position)))
	{
		$ses_id= $_SESSION['id'];
		$sql_hos="SELECT * FROM hostel_staff WHERE warden_id='$ses_id' OR subwarden_id='$ses_id';"; 
		$ses_result_hos = $conn->query($sql_hos);
		$hos_row=$ses_result_hos->fetch_assoc();
		$hos=$hos_row['hostel_id'];
		$_SESSION['hostel_id']=$hos;
	} 
	$conn->close();
	// if(!isset($ses_conform))
	// {
	// 	$conn->close();
	// 	header('Location: index.php');
	// }
?>
