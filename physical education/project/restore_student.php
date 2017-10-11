<?php
include('connection.php');
	session_start();
	$_name=$_POST['cat'];
	$_reg=$_POST['idd'];

	$name = $_POST['name1'];
	$bday = $_POST['bday'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$nic = $_POST['nic'];
	$Address = $_POST['Address'];
	$phone = $_POST['phone'];
	$Gender = $_POST['Gender'];
	$Status= $_POST['Status'];
	$pname = $_POST['pname'];

	$query = "UPDATE  studentdetails set  Name='$name', Date_of_Birth='$bday', Date_of_start_Acadamic_Course='$start',Date_of_completion_of_Course='$end',NIC='$nic',Address='$Address',Phone_Number='$phone',Gender='$Gender',Status='$Status',Place='$pname' where Category='$_name' and Reg_No='$_reg'";
	$result = mysql_query($query) or die(mysql_error());

	if($result)
	{
		echo "<script>

    var x;
    if (confirm('Edit is successful!') == true) {
        window.location='Events.php';
		
    }
	else
		{
         window.location='Events.php';
    }
    

</script>";
		
	}
?>