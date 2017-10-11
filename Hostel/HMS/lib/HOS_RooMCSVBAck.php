<?php
if (isset($_POST['submit'])) 
{
include('STD_Con.php');
 $HID = $_POST['HID'];
//Import uploaded file to Database
$handle = fopen($_FILES['filename']['tmp_name'], "r");
 $c = 0;
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	// to avoid title row
	if ($c != 0) {
	//sql for basic student details
	$sql = "INSERT INTO Hostel_Room (Room_ID, Hos_ID, max_Cap, cur_Amount) VALUES ('".$data[0]."', '".$data[1]."', '".$HID."', '".$data[2]."');";
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