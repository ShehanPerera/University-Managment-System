<?php
include('STD_Con.php');
$id = $_GET['id'];
if(isset($id))
{
	// Query for delete user
	$getDT = "SELECT `type` FROM `user_details` WHERE user_id = '$id';";
	$sql="DELETE FROM `user_details` WHERE `user_id`='$id';";
	$Update_W = "UPDATE hostel_staff SET warden_id = 'no' WHERE warden_id = '$id';";
	$Update_S = "UPDATE hostel_staff SET subwarden_id = 'no' WHERE subwarden_id = '$id';";
}
// run the query
$res_getDT = $conn->query($getDT);
if ($res_getDT->num_rows>0){
	while($row = $res_getDT->fetch_assoc()) 
    		{
    			$type = $row["type"];
    		}
if($type == 'warden')
{
$conn->query($sql);
$conn->query($Update_W);
}
elseif($type == 'subwarden')
{
$conn->query($sql);
$conn->query($Update_S);
}
else
{
$conn->query($sql);
}
}
?>