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
 extract($_SESSION);
 include('../config.php');
$que1=mysqli_query($con,"select * from  notification where Instructor='".$inst['email']."'");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any notification  for you</font></h3>";

	} 
 	else{
?>
<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:red" align="center">Notification From admin</h4></caption>
	   	
		<tr class="info">
		<th>Sr. No</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		
		
		</tr>
<?php
$que=mysqli_query($con,"select * from  notification where Instructor='".$inst['email']."'");
$i=1;
while($row= mysqli_fetch_array($que))
	{
	?>
	<tr  class="active">
		<Td><?php echo $i;?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>



</td>


	</tr>
	
	<?php $i++;} ?>
  </table>
  
  <?php }?>
  
