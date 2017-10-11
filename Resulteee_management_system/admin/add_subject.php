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

	
	 $que1=mysqli_query($con,"select * from course where Course_Code='$Code'");
	 $row= mysqli_num_rows($que1);
	 if($row)
	{
		$err="<font color='red'>Subject already registered</font>";
	}
	 else
	{
		mysqli_query($con,"insert into course values('','$sub','$code','$title','$credit','$level')");
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
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" class="form-control" name="sub"  placeholder="Subject" required>
  </div> 
  </div>
</div> 
  
 <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Course Code</label>
    <input type="text" class="form-control" name="code" id="exampleInputEmail1" placeholder="Code" required>
  </div>
  </div>
 </div> 

 
<div class="row">
<div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInputPassword1">Course Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="Title" >
  </div>
  </div>
 </div> 
  
<div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Credit Value</label>
    <input type="text" class="form-control" name="credit" maxlength="2"  placeholder="Credit" >
  </div> 
  </div>
</div>  
  

<div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Level</label>
    <input type="text" class="form-control" name="level" maxlength="3"  placeholder="level" >
  </div> 
  </div>
</div> 
<!-- programme end-->
<!-- user end-->

<div class="row">

<div class="col-sm-4">
 
         <button name="signup" class="btn btn-lg btn-success btn-block" type="submit" style="width:175px">Add New Subject</button>
</form>	
	</div>
	</div>