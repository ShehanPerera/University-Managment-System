<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<!-- Student View -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>

  <style>
  .container{
	  height:1000px;
  }
  .frame{
	  border-color:#3329E7;
	  border-radius:25px;
	  border-style:solid;
  }
  th, td{
	  padding:3px;
  }
  .formnew{
    height:450px;
    overflow:auto;
  }
  .glyphicon.glyphicon-align-justify{
    font-size: 20px;
  }
  .colapsA
  {
    color: inherit;
  }
  </style>
<!-- Php for connecting and get methord -->
<?php 
  include('../../lib/LOG_view.php');


?>
<!-- Methords for btns -->
</head>

<body>
	<div class="col-lg-12">
    	
        <form class="form-inline" method="post" action="../../lib/STD_viewSubmit.php">
        <div class="formnew">
        	<div id="basic" class="panel panel-primary">
            <div class="panel-heading">
        		<b>Log Information</b>
            </div>
            <div class="panel-body">
              <!-- Log vie start here -->
      <table class="frmTable">
      <tr>
        <td colspan="2">Reg No.</td>
        <td colspan="2"><input type="text" name="regNo" disabled="disable"></td>
      </tr>
      <tr>
        <td><label for="SName">Name</label></td>
        <td><input type="text" name="SName" disabled="disable" value="$intName" class="form-control"></td>
        <td><label for="Faculty">Faculty</label></td>
        <td><input type="text" name="Faculty" disabled="disable" value="$faculty" class="form-control"></td>
      </tr>
      <tr>
        <td><label for="logDate">Date</label></td>
        <td><input type="date" class="form-control" name="LDate" disabled="disable"></td>
        <td><label for="LogType">Log Type</label></td>
        <td>
        </td>
      </tr>
      <tr>
      <td colspan='2'><label for="discription">Log Discription</label></td>
      </tr>
      <tr>
      <td colspan='4'><p><textarea name="discription" id="discription" class="form-control" rows="7" columns="40" disabled="disable"></textarea></p></td>
      </tr>
    </table>

            </div>
            </div>

            <!-- Buttons -->
            <div class="col-sm-3">
            <button type="submit" name="Edit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-edit pull-left"></span>Edit</button>
            </div>
            <div class="col-sm-3"> <button type="submit" name="Delete" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash pull-left"></span>Delete</button>
            </div>
            <div class="col-sm-3"><button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-print pull-left"></span>Print</button></div>
            <div class="col-sm-3">
            <button type="button" class="btn btn-warning btn-block" onclick="gotoLog();"><span class="glyphicon glyphicon-folder-open pull-left"></span>View Log File</button></div>
            
        </form>
        </div>   
            	
</body>
</html>
