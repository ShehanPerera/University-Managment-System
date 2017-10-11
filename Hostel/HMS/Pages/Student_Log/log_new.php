<!-- session -->
<?php
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Search</title>
<link rel="icon" href="../../Images/logo.ico" />
<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
<style>
div.cont{
  width: 100%;
  height: 100%;
  min-height: 500px;

}
.frm
{
  height:100%;

}
.contantDiv{
  height:450px;
  /*overflow:auto;*/
}
.frmTable{
  width:100%;
  padding: 20px;
}
.frmTable th, td{
    padding:3px;
    }
textarea {
     width: 100%;
     -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
     -moz-box-sizing: border-box;    /* Firefox, other Gecko */
     box-sizing: border-box;         /* Opera/IE 8+ */
}
</style>
<!-- Jason Script For  -->
<script>
// Function to load form
  function  loadForm(key) {
     $.get("../../lib/LOG_newForm.php?key="+key, function(data, status){
        document.getElementById("LogFrm").innerHTML = data;
    });
  }
  // Function to enable save button
  function  enableSave(key) {
     $.get("../../lib/LOG_newForm.php?key="+key, function(data, status){
        var res = data;
        if (res == 'true') {
        document.getElementById("sve").disabled = false;
      }
      else
      {
        document.getElementById("sve").disabled = true;
      }
    });
  }
  // Function to trigger both functions
  function checkDB(key){
    enableSave(key);
    loadForm(key);

  }
    function Redirect(key) {
       window.location="student_View.php?key="+key;
    }
    </script>
</head>
<body onload="checkDB('')">
  <div class="col-lg-12 winHeight">
        <form action="..\..\lib\LOG_addNew.php" method="POST">
        <div class="formnew contantDiv">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <!-- reg no first -->
        <div class="panel panel-primary">
        <div class="panel-heading">
            <b>Create New Log</b>
            </div>
        <div class="panel-body">
        <div class="form-inline">
          <label for="regNo">Reg No </label> <input type="text" name="regNo" id="regNo" class="form-control">
          <button class="btn btn-primary form-control" type="button" onclick="checkDB(document.getElementById('regNo').value)">Go</button>
          </div>
          </div>

          <div id="LogFrm" class="form-group">
          </div>
          </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
            <!-- Buttons -->
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
            <button type="submit" class="btn btn-success btn-block" disabled="disable" id="sve"><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Save</button>
            </div>
            <div class="col-sm-3"> <a href="index.php" class="btn btn-danger btn-block"><i class="glyphicon glyphicon-circle-arrow-left"></i> &nbsp;Discard</a>
            </div>
            <div class="col-sm-3"></div>
        </form>
        </div>
</body>
</html>
