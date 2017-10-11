<!-- session -->
<?php
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Basic Student details</title>
 	<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <style>

/*.table-fixed{
	height: 340px;
	display:block;
	overflow:auto;
}*/
.div-fix{
	height: 340px;
	display:block;
	overflow:auto;
}
/*.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
  border: 1px solid black;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
	float: left;
	border-bottom-width: 0;*/
}
  </style>
  <!-- Scripts -->
  <script>
  // Get Table data
  	function   getStData(key) {
    $.get("../../lib/DOC_anualPayment.php?key="+key, function(data, status){
        document.getElementById("printCont").innerHTML = data;
    });
  }
  // function forDateBox(document.getElementById("dFrom").value)
  // {
    
  // }
	// print
	function PrintElem(elem)
    {
      alert();
      var mywindow = window.open('', 'PRINT', 'height=2000,width=3000');


        mywindow.document.write('<html><head><title>' + document.title  + '</title>');

        mywindow.document.write("</head><link rel='stylesheet' href='../../css/bootstrap.min.css'><body >");
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();
        mywindow.reset();
        return true;

        }
  </script>
  <?php include('../../lib/STD_Con.php');?>
 </head>
 <body onload="getStData('')">
 <!-- Panel start -->
 <div class="col-xs-12" name="Container">
 	<div class="panel panel-primary">
 		<div class="panel-heading form-inline">Anual Payment - Print Preview
 		<select name="hostel" class="form-control" onchange="getStData(this.value);">
      <option selected disabled hidden>Select Hostel</option>
        <?php
        $sql = "SELECT * FROM hostel_detail";
        $result = $conn->query($sql);

        foreach ($result as $hname )
        {
        ?>
           <option value="<?php echo $hname["id"] ; ?>"><?php echo $hname["name"] ?></option>
          <?php $_SESSION['$hosid']=$hname["id"]; ?>
      <?php
        }
        ?>

    </select>
    <!-- Admition date between <input type="date" class="form-control input-sm" placeholder="date From..." style="border-radius: 90px;" id="dFrom"> to
    <input type="date" class="form-control input-sm" placeholder="date to ..." style="border-radius: 90px;" id="dTo"> -->
 		</div>
 		<div class="panel-body div-fix" name="printCont" id="printCont" style="align-content: center;">
 		</div>
 		</div>
 	<div class="well well-sm col-xs-12">
    <div class="col-sm-4"></div>
    <div class="col-sm-2"><button class="btn btn-primary btn-block" onclick="PrintElem('printCont');"><span class="glyphicon glyphicon-print pull-left"></span>Print</button>
    </div>
    <div class="col-sm-2"><a href="index.php" class="btn btn-danger btn-block" ><span class="glyphicon glyphicon-arrow-left pull-left"></span>back</a></div>
      <div class="col-sm-4"></div>
    </div>
</div>
 </body>
 </html>