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
<title>Create Hostel</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <script>
  function  getHosData(key) {
     $.get("../../lib/HOS_showForEdit.php?key="+key, function(data, status){
        document.getElementById("frm").innerHTML = data;
    });
  }
  </script>
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
        <form class="form-inline" action="..\..\lib\Hos_UpdatenewforAdmin.php" method="POST" id="myForm">
          <div id="basic" class="panel panel-primary">
            <div class="panel-heading">
            <b>Basic information</b>
            </div>
            
            <div class="panel-body">
                <label for="hosid" id="hosid">Hostel ID: </label></td><td><input name="hid" type="text" class="form-control" onkeyup ="getHosData(this.value)"  required/>
                <div id="frm">
                  
                </div>
                </div>
                </div>
            </div>
           
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Save Changes</button>
            </div>
            <div class="col-sm-2"> <button type="reset" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-remove-sign"></i> Clear All</button>
            </div>
            <div class="col-sm-2">
             
            </div>
            <div class="col-sm-3"></div>
        </form>
        </div>          
</body>
</html>
