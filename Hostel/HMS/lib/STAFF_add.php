<?php
include('STD_Con.php');
// basic info
// Includes Login Script

$error='';
$UaP = '';
$NP = '';

if(isset($_POST['submit']))
{
		
		$idno = $_POST["idNo"];
		$Name = $_POST["userNm"];
		$type=$_POST["type"];
		$pw=$_POST["newPassword"];
		$rpw=$_POST["confPassword"];
		
		if($type != 'admin')
		{
			$hos=$_POST["hostel"];
		}
//


		$pw  = stripslashes($pw);
		$rpw  = stripslashes($rpw);

		$pw = md5($pw);
		$rpw = md5($rpw);

		$checkQuery = $conn->query("SELECT * FROM user_details WHERE  UserName='$idno' OR user_id='$idno'");

		$rows = $checkQuery->num_rows;

		if ($rows != 0)
		{
			$error = "<div class=\"msgStrip alert alert-danger\">Username Username already exist</div>";
			$UaP = 'has-error';
		}
		// if the User name is new
		else if($pw == $rpw)
		{
			$sql = "INSERT INTO user_details (user_id,Name, UserName,pasword,type,Frist_login) VALUES ('$idno','$Name', '$idno','$pw','$type','yes');";
			if($type!='admin')
			{
				if ($type=='warden') 
				{	
					$sqlhos="UPDATE hostel_staff SET  	warden_id='$idno' WHERE hostel_id='$hos' ;";
					
					if($conn->query($sqlhos)===true)
					{
						echo "<div class=\"msgStrip alert alert-success\">successfully Create New Account</div>";
					}
					else
					{
						$er = $conn->error;
						echo "<div class=\"msgStrip alert alert-danger\">$er</div>";			
					}
				}
				else
				{
					$sqlhos="UPDATE hostel_staff SET  subwarden_id='$idno' WHERE hostel_id='$hos' ;";
					
					if($conn->query($sqlhos)===true)
					{
						echo "<div class=\"msgStrip alert alert-success \">successfully Create New Account</div>";
					}
					else
					{
						$er = $conn->error;
						echo "<div class=\"msgStrip alert alert-danger\">$er</div>";			
					}
				}
				
			}
			

				if ($conn->query($sql) === TRUE)
				{
				
						// print '<script type="text/javascript">';
						// print 'var r = confirm("staff data was added successfully. do you want to add another staff?");';
						// print 'if (r == true) {';
	     // 				print 'document.location.href = "..\Pages\Main\user.php";';
						// print '} else {';
	    	// 			print 'document.location.href = "..\Pages\Main\index.php";';
						// print '} ';
						// print '</script>';
				}
					
		}	
		else
		{
			$error = "<div class=\"msgStrip alert alert-danger\">New Password is not match</div>";
			$NP = 'has-error';
		}
	}


?>