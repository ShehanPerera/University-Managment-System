<?php
include('lib/login.php'); // Includes Login Script

if(isset($_SESSION['Loged_User'])){
header("location: main.php");
}
?>
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link rel="icon" href="../../Images/logo.ico" />
  <link rel="stylesheet" href="css/style.css">
  <script src="js/login.js"></script>
</head>

<body>
  <div class="login-form">
  <form action="" method="POST">
     <h1>Hostel Management System</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="UserName" name="UserName" required>
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <input type="submit"  name="submit" class="log-btn" value="Log in"><br>
     <?php echo "$error";?>
     </form>
   </div>


</body>
</html>
