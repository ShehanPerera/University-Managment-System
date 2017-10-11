<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page starts here -->
<html>
<head><title>Input data from excel</title>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <style type="text/css">
  .contain{
  	padding: 100px;
  }

  input[type="file"] {
	border: blue 1px solid;
    padding: 8px;
    color: blue;
    font-size: 15px;
    border-radius: 4px;
    margin-right: 10px;
	cursor:pointer;
}
button {
    font-size: 18px;
    border: blue 1px solid;
    font-weight: bold;
    padding: 8px;
    background: azure;
    color: blue;
    border-radius: 4px;
	cursor:pointer;
}
div {
    text-align: center;
    border-radius: 4px;
}
<?php $HID = $_GET['key']; ?>
  </style>
</head>
<body>
<div class="contain">
<div id="container" class="panel panel-primary">
<div class="panel-heading">
        		<b>Import data from CSV To Room Details</b>
            </div>
<div class="panel-body">
	<form action="HOS_RooMCSVBAck.php" method="post" name="upload_excel" class="form-inline" enctype="multipart/form-data">

	<div class="divStyle">
	<label>Import CSV/Excel File:</label>
	<input type="file" multiple name="filename" required="required" id="filename">
  <input type="hidden" name="HID" value="<?php echo "$HID"; ?>">
	<button type="submit" id="submit" name="submit" data-loading-text="Loading...">Upload</button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>