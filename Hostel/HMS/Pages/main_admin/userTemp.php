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
    height:480px;
    overflow:auto;
  }
  </style>
</head>

<body>
<br>
  <div class="col-lg-12 winHeight">
 
        <form class="form-inline" action="..\..\lib\STAFF_New.php" method="POST" enctype="multipart/form-data">
        <div class="formnew">
          <div id="basic" class="panel panel-primary">
            <div class="panel-heading">
            <b>Basic information</b>
            </div>
            <div class="panel-body">
                <div class="col-sm-4">
                  <img id="pro_pic" src="../../Images/profile-default.jpg" alt="your image" class="img-thumbnail img-responsive" height="360px" width="270px"> <br />
                <input name="pro_Picture" type="file" onchange="readURL(this);"/>
                </div>



            <div class="col-sm-8">
                <table width="100%" >
                <tr>
                <td>ID : </td><td><input name="idNo" type="text" class="form-control" required /></td>
                </tr>
                <tr>
                <td>Name: </td><td><input type="text" name="Name" class="form-control" required /></td>
                </tr>
                 <tr>
                <td>NIC No : </td><td><input name="NIC" type="text" class="form-control" required/></td>
                </tr>
                <tr>
                  <td>Gender : </td>
                  <td><select name="Gender" class="form-control" required>
                    <optgroup label="Gender:">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </optgroup>
                  </select>
                </td>
                </tr>

                <tr>
                <td>Contact No: </td>
                <td><input name="SConNo" type="text" class="form-control"/></td>
            </tr>
              <tr>
                <td>E-Mail Address:</td>
                <td><input name="EMail" type="text" class="form-control"/></td>
              </tr>
              <tr>
                <td>Residential Address: </td>
                <td><textarea name="Raddress" class="form-control" rows="3" cols="30"></textarea></td>
              </tr>

               
              </table>
            </div>
            </div>
            </div>
            
            <!--Staff Service-->
            <div class="panel panel-info">
            <div class="panel-heading">
            <b>Staff Service</b>
            </div>
            <div class="panel-body">
              <div class="col-sm-6">
                <table width="100%">
                  <tr>
                    <td>Service Address: </td>
                    <td><textarea name="Saddress" class="form-control" rows="3" cols="30"></textarea></td>
                  </tr>
                </table>
            </div>
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
