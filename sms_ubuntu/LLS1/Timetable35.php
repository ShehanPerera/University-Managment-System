<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Timetable</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="pro_dropdown_2/pro_dropdown_2.css" />

<script src="pro_dropdown_2/stuHover.js" type="text/javascript"></script>
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="logo"><img src="images/logo.gif" alt="" />
      <h1>Lectures, Lecture hall and Laboratory Scheduling System</h1>
    </div>
    <ul id="nav">
	<li class="top"><a href="loginhome.php" class="top_link"><span>Home</span></a></li>
	<li class="top"><a href="#" id="timetablen" class="top_link"><span class="down">Time table</span></a>
		<ul class="sub">
			<li><a href="Timetable.php?lls=timetable1">Level 1G</a></li>
			<li><a href="Timetable.php?lls=timetable2">Level 2G</a></li>
			<li><a href="Timetable.php?lls=timetable3">Level 3G</a></li>
		</ul>
	</li>
      
      <li class="top"><a href="AboutUs.php" class="top_link"><span>About Us</span></a></li>
	  <li class="top"><a href="ContactUs.php" class="top_link"><span>Contact Us</span></a></li>
	  <li class="top"><a href="Help.php" class="top_link"><span>Help</span></a></li>
    </ul>
  </div>
  <!-- /header -->
  <div id="content">
    <div>
      <div>
	  <br>
	
	  <script language="JavaScript">
var clockID = 0;
function UpdateClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
   var tDate = new Date();

   document.theClock.theTime.value = "" 
                                   + tDate.getHours() + ":" 
                                   + tDate.getMinutes() + ":" 
                                   + tDate.getSeconds();
   clockID = setTimeout("UpdateClock()", 1000);
}
function StartClock() {
   clockID = setTimeout("UpdateClock()", 500);
}
function KillClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
}
</script>
<body onLoad="StartClock()" onUnload="KillClock()">
 <?php
		if(isset($_GET['lls']))
		{
			$lls = $_GET['lls'];
			$delimiter = ",";
			$items = explode($delimiter, $lls);
			$level=$items[0];
			$time=$items[1];
			if($level=="timetable1")
				$l="Level 1G";
			elseif($level=="timetable2")
				$l="Level 2G";
			else
				$l="Level 3G";
			
		}
	?>
	<?php
	require_once 'code/databaseconnection.php';
	if(user_loggedin())
	{?>
	  <p>
	  <span class="button_01"><a href="newsea.php">Search Venue</a>
	  </span> 
	  <?php
	  } 
	  ?>
	  <span class="button_01"><a target="_new" href="print.php?lls=<?php echo $level;?>">Print</a>
	  </span></p>
<p align="right"><input type="text"  readonly="readonly" name="theDate" size="7" value="<?php date_default_timezone_set('Asia/Colombo'); echo date('m/d/Y'); ?>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<table width="106" align="right" background="images/clock.jpg">
          <tr>
		 
		  <td height="100" align="center"><form name="theClock">
   <input type=text  name="theTime" readonly="readonly" align="center" size=5 style="text-align: center "   >
