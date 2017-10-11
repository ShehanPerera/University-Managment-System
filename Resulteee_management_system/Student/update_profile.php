<?php
 session_start();
error_reporting(1);

  extract($_SESSION);
  if((!isset($_SESSION['Loged_User']))||($_SESSION['res']!="student"))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
 ?>
<?php 
 extract($_POST);
 if(isset($update))
 {
 	 $que=mysqli_query($con,"update student set name='$n',mob='$mob',gender='$gen',sem_id='$sem' where email='$student'");
	
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
    <input type="email" class="form-control" readonly="readonly" value="<?php  echo $res[2]; ?>" >
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
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Semester</label>
   <select class="form-control" name="sem" required>
 <option selected="selected" disabled="disabled"><strong>Select Semester</strong></option>
  <?php
  
  $que1=mysqli_query($con,"select * from semester");
	 while($ro= mysqli_fetch_array($que1))
	 {?>
	 <option value="<?php echo $ro['sem_id'];?>" 
	 <?php if($ro['sem_id']==$res['sem_id']){echo "selected";} ?>><?php echo $ro['name']; ?></option>
	 <?php
	 }
  ?>
   </select>
  </div> 
  </div>
  </div> 

<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
   <select class="form-control" name="gen">
  <option value="m" <?php if($res[5]=="m"){echo "selected";} ?>>Male</option>
  <option value="f" <?php if($res[5]=="f"){echo "selected";} ?>>Female</option>
  </select>
  </div> 
  </div>
  </div>
 
<div class="row">
<div class="col-sm-4">
 
         <button name="update" class="btn btn-success" type="submit">Update Profile</button>
</form>	
	</div>
	</div>
