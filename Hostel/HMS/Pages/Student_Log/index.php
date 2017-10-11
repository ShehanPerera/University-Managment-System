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
  height:380px;
  /*overflow:auto;*/
}
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 340px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
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
  function  getLogData(key) {
      $.get("../../lib/LOG_Basic.php?key="+key, function(data, status){
        document.getElementById("std_table").innerHTML = data;
    });
  }


    function Redirect(key) {
       window.location="Log_View.php?key="+key;
    }
    <?php 
      $regKey;
      if(isset($_GET['key']))
      {
        $regKey = $_GET['key'];
      }
      else
      {
       $regKey = ''; 
      }
     ?>
    </script>
</head>
<body onload="getLogData('<?php echo $regKey; ?>')">
  <div class="cont col-sm-12">
  <form method="post" action="student_delete.php" onkeypress="return event.keyCode != 13;">
    <div class="input-group">
    <span class="input-group-addon search" style="background-color: #ffffff"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" onkeyup="getLogData(this.value)" class="form-control input-sm search" id="searchIn" placeholder="Search by Reg. No., type" autofocus="autofocus" name="searchIn" value="<?php echo $regKey; ?>"></div><br>
    <div class="contantTable" id="std_table">
    
    <span id></span>
    </table>
    </div>
    <div id="controlBtns" class="well well-sm">
    <p align="center">
    <a href="log_new.php" class="btn btn-success"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Add new LOG</a>
    <a href="student_new.php" class="btn btn-warning"><span class="glyphicon glyphicon-trash pull-left"></span>&nbsp;&nbsp;Edit</a>
     <a href="javascript:history.go(-1)" class="btn btn-danger" onclick="history.go(-5);return true;"><span class="glyphicon glyphicon-trash pull-left"></span>&nbsp;&nbsp;Back</a>
     </p>
    </div>
    </form>
    </div>
</body>
</html>
