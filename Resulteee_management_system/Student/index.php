<?php
  session_start();
error_reporting(1);
require('../config.php');
  extract($_SESSION);
  $id=$_SESSION['id'];
  // include('../../Hostel/HMS/lib/session.php');
    $utype1=$_SESSION['usertype'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
  if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="student"))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
<?php


$q=mysqli_query($con,"select * from student where id='".$id."'"); 
$stu= mysqli_fetch_array($q);

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:red;border-bottom:1px solid #ccc">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:white"><?php echo "Hello  ! ";echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></a>
        
	
		
		</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		<li><a  href="../../UMS/index_R_S.php" style="color:#337ab7"> UMS</a></li>
		<?php 
		if(file_exists("img/$staff"))
		{
		$arr=scandir("img/$staff");
		$img=$arr[2];
		$path="img/".$staff."/".$img;
		?>
		<li><a title="Upload Profile pic" href="#" style="color:#FFFFFF"><?php echo '<img height="30px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?></a></li>
		<?php 
		}else{
		?>
		
		<li><a title="Upload Profile pic" href="index.php?option=upload_profile_pic" style="color:#FFFFFF"><img src="img/user.png" style="border-radius:20px" width="30" /></a></li>
            <?php } ?>
		
			
			<li><a  href="logout.php" style="color:#337ab7"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <br/>
		<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li>
			 
		<a href="../index.php" >BACK</a>
			<a style="text-decoration:underline" href="index.php"><strong>Student Dashboard</strong> <span class="sr-only">(current)</span></a></li>
            
			
			
			<li><a href="index.php?option=view_result" title="results "><span class="glyphicon glyphicon-list-alt"></span> View Result</a></li>	
			
			
          </ul>
          
        </div>
		<!-- sidebar end-->
        <br/>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
		
			<?php 
			$option=$_REQUEST['option'];
			if($option!="")
			{
			
				
				
				if($option=="view_result")
				{	
				include('view_result.php');
				}
				
				
				
				if($option=="update_password")
				{
				include('../../UMS/user/editpage.php');
				}
				
				if($option=="upload_profile_pic")
				{
				include('upload_profile_pic.php');
				}
				
				
				if($option=="notification")
				{
				include('notification.php');
				}
				
				
				
			}else{
			?>
			 <h1 class="page-header" style="color:red; text-decoration:underline" align="center">Student Dashboard</h1>
          <div class="row placeholders">
            <?php 
			
		$query=mysqli_query($con,"select * from results where Index_no='".$stu['Index_no']."'");
		
		$rows=mysqli_fetch_array($query);
		//$total=$rows['sub1']+$rows['sub2']+$rows['sub3']+$rows['sub4']+$rows['sub5']+$rows['sub6']+$rows['sub7'];


	
	//get results of each subject
$q2=mysqli_query($con,"select sum(credit) as creditSum,sum(credit*gpv) as gpvSum from results where Index_no='".$stu['Index_no']."'");
$r2=mysqli_fetch_array($q2);	
$gpa=$r2['gpvSum']/$r2['creditSum'];
$gpaf=number_format($gpa,2);
	
			?>
			<h4 align="left">Your GPA <font color="red"> :  <?php echo $gpaf;	 ?> </font>  </h4>
          </div>
		  <?php }?>
		  
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
