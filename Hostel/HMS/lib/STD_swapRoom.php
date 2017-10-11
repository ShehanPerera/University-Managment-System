<?php
	include("session.php");
	include('STD_Con.php');

	$room_no=$_POST['room_no'];
	$regNo=$_POST['regNo'];

	
	$sql_get="SELECT * FROM `hostel_room` WHERE `Room_ID`='$room_no';";
	$result=$conn->query($sql_get);
	
	if ($result->num_rows > 0)
  	{
   		 while($row = $result->fetch_assoc())
   		{
     		 $cur = $row['cur_Amount'];
    	}
 	}

	$cur=$cur+1;

	$sql="UPDATE `student_hostel` SET `room_no`='$room_no' WHERE `reg_no`='$regNo';";
	$sql_room="UPDATE `hostel_room` SET `cur_Amount`='$cur' WHERE `Room_ID`='$room_no';";
	
	if ($conn->query($sql)==TRUE && $conn->query($sql_room)) 
	{
		header("Location: ..\Pages\main_local\main_local/withoutRoom.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
?>