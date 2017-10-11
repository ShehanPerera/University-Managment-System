<?php
require_once 'databaseconnection.php';
$code=$_POST['code'];
$name=$_POST['name'];
$year=$_POST['year'];
$count=$_POST['count'];
if(isset($_POST['insert']))
{	
	$result=mysql_query("SELECT * FROM session where Session_Code='$code'");
	if (mysql_num_rows($result) == 0)
	{
		
		$sql=mysql_query("INSERT INTO session values('$code','$name','$year','$count')");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../SessionTable.php?lls=Your session details successfully inserted check your details below!");
	}
	else
		header("Location:./../SessionTable.php?lls=This session details already inserted check details below!");
}
elseif(isset($_POST['delete']))
{
	$sql=mysql_query("DELETE FROM session WHERE Session_Code='$code'");
	$sql1=mysql_query("DELETE FROM facilitator WHERE Session_Code='$code'");
	if (!$sql)
	{
		die('Error: ' . mysql_error());
	}
	header("Location:./../SessionTable.php?lls=Your session and its facilitator details successfully deleted check your details below!");
}
elseif(isset($_POST['update']))
{
	$sql=mysql_query("UPDATE session set Session_Name='$name',Level='$year',Head_Count='$count' WHERE Session_Code='$code'");
	if (!$sql)
	{
		die('Error: ' . mysql_error());
	}
	header("Location:./../SessionTable.php?lls=Your session details successfully updated check your details below!");
}
elseif(isset($_POST['search']))
{
	$code=$_POST['code'];
	$result=mysql_query("SELECT * FROM session where Session_Code='$code'");
	if (mysql_num_rows($result) == 1){
		header("Location:./../SessionDetails.php?lls=$code,se");
	}else
		header("Location:./../SessionTable.php?lls=Sorry your session code cannot find check details below!");
}    

     