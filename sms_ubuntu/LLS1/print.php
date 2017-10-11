<html>
<head>
<title></title>
</head>
<body>
<?php
		if(isset($_GET['lls']))
		{
			$level = $_GET['lls'];
			if($level=="timetable1")
				$l="Level 1G";
			elseif($level=="timetable2")
				$l="Level 2G";
			else
				$l="Level 3G";
		}
		echo '<h1 align="center">'.$l."&nbsp;&nbsp;&nbsp;TimeTable";
		include_once 'code/databaseconnection.php';	
		echo '<table align="center" border="1">';
		echo '<tr>';
        echo '<th width="48" height="50"><div align="center"><font color="black">Time</font></div></th>';
        echo '<th><div align="center"><font color="black">Monday</font></div></th>';
        echo '<th><div align="center"><font color="black">Tuesday</font></div></th>';
        echo '<th><div align="center"><font color="black">Wednesday</font></div></th>';
        echo '<th><div align="center"><font color="black">Thursday</font></div></th>';
        echo '<th><div align="center"><font color="black">Friday</font></div></th>';
        echo '</tr>';
		for($i=1;$i<=8;$i++)
		{
			echo '<tr>';
			if(($i+7)<12)
				$p=$i;
			else
				$p=$i+1;
			echo '<th width="5"><div align="center"><font color="black">'.($p+7).".00-".($p+8).".00".'</font></div></th>';
			for($j=0;$j<5;$j++)
			{
				$a[]="Monday";
				$a[]="Tuesday";
				$a[]="Wednesday";
				$a[]="Thursday";
				$a[]="Friday";
				
				$result=mysql_query("SELECT * FROM $level WHERE Day='$a[$j]' AND Period='$i'");
				$n=mysql_num_rows($result);
				$s="";
				while($row=mysql_fetch_array($result))
				{
					
					if(!user_loggedin())
					{
						if($s=="")
						$s='<td><div align="left">'.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No']."<br>";
						else
						$s=$s.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No']."<br>";
					
					}
					else
					{
						if($s=="")
						$s='<td><div align="left">'.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No'].
						'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/edit1.gif" width="15" height="15" align="right" alt="" /></a>'.
						'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"><img name="" src="images/delete.gif" width="10" height="10" align="right" alt="" /></a>'."<br>";
						else
						$s=$s.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No'].
						'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/edit1.gif" width="15" height="15" align="right" alt="" /></a>'.
						'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"><img name="" src="images/delete.gif" width="10" height="10" align="right" alt="" /></a>'."<br>";
					}
				}
				if(!user_loggedin())
					echo $s.'</td>';
				else
					echo $s.'</div><a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/insert.gif" width="10" height="8" align="right" alt="" /></a></td>';
			}
		}
	?>
</body>
</html>