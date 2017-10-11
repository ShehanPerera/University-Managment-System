<?php 
 extract($_POST);
 session_start();
 if(!isset($_SESSION['enterkey']))
 {
	 header("Location:enter_up.php");
		exit;
 }
 
 $time = $_SERVER[‘REQUEST_TIME’];
/**
 * for a 30 minute timeout, specified in seconds
 */
$timeout_duration = 20;

/**
 * Here we look for the user’s LAST_ACTIVITY timestamp. If
 * it’s set and indicates our $timeout_duration has passed, 
 * blow away any previous $_SESSION data and start a new one.
 */
if (isset($_SESSION[‘LAST_ACTIVITY’]) && ($time - $_SESSION[‘LAST_ACTIVITY’]) > $timeout_duration) {
  unset($_SESSION['enterkey']);  
  header("Location:enter_up.php");
		exit;
  }

 
 if(isset($add))
 {
 
	$que=mysqli_query($con,"select * from results where  id='".$id."'");
	$row= mysqli_num_rows($que);
	if($row)
	{
		$err="<font color='red'>Result has already added</font>";
	}	
	else
	{
		$que=mysqli_query($con,"insert into results values('','$code','$index','$result','$level')");
		$err="<font color='red'>Added Successfully</font>";
		
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
		<title>Import Excel To Mysql Database Using PHP </title>
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
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large" required>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
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
<?php
$_SESSION[‘LAST_ACTIVITY’] = $time;
?>