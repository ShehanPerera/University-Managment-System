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
<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/sweetalert.min.js"></script>
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
.msgStrip{
      padding: 2px;
      text-align: center;
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
       window.location="staff_detail.php?key="+key;
    }
  // make alert delete automaticly after some time
  $(document).ready( function() {
        $('#alert').delay(3000).animate({
            'height': 0,
            'opacity': 0
        }, 750, function() {
            $('#alert').remove();
        });

      });
  // Function for delete
  function deleteUser(key)
  {
     swal({
      title: "Are you sure, delete this user acount permenently?", 
      text: "You will not be able to recover this user acount again!", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Yes, delete it!",
      confirmButtonColor: "#ec6c62"
    }, function() {
        $.ajax(
                {
                    type: "get",
                    url: "../../lib/USR_delete.php",
                    data: "id="+key,
                    success: function(data){
                    }
                }
        )
      .done(function(data) {
        swal("Deleted successfully!", "user acount was successfully deleted!", "success");
        getStData('');
      })
      .error(function(data) {
        swal("Oops", "Some thing wrong in server, try again", "error");
      });
    });
  }
</script>

</head>
<body onload="getStData('')">
<!-- Show message -->
	<div class="cont col-sm-12">
   <br>
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
    </div>
    </div>
</body>
</html>