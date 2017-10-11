<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>

<!doctype html>
<html>
<head>

<?php include('../../lib/STD_Con.php');?>
<meta charset="utf-8">
<title>Hostel</title>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>

<script>
  function  getStData(key) {
     $.get("hostel_view.php?key="+key, function(data, status){
        document.getElementById("hosview").innerHTML = data;
    });
  }

         
    function Redirect(key) {
       window.location="hostel_view.php?key="+key;
    }
    </script>

	<style type="text/css">
    table {
     border-collapse: collapse;
    }

    td {
    padding-top: .2em;
    padding-bottom: .2em;
}

  </style>
</head>

<body>


<div id="main" class="cont col-lg-12">
    <!--Main Divistion start-->
  <div class="panel panel-default">
    <!--Title of panel-->
    	<div class="panel-heading">Hostel Details</div>
      <div class="panel-body">

    <div class="col-sm-3"></div>
    
    <div class="col-sm-6">
		  <select name="hostel" class="form-control" onchange="getStData(this.value);" style="width:100%">
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

    <br>
    <br>
    </div>
     
        
    <div id="hosview" class="cont col-lg-12"></div>
    
  
    </div>
    </div>
    </div>

    

	
</body>
</html>



				
	

