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
require('../config.php');
extract($_SESSION);
extract($_POST);
 if(isset($upload))
 {

 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $new_file_name = strtolower($file);
    $new_file_name1 = "Resultee_management_system/Instructor/product_imgLocation/".$file;
	
    $final_file=str_replace(' ','-',$new_file_name);


    //move_uploaded_file($product_image1_tmp,"file/$product_image1");
    $folder="product_imgLocation/";
    move_uploaded_file($file_loc,$folder.$final_file);



$que2=mysqli_query($con,"select * from  course where Course_Code='".$code."'");
$inst2= mysqli_fetch_array($que2);
$q=mysqli_query($con,"select * from instructor where email='".$_SESSION['emails']."'"); 
$inst= mysqli_fetch_array($q);
$que=mysqli_query($con,"select * from marks_photo where  subject='".$code."'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
		 echo"<script>alert('This result is already added')</script>";
       echo"<script>window.open('upload_results.php')</script>";
	 }	 
	 else if($inst['dept']==$inst2['dept'])
	 {
		 $que=mysqli_query($con,"insert into marks_photo values('','$level','$semi','$code','$final_file')");
		echo"<script>alert('results has been uploaded sucessfuly')</script>";
       echo"<script>window.open('upload_results.php')</script>";
	 }
	 else
 {
	 
echo"<script>alert('This course is not in your department')</script>";
echo"<script>window.open('upload_results.php')</script>";
	 
 }
 
}
 
 ?>
 
 
 
 <script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == ""){
		var optionArray = ["|select one "];
	}
	
	
	
	if(s1.value == "1G"){
		<?php 
			$query=mysqli_query($con,"select * from course where='1G'");
				while($row = mysqli_fetch_array($query))
				{
				?>	
					var optionArray = ["|select one ","<?php echo $row['Course_Code']; ?>|<?php echo $row['Course_Code']; ?>","kugan|Kugan"];
			<?php		
				}
				?>
		
	} else if(s1.value == "2G"){
		var optionArray = ["|select one","dias|Dias","sivakaran|Sivakaran"];
	} else if(s1.value == "3G"){
		var optionArray = ["|select one","senthilraj|senthilraj"];
	}else if(s1.value == "4M"){
		var optionArray = ["|select one","ponthivakar|Ponthivakar"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}

</script>
 
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
    <label for="exampleInputEmail1">Upload file</label>
   <input type="file" class="form-control" name="file" required></textarea>
  </div> 
   
  <div class="form-group">
    <label for="exampleInputEmail1">Level</label>
   <input type="text" class="form-control" name="level"required></textarea>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Semester</label>
   <input type="int" class="form-control" name="semi" required></textarea>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Course Code</label>
   <input type="text" class="form-control" name="code" required></textarea>
  </div>
 	 
  
<br/>
<div class="form-group">
    <button name="upload" class="btn btn-lg btn-success btn-block" type="submit">Upload results </button>
</div>
	</form>	
		</div>
	</div>
</div>

	</div>	
	