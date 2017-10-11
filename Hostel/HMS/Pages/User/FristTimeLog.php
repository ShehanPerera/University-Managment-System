<!-- session -->
<?php
  include("../../lib/session.php");
  if(!isset($ses_conform))
  {
    header('Location: ../../index.php');
  }
 ?>
 <!-- Page Start -->
<?php
include('../../lib/USR_ChangePW.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Change Pasword</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/navbar.css">
  <style type="text/css">
    .msgStrip{
      padding: 4px;
      text-align: center;
    }
    .upper{
      color:#E2F1FD;
      text-align: center;
    }
  .frame{
    width: 100%;
      height:100%;
    border:none;
    border-radius:10px;
  }
  .iFlip{
    transform:scaleX(-1);
    -moz-transform:scaleX(-1);
    -webkit-transform:scaleX(-1);
    -ms-transform:scaleX(-1);
  }
  </style>
  <script>
    function checkUserName(key) {
    $.get("../../lib/USR_unameIsThere.php?uName="+key, function(data, status){
        if(data == '0' && key !=''){
          document.getElementById("userDiv").classList.remove("has-error");
          document.getElementById("nameIco").classList.remove("glyphicon-remove");
          document.getElementById("userDiv").classList.add("has-success");
          document.getElementById("nameIco").classList.add("glyphicon-ok");
          document.getElementById("sub").disabled = false;
        }
        else
        {
          document.getElementById("userDiv").classList.remove("has-success");
          document.getElementById("nameIco").classList.remove("glyphicon-ok");
          document.getElementById("userDiv").classList.add("has-error");
          document.getElementById("nameIco").classList.add("glyphicon-remove");
          document.getElementById("sub").disabled = true;
        }
    });
  }
  </script>
</head>

<body>
<!-- Navbar Code Start -->
<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation">
<!-- title of page -->
<div style="padding-bottom:20px;">
<h1 class="upper"><B><i>Hostel Management System</b></i></h1>
</div>
</div><!-- Navbar Ends Here -->
  <div class="col-sm-4"></div>
  <div class="col-sm-4" style="padding-top: 5px">
  <!-- panal start -->
  <div class="panel panel-primary">
    <div class="panel-heading"><h4 align="center">Change Username & Password</h4></div>
    <div class="panel-body">
      <form class="form-group" method="post">
      <!-- user name -->
        
        <div class="<?php echo $UaP; ?>">
        <p><label class="control-label">Current Username</label></p><p><input type="text" name="userNm" class="form-control"></p></div>
        
        <!-- current pasword -->
        
        <div class="<?php echo $UaP; ?>">
        <p><label class="control-label">Current Password</label></p><p> <input type="Password" name="crPassword" class="form-control"></p>
        </div>
        <hr>
        <!-- new Username -->
        <div class="<?php echo $NP; ?>has-feedback form-group">
        <p><label class="control-label">new Username</label></p><div id="userDiv" class="has-feedback form-group"><p><input type="text" name="NewuserNm" class="form-control" onkeyup="checkUserName(this.value)">
        <span class="glyphicon form-control-feedback" id="nameIco"></span>
        </p></div></div>
        <!-- new password -->
        
        <div class="<?php echo $NP; ?>">
        <p><label class="control-label">New Password</label></p><p><input type="Password" name="newPassword" class="form-control"></p>
        </div>
        
        <!-- confirm pasword -->
        <div class="<?php echo $NP; ?>">
        <p><label class="control-label">Confirm New Password</label></p><p> <input type="Password" name="confPassword" class="form-control"></p>
        </div>
        <!-- Show error message -->
        <?php echo $error; ?>
        <!-- form buttons -->
        <p align="right"><a href="../../lib/logout.php" class="btn btn-danger">Cancel</a> <input type="submit"  name="submit" class="btn btn-primary" value="Change" id="sub"></p>
      </form>
    </div>
  </div>
  </div>
  <div class="col-sm-4"></div>
</body>
</html>
