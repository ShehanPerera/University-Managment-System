<?php

include('../Hostel/HMS/lib/session.php');

 if(isset($_SESSION['Loged_User'])&&(($_SESSION['type1']=='padmin')||(in_array("padmin", $_SESSION['position1'])))|| (($_SESSION['res']=="mainadmin")||(in_array("mainadmin", $_SESSION['position1'])))||(($_SESSION['type1']=='madmin')||(in_array("madmin", $_SESSION['position1'])))||(($_SESSION['type1']=='radmin') ||(in_array("radmin", $_SESSION['position1'])))|| (($_SESSION['type1']=='hadmin')||(in_array("hadmin", $_SESSION['position1']))) )
{
	
	header('location:admin/New_Profiles.php');
}
else  if(isset($_SESSION['Loged_User'])&&($_SESSION['type1']!='hadmin')&&($_SESSION['type1']!='padmin')&&($_SESSION['type1']!='radmin')&&($_SESSION['type1']!='madmin')&&($_SESSION['type1']!='mainadmin'))

{
	
	header('location:user/editpage.php');
}
else
{
	header("location:UMSlogin.php");
}
?>