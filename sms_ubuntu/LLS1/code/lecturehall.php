<?php
require_once 'databaseconnection.php';
$hall=$_POST['hall'];
$lab=$_POST['lab'];
$count=$_POST['count'];
$project=$_POST['project'];
$water=$_POST['water'];
if(isset($hall))
{
	if(isset($_POST['insert']))
	{
		$sql=mysql_query("INSERT INTO venue values('$hall','Lecture hall','$count','$project','$water')");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../LectureHallView.php?lls=Your lecturehall details successfully inserted check your details below!");
	}
	elseif(isset($_POST['delete']))
	{
		$sql=mysql_query("DELETE FROM venue WHERE Venue_No='$hall'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../LectureHallView.php?lls=Your lecturehall details successfully deleted check your details below!");
	}
	elseif(isset($_POST['update']))
	{
		$sql=mysql_query("UPDATE venue set Venue_Type='Lecture hall',Head_Count='$count',Projector='$project',Water_Facility='$water' WHERE Venue_No='$hall'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../LectureHallView.php?lls=Your lecturehall details successfully updated check your details below!");
	}
	elseif(isset($_POST['search']))
	{
		header("Location:./../LectureHallMore.php?lls=$hall,se");
	}   
}
else
{
	if(isset($_POST['insert']))
	{
		$sql=mysql_query("INSERT INTO venue values('$lab','Laboratory','$count','$project','$water')");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../LaboratoryView.php?lls=Your laboratory details successfully inserted check your details below!");
	}
	elseif(isset($_POST['delete']))
	{
		$sql=mysql_query("DELETE FROM venue WHERE Venue_No='$lab'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../LaboratoryView.php?lls=Your laboratory details successfully deleted check your details below!");
	}
	elseif(isset($_POST['update']))
	{
		$sql=mysql_query("UPDATE venue set Venue_Type='Laboratory',Head_Count='$count',Projector='$project',Water_Facility='$water' WHERE Venue_No='$lab'");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../LaboratoryView.php?lls=Your laboratory details successfully updated check your details below!");
	}
	elseif(isset($_POST['search']))
	{
		header("Location:./../LaboratoryMore.php?lls=$lab,se");
	} 
}
?>