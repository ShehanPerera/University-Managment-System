<?php 
include('STD_Con.php');
// basic info
$regNo = $_POST["reg_no"];
// Get image from form
$file = $_FILES['pro_Picture']['tmp_name'];
$isImgSet = FALSE;
// Adding database process
$img = addslashes(file_get_contents($file));
	$img_name = addslashes($_FILES['pro_Picture']['name']);
	$img_size = getimagesize($file);

	if($img_size == FALSE)
	{
		echo "thats not an image";
	}
	else
	{
		$sql_delete = "DELETE FROM student_pic WHERE reg_No = '$regNo';";
		$res = $conn->query($sql_delete);
		$sql_img = "INSERT INTO `student_Pic`(`reg_No`, `name`, `Image`) VALUES ('$regNo','$img_name','$img');";
		if($conn->query($sql_img) === TRUE)
			$isImgSet = TRUE;
	}
if($isImgSet)
{
	header("Location: ..\Pages\main_admin\withoutPic.php");
}
else
{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>