<?php
include('session.php');
if (isset($_POST['submit'])) 
{
include('STD_Con.php');
    if (!empty($_SESSION)) {
        $HID = $_SESSION['hostel_id'];
    }
   //delete previous room details and student allocations of room
    $sql_del_rooms = "DELETE FROM hostel_room WHERE Hos_ID = '$HID'";
    $conn->query($sql_del_rooms);
    $sql_edit_studentRoom = "UPDATE student_hostel SET room_no = '0' WHERE hostel_id = '$HID'";
    $conn->query($sql_edit_studentRoom);
//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");
 $c = 0;
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	// to avoid title row
	if ($c != 0) {
	//sql for basic student details
	$sql = "INSERT INTO hostel_room (Room_ID, Hos_ID, max_Cap, cur_Amount) VALUES ('".$data[0]."', '$HID', ".$data[1].", 0);";
	// run queries
	$conn->query($sql);

	}
	$c++;
}
 
fclose($handle);
//print "Import done"
echo "<script type='text/javascript'>alert('Successfully Imported a CSV File for User!');</script>";
echo "<script>document.location='../Pages/Student/index.php'</script>";
//view upload form
}

?>