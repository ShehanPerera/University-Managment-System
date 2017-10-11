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
session_start();
include '../config.php';

 extract($_POST);
 
 
  if(isset($_SESSION['enterkey']))
  {
	  unset($_SESSION['enterkey']);
  }
  
  
 if(isset($_POST["passin"]))
 {
	 $pass= $_POST['pass'];
	 //$pass=md5($pass);
	 
	 $sql = "select * from admin where code='$pass'";
	 $sqli = mysqli_query($con,$sql);
	 $row = mysqli_num_rows($sqli);
	 if(!$row ==null)
	 {
		 $_SESSION['enterkey']=true;
		 header("Location:index.php?option=enter_up");
		 
	 }
 }
 
 ?>
 <!DOCTYPE html>
<?php 
	include 'db.php';

?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--<title>Import Excel To Mysql Database Using PHP </title>-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
	</head>
	<body>   
	
<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
			
			<form class="form-horizontal well" action="" method="post">
					<fieldset>
						<div class="control-group">
							<div class="control-label">
								<label>Enrolment key:</label>
							</div>
							<div class="controls">
								<input type="password" name="pass" class="input-large" required>
								<button type="submit" id="submit" name="passin" class="btn btn-primary button-loading">submit</button>
						
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
	</div>
	</div>

	</body>
</html>
