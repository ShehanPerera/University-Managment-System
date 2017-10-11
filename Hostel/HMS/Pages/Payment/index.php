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
<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
<style>
div.cont{
	
		
}
.frm
{
	height:100%;
	
}
th, td{
	  padding:3px;
  }
.colapsA
  {
    color: inherit;
  }
  .table-fixed tbody {
  height: 100px;
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
</style>
<script>
    $(document).keypress(function (e) 
    {
        if (e.which == 13) 
        {    
        getPaymentData(document.getElementById("regNo").value);
        getPaymentTable(document.getElementById("regNo").value);
        }
    });

    function getPaymentData(key) {
         $.get("payment_View.php?key="+key, function(data, status){
        document.getElementById("content").innerHTML = data;
    });
    }
    function getPaymentTable(key) {
         $.get("../../lib/PAY_TView.php?key="+key, function(data, status){
        document.getElementById("cTable").innerHTML = data;
    });
    }

</script>

</head>
<body>
	<div id="main" class="cont col-lg-12">
    <!--Main Divistion start-->
    <div class="panel panel-default">
    <!--Title of panel-->
    	<div class="panel-heading">Payment Details</div>
        <div class="panel-body">
        
    <div name="content" class="col-sm-12 form-inline" id="content">
    <!--Paiment details form-->
    <div class="col-sm-4">
    	<table width="100%">
        	<tr>
            	<td>Reg. No.</td>
                <td><input name="RegNo" type="text" class="form-control" id="regNo" onkeypress="return runScript(event)"></td>
            </tr>
            <tr>
            	<td>Paid amount(anual) :</td>
                <td><input name="anuPaied" type="text" class="form-control" readonly></td>
            </tr>

        </table>
        </div>
        <div class="col-sm-4">
        <table width="100%">
        	<tr>
                <td>Name :</td>
                <td><input name="Name" type="text" class="form-control" readonly></td>
            </tr>
            <tr>
            <tr>
            	<td>Paid amount(overall) :</td>
                <td><input name="Overpaid" type="text" class="form-control" readonly></td>
            </tr>
        </table>
        </div>
        <div class="col-sm-4">
        <table width="100%">
            <tr>
                <td>Anual payment req. :</td>
                <td><input name="reqPayAnual" type="text" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Have to Pay :</td>
                <td><input name="HavetoPay" type="text" class="form-control" readonly></td>
            </tr>
        </table>
        </div>
    </div>
    </div>
    
    </div>

    <!-- Dvi for table -->
    <div class="col-sm-12" id="cTable">
        
    </div>
    
    <!--Buttons-->
    <div id="controlBtns" class="well well-sm">

     <p align="center"> 
    <a href="excel_Input.php" class="btn btn-primary"><span class="glyphicon glyphicon-file pull-left"></span>&nbsp;&nbsp;Add From excel</a>
    <a href="full_paidView.php" class="btn btn-success"><span class="glyphicon glyphicon-ok pull-left"></span>&nbsp;&nbsp;Full Paid</a>
     <a href="half_paidView.php" class="btn btn-warning"><span class="glyphicon glyphicon-unchecked pull-left"></span>&nbsp;&nbsp;Half Paid</a>
     <a href="haveto_paidView.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove pull-left"></span>&nbsp;&nbsp;Have To Pay</a>
    
     
     </p> 
    </div>
    </div>
</body>
</html>
