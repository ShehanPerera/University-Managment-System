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
    <div class="panel-heading"><h4 align="center">Change User Password</h4></div>
    <div class="panel-body">
      <form class="form-group" method="post" action="changePW.php">
      <!-- user name -->
        
        <div class="<?php echo $UaP; ?>">
        <p><label class="control-label">User Name</label></p><p><input type="text" name="userNm" class="form-control"></p></div>
        
        <!-- current pasword -->
        
        <div class="<?php echo $UaP; ?>">
        <p><label class="control-label">current Password</label></p><p> <input type="Password" name="crPassword" class="form-control"></p>
        </div>
        <hr>
        <!-- new password -->
        
        <div class="<?php echo $NP; ?>">
        <p><label class="control-label">new Password</label></p><p><input type="Password" name="newPassword" class="form-control"></p>
        </div>
        
        <!-- confirm pasword -->
        <div class="<?php echo $NP; ?>">
        <p><label class="control-label">confirm new Password</label></p><p> <input type="Password" name="confPassword" class="form-control"></p>
        </div>
        <!-- Show error message -->
        <?php echo $error; ?>
        <!-- form buttons -->
        <p align="right"><a href="../../main.php" class="btn btn-danger">Cancel</a> <input type="submit"  name="submit" class="btn btn-primary" value="Change"></p>
      </form>
    </div>
  </div>
  </div>
  <div class="col-sm-4"></div>
</body>
</html>
