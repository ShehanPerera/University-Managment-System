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
 if(isset($update))
 {
 	 $que=mysqli_query($con,"update course set Course_Code='$code',Course_Title='$title',Credit_Value='$credit',Level='$level' where Course_Code='".$_GET['id']."'");
	$err="<font color='blue'>Course details Updated</font>";
	 
 }

$rs=mysqli_query($con,"select * from course where Course_Code='{$_GET[id]}'");
$r=mysqli_fetch_array($rs);


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
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <select class="form-control" name="sub"  required>
  <option selected="selected" disabled="disabled"><strong>Subject</strong></option>
  <?php 
  $que1=mysqli_query($con,"select distinct (Subject) from course");
	 while($ro= mysqli_fetch_array($que1))
	 {
	 echo "<option value='".$ro['Subject']."'>".$ro['Subject']."</option>";
	 }
  ?>

</select>
  </div> 
  </div>
  </div> 
  

 <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Course Code</label>
    <input type="text" class="form-control" name="code"  required>
  </div> 
  </div>
  </div>

 <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Course Title</label>
    <input type="text" class="form-control" name="title"  required>
  </div> 
  </div>
  </div> 

  
<div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Credit Value</label>
    <input type="text" class="form-control" name="credit"  required>
  </div> 
  </div>
  </div> 

 <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Level</label>
    <select class="form-control" name="level"  required>
  <option selected="selected" disabled="disabled"><strong>Level</strong></option>
  <?php 
  $que1=mysqli_query($con,"select distinct (Level) from course");
	 while($ro= mysqli_fetch_array($que1))
	 {
	 echo "<option value='".$ro['Level']."'>".$ro['Level']."</option>";
	 }
  ?>

</select>
  </div> 
  </div>
  </div> 
  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <button name="update" class="btn btn-lg btn-success btn-block" type="submit">Update Subject</button>
	
  </div>
  </div>
 </div> 
