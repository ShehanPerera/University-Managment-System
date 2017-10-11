<?php
session_start();
error_reporting(1);

  extract($_SESSION);
 if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
		?>
<?php
require('../config.php');
$st=$_REQUEST['status'];
$e=$_REQUEST['eid'];
 if($st)
 {
 mysqli_query($con,"update student set status=0 where email='$e'");
 echo "<script>window.location='index.php?option=Student'</script>";
 }
 else
 {
 mysqli_query($con,"update student set status=1 where email='$e'");
 echo "<script>window.location='index.php?option=Student'</script>";
 }
 ?>