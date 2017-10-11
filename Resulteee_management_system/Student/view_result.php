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
error_reporting(1);
require("../config.php");
//require("../admin/db.php");
 extract($_SESSION);
 ?>
 
 
<?php 
$que1=mysqli_query($con,"select Course_Code,credit,semester,Level,Result,credit*gpv from results where Index_no='".$stu['Index_no']."'");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any results found</font></h3>";

	} 
 	else{
?>
<div class="row">
	
	<div class="col-sm-4">
    <h3><a style="color:#000" href="generate_pdf.php?Index_no=<?php echo $stu['Index_no']; ?>"><span id="$stu['Index_no']" class="glyphicon glyphicon-print"></span> Download PDF</a></h3>
	<!--<button type="submit" id="$stu['Index_no']" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">span class="glyphicon glyphicon-print"></span>Download PDF</button>-->
  </div> 

</div>

<div class="row">
<div class="col-sm-12">

<div class="panel panel-primary">
<div class="panel-heading"><span class="glyphicon glyphicon-check">Your Results</span>


</div>
<div class="panel-body">
	
	
	 
  <div class="form-group">
 

  <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
								<th>Title</th>
                                <th>Course Code</th>
								<th>Credit Value</th>
								<th>Semester</th>
								<th>Level</th>
								<th>Result</th>
							</tr> 
    <?php
	
	echo $inst['Index_no'];
	
error_reporting(1);
         $rec_limit =20;
         
         /* Get total number of records */
  $sql = "SELECT count(Course_Code)from results where Index_no='".$stu['Index_no']."'";
         $retval = mysqli_query($con,$sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'pagi'} ) ) {
            $pagi = $_GET{'pagi'} + 1;
            $offset = $rec_limit * $pagi ;
         }else {
            $pagi = 0;
            $offset = 0;
         }
         
		 
         $left_rec = $rec_count - ($pagi * $rec_limit);
         $sql = "select Course_Code,credit,semester,Level,Result from results where Index_no='".$stu['Index_no']."'".
            "LIMIT $offset, $rec_limit";
		 
         $retval = mysqli_query($con, $sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
        
     $inc=1;
	 $i=1;
	while($rows = mysqli_fetch_array($retval, MYSQL_ASSOC))
	{					   
	echo "<td>".$i++."</td>";
	
	
	$sem=mysqli_query($con,"select Course_Title from course where Course_Code='".$rows['Course_Code']."'");
	$sem1=mysqli_fetch_array($sem);

	echo "<td>".$sem1['Course_Title']."</td>";
	echo "<td>".$rows['Course_Code']."</td>";
	echo "<td>".$rows['credit']."</td>";
	echo "<td>".$rows['semester']."</td>";
	echo "<td>".$rows['Level']."</td>";
	echo "<td>".$rows['Result']."</td>";
	?>	
 </tr>
 
 <?php 
			}
 
 
			?>
		
			</table>
		</div>
	</div>

</div>	<?php }?>