</form></td></tr></table>

	<?php
	$result=mysql_query("SELECT * FROM history");
			$last= mysql_num_rows($result);
			$result1=mysql_query("SELECT * FROM history WHERE id='$last'");
			$row=mysql_fetch_array($result1);
			$id=$row['Id'];
			$name=$row['Username'];
			$tim=$row['Time'];
			$des=$row['Description'];
			$date=$row['Date'];
	?>
	<h2 align="center"><font color="#0099FF" size="+4">Timetable&nbsp;(<?php echo $l;?>)</font></h2>
	<div id="imagetable1">	
	<?php
		echo '<table align="center">';
		echo '<tr>';
        echo '<th width="48" height="50"><div align="center"><font color="#FFFFFF">Time</font></div></th>';
        echo '<th><div align="center"><font color="#FFFFFF">Monday</font></div></th>';
        echo '<th><div align="center"><font color="#FFFFFF">Tuesday</font></div></th>';
        echo '<th><div align="center"><font color="#FFFFFF">Wednesday</font></div></th>';
        echo '<th><div align="center"><font color="#FFFFFF">Thursday</font></div></th>';
        echo '<th><div align="center"><font color="#FFFFFF">Friday</font></div></th>';
        echo '</tr>';
		for($i=1;$i<=8;$i++)
		{
			echo '<tr>';
			echo '<th width="5"><div align="center"><font color="#FFFFFF">'.$i.'</font></div></th>';
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
					
					if(!isset($_SESSION['SESS_ADMIN_NAME']))
					{
						if($s=="")
						$s='<td><div align="left">'.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No']."<br>";
						else
						$s=$s.$row['Session_Code']."&nbsp;&nbsp;".$row['Venue_No']."<br>";
					
					}
					else
					{
						$check=$row['Session_Code'];
						$result1=mysql_query("SELECT * FROM session WHERE Session_Code='$check'");
						$row1=mysql_fetch_array($result1);
						echo isset($row1['Session_Code']);
						if(isset($row1['Session_Code'])==1)
						{
							if($s=="")
							$s='<td><div align="left"><a href="map.php?lls='.$row['Session_Code'].",".$level.'">'.$row['Session_Code'].'</a>&nbsp;&nbsp;<a href="map.php?lls='.$row['Venue_No'].'">'.$row['Venue_No'].'</a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/edit1.gif" width="15" height="15" align="right" alt="" /></a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"><img name="" src="images/delete.gif" width="10" height="10" align="right" alt="" /></a>'."<br>";
							else
							$s=$s.'<a href="map.php?lls='.$row['Session_Code'].",".$level.'">'.$row['Session_Code'].'</a>&nbsp;&nbsp;<a href="map.php?lls='.$row['Venue_No'].'">'.$row['Venue_No'].'</a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/edit1.gif" width="15" height="15" align="right" alt="" /></a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"><img name="" src="images/delete.gif" width="10" height="10" align="right" alt="" /></a>'."<br>";
						}
						else
						{
							if($s=="")
							$s='<td><div align="left">'.$row['Session_Code'].'&nbsp;&nbsp;<a href="map.php?lls='.$row['Venue_No'].'">'.$row['Venue_No'].'</a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/edit1.gif" width="15" height="15" align="right" alt="" /></a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"><img name="" src="images/delete.gif" width="10" height="10" align="right" alt="" /></a>'."<br>";
							else
							$s=$s.$row['Session_Code'].'&nbsp;&nbsp;<a href="map.php?lls='.$row['Venue_No'].'">'.$row['Venue_No'].'</a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/edit1.gif" width="15" height="15" align="right" alt="" /></a>'.
							'<a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].","."de".'"><img name="" src="images/delete.gif" width="10" height="10" align="right" alt="" /></a>'."<br>";
						}
					}
				}
				if(!user_loggedin())
					echo $s.'</td>';
				else
					echo $s.'</div><a href="newlec.php?lls='.$level.",".$a[$j].",".$i.",".$row['Session_Code'].",".$row['Venue_No'].'"><img name="" src="images/insert.gif" width="10" height="8" align="right" alt="" /></a></td>';
			}
		}
	?>
	</table>
	</div>
	<br>
	<marquee direction="left" onmousemove="this.stop();" onmouseout="this.start();" 
	style="marquee-speed:slow"><font size="+2" color="#9933FF">
	last update on&nbsp;<?php echo $date,"&nbsp;&nbsp;",$tim,"&nbsp;by&nbsp;",$name,"&nbsp;",$des;?></font>
	</marquee>	
<p>&nbsp;</p>
      </div>
    </div>
  </div>
  <!-- /content -->
  <div id="footer">
    <div class="ft">
      
      <p id="copyright">Copyright 2011 � Group-05,Faculty of Science, University of Jaffna</p>
	  <marquee direction="left" onmousemove="this.stop();" onmouseout="this.start();" 
	   style="marquee-speed:slow"><font size="+1" color="#0099FF" face="Lucida Calligraphy">Lectures, Lecture hall and Laboratory 
	   Scheduling System.... Designed by:Mr.Ratnakumar Jarachanthan, Miss.Logini Kandasamy, Miss.Nithiya 
	   Sivarajah, Group:05, 35th Batch, Department of ComputerScience, University of Jaffna
</font>
</marquee>
    </div>
  </div>
  <!-- /footer -->
</div>
</body>
</html>
