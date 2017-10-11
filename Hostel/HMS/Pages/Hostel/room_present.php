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
.contantTable{
  height:350px;
  overflow:auto;
}
.search{
  border-radius: 200px;
}
tr{
  cursor: pointer;
}
</style>
<!-- Jason Script For  -->
<script>
  function  getStData(key) {
     $.get("../../lib/HOS_Basic.php?key="+key, function(data, status){
        document.getElementById("std_table").innerHTML = data;
    });
  }


    function Redirect(key) {
       window.location="student_View.php?key="+key;
    }

    function goBack() {
      window.history.back();
    }
    </script>




</head>
<body onload="getStData('')">
  <div class="cont col-sm-12">
  <form method="post" action="student_delete.php" onkeypress="return event.keyCode != 13;">
    <div class="input-group">
    <span class="input-group-addon search" style="background-color: #ffffff"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" onkeyup="getStData(this.value)" class="form-control input-sm search" id="searchIn" placeholder="Search by Reg. No., Name, Faculty, Course..." autofocus="autofocus" name="searchIn"></div><br>
    <div class="contantTable" id="std_table">
    <table class="table table-striped">
    <tr>
    <th>Room No.</th><th>No of Student</th><th></th><th>faculty</th><th>Course</th>
    </tr>
    <span id></span>
    </table>
    </div>
    <div id="controlBtns" class="well well-sm">
    <p align="center">
     <span class="btn-group"><a href="add_new.php" class="btn btn-success"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Add new</a>
     <a href="javascript:history.go(-1)" onClick="history.go(-1);return true;" class="btn btn-danger"><span class="glyphicon glyphicon-trash pull-left"></span>&nbsp;&nbsp;Back</a>

     <!-- <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-folder-open pull-left"></span>&nbsp;&nbsp;View Log</a> -->
     </p>
    </div>
    </form>
    </div>
</body>
</html>
