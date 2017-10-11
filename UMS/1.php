<?php

include('../Hostel/HMS/lib/session.php');

$_SESSION['User']="1";

if(($_SESSION['res']=="radmin")|| in_array("radmin", $position))
{
	 header('location:../Resulteee_management_system/admin/index.php');
}
else if(($_SESSION['res']=="head")||(in_array("head", $position)))
{
	 header('location:../Resulteee_management_system/Instructor/index.php');
}
else
{
	header('location:../Resulteee_management_system/index.php');
}

 

?>