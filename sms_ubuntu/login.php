
<?php
include('../Hostel/HMS/lib/session.php'); // Includes Login Script

if(isset($_SESSION['Loged_User']))
{
header("location: admin/index.php");
}
?>


<?php
//Start session
	
	session_start();
	
	//Connect to mysql server
	include('connect1.php');
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	//Sanitize the POST values
	$RegNo = clean($_POST['RegNo']);
	$password = md5(clean($_POST['password']));
	$position1 = "";
	$position3 = "";
	$position2 = "";
	
  $result = mysql_query("SELECT * FROM test1 WHERE username='$RegNo' AND pasword='$password'")or die (mysql_error());
	
  while($row = mysql_fetch_assoc($result))
  {
		$position1 = $row['admin'];	
		$position2 = $row['student'];	
		$position3 = $row['hod'];	
			
	}
  
  /*  if ($position1==""&&$position1==""){
    header("location: index.php");
    exit();
  }  */

  if ($position1=='true')
	{
		//Create query
		 $qry="SELECT * FROM test1 WHERE username='$RegNo' AND pasword='$password'" ;
		$result=mysql_query($qry)or die (mysql_error());
		//mewa edit krnna
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				//$_SESSION['SESS_ADMIN_ID'] = $member['user_id'];
				//$_SESSION['SESS_ADMIN_NAME'] = $member['fname'];
				$_SESSION['SESS_REG_NO'] = $member['first_name'];
				$_SESSION['SESS_LAST_NAME'] = $member['last_name'];
				$_SESSION['SESS_POSITION'] = "Admin";
				session_write_close();
				$RegNo=$_SESSION['SESS_REG_NO'];
				$lname=$_SESSION['SESS_LAST_NAME'];
				//mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$RegNo','$lname','admin','login')");	 */	
				header("location: admin/index.php");
				
			/* 	exit();
			}else {
				//Login failed
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		} */
	//function user_loggedin() {return true;}
	}
	}
	}
	
	else if ($position2=="true")
	{
		//Create query
		$qry="SELECT * FROM test1 WHERE username='$RegNo' AND pasword='$password'";
		$result=mysql_query($qry)or die (mysql_error());
		
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				//$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_REG_NO'] = $member['user_id'];
				//$_SESSION['SESS_IN_NO'] = $member['indNo'];
				$_SESSION['SESS_FIRST_NAME'] = $member['first_name'];
				//$_SESSION['SESS_LEVEL'] = $member['level'];
				//$_SESSION['SESS_POSITION'] = "Student"; 
				$_SESSION['SESS_LAST_NAME'] = $member['first_name'];
				//$_SESSION['SESS_PASS_WORD'] = $member['password'];
				session_write_close();	
				$RegNo=$_SESSION['SESS_REG_NO'];
				$lname=$_SESSION['SESS_LAST_NAME'];
				//mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$RegNo','$lname','student','login')");		
				header("location: student/index.php");
				//exit();
			/* }else {
				//Login failed
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed"); */
		}
	}
	}
		/*
		$qryre="SELECT * FROM results";
		$resultre=mysql_query($qryre);
		if($resultre) 
		{
			if(mysql_num_rows($resultre) > 0) 
			{
				session_regenerate_id();
				$memberre = mysql_fetch_assoc($resultre);
					$_SESSION['SESS_IN_NO'] = $memberre['inum'];
					$_SESSION['SESS_UNIT'] = $memberre['unit'];
				session_write_close();
			}
		}
		else die("Query failed");
		*/
	//function user_loggedin() {return false;}
	//}
	
  else if ($position3=='true')
	{
		//Create query
		$qry="SELECT * FROM test1 WHERE username='$RegNo' AND pasword='$password'" ;
		$result=mysql_query($qry)or die (mysql_error());
		
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				//echo"ss";
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				//$_SESSION['SESS_HEAD_ID'] = $member['id'];
				//$_SESSION['SESS_HEAD_NAME'] = $member['username'];
				$_SESSION['SESS_LAST_NAME'] = $member['user_id'];
				$_SESSION['SESS_REG_NO']=$member['first_name'];
				//$_SESSION['SESS_POSITION'] = "HOD";
				session_write_close();
				 $RegNo=$_SESSION['SESS_REG_NO'];
				$lname=$_SESSION['SESS_LAST_NAME'];
				/*mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$RegNo','$lname','Head of the department','login')"); */		
				header("location: hod/index.php");
				/* exit();
			}else {
				//Login failed
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	function user_loggedin() {return false;}
	} */
	}
	}
	}
	//}
	else if($position1!="true"&&$position2!="true"&&$position3!="true")
	{
		echo"sfgh";
		 header("location: ../UMS/SMSlogin.php");
	}
	
?>