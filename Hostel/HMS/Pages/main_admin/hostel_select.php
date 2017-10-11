
<?php
	include ('../../lib/STD_Con.php');
?>

<td>
	<label>Select Hostel:</label>
</td>
<td>
 <select name="hostel" class="form-control" style="width:100%" required>
		  <option selected disabled hidden>Select Hostel</option>
		    <?php
		    $type = $_GET['key'];
		    if($type == 'warden')
		    {
		    	$sql = "SELECT H.* FROM hostel_detail as H, hostel_staff as S where H.id = S.hostel_id AND S.warden_id = 'no'";
		    }
		    else
		    {
		    	$sql = "SELECT H.* FROM hostel_detail as H, hostel_staff as S where H.id = S.hostel_id AND S.subwarden_id = 'no'";	
		    }
		    
		    $result = $conn->query($sql);

		    foreach ($result as $hname )
		    {
		    ?>
			     <option value="<?php echo $hname["id"] ; ?>">
			     	<?php echo $hname["name"] ;?>
			     	</option>
	        <?php $_SESSION['$hosid']=$hname["id"]; ?>
		  <?php
		    }
		    ?>
</td>
