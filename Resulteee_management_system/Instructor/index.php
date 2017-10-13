<?php
 session_start();
error_reporting(1);

  //extract($_SESSION);
  include('../../Hostel/HMS/lib/session.php');
    $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
  if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="head")&&(!in_array("head",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
<?php

session_start();
extract($_SESSION);
include('../config.php');
$q=mysqli_query($con,"select * from instructor where email='".$_SESSION['emails']."'"); 
$inst= mysqli_fetch_array($q);

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

    <title>HOD Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#FF0000;border-bottom:1px solid #ccc">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#FFFFFF"><?php echo "Welcome ! " ; echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></a>
        
	
		
		</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		
		<?php 
		if(file_exists("img/$staff"))
		{
		$arr=scandir("img/$staff");
		$img=$arr[2];
		$path="img/".$staff."/".$img;
		?>
		 
	
		<li><a><?php echo '<img height="30px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?></a></li>
		<?php 
		}else{
		?>
		<li><a><?php echo '<img height="30px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?></a></li>
		
		
		    <?php } ?>
			<li><a href="../../UMS/index_R_S.php" style="color:#FFFFFF">UMS</a></li>;
            <li><a href="logout.php" style="color:#FFFFFF"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
			<a style="text-decoration:underline" href="index.php"><strong>HOD Dashboard</strong> <span class="sr-only">(current)</span></a></li>
            
			
				
			
			
			
	<li><a href="index.php?option=notification" title="Check notification given by admin"><span class="glyphicon glyphicon-bell" style="color:red"></span> Notification from Admin</a></li>
	
			
			
			
			
			<li><a href="index.php?option=upload_results" title="Upload results"><span class="glyphicon glyphicon-lock"></span> Upload Results </a></li>
			<li><a href="../../UMS/User/editpage.php" title="Update Profile"><span class="glyphicon glyphicon-cog"></span> Update Profile</a></li>
			
			
			
          </ul>
          
        </div>
		<!-- sidebar end-->
        <br/>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		
			<?php 
			$option=$_REQUEST['option'];
			if($option!="")
			{
					
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
				
				
				if($option=="Students_assigned")
				{	
				include('Students_assigned.php');
				}
				
				
				if($option=="upload_course_material")
				{
				include('upload_course_material.php');
				}
			
				
				
				if($option=="update_password")
				{
				include('update_password.php');
				}
				
				if($option=="update_profile")
				{
				include('update_profile.php');
				}
				
				if($option=="upload_profile_pic")
				{
				include('upload_profile_pic.php');
				}
				
				
				if($option=="notification")
				{
				include('notification.php');
				}
				if($option=="upload_results")
				{
				include('upload_results.php');
				}
				
				
			}else{
			?>
			 <h1 class="page-header" style="color:#FF0000">HOD Dashboard</h1>
          <div class="row placeholders">
            <?php 
			
		
		$que=mysqli_query($con,"SELECT * from  student where course like '%".$inst['dept']."%'");
		$count=mysqli_num_rows($que);
		
		?>
		</div>
		<div class="table-responsive">
		<table class="table">
   	<caption><h4 style="color:red" align="center">students</h4></caption>
	   
		<tr class="info">
		<th>Sr. No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Index_no</th>
		</tr>
		<?php

$que=mysqli_query($con,"select * from  student where course like '%".$inst['dept']."%'");
$i=1;
while($row= mysqli_fetch_array($que))
	{
	?>
	<tr  class="active">
		<Td><?php echo $i;?></td>
		<Td><?php echo $row[1];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[4];?></Td>

	</tr>
	
	<?php $i++;
	} 
	?>
  </table>
		  
		  
        </div>
		
			
			
			<h4 align="left">Total number of students assigned to you <font color="#0000FF"> :  <?php echo $count; ?> </font>  </h4>
           
		  <?php

		  }
		  ?>

<!---gayan start--->

      
    </div>
<!---gayan end--->
		  
		  
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
