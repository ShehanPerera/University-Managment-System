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
extract($_GET);
mysqli_query($con,"delete from notification  where id='$msgid' and  admin ='$eid'");
echo "<script>window.location='index.php?option=notification'</script>";
?>