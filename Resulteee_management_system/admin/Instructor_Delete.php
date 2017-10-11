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
$e=$_REQUEST['eid'];
mysqli_query($con,"delete from instructor  where email='$e'");
echo "<script>window.location='index.php?option=Instructor'</script>";
?>