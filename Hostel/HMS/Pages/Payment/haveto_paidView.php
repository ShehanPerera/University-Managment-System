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
     $.get("../../lib/PAY_NView.php?key="+key, function(data, status){
        document.getElementById("std_table").innerHTML = data;
    });
  }

         
    function Redirect(key) {
       window.location="student_View.php?key="+key;
    }
    </script>
</head>
<body onload="getStData('')">
  <div class="cont col-sm-12">
  <form method="post" action="student_delete.php" onkeypress="return event.keyCode != 13;">
    <h3 align="center">Student Details</h3>
    <div class="input-group">
    <span class="input-group-addon search" style="background-color: #ffffff"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" onkeyup="getStData(this.value)" class="form-control input-sm search" id="searchIn" placeholder="Search by Reg. No., Name, Faculty, Course..." autofocus="autofocus" name="searchIn"></div><br>
    <div class="contantTable" id="std_table">
    <table class="table table-striped">
    <tr>
    <th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    </tr>
    <span id></span>
    </table>
    </div>
    <div id="controlBtns" class="well well-sm">
    <p align="center"><a href="full_paidView.php" class="btn btn-success"><span class="glyphicon glyphicon-ok pull-left"></span>&nbsp;&nbsp;Full Paid</a> 
    <a href="half_paidView.php" class="btn btn-warning"><span class="glyphicon glyphicon-unchecked pull-left"></span>&nbsp;&nbsp;Half Paid</a>
    <a href="haveto_paidView.php" class="btn btn-danger disabled"><span class="glyphicon glyphicon-unchecked pull-left"></span>&nbsp;&nbsp;0 paye</a>
    <a href="student_new.php" class="btn btn-primary"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Print</a>
     </p> 
    </div>
    </form>
    </div>
</body>
</html>