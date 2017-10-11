<?php
require_once 'databaseconnection.php';
session_start();
$name=$_SESSION['username'];
if (isset($_GET['lls'])) 
{
    $lls = $_GET['lls'];
	$delimiter = ",";
	$items = explode($delimiter, $lls);
	$lls=$items[0];
	$venue1=$items[1];
}
if($lls=="timetable1")
	$l="Level 1G";
elseif($lls=="timetable2")
	$l="Level 2G";
else
	$l="Level 3G";
$time=$_POST['theTime'];
$date=$_POST['theDate'];
$day=$_POST['day'];
$period=$_POST['period'];
$code=$_POST['code'];
$venue=$_POST['venue'];
//echo $day.$period.$code.$venue;
if(isset($_POST['Update']))
{
	$a[1]="timetable1";
	$a[2]="timetable2";
	$a[3]="timetable3";
	for($i=1;$i<4;$i++)
	{
		$result=mysql_query("SELECT * FROM $a[$i] where Day='$day' AND Period='$period' AND Venue_No='$venue'");
		if(mysql_num_rows($result)==0)
		{
			if($i==3)
			{
			$sql=mysql_query("UPDATE $lls set Day='$day',Period='$period',Session_Code='$code',Venue_No='$venue' WHERE Day='$day' AND Period='$period' AND Venue_No='$venue1'");
			if ($sql)
			{
				mysql_query("insert into history values('','$name','$date','$time','update the $day $period period $code class to $venue the old venue is $venue1')");
			}
			else
				die('Error: ' . mysql_error());
			header("Location:./../Timetable.php?lls=$lls");
			}			
		}
		else
		{
			header("Location:./../newlec.php?lls1=This venue place already assign for another session");
		}
	}
}
elseif(isset($_POST['Insert']))
{	
	$sql=mysql_query("INSERT INTO $lls values('$day','$period','$code','$venue')");
	if ($sql)
	{
		mysql_query("insert into history values('','$name','$date','$time','inset the $code class on $day $period period at $venue')");
		header("Location:./../Timetable.php?lls=$lls");
	}
	else
		header("Location:./../newlec.php?lls1=This venue place already assign for another session");
	
}
elseif(isset($_POST['Delete']))
{
	$sql=mysql_query("DELETE FROM $lls WHERE Day='$day' and Period='$period' and Venue_No='$venue1'");
	if ($sql)
	{
		mysql_query("insert into history values('','$name','$date','$time','Delete the $day $period period $code class')");
		header("Location:./../Timetable.php?lls=$lls");
	}
	else
		header("Location:./../newlec.php?lls1=This venue place already assign for another session");
}
?>