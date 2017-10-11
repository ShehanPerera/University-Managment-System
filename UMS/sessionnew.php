<?php
	include 'STD_Con1.php';
	//sesson start
	session_start();
	$logedUser = $_SESSION['Loged_User'];
	$logedUser1 = $_SESSION['Loged_User1'];
	$ses_sql = "SELECT * FROM test1 WHERE username = '$logedUser'";

	$ses_result = $conn->query($ses_sql);



	$ses_row = $ses_result->fetch_assoc();
	$ses_id=$ses_row['user_id'];
	$ses_conform = $ses_row['username'];
	//$ses_name = $ses_row['warden'];
	$ses_type = $ses_row['first_name'];
	$ses_type1 = $ses_row['admin'];
	$ses_type2 = $ses_row['warden'];
	//$ses_log=$ses_row['Frist_login'];
	$_SESSION['userState']=$ses_conform;
	$_SESSION['usertype']=$ses_type;
	$_SESSION['usertype1']=$ses_type1;
	$_SESSION['usertype2']=$ses_type2;
	$_SESSION['user_id'] = $ses_id;
	$_SESSION['1']=$ses_row['doctor'];
	/*  if($ses_type!="true")
	{
		?>
		<?php
		include'STD_Con.php';
		$sql_hos="SELECT * FROM hostel_staff WHERE warden_id='$ses_id' OR subwarden_id='$ses_id';"; 
		$ses_result_hos = $conn->query($sql_hos);
		$hos_row=$ses_result_hos->fetch_assoc();
		$hos=$hos_row['hostel_id'];
		$_SESSION['hostel_id']=$hos;
		?>
		<?php
	}  */
	$conn->close();
	// if(!isset($ses_conform))
	// {
	// 	$conn->close();
	// 	header('Location: index.php');
	// }
?>
