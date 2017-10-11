<?php
session_start();
error_reporting(1);

  extract($_SESSION);
  if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
		?>
 <?php 
 extract($_POST);
 if(isset($signup))
 {

	 $que=mysqli_query($con,"select * from instructor where email='$e'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
	$err="<font color='red'>HOD already registered</font>";
	 }
	 else
	 {
	 $pass=md5($pass);
	 mysqli_query($con,"insert into instructor values('','$n','$e','$pass','$dept','$mob','1')");
	$err="<font color='blue'>HOD added Successfully</font>";
	 }
	 
 
 }
 ?>

<div class="row">
<div class="col-sm-12">
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  	</div> 
  </div>
 </div> 


<div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="n"  placeholder="Full name" pattern="[a-z A-Z]*" required>
  </div> 
  </div>
</div>
  
<div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="e" id="exampleInputEmail1" placeholder="Enter email" required>
  </div>
  </div>
 </div> 

  
<div class="row">
<div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password" >
  </div>
  </div>
</div>
  
  
 <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" name="dept" maxlength="3"  placeholder="Department" >
  </div> 
  </div>
</div>  
  
  
<div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" name="mob" maxlength="10" required pattern="[0-9 + ]*"  placeholder="Enter Mobile" >
  </div> 
  </div>
</div>  
  


<div class="row">
<div class="col-sm-4">
 <button name="signup" class="btn btn-lg btn-success btn-block" type="submit" style="width:175px">Add New HOD</button>
</form>	
	</div>
	</div>
