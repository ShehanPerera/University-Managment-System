<?php
require_once 'databaseconnection.php';
$day=$_POST['day'];
$period=$_POST['period'];
$count=$_POST['count'];
$result=mysql_query("SELECT * FROM venue where Head_Count>='$count'");
while($row=mysql_fetch_array($result))
{
	$v=$row['Venue_No'];
	$result1=mysql_query("SELECT * FROM timetable1 where Day='$day' AND Period='$period' AND Venue_No='$v'");
	if(mysql_num_rows($result1)==0)
	{
		$h1[]=$row['Venue_No'];
	}	
}
for($i=0;$i<sizeof($h1);$i++)
{
	$result2=mysql_query("SELECT * FROM timetable2 where Day='$day' AND Period='$period' AND Venue_No='$h1[$i]'");
	$row1=mysql_fetch_array($result2);
	if(mysql_num_rows($result2)==0)
	{
		$h2[]=$h1[$i];
	}
}
for($i=0;$i<sizeof($h2);$i++)
{
	$result3=mysql_query("SELECT * FROM timetable3 where Day='$day' AND Period='$period' AND Venue_No='$h2[$i]'");
	$row2=mysql_fetch_array($result3);
	if(mysql_num_rows($result3)==0)
	{
		echo $h2[$i];
	}
}
?>