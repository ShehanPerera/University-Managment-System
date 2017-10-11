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
require('../config.php');
extract($_SESSION);
extract($_POST);
 if(isset($upload))
 {
 if(file_exists("img/$admin"))
 {
 move_uploaded_file($_FILES['file']['tmp_name'],"img/$admin/".$_FILES['file']['name']);
	$err="<font color='green'>Profile picture uploaded </font>";
 }
 else
 {
 mkdir("img/$admin");
 
 move_uploaded_file($_FILES['file']['tmp_name'],"img/$admin/".$_FILES['file']['name']);
	$err="<font color='green'>Profile picture uploaded </font>"; }
 }
 ?>
 
 <div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-5">

<div class="panel panel-default">
<div class="panel-body">
		
 <form method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
	 

  <div class="form-group">
    <label for="exampleInputEmail1">Upload Profile Picture</label>
   <input type="file" class="form-control" name="file" required></textarea>
  </div> 
  
 	 
  
<br/>
<div class="form-group">
    <button name="upload" class="btn btn-lg btn-success btn-block" type="submit">Upload Profile Picture </button>
</div>
	</form>	
		</div>
	</div>
</div>
</div>	