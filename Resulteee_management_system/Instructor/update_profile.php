<?php
 session_start();
error_reporting(1);

  extract($_SESSION);
  if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="head")&&(!in_array("head",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
<?php 
 extract($_POST);
 if(isset($update))
 {
 	 $que=mysqli_query($con,"update instructor set name='$n',mob='$mob' where email='$staff'");
	
$err="<font color='blue'>Profile Updated Successfully</font>";
	 
 }
 
 //select 
  $que=mysqli_query($con,"select * from instructor where email='$staff'");
$res =  mysqli_fetch_array($que);

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
    <input type="text" class="form-control" name="n" value="<?php  echo $res[1]; ?>" required>
  </div> 
  </div>
  </div>
  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" readonly="readonly" value="<?php  echo $res[2]; ?>" required>
  </div>
  </div>
 </div> 


  
<div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="number" value="<?php  echo $res[4]; ?>" class="form-control" name="mob" >
  </div> 
  </div>
  </div>
 

 
<div class="row">
<div class="col-sm-4">
 
         <button name="update" class="btn btn-success" type="submit">Update Profile</button>
</form>	
	</div>
	</div>
