
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
$que1=mysqli_query($con,"select * from results");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any results added by Teacher</font></h3>";

	} 
 	else{
?>
<script>
function deleteAttendance(id)
{
	if(confirm("You want to delete this record ?"))
	{
	 window.location.href="delete_results.php?stu_id="+id;
	}
}
</script>

<div class="row">
<div class="col-sm-12">

<div class="panel panel-primary">
<div class="panel-heading"><span class="glyphicon glyphicon-check"> All Results</span>

</div>
<div class="panel-body">
		
	<div class="form-group">
    <label for="exampleInputEmail1"><a style="color:#000" href="generate_pdf.php"><span class="glyphicon glyphicon-print"></span> Download PDF</a></label>   
  </div> 
	 
	
	 
  <div class="form-group">
 

  <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Student Name</th>
                                <th>Semester</th>
								<th>Sub1<br/>(Marks)</th>
								<th>Sub2<br/>(Marks)</th>
								<th>Sub3<br/>(Marks)</th>
								<th>Sub4<br/>(Marks)</th>
								<th>Sub5<br/>(Marks)</th>
								<th>Sub6<br/>(Marks)</th>
                                <th>Total<br />(Gained)</th>
								<th>Total<br />(Subject Marks)</th>
								<th>Percentage</th>
								<!--<th>Update</th>
								<th>Delete</th>-->
								</tr> 
    <?php
error_reporting(1);
         $rec_limit =10;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(res_id) FROM results ";
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
         $sql = "SELECT * ". "FROM results ".
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
	echo "<tr><td>".$i++."</td>";
	
	//show student name
$q=mysqli_query($con,"select name from student where id='".$rows['stu_id']."'");
$r=mysqli_fetch_array($q);
	echo "<td>".$r['name']."</td>";
	
	//show semester name
$q1=mysqli_query($con,"select * from semester where sem_id='".$rows['sem_id']."'");
$r1=mysqli_fetch_array($q1);
	echo "<td>".$r1['name']."</td>";
	echo "<td>".$rows['sub1']."</td>";
	echo "<td>".$rows['sub2']."</td>";
	echo "<td>".$rows['sub3']."</td>";
	echo "<td>".$rows['sub4']."</td>";
	echo "<td>".$rows['sub5']."</td>";
	echo "<td>".$rows['sub6']."</td>";
	
	$total=$rows['sub1']+$rows['sub2']+$rows['sub3']+$rows['sub4']+$rows['sub5']+$rows['sub6']+$rows['sub7'];

	echo "<td>".$total."</td>";
	
//get full marks of each subject
$q2=mysqli_query($con,"select * from subject where sem_id='".$rows['sem_id']."'");
$r2=mysqli_fetch_array($q2);	
$total_marks=$r2['marks1']+$r2['marks2']+$r2['marks3']+$r2['marks4']+$r2['marks5']+$r2['marks6'];

	echo "<td>".$total_marks."  </td>";	
	
	$percent=($total*100)/$total_marks;
	echo "<td>".(int)$percent." % </td></tr>";
	
	
	
	?>
		
 </tr>
 <?php }
 
 
 //for shoing Pagination

echo "<tr class='info'><td colspan='14'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=result&pagi=$last\">Last 10 Records</a> |";
        echo "<a href = \"index.php?option=result&pagi=$pagi\">Next 10 Records</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=result&pagi=$pagi\">Next 10 Records</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=result&pagi=$last\">Last 10 Records</a>";
         }
        echo "</td></tr>"; 
		?>
		
</table>
	</div>
</div>

	</div>	
	<?php }?>