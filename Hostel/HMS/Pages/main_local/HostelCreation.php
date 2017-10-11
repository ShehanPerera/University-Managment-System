<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<!--Student New-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="script.js"></script>
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
  </style>
</head>

<body>
  <div class="col-lg-12">
      <h4>Hostel Creation Form</h4><br />
        <form class="form-inline" action="..\..\lib\STD_New.php" method="GET" id="myForm">
          <div id="basic" class="panel panel-primary">
            <div class="panel-heading">
            <b>Basic information</b>
            </div>
            
            <div class="panel-body">
                <table width="100%" >
                <tr>
                <td><label for="regNo" id="regNo">Name of the Hostel: </label></td><td><input name="HName" type="text" class="form-control"  required/></td>
                </tr>
                <tr>
                <td><label for="fullName" >Number of Blocks: </label></td><td><input type="text" name="Bnum" class="form-control" required onblur="validate('username', this.value)" /></td>
                </tr>
                <tr>
                <td><label for="l-Name" id="iname">Number of rooms per block: </label></td><td><input name="Nrooms" type="text" class="form-control" required /></td>
                </tr>
                </table>
                </div>
                </div>
            </div>
            <div class="panel panel-info">
            <div class="panel-heading">
            <b>Warden Details</b>
            </div>
            <div class="panel-body">
              <div class="col-sm-6">
                  <table width="100%">
              <tr>
                <td>Warden Name: </td>
                <td><input name="Wname" type="text" class="form-control" required/></td>
            </tr>
              <tr>
                <td>NIC number:</td>
                <td><input name="Nicnum" type="text" class="form-control" required/></td>
              </tr>
              <tr>
                <td>Office Contact No </td>
                <td><input name="Ocontact" type="text" class="form-control" required/></td>
              </tr>

          </table>
                </div>
                </div>
                </div>


            <!--Student Contact-->
            <div class="panel panel-info">
            <div class="panel-heading">
            <b>Sub Warden Details: </b>
            </div>
            <div class="panel-body">
              <div class="col-sm-6">
                  <table width="100%">
              <tr>
                <td>Sub Warden Name: </td>
                <td><input name="SWname" type="text" class="form-control" required/></td>
            </tr>
              <tr>
                <td>NIC number:</td>
                <td><input name="SNicnum" type="text" class="form-control" required/></td>
              </tr>
              <tr>
                <td>Office Contact No: </td>
                <td><input name="SOcontact" type="text" class="form-control" required /></td>
              </tr>
          </table>
                </div>
                <div class="col-sm-6">
                
            </div>
            </div>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
            <button type="submit" onclick="checkForm()" class="btn btn-success btn-block"><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Save</button>
            </div>
            <div class="col-sm-2"> <button type="reset" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-remove-sign"></i> Clear All</button>
            </div>
            <div class="col-sm-3"></div>
        </form>
        </div>          
</body>
</html>
