<?php
session_start();
error_reporting(1);
 require('../config.php');
 extract($_POST);
 
 if(isset($signup))
 {
	
	//for Admin
	$que=mysqli_query($con,"select email,pass from admin where email='$eid' and pass='$pass'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$eid;
		echo "<script>window.location='index.php'</script>";
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
	 }
	
 
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
    <style type="text/css">
<!--
.style1 {
	font-size: medium;
	color: #000000;
}
-->
    </style>
</head>
<body style="background-color:#0080C0;">
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6">

<div class="panel panel-default">
<div class="panel-heading">

<h3 class="panel-title" style="color:red;" align="center">Admin Login</h3>
</div>
<div class="panel-body">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
  <div class="form-group">

    <label for="exampleInputEmail1" ><span class='glyphicon glyphicon-envelope' ></span>  Email address</label>
    <input type="email" class="form-control" name="eid" id="exampleInputEmail1" placeholder="eg. myusername@mail.com" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><span class='glyphicon glyphicon-lock'></span> Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="eg. 867H!DT" required>
  </div>
  
  
 <div class="form-group">
    <button name="signup" class="btn btn-lg btn-success btn-block" style="width:150px; float:left; margin-left:30%" type="submit"><span class="glyphicon glyphicon-log-in"></span> Login</button>
      </div>

	</form>	
	</div>
	</div>
</div>

</div>


		</div>


</body>
</html>	
	