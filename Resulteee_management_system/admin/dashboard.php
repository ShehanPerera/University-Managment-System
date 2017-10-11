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
 //$que=mysql_query("select id from supervisor where email='$sup'");
$result=mysqli_query($con,"SELECT count(*) as total from student ");
$data=mysqli_fetch_assoc($result);
$countstu=$data['total'];


$r1=mysqli_query($con,"SELECT count(*) as total1 from instructor ");
$d1=mysqli_fetch_assoc($r1);
$c11=$d1['total1'];


$r2=mysqli_query($con,"SELECT count(*) as total1 from instructor where status='0'");
$d2=mysqli_fetch_assoc($r2);
$c12=$d2['total1'];


$r3=mysqli_query($con,"SELECT count(*) as total1 from instructor where status='1'");
$d3=mysqli_fetch_assoc($r3);
$c13=$d3['total1'];

$res=mysqli_query($con,"SELECT count(*) as total1 from results");
$res1=mysqli_fetch_assoc($res);
$c14=$res1['total1'];


?>

<?php
include('../../UMS/connection.php');
$result1=mysql_query("SELECT COUNT(*) as num FROM user WHERE position LIKE '%head%'");
$data1=mysql_fetch_assoc($result1);
$n11 = $data1['num'];

$result2=mysql_query("SELECT COUNT(*) as num FROM user WHERE position LIKE '%head%' and accept='true'");
$data2=mysql_fetch_assoc($result2);
$n12 = $data2['num'];

$result3=mysql_query("SELECT COUNT(*) as num FROM user WHERE position='student' and accept='true'");
$data3=mysql_fetch_assoc($result3);
$n13 = $data3['num'];
?>
 
		           <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>HOD</h4>
              <span class="text-muted"><?php echo $n11; ?></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Active HOD</h4>
              <span class="text-muted"><?php echo $n12; ?></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Student</h4>
              <span class="text-muted"><?php echo $n13; ?></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive"  alt="Generic placeholder thumbnail">
              <h4>Results</h4>
              <span class="text-muted"><?php echo $c14; ?></span>
            </div>
          </div>