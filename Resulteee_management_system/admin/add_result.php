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
//	include 'db.php';

 extract($_POST);
 session_start();
 if(!isset($_SESSION['enterkey']))
 {
	 header("Location:index.php?option=result");
		exit;
 }

 $timeout = 320; // Number of seconds until it times out.

 // Check if the timeout field exists.
 if(isset($_SESSION['timeout'])) {
     // See if the number of seconds since the last
     // visit is larger than the timeout period.
     $duration = time() - (int)$_SESSION['timeout'];
     if($duration > $timeout) {
         // Destroy the session and restart it.
         session_destroy();
         session_start();
     }
 }

 // Update the timeout field with the current time.
 $_SESSION['timeout'] = time();

 /*if(isset($add))
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

}*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel To Mysql Database Using PHP </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">

    <script type="text/javascript">

        setTimeout(function(){ window.location = "index.php?option=result#popup1"; }, 300000);

    </script>

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
