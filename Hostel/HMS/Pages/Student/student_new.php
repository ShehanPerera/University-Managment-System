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

  <script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pro_pic')
                        .attr('src', e.target.result)
                        // .width(150)
                        // .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>


  <style>
  .container{

  }
  .winHeight{
    height: 95vh;
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
    height:400px;
    overflow:auto;
  }
  </style>

<?php include('../../lib/STD_Con.php');?>

</head>

<body>
	<div class="col-lg-12 winHeight">
        <form class="form-inline" action="..\..\lib\STD_New.php" method="POST" enctype="multipart/form-data">
        <div class="formnew">
        	<div id="basic" class="panel panel-primary">
            <div class="panel-heading">
        		<b>basic information</b>
            </div>
            <div class="panel-body">
                <div class="col-sm-4">


                <img id="pro_pic" src="../../Images/profile-default.jpg" alt="your image" class="img-thumbnail img-responsive" height="360px" width="270px"> <br />
                <input name="pro_Picture" type="file" onchange="readURL(this);"/>
                </div>
        		<div class="col-sm-8">
                <table width="100%" >
                <tr>
                <td><label for="regNo">Reg. No. : </label></td><td><input name="regNo" type="text" class="form-control" required /></td>
                </tr>
                <tr>
                <td><label for="fullName">Full Name: </label></td><td><input type="text" name="fullName" class="form-control" required /></td>
                </tr>
                <tr>
                <td><label for="l-Name">Name With Ini. : </label></td><td><input name="NameWitnI" type="text" class="form-control" required/></td>
                </tr>
                 <tr>
                <td><label for="NIC">NIC No : </label></td><td><input name="NIC" type="text" class="form-control" required/></td>
                </tr>
                <tr>
                <td><label for="DOB">Date of Birth : </label></td><td><input name="DOB" type="date" class="form-control" required/></td>
                </tr>
                <tr>
                <td><label for="l-Name">Gender : </label></td>
                <td><select name="Gender" class="form-control" required>
          <optgroup label="Gender:">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </optgroup>
        </select>
            </td>
                </tr>
                 <tr>
                <td><label for="l-Name">Faculty : </label></td>
                <td><select name="Faculty" class="form-control" required>
			 		<optgroup label="Faculties:">
					<option value="Agriculture">Agriculture</option>
					<option value="Arts" checked>Arts</option>
					<option value="Engineering">Engineering</option>
					<option value="commerce">Management Studies & Commerce</option>
					<option value="medicine" checked>Medicine</option>
					<option value="science" checked>Science</option>
					<option value="technology" checked>Technology</option>
                    </optgroup>
				</select>
            </td>
                </tr>
                 <tr>
                <td><label for="Course">Course : </label></td><td><input name="Course" type="text" class="form-control" required/></td>
                </tr>
                <tr>
                <td><label for="Subject">Year of study : </label></td><td><input name="Year" type="number" class="form-control" required/></td>
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
    						<td><input name="SConNo" type="text" class="form-control"/></td>
 						</tr>
  						<tr>
    						<td>E-Mail Address:</td>
    						<td><input name="EMail" type="email" class="form-control"/></td>
  						</tr>
  						<tr>
    						<td>Residential Address: </td>
    						<td><textarea name="Saddress" class="form-control" rows="3" cols="30"></textarea></td>
  						</tr>
					</table>
                </div>
                <div class="col-sm-6">
                <table>
                	<tr>
    						<td>Residential District: </td>
    						<td><input name="SRDistrict" type="text" class="form-control"/></td>
  						</tr>
  						<tr>
    						<td>GS Devision: </td>
    						<td><input name="SGSDiv" type="text" class="form-control"/></td>
  						</tr>
                        <tr>
    						<td>DS Devision: </td>
    						<td><input name="SDSDiv" type="text" class="form-control"/></td>
  						</tr>
                </table>
            </div>
            </div>
            </div>
            <!-- Gurdian Details -->
            <div class="panel panel-info">
            <div class="panel-heading">
            <b>Gurdian Details</b>
            </div>
            <div class="panel-body">
              <div class="col-sm-6">
                  <table width="100%">
              <tr>
                <td>Gurdian Name: </td>
                <td><input name="GName" type="text" class="form-control"/></td>
            </tr>
              <tr>
                <td>Relationship:</td>
                <td><input name="relationShip" type="text" class="form-control"/></td>
              </tr>
              <tr>
                <td>Contact No: </td>
                <td><input name="GContact" type="text" class="form-control"/></td>
              </tr>
              <tr>
                <td>Police Station: </td>
                <td><input name="PoliceSt" type="text" class="form-control"/></td>
              </tr>
              <tr><td colspan="2"><b>Emergency Contact</b></td></tr>
              <tr><td>Name: </td><td><input name="Em_Name" type="text" class="form-control"/></td></tr>
              <tr><td>Contact No: </td><td><input name="Em_No" type="text" class="form-control"/></td></tr>

          </table>
                </div>
                <div class="col-sm-6">
                <label for="address">Address: </label><br />
                <textarea name="Gaddress" class="form-control" rows="3" cols="40"></textarea>
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
    				<td>Hostel id: </td>
    				<td>

                <select name="HostelID" class="form-control" >
                <option value="">Select Hostel</option>

    <?php
    $sql = "SELECT * FROM hostel_detail";
    $result = $conn->query($sql);

    foreach ($result as $hname )
    {
    ?>
      <option value="<?php echo $hname["id"]; ?>"><?php echo $hname["name"]; ?></option>

    <?php
    }
    ?>
    </select>





            </td>
  				</tr>
                <tr>

                    <td>Room No: </td>
    				<td><input name="R_No" type="text" class="form-control"/></td>
  				</tr>
            </table>
            </div>
            </div>

            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Save</button>
            </div>
            <div class="col-sm-2"> <button type="reset" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-remove-sign"></i> Clear All</button>
            </div>
            <div class="col-sm-2"> <a href="index.php" class="btn btn-danger btn-block"><i class="glyphicon glyphicon-circle-arrow-left"></i> &nbsp;Discard</a>
            </div>
            <div class="col-sm-3"></div>
        </form>
        </div>
</body>
</html>
