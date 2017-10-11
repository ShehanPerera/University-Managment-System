<?php 
	include('STD_Con.php');
	$key = $_GET['key'];

	$sql_image = "SELECT * FROM student_pic WHERE reg_No = '$key';";
	$result_image = $conn->query($sql_image);

	//get image details
	if($result_image->num_rows > 0)
	{
		while($row = $result_image->fetch_assoc())
		{
			$profImg = $row["Image"];
		}
	}
	header("Content-type: image/jpeg");
	echo $profImg;

?>
