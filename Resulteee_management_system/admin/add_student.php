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

	
	 $que=mysqli_query($con,"select * from student where sem_id='$sem_id'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
	$err="<font color='red'>Student already registered</font>";
	 }
	 else
	 {
	 $pass=md5($pass);
	 mysqli_query($con,"insert into student values('','$n','$e','$pass','$indexNo','$g','1')");
$err="<font color='blue'>Student added Successfully</font>";
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
    <input type="text" class="form-control" name="n"  placeholder="Enter Reg.No(eg:2014sp042)" required>
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
    <label for="exampleInputEmail1">Index Number</label>
    <input type="text" class="form-control" name="indexNo" maxlength="13"  placeholder="Index No(eg:S1234)" >
  </div> 
  </div>
</div>  
  

<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
   <select class="form-control" name="g">
  <option value="m">Male</option>
  <option value="f">Female</option>
  </select>
  </div> 
  </div>
  </div>  
<!-- programme end-->
<!-- user end-->

<div class="row">

<div class="col-sm-4">
 
         <button name="signup" class="btn btn-lg btn-success btn-block" type="submit" style="width:175px">Add New Student</button>
</form>	
	</div>
	</div>
