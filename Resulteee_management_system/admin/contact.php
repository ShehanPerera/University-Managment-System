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
$que1=mysqli_query($con,"select * from contact");
  $row1= mysqli_num_rows($que1);
	if(!$row1)
	{
	echo "<h3><font color='red'>No enquiry</font></h3>";

	} 
 	else{
	?>
	<h3>Contact us</h3>
	 <?php
	 require('../config.php');
	 extract($_POST);
	 ?>
	<div class="table-responsive">
	  <table class="table">
			<tr class="success">
			<th>Sr. No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Index No</th>
			<th>Message</th>
			<th>Date</th>
			<th>Delete</th>
		</tr>
<?php
	$que=mysqli_query($con,"select * from  contact");
	$i=1;
	while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="active">
		<Td><?php echo $i;$i++;?></Td>
		<Td><?php echo $row[1];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>
		<td>
		<?php 
		$id= $row[0];
		?>
		<?php echo "<a href='Delete_contact.php?id=$id'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";
		?>
		</td>
		</tr>	
		<?php 
	} ?>
  </table>
  <?php }?>
  
