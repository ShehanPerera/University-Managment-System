
<?php

include('../Hostel/HMS/lib/session.php');
//session_start();
$_SESSION['User']="2";
//echo $_SESSION['User'];
if(($_SESSION['res']=="student")|| in_array("student", $position))
{
	header('location:../sms_ubuntu/student/index.php');
}
else if(($_SESSION['res']=="head")||(in_array("head", $position)))
{
	header('location:../sms_ubuntu/hod/index.php');
}
else
{
	header('location:../sms_ubuntu/admin/index.php');
}
 

?>