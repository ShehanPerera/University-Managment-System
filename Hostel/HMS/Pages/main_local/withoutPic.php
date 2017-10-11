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
@media print {
    .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
</style>
<!-- Jason Script For  -->
<script>
	function 	getStData(key) {
    var hosID = '<?php echo $_SESSION['hostel_id']; ?>';
     $.get("../../lib/STD_noPic_local.php?key="+key+"&hid="+hosID, function(data, status){
        document.getElementById("std_table").innerHTML = data;
    });
	}


    function Redirect(key) {
       window.location="addPic.php?key="+key;
    }
    function gotoLog(key){
      window.location="../Student_Log/index.php?key="+key;
    }
    // Print Function
    function PrintElem(elem)
    {
      var mywindow = window.open('', 'PRINT', 'height=400,width=600');


        mywindow.document.write('<html><head><title>' + document.title  + '</title>');

        mywindow.document.write("</head><link rel='stylesheet' href='../../css/bootstrap.min.css'><body >");
      mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;

        }
    </script>
</head>
<body onload="getStData('')">
	<div class="cont col-sm-12">
  <form method="post" action="wp_delete.php" onkeypress="return event.keyCode != 13;">
    <div class="input-group">
    <span class="input-group-addon search" style="background-color: #ffffff"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" onkeyup="getStData(this.value)" class="form-control input-sm search" id="searchIn" placeholder="Search by Reg. No., Name, Faculty, Course..." autofocus="autofocus" name="searchIn"></div><br>
    <div class="contantTable" id="std_table">
    <table class ="table table-striped">
    <tr>
    <th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    </tr>
    <span id></span>
    </table>
    </div>
    <div id="controlBtns" class="well well-sm">
    <p align="center"><!-- <span class="btn-group"> --><!-- </span> -->
     <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash pull-left"></span>&nbsp;&nbsp;Delete</button>
     </p>
    </div>
    </form>
    </div>
</body>
</html>
