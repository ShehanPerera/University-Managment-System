<?php
 include('../../Hostel/HMS/lib/session.php');
 include('connection.php');
 if(($_SESSION['res']=="mainadmin")||(in_array("mainadmin",$_SESSION['position1'])))
 {

   $result=mysql_query("SELECT COUNT(*) as num FROM user WHERE accept!='true'");
	$data=mysql_fetch_assoc($result);
    $numUser = $data['num'];
    $newUser_Badge = "";
    if ($numUser != 0) {
      $newUser_Badge = "<span class=\"badge\">$numUser</span>";
    }
 }
 if(($_SESSION['res']=="hadmin")||(in_array("hadmin",$_SESSION['position1'])))
	{
		$result=mysql_query("SELECT COUNT(*) as num FROM user WHERE accept!='true' AND (position='warden' or position='subwarden' or position='hadmin') ");
	$data=mysql_fetch_assoc($result);
    $numUser = $data['num'];
    $newUser_Badge = "";
    if ($numUser != 0) 
	{
      $newUser_Badge = "<span class=\"badge\">$numUser</span>";
    }
	}
	if(($_SESSION['res']=="radmin")||(in_array("radmin",$_SESSION['position1'])))
	{
		$result=mysql_query("SELECT COUNT(*) as num FROM user WHERE accept!='true' AND (position='radmin' or position='student' or position='head') ");
	$data=mysql_fetch_assoc($result);
    $numUser = $data['num'];
    $newUser_Badge = "";
    if ($numUser != 0) 
	{
      $newUser_Badge = "<span class=\"badge\">$numUser</span>";
    }
	}
	if(($_SESSION['res']=="padmin")||(in_array("padmin",$_SESSION['position1'])))
	{
	$result=mysql_query("SELECT COUNT(*) as num FROM user WHERE accept!='true' AND (position='padmin') ");
	$data=mysql_fetch_assoc($result);
    $numUser = $data['num'];
    $newUser_Badge = "";
    if ($numUser != 0) 
	{
      $newUser_Badge = "<span class=\"badge\">$numUser</span>";
    }
	}
	if(($_SESSION['res']=="madmin")||(in_array("madmin",$_SESSION['position1'])))

	{
		$result=mysql_query("SELECT COUNT(*) as num FROM user WHERE accept!='true' AND  (position = 'doctor' or position ='receptionist' or position = 'technician' or position ='pharmacist' or position ='madmin') ");
	$data=mysql_fetch_assoc($result);
    $numUser = $data['num'];
    $newUser_Badge = "";
    if ($numUser != 0) 
	{
      $newUser_Badge = "<span class=\"badge\">$numUser</span>";
    }
	}		
		

?>