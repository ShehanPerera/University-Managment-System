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
  </style>
<!-- Php for connecting and get methord -->
<?php 
  $reg = $_GET["key"];
  include('../../lib/STD_view.php');


?>
</head>

<body>
	<div class="col-lg-12">
    	
        <form class="form-inline" method="post" action="../../lib/STD_viewSubmit.php">
        <div class="formnew">
        	<div id="basic" class="panel panel-primary">
            <div class="panel-heading">
        		<b>basic information</b>
            </div>
            <div class="panel-body">
                <div class="col-sm-4">
                <img src="../../lib/STD_img.php?key=<?php echo $regNo;?>" class="img-thumbnail" height="300px" width="300px"> <br />
                </div>
        		<div class="col-sm-8">
                <table width="100% " >
                <tr>
                <td><label for="regNo">Reg. No. : </label></td><td><input name="regNo" type="text" class="form-control" readonly="readonly" value="<?php echo $regNo;?>" /></td>
                </tr>
                <tr>
                <td><label for="f-Name">First Name: </label></td><td><input type="text" class="form-control" id="f-Name" readonly="readonly" value="<?php echo $fName;?>"/></td>
                </tr>
                <tr>
                <td><label for="l-Name">Name with initials : </label></td><td><input name="int-Name" type="text" class="form-control" readonly="readonly" value="<?php echo $intName;?>"/></td>
                </tr>
                 <tr>
                <td><label for="NIC">NIC No : </label></td><td><input name="NIC" type="text" class="form-control" readonly="readonly" value="<?php echo $NIC;?>"/></td>
                </tr>
                <tr>
                <td><label for="DOB">Date of Birth : </label></td><td><input name="DOB" type="date" class="form-control" readonly="readonly" value="<?php echo $dob;?>"/></td>
                </tr>
                <tr>
                <td><label for="Gender">Gender : </label></td><td><input name="Gender" type="text" class="form-control" readonly="readonly" value="<?php echo $sex;?>"/></td>
                </tr>
                 <tr>
                <td><label for="l-Name">Faculty : </label></td>
                <td><input name="Faculty" type="text" class="form-control" readonly="readonly" value="<?php echo $faculty;?>"/></td>
                </tr>
                 <tr>
                <td><label for="Subject">Subject : </label></td><td><input name="course" type="text" class="form-control" readonly="readonly" value="<?php echo $course;?>"/></td>
                </tr>
                <tr>
                <td><label for="year">Year of study : </label></td><td><input name="year" type="number" class="form-control" readonly="readonly" value="<?php echo $yer;?>"/></td>
                </tr>
                </table>
                </div>
                </div>
            </div>

            <!--Student Contact-->
            <div class="panel panel-info">
            <div class="panel-heading">
            <b>Student Contact Details</b>
            </div>
            <div class="panel-body">
              <div class="col-sm-6">
                  <table width="100%">
              <tr>
                <td>Contact No: </td>
                <td><input name="SConNo" type="text" class="form-control" readonly="readonly" value="<?php echo $contactNo;?>"/></td>
            </tr>
              <tr>
                <td>E-Mail Address:</td>
                <td><input name="EMail" type="text" class="form-control" readonly="readonly" value="<?php echo $email;?>"/></td>
              </tr>
              <tr>
                <td>Residential Address: </td>
                <td><textarea name="Saddress" class="form-control" rows="3" cols="30" readonly="readonly"><?php echo $resAddress;?></textarea></td>
              </tr>
          </table>
                </div>
                <div class="col-sm-6">
                <table>
                  <tr>
                <td>Residential District: </td>
                <td><input name="SRDistrict" type="text" class="form-control" readonly="readonly" value="<?php echo $district;?>"/></td>
              </tr>
              <tr>
                <td>GS Devision: </td>
                <td><input name="SGSDiv" type="text" class="form-control" readonly="readonly" value="<?php echo $gsDiv;?>"/></td>
              </tr>
                        <tr>
                <td>DS Devision: </td>
                <td><input name="SDSDiv" type="text" class="form-control" readonly="readonly" value="<?php echo $dsDiv;?>"/></td>
              </tr>
                </table>
            </div>
            </div>
            </div>
            <!-- Gurdian Contact -->

            <div class="panel panel-info">
            <div class="panel-heading">
            <b>Gurdian Details</b>
            </div>
            <div class="panel-body">
            	<div class="col-sm-6">
                	<table width="100%">
  						<tr>
    						<td>Gurdian Name: </td>
    						<td><input name="GName" type="text" class="form-control" readonly="readonly" value="<?php echo $gurdianName;?>"/></td>
 						</tr> 
  						<tr>
    						<td>Relationship:</td>
    						<td><input name="relationShip" type="text" class="form-control" readonly="readonly" value="<?php echo $relation ;?>"/></td>
  						</tr>
  						<tr>
    						<td>Contact No: </td>
    						<td><input name="GContact" type="text" class="form-control" readonly="readonly" value="<?php echo $GcontNo;?>"/></td>
  						</tr>
  						<tr>
    						<td>Police Station: </td>
    						<td><input name="PoliceSt" type="text" class="form-control" readonly="readonly" value="<?php echo $GPoliceStation;?>"/></td>
  						</tr>
                        <tr><td colspan="2"><b>Emergency Contact</b></td></tr>
                        <tr><td>Name: </td><td><input name="Em_Name" type="text" readonly="readonly" class="form-control" value="<?php echo $EMName;?>"/></td></tr>
                        <tr><td>Contact No: </td><td><input name="Em_No" type="text" readonly="readonly" class="form-control" value="<?php echo $EMCont;?>"/></td></tr>
					</table>
                </div>
                <div class="col-sm-6">
                <label for="address">Address: </label><br />
                <textarea name="address" class="form-control" rows="3" cols="40" readonly="readonly"><?php echo $GAddress;?></textarea>
                
            </div>
            </div>
            </div>
            
            <!--Hostel Info-->
            <div class="panel panel-warning">
            <div class="panel-heading">
            <b>Student Hostel Details</b>
            </div>
            <div class="panel-body">
            <table width="100%">
             	<tr>
    				<td>Hostel Name: </td>
    				<td><input name="HostelNm" type="text" class="form-control" width="100%" readonly="readonly" value="<?php echo $HName;?>"/></td>
  				</tr>
                <tr>
    				<td>Blockl No.: </td>
    				<td><input name="B-No" type="text" class="form-control" readonly="readonly"/></td>
                    <td>Room No: </td>
    				<td><input name="R-No" type="text" class="form-control" readonly="readonly" value="<?php echo $RoomNo;?>"/></td>
  				</tr>
            </table>
            </div>
            </div>
            
            </div>
            
            <div class="col-sm-2">
              <button type="submit" name="Edit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-edit pull-left"></span>Edit</button>
            </div>
            
            <div class="col-sm-2">
                <button type="button" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-folder-open pull-left"></span>Leave</button>
            </div>
            
            <div class="col-sm-2">
              <button type="submit" name="Delete" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash pull-left"></span>Delete</button>
            </div> 
            
              

            <div class="col-sm-2">
              <button type="button" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-folder-open pull-left"></span>&nbsp;&nbsp;View Log File</button>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-print pull-left"></span>&nbsp;&nbsp;Print</button>
            </div>
            <div class="col-sm-2">
                <a href="javascript:history.go(-1)" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-folder-open pull-left"></span>back</a>
            </div>
             
            
             

            </div>
        </form>
        </div>   
            	
</body>
</html>
