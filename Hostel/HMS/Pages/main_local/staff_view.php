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
<title>Staff Detail</title>
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
	function 	getStData(key) {
     $.get("../../lib/STAFF_Basic.php?key="+key, function(data, status){
        document.getElementById("std_table").innerHTML = data;
    });
	}

         
    function Redirect(key) {
       window.location="staff_View.php?key="+key;
    }
      </script>
</script>
</head>
<body onload="getStData('')">
	<div class="cont col-sm-12">
    <h3 align="center">Staff Detail</h3>
    <div class="input-group">
    <span class="input-group-addon search" style="background-color: #ffffff"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" onkeyup="getStData(this.value)" class="form-control input-sm search" id="searchIn" placeholder="Search by id. No., Name...." autofocus="autofocus"></div><br>
    <div class="contantTable" id="std_table">
    <table class="table table-striped">
    <tr>
    <th>id. No.</th><th>Full Name</th><th>Contact No</th>
    </tr>
    <span id></span>
    </table>
    </div>
    <div id="controlBtns" class="well well-sm">
    <p align="center"><span class="btn-group"><a href="student_new.php" class="btn btn-success"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Add new</a> 
    <a href="excel_Input.php" class="btn btn-success"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Add From excel</a> </span>
     <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash pull-left"></span>&nbsp;&nbsp;Delete</a>
     <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-folder-open pull-left"></span>&nbsp;&nbsp;View Log</a>
     </p> 
    </div>
    </div>
</body>
</html>