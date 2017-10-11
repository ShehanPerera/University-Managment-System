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
        function clicked(e)
        {
          if(!confirm('Are You Want create this account?'))e.preventDefault();
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
 
        <form class="form-inline" action="..\..\lib\STAFF_add.php" method="POST" enctype="multipart/form-data">
        <div class="formnew">
          <div id="basic" class="panel panel-primary">
            <div class="panel-heading">
            <b>Basic information</b>
            </div>
            <div class="panel-body">
           <div class="col-sm-8">
                <table width="100%" >
                <tr>
                <td>ID : </td><td><input name="idNo" type="text" class="form-control" required /></td>
                </tr>
                <tr>
                <td>Name: </td><td><input type="text" name="Name" class="form-control" required /></td>
                </tr>
                 <tr>
                  <td>Type : </td>
                  <td><select name="type" class="form-control" required>
                    <optgroup label="Type:">
                      <option value="local">Local</option>
                      <option value="admin">Admin</option>
                    </optgroup>
                  </select>
                </td>
                </tr>
           

               
              </table>
            </div>
            </div>
            </div>
            
           
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-block" onclick="clicked(event)" /><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Create User Acccount</button>
            </div>
            <div class="col-sm-2"> <a href="index.php" class="btn btn-danger btn-block"><i class="glyphicon glyphicon-circle-arrow-left"></i> &nbsp;Discard</a>
            </div>
            <div class="col-sm-3"></div>
        </form>
        </div>          
</body>
</html>
