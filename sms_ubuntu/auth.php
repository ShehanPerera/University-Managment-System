<?php
	 //Start session
	//session_start();
	require_once('../../Hostel/HMS/lib/session.php');
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['Loged_User']) || (trim($_SESSION['Loged_User']) == '')) {
		header("location:../../UMS/login.php");
		//exit();
		//echo"hh";
	} 
?>