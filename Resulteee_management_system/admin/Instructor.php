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
$que1=mysqli_query($con,"select * from instructor");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any Teacher Found</font></h3>";
echo "<h3><a href='../../UMS/r_admin/CreateAccounts.php'>Click here to add New teacher</a></h3>";
	} 
 	else{
?>
<script type="text/javascript">
function deletes(eid)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='Instructor_Delete.php?eid='+eid;
     }
}
</script>
<div class="table-responsive">
  <table class="table">
	<tr  class="danger">
	 	<th colspan="8"><a title="Add New Instructor" href="../../UMS/r_admin/CreateAccounts.php"><span class=" glyphicon glyphicon-plus-sign" style="color:black"></span></a></th>
	 </tr>
	<tr class="info">
		<th>Sr. No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Department</th>
		<th>Mobile</th>
		<th>Status</th>
		<th>Delete</th>
	</tr>
<?php
	error_reporting(1);
         $rec_limit =10;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(id) FROM instructor ";
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
         $sql = "SELECT * ". "FROM instructor ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query($con, $sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         
     $inc=1;
	 $i=1;
	while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
	{
	?>
	<tr  class="active">
		<Td><?php echo $i;?></Td>
		<Td><?php echo $row['name'];?></Td>
		<Td><?php echo $row['email'];?></Td>
		<Td><?php echo $row['dept'];?></Td>
		<Td><?php echo $row['mob'];?></Td>
<Td>
<?php 
$seid= $row['email'];
$s= $row['status'];
if($s==1)
{
echo "<a title='Activate Instructor' href='Instructor_status.php?status=$s&eid=$seid'><span class='glyphicon glyphicon-user' style='color:red' aria-hidden='true'></span></a>";
}
else
{
echo "<a title='Deactivate Instructor' href='Instructor_status.php?status=$s&eid=$seid'><span class='glyphicon glyphicon-user' style='color:#00FF00' aria-hidden='true'></span></a>";
}
?>
</Td>
<Td>
<a href='#' onclick="deletes('<?php echo $row["email"];?>')"><span class='glyphicon glyphicon-remove' style='color:red;'></span></a>

</td>
	<?php 

echo "</Tr>";
$i++;
$inc++;
}




//for shoing Pagination

echo "<tr class='info'><td colspan='8'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=Instructor&pagi=$last\">Last 10 Records</a> |";
        echo "<a href = \"index.php?option=Instructor&pagi=$pagi\">Next 10 Records</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=Instructor&pagi=$pagi\">Next 10 Records</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=Instructor&pagi=$last\">Last 10 Records</a>";
         }
        echo "</td></tr>"; 
		?>
		
</table>
<?php }?>

  
