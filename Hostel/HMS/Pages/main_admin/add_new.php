<!-- <?php 
$searchTxt = $_POST["searchIn"];
 ?> -->
 <!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
  include('../../lib/STD_Con.php');
  //$var_value = $_SESSION['hosid'];


 ?>
 <!-- Page Start -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Student</title>
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
     $.get("../../lib/HOS_AddMain.php?key="+key, function(data, status){
        document.getElementById("std_table").innerHTML = data;
    });
	}

         
    function Redirect(key) {
       window.location="HOS_view.php?key="+key;
    }
    
      //for select all 1
    $(function(){

  // add multiple select / deselect functionality
  $("#selectall").click(function () {
      $('.case').attr('checked', this.checked);
  });

  // if all checkbox are selected, check the selectall checkbox
  // and viceversa
  $(".case").click(function(){

    if($(".case").length == $(".case:checked").length) {
      $("#selectall").attr("checked", "checked");
    } else {
      $("#selectall").removeAttr("checked");
    }

  });
});
    

    </script>

<!-- get search text from previous page -->
 <!-- <?php 
$searchTxt = $_POST["searchIn"];
 ?> --> 
</head>
<body onload="getStData(<?php echo "'$searchTxt'"; ?>)">
<div name="count"></div>
	<div class="cont col-sm-12">
  <form method="post" action="../../lib/HOS_AddSet.php" onkeypress="return event.keyCode != 13;">
   <br>
   <br>
   <!-- <input type="hidden" name="hosid" value="<?php //echo $var_value ?>"> -->
    <div class="input-group">
    <span class="input-group-addon search" style="background-color: #ffffff"><span class="glyphicon glyphicon-search"></span></span>
    <input type="text" onkeyup="getStData(this.value)" class="form-control input-sm search" id="searchIn" placeholder="Search by Reg. No., Name, Faculty, Course..." autofocus="autofocus" name="searchIn" value="<?php echo "$searchTxt"; ?>"></div><br>
    <div class="contantTable" id="std_table">
    <table class="table table-striped">
    <tr>
    <th>Reg. No.</th><th>Full Name</th><th>Year</th><th>faculty</th><th>Course</th>
    </tr>
    <span id></span>
    </table>
    </div>
    <div id="controlBtns" class="well well-sm-12">
    <div name="count"></div>
    <p align="center"><span class="pull-left"><input type="checkbox" name="selectall" id="selectall" />&nbsp;&nbsp;Select All</span>
    <div class="col-sm-2">
    <input type="date" name="adDate" class="form-control" required="Admission Date" placeholder="Admission Date"></div> 
    <div  class="col-sm-2"><input type="date" required="Vacate Date" name="vcDate" class="form-control" placeholder="Vacate Date"></div>
    <div class="col-sm-2">
      <select name="hostel" class="form-control" required="required" style="width:100%">
      <option selected disabled hidden>Select Hostel</option>
        <?php
        $sql = "SELECT * FROM hostel_detail";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
          
        
          foreach ($result as $hname )
          {
            $avail=$hname["available"];
            if($avail>0)
            {
          ?>
            <option value="<?php echo $hname["id"] ; ?>"><?php echo $hname["name"] ?></option>
      <?php
          }
        }
        ?>

    </select>
  </div>
     <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-trash pull-left"></span>&nbsp;&nbsp;Add to Hostel</button>
     <a href="javascript:history.go(-1)" onClick="history.go(-1);return true;" class="btn btn-danger"><span class="glyphicon pull-left"></span>&nbsp;&nbsp;Back</a>

     </p> 
     
    </form>
    </div>
    </div>
    
    <!-- <?php
    $var_value = $_SESSION['hosid'];
    ?> -->
</body>
</html>