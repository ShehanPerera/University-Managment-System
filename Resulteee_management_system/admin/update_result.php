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
 	 $que=mysqli_query($con,"update results set Course_Code='$code',Index_no='$index',Result='$result',Level='$level',attempt='$attempt',marks='$mark',gpv='$gpv',semester='$semi'  where Course_Code='".$_GET['id']."'");
	$err="<font color='blue'>Result Updated</font>";
	 
 }

$rs=mysqli_query($con,"select * from results where Course_Code='{$_GET[id]}'");
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
    <label for="exampleInputEmail1">Enter Course Code</label>
    <input type="text" class="form-control" name="code"  required>
  </div> 
  </div>
  </div>

 <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Enter Index No</label>
    <input type="text" class="form-control" name="index"  required>
  </div> 
  </div>
  </div> 

  
  <div class="row">
<div class="col-sm-4">
<div class="form-group">
    <label for="exampleInputEmail1">Enter Result</label>
   <select class="form-control" name="result" required>
  <option selected="selected" disabled="disabled"><strong>Result</strong></option>
  <?php 
  $que1=mysqli_query($con,"select (grade_type) from grade");
	 while($ro= mysqli_fetch_array($que1))
	 {
	 echo "<option value='".$ro['grade_type']."'>".$ro['grade_type']."</option>";
	 }
  ?>

</select>
  </div> 
  </div>
</div>

 <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Enter Level</label>
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
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">GPV</label>
    <input type="number" class="form-control" name="gpv"  required>
  </div> 
  </div>
  </div>

  <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Mark</label>
    <input type="number" class="form-control" name="mark"  required>
  </div> 
  </div>
  </div>

 <div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Attempt</label>
    <input type="number" class="form-control" name="attempt"  required>
  </div> 
  </div>
  </div>

<div class="row">
<div class="col-sm-4">
	 <div class="form-group">
    <label for="exampleInputEmail1">Semester</label>
    <select class="form-control" name="semi"  required>
  <option selected="selected" disabled="disabled"><strong></strong></option>
  <option><strong>1</strong></option>
  <option><strong>2</strong></option>
</select>
  </div> 
  </div>
  </div> 

  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <button name="update" class="btn btn-lg btn-success btn-block" type="submit">Update Result</button>
	
  </div>
  </div>
 </div> 
