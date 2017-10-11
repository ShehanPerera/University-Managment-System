<?php
 session_start();
error_reporting(1);
require('../config.php');
  extract($_SESSION);
  // include('../../Hostel/HMS/lib/session.php');
    $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
  /* if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")))
        {
          header('location:../../UMS/UMSlogin.php');
        }  */
 if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
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

    <title>Admin Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:red;border-bottom:1px solid white">
      <div class="container-fluid" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#FFFFFF"><?php echo "Welcome ! " ;?><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
		  
		  <?php 
		if(file_exists("img/$admin"))
		{
		$arr=scandir("img/$admin");
		$img=$arr[2];
		$path="img/".$admin."/".$img;
		?>
		<li><a><?php echo '<img height="30px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?></a></li>
		<?php 
		}else{
		?>
		
		<li><a href="index.php?option=upload_profile_pic" style="color:#FFFFFF"><img src="img/user.png" style="border-radius:20px" width="30" height="30"/></a></li>
            <?php }
			
			if(($_SESSION['res']=="radmin"))
			{
				
				echo'  <li><a href="../../UMS/index_R_S.php" style="color:#FFFFFF">UMS</a></li>';
			}
			else
			{
				echo'  <li><a href="../../UMS/index_multi.php" style="color:#FFFFFF">UMS</a></li>';
			}
			?>
            <li><a href="logout.php" style="color:#FFFFFF"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid" >
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar"  >
            <li ><a href="index.php" style="text-decoration:underline"><strong>Admin Dashboard</strong> <span class="sr-only">(current)</span></a></li>
			<li><a href="index.php?option=subject"><span class="glyphicon glyphicon-book"></span> Subject</a></li>
			<li><a href="../../UMS/admin/head.php"><span class="glyphicon glyphicon-user"></span> HOD</a></li>
			<li><a href="../../UMS/admin/student.php"><span class="glyphicon glyphicon-user"></span> Student</a></li>
			<li><a href="index.php?option=result"><span class="glyphicon glyphicon-edit"></span> Result</a></li>
			<li><a href="index.php?option=notification"> <span class="glyphicon glyphicon-map-marker"></span> Notification</a></li>
        	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
			
			<?php
			$mac = $_SERVER['REMOTE_ADDR'];
			$localIP = getHostByName(getHostName());
			/*
			* Getting MAC Address using PHP
			* Md. Nazmul Basher
			*/
			ob_start(); // Turn on output buffering
			system('ipconfig /all'); //Execute external program to display output
			$mycom=ob_get_contents(); // Capture the output into a variable
			ob_clean(); // Clean (erase) the output buffer
			$findme = "Physical";
			$pmac = strpos($mycom, $findme); // Find the position of Physical text
			$mac=substr($mycom,($pmac+36),17); // Get Physical Address

			echo "<li> Your Mac ID = ".$mac."</li>";
			echo "<li> Your Local IP = ".$localIP."</li>";
				?>			
          </ul>
          
        </div>
		<!-- sidebar end-->
        
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
		 
		
			<?php 
			$option=$_REQUEST['option'];
			if($option!="")
			{
				
				//subject start
				if($option=="subject")
				{
				include('subject.php');
				}
				if($option=="update_subject")
				{
				include('update_subject.php');
				}
				if($option=="add_subject")
				{
				include('add_subject.php');
				}
				//subject end
				
				if($option=="upload_profile_pic")
				{
				include('upload_profile_pic.php');
				}
				if($option=="contact")
				{
				include('contact.php');
				}
				//result start
				if($option=="result")
				{
				include('result.php');
				}
				if($option=="add_result")
				{
				include('add_result.php');
				}
				
				if($option=="update_result")
				{
				include('update_result.php');
				}
				//result end
				
				if($option=="Instructor")
				{
				include('Instructor.php');
				}
				
				if($option=="add_instructor")
				{
				include('add_instructor.php');
				}
				
				if($option=="update_password")
				{
				include('update_password.php');
				}
				
				if($option=="Student")
				{
				include('Student.php');
				}
				
				if($option=="add_student")
				{
				include('add_student.php');
				}
				
				
				if($option=="assign_instructor_student")
				{
				include('assign_instructor_student.php');
				}
				
				if($option=="notification")
				{
				include('notification.php');
				}
				if($option=="notification_add")
				{
				include('notification_add.php');
				}
				
			}
			else
			{
				
			include('dashboard.php');
			}
			?>
		 
		  
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
