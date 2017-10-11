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
$que1=mysqli_query($con,"select * from notification");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
echo "<h3><font color='red'>No any notification Found</font></h3>";
echo "<h3><a href='index.php?option=notification_add'>Click here to add New notification</a></h3>";
	} 
 	else{
?>
<div class="table-responsive">
  <table class="table">
	 <tr  class="danger">
	 	<th colspan="8"><a title="Add notification to Instructor" href="index.php?option=notification_add"><span class=" glyphicon glyphicon-plus-sign" style="color:black"></span></a></th>
	 </tr>
	   	
		<tr class="info">
		<th>Sr. No</th>
		<th>HOD</th>
		<th>Subject</th>
		<th>Notification</th>
		<th>Date</th>
		<th>Delete</th>
		
		</tr>
<?php
	$que=mysqli_query($con,"select * from  notification");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="active">
		<Td><?php echo $row[0];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>
		

<td>
<?php 
$email= $row[1];
$msgid= $row[0];
$to= $row[2];
?>
<?php echo "<a href='notification_Delete.php?eid=$email&msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
</td>
</tr>
<?php } ?>
  </table>
  
  <?php }?>
  
