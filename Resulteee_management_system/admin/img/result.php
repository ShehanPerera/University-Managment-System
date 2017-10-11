<?php 
$que1=mysqli_query($con,"select * from results");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any Result Found</font></h3>";
echo "<h3><a href='index.php?option=add_result'>Click here to add New Result</a></h3>";
	} 
 	else{
?>
<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_result.php?id='+id;
     }
}
</script>	

<table class="table table-bordered">
<tr class="active" height="30px">
	<td colspan="16">
	<a href="enter_up.php" >Add New Result</a></td>
</tr>
<tr class="info" height="30">
	<tr>
 		<th>ID</th>
 		<th>Index_no</th>
  		<th>Course_Code</th>
  		<th>Credit_Value</th>
  		<th>Semester</th>
		<th>attempt</th>
		<th>level</th>
		<th>Marks</th>
		<th>Result</th>
		<th>gpv</th>
		<th>credit*gpv</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
</tr>

<?php 
error_reporting(1);
         $rec_limit =10;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(id) FROM results ";
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
	while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
	{
		$id=$row['Course_Code'];
		echo "<tr class='active'>";

		echo "<th>".$i."</th>";
		//echo "<th>".$row['name']."</th>";
		//$co=mysqli_query($con,"select * from results where Course_Code='".$row['Course_Code']."'");
		///$r=mysqli_fetch_array($co);
		//echo "<td>".$row['No']."</td>";
		echo "<td>".$row['Index_no']."</td>";
		echo "<td>".$row['Course_Code']."</td>";
		echo "<td>".$row['credit']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['attempt']."</td>";
		echo "<td>".$row['Level']."</td>";
		echo "<td>".$row['marks']."</td>";
		echo "<td>".$row['Result']."</td>";
		echo "<td>".$row['gpv']."</td>";
		echo "<td>".$row['credit*gpv']."</td>";

echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";

echo "<th><a href='index.php?option=update_result&id=$id'><span class='glyphicon glyphicon-pencil'></span></a>
</th>";
echo "<tr>";
$i++;
}








//for shoing Pagination
echo "<tr class='info'><td colspan='16'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=result&pagi=$last\">Previous</a> |";
        echo "<a href = \"index.php?option=result&pagi=$pagi\">Next</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=result&pagi=$pagi\">Next</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=result&pagi&pagi=$last\">Previous</a>";
         }
        echo "</td></tr>"; 
		?>


</table>

<?php }?>