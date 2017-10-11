<?php
session_start();
error_reporting(1);

  extract($_SESSION);
   //include('../../Hostel/HMS/lib/session.php');
  if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="radmin")&&(!in_array("radmin",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
        } 
		?>
<?php 
$que1=mysqli_query($con,"select * from course");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any course Found</font></h3>";
echo "<h3><a href='index.php?option=add_subject'>Click here to add New subject</a></h3>";
	} 
 	else{
?>
<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_subject.php?id='+id;
     }
}
</script>
<div class="table-responsive">
  <table class="table">
	<tr  class="danger">
	 	<th colspan="8"><a title="Add New Subject" href="index.php?option=add_subject"><span class=" glyphicon glyphicon-plus-sign" style="color:black"></span></a></th>
	 </tr>
	<tr class="info">
		<th>No.</Th>
		<Th>Subject</Th>
		<th>Course Code</th>
		<th>Course Title</th>
		<th>Credit Value</th>
		<th>Level</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
<?php
	error_reporting(1);
         $rec_limit =10;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(id) FROM course ";
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
         $sql = "SELECT * ". "FROM course ".
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
		<Td><?php echo $row['Subject'];?></Td>
		<Td><?php echo $row['Course_Code'];?></Td>
		<Td><?php echo $row['Course_Title'];?></Td>
		<Td><?php echo $row['Credit_Value'];?></Td>
		<Td><?php echo $row['Level'];?></Td>
		
<Td>
<a href='#' onclick="deletes('<?php echo $row["id"];?>')"><span class='glyphicon glyphicon-remove' style='color:red;'></span></a>
</td>
<Td>
<!--<a href='#' onclick="deletes('<?php echo $row["id"];?>')"><span class='glyphicon glyphicon-remove' style='color:red;'></span></a>-->
<a href='index.php?option=update_subject&id=$id'><span class='glyphicon glyphicon-pencil'></span></a>
</td>
	</tr>
	
	<?php $i++;} 
	
	
	//for shoing Pagination

echo "<tr class='info'><td colspan='8'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=subject&pagi=$last\">Previous</a> |";
        echo "<a href = \"index.php?option=subject&pagi=$pagi\">Next</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=subject&pagi=$pagi\">Next</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=subject&pagi=$last\">Previous</a>";
         }
        echo "</td></tr>"; 
		?>
		
</table>
<?php }?>

  
