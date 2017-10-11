<?php
include_once 'code/check.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Profile</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
 <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

 
 <script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:600,
		pauseTime:2400,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.7, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<script type="text/javascript">
(document.getElementById ? DOMCapable = true : DOMCapable = false);
function hide(menuName)
{
if (DOMCapable)
{
var theMenu = document.getElementById(menuName+"choices");
theMenu.style.visibility = 'hidden';
}
}
function show(menuName)
{
if (DOMCapable)
{
var theMenu = document.getElementById(menuName+"choices");
theMenu.style.visibility = 'visible';
}
}
</script>
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
		<li class="top"><a href="#" id="timetable" class="top_link"><span class="down">Time table</span></a>
		<ul class="sub">
			<li><a href="Timetable.php?lls=timetable1">Level 1G</a></li>
			<li><a href="Timetable.php?lls=timetable2">Level 2G</a></li>
			<li><a href="Timetable.php?lls=timetable3">Level 3G</a></li>
		</ul>
	</li>
	<li class="top"><a href="#" id="profile" class="top_link"><span class="down"><?php session_start(); echo $_SESSION['username'];?>'s  Profile</span></a>
	  <ul class="sub">
			<li><a href="create account.php">Create account</a></li>
			<li><a href="Userprofile.php">Profile</a></li>
			<li><a href="Changepassword.php">Change Password</a></li>
		</ul>
	</li>
      <li class="top"><a href="code/logout.php" class="top_link"><span>Logout&nbsp;:
     
	  <?php session_start(); echo $_SESSION['username'];?>
	  </span></a></li>
    </ul>
  </div>
  <!-- /header -->
  
  <div id="content"></a>
    
     
      
      
        
          
		 
		  
		  <script type="text/javascript">
<!--
/* Don't hide menus for JS off and older browsers */
if (DOMCapable)
{
hide("menu1");
hide("menu2");
hide("menu3");
}
//-->
</script>

         
            
          
    
     <p>&nbsp;</p>
    <p>&nbsp; </p>
	
	<h2 align="center"><font color="#0099FF" size="+4">Floor Plan &nbsp;</font></h2>
	 <p>&nbsp;</p>
    <p>&nbsp; </p>
  &nbsp;<img src="images/map/m.PNG" alt="" name="" height="282" align="center" />
  <p>&nbsp;</p>
           <div id="imagetable1">
		  <?php
		   if (isset($_GET['lls'])) {
            $lls = $_GET['lls'];
        }
		include_once 'code/config.php';
		require_once 'code/databaseconnection.php';
		$result=mysql_query("SELECT * FROM venue WHERE Venue_No='$lls'");
		echo "<table border='1'>
		<tr>
		<th>Lecturehall no</th>
		<th>Venue Type</th>
		<th>Head count</th>
		<th>No of projectors</th>
		<th>Water facility</th>
		</tr>";
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td><div contenteditable>" . $row['Venue_No'] . "</td>";
			echo "<td><div contenteditable>" . $row['Venue_Type'] . "</td>";
			echo "<td><div contenteditable>" . $row['Head_Count'] . "</td>";
			echo "<td><div contenteditable>" . $row['Projector'] . "</td>";
			echo "<td><div contenteditable>" . $row['Water_Facility'] . "</td>";
			echo "</tr>"; 
		}
		echo "</table>";
		?>
</div></div>
  <!-- /content -->
  <div id="footer">
    <div class="ft">
      <div id="ftlink">  </div>
      <p id="copyright">Copyright 2011 © Group-05,Faculty of Science, University of Jaffna</p>
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
