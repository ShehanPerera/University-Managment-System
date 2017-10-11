<?php
include('STD_Con.php');
$error='';
$UaP = '';
$NP = '';
if(isset($_POST['submit']))
{
	if (empty($_POST['userNm']) || empty($_POST['crPassword']) || empty($_POST['newPassword']) || empty($_POST['confPassword']) || empty($_POST['NewuserNm']))
	{
		$error = "<div class=\"msgStrip alert alert-danger\">You should fill every fields</div>";
		$UaP = 'has-error';
		$NP = 'has-error';
	}
	else
	{
		$userNm = $_POST['userNm'];
		$nuserNm = $_POST['NewuserNm'];
		$cpw 	= $_POST['crPassword'];
		$npw 	= $_POST['newPassword'];
		$Cnpw 	= $_POST['confPassword'];
		// strip slash paswords
		$cpw  = stripslashes($cpw);
		$npw  = stripslashes($npw);
		$Cnpw = stripslashes($Cnpw);
		// MD5 for password
		$cpw = md5($cpw);
		$npw = md5($npw);
		$Cnpw = md5($Cnpw);
		// Check the given user name is right
		$checkQuery = $conn->query("SELECT * FROM user_details WHERE pasword='$cpw' AND UserName='$userNm'");
		$rows = $checkQuery->num_rows;
		if ($rows != 1)
		{
			$error = "<div class=\"msgStrip alert alert-danger\">User name and password is wrong, try again</div>";
			$UaP = 'has-error';
		}
		else
		{
			if($npw == $Cnpw)
			{
				$sql = "UPDATE user_details SET pasword = '$npw', UserName = '$nuserNm', Frist_login = 'no' WHERE UserName='$userNm';";
				if ($conn->query($sql) === TRUE)
				{
					if(session_destroy()) // Destroying All Sessions
					{
						header("Location: ../../index.php"); // Redirecting To Home Page
					}
				}
			}
			else
			{
				$error = "<div class=\"msgStrip alert alert-danger\">New Password is not match</div>";
				$NP = 'has-error';
			}
		}
	}
}
?>
