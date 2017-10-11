<!-- session -->
<?php 
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
  $hosid = $_SESSION['hostel_id'];
 ?>
 <!-- Page Start -->
<!--Student New-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Hostel</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <script>
  function  getHosData(key) {
     $.get("../../lib/HOS_showForEdit.php?key="+key, function(data, status){
        document.getElementById("frm").innerHTML = data;
    });
  }
  </script>
  <style>
  .container{
    height:1000px;
  }
  .frame{
    border-color:#3329E7;
    border-radius:25px;
    border-style:solid;
  }
  th, td{
    padding:3px;
  }
  </style>
</head>

<body onload="getHosData(<?php echo "$hosid"; ?>)">
  <div class="col-lg-12">
        <form class="form-inline" action="..\..\lib\Hos_Updatenew.php" method="POST" id="myForm">
          <div id="basic" class="panel panel-primary">
            <div class="panel-heading">
            <b>Basic information</b>
            </div>
            
            <div class="panel-body">
                <label for="hosid" id="hosid">Hostel ID: </label></td><td><input name="hid" type="text" class="form-control" type="hidden" value="<?php echo "$hosid"; ?>" />
                <div id="frm">
                  <!-- php code for show hos detail -->
                  <?php
  $key = $_SESSION['hostel_id'];
  include('../../lib/STD_Con.php');
  $sql="SELECT * FROM hostel_detail WHERE id='$key';";
  $res = $conn->query($sql);
  if($res->num_rows>0)
  {
    while($row = $res->fetch_assoc())
    {
      $id = $row['id'];
      $HName = $row['name'];
      $HAddress = $row['address'];
      $Contact_No = $row['contact_no'];
      $cap = $row['capacity'];
      $avail = $row['available'];
      $anualPay = $row['anual_payment'];
      $cat = $row['category'];
    }
    $fill = $cap-$avail;
    // for display details
    echo "<table width=\"100%\" >
                <tr>
                <td><label for=\"hosname\" id=\"hosname\">Name of the Hostel: </label></td><td><input name=\"hname\" type=\"text\" class=\"form-control\" value='$HName'  required/></td>
                </tr>
                <tr>
                <td><label for=\"capacity\" >Capacity: </label></td><td><input type=\"number\" name=\"Cap\" class=\"form-control\" required \" value ='$cap'/></td>
                </tr>
                <tr>
                <tr>
                <td><label for=\"l-Name\" id=\"iname\">Contact No: </label></td><td><input name=\"Cont\" type=\"number\" class=\"form-control\" required value='$Contact_No' /></td>
                </tr>
                <tr>
                <td><label>Required Anual Payment </label></td>
                <td><input name=\"anual\" type=\"text\" class=\"form-control\" required value='$anualPay'/></td>
              </tr>
              <tr>
                <td><label>Address: </label></td>
                <td><textarea name=\"address\" class=\"form-control\" rows=\"3\" cols=\"30\">$HAddress</textarea></td>
              </tr>
              <tr>
                <td><label for=\"gender\">Gender : </label></td>
                <td><input name=\"gender\" type=\"text\" class=\"form-control\" required value='$cat'/>
            </td>
              </tr>

                </table>
                <input name=\"fill\" type=\"hidden\" class=\"form-control\" required value='$fill'/>";
                
  }
?>
                </div>
                </div>
                </div>
            </div>
           
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-floppy-save"></i>&nbsp;Save Changes</button>
            </div>
            <div class="col-sm-2"> <button type="reset" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-remove-sign"></i> Clear All</button>
            </div>
            <div class="col-sm-2">
             
            </div>
            <div class="col-sm-3"></div>
        </form>
        </div>          
</body>
</html>
