<?php
require_once 'databaseconnection.php';
$code=$_POST['code'];
$fac1=$_POST['fac1'];
$fac2=$_POST['fac2'];
$fac3=$_POST['fac3'];
if($fac2==null && $fac3==null)
{
	if(isset($_POST['insert']))
	{	
		$result=mysql_query("SELECT * FROM facilitator where Session_Code='$code'");
		if (mysql_num_rows($result) == 0)
		{
			$sql=mysql_query("INSERT INTO facilitator values('$code','$fac1')");
			if (!$sql)
			{
				die('Error: ' . mysql_error());
			}
			header("Location:./../FacilitatorsTable.php?lls=Your facilitator details successfully inserted check your details below!");
		}
		else
		header("Location:./../FacilitatorsTable.php?lls=This session and facilitators details already inserted check details below!");
	}
	elseif(isset($_POST['update']))
	{
		$sql=mysql_query("UPDATE facilitator set Facilitator='$fac1' WHERE Session_Code='$code'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../FacilitatorsTable.php?lls=Your facilitator details successfully updated check your details below!");
	}
}
elseif($fac3==null)
{
	if(isset($_POST['insert']))
	{	
		$result=mysql_query("SELECT * FROM facilitator where Session_Code='$code'");
		if (mysql_num_rows($result) == 0)
		{
			$sql=mysql_query("INSERT INTO facilitator values('$code','$fac1')");
			$sql1=mysql_query("INSERT INTO facilitator values('$code','$fac2')");
			if (!$sql)
			{
				die('Error: ' . mysql_error());
			}
			if (!$sql1)
			{
				die('Error: ' . mysql_error());
			}
			header("Location:./../FacilitatorsTable.php?lls=Your facilitator details successfully inserted check your details below!");
		}
		else
			header("Location:./../FacilitatorsTable.php?lls=This session and facilitators details already inserted check details below!");
	}	
	elseif(isset($_POST['update']))
	{
		$sql=mysql_query("UPDATE facilitator set Facilitator='$fac1' WHERE Session_Code='$code'");
		$sql1=mysql_query("UPDATE facilitator set Facilitator='$fac2' WHERE Session_Code='$code'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		if (!$sql1)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../FacilitatorsTable.php?lls=Your facilitator details successfully updated check your details below!");
	}
}
else
{
	if(isset($_POST['insert']))
	{	
		$result=mysql_query("SELECT * FROM facilitator where Session_Code='$code'");
		if (mysql_num_rows($result) == 0)
		{
			$sql=mysql_query("INSERT INTO facilitator values('$code','$fac1')");
			$sql1=mysql_query("INSERT INTO facilitator values('$code','$fac2')");
			$sql2=mysql_query("INSERT INTO facilitator values('$code','$fac3')");
			if (!$sql)
			{
				die('Error: ' . mysql_error());
			}
			if (!$sql1)
			{
				die('Error: ' . mysql_error());
			}
			if (!$sql2)
			{
				die('Error: ' . mysql_error());
			}
			header("Location:./../FacilitatorsTable.php?lls=Your facilitator details successfully inserted check your details below!");
		}
		else
			header("Location:./../FacilitatorsTable.php?lls=This session and facilitators details already inserted check details below!");
	}
	elseif(isset($_POST['update']))
	{
		$sql=mysql_query("UPDATE facilitator set Facilitator='$fac1' WHERE Session_Code='$code'");
		$sql1=mysql_query("UPDATE facilitator set Facilitator='$fac2' WHERE Session_Code='$code'");
		$sql2=mysql_query("UPDATE facilitator set Facilitator='$fac3' WHERE Session_Code='$code'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		if (!$sql1)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../FacilitatorsTable.php?lls=Your facilitator details successfully updated check your details below!");
	}
}
if(isset($_POST['delete']))
{
	$sql=mysql_query("DELETE FROM facilitator WHERE Session_Code='$code'");
	if (!$sql)
	{
		die('Error: ' . mysql_error());
	}
	header("Location:./../FacilitatorsTable.php?lls=Your session details successfully deleted check your details below!");
}
elseif(isset($_POST['search']))
{
	$code=$_POST['code'];
	$result=mysql_query("SELECT * FROM Facilitator where Session_Code='$code'");
	$result1=mysql_query("SELECT * FROM Session where Session_Code='$code'");
	if (mysql_num_rows($result) > 0){
		header("Location:./../FacilitatorsDetails.php?lls=$code,se");
	}
	elseif(mysql_num_rows($result1) > 0){
		header("Location:./../FacilitatorsDetails.php?lls1=Not assign facilitator for this session");
	}
	else
		header("Location:./../FacilitatorsDetails.php?lls1=You donot select the sessin code!");
}
?>