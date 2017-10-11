<?php
include_once 'code/check.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Session</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
 <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
 <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

 
 
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
      
	  <?php session_start(); echo $_SESSION['username'];?></span>
	  </a></li>
    </ul>
  </div>
  <!-- /header -->
  <div id="content">
    <div id="inner">
      <div class="left float-l">
       
        <h2>Session Details</h2>
        <table width="280" border="0">
		<form id="form1" name="form1" method="post" action="code/session.php">
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
		  <?php
		  if(isset($_GET['lls']))
		{
			$lls1 = $_GET['lls'];
			$delimiter = ",";
			$items = explode($delimiter, $lls1);
			$lls=$items[0];
			$state=$items[1];
		}
		include_once 'code/config.php';
		require_once 'code/databaseconnection.php';
		$result=mysql_query("SELECT * FROM session where Session_Code='$lls'");
		while($row=mysql_fetch_array($result))
		{
			$name=$row['Session_Name'];
			$level=$row['Level'];
			$count=$row['Head_Count'];
		}
		?>
            <td height="35" colspan="2">Session Code</td>
            <td colspan="2">
              <label for="textfield"></label>
              <label for="textfield2"></label>
              <input type="text" required="required" placeholder="Type here"  name="code" value="<?php echo $lls; ?>" id="textfield2" />
            </td>
          </tr>
          <tr>
            <td height="36" colspan="2">Session Name</td>
            <td colspan="2"><label for="textfield3"></label>
            <input type="text" placeholder="Type name" name="name" <?php if($state=="de") echo 'disabled="disabled"'; ?>
			value="<?php echo $name; ?>"
			id="textfield3" /></td>
          </tr>
          <tr>
            <td height="40" colspan="2">Level</td>
            <td colspan="2">
             <select name="year" id="day" <?php if($state=="de") echo 'disabled="disabled"'; ?>>
			 <?php if($state=="se") { echo "<option value='$level'>Level $level</option>"; } ?>
                <option value="1G">Level 1G</option>
                <option value="2G">Level 2G</option>
				<option value="3G">Level 3G</option>
                </select>
            </td>
          </tr>
          <tr>
            <td height="43" colspan="2">Head count</td>
            <td colspan="2"><label for="textfield5"></label>
            <input type="number" size ="5" name="count" placeholder="Type number" <?php if($state=="de") echo 'disabled="disabled"'; ?> value="<?php echo $count; ?>"id="textfield5" /></td>
          </tr>
          <tr>
            <td width="76" height="56">
              <div align="left">
			  <?php if($state=="") { ?>
                <input type="submit" name="search" id="button" value="Search" />
              </div>
              </td>
            <td width="55"><div align="right">
              <input type="submit" name="insert" id="button2" value="Insert" />
            </div></td>
		<?php } if(($state=="up") or ($state=="se") ){ ?>
            <td width="69" height="56"><div align="right">
              <input type="submit" name="update" id="button3" value="Update" />
            </div></td><?php } if(($state=="de") or ($state=="se") ) { ?>
            <td width="62">    <div align="right">
              <input type="submit" name="delete" id="button4" value="Delete" />
            </div></td><?php } ?>
          </tr>
		  </form>
        </table>
        <p>&nbsp;</p>
        <p><img name="" src="images/slideshow/lec/lec1.JPG" width="408" height="285" alt="" /></p>
        
      </div>
      <div class="right folat-r">
        <div id="side">
          <div id="top">
            <h2>Categories</h2>
            <div id="menu1" dir="ltr" class="menu" onmouseover="show('menu1');" onmouseout="hide('menu1');">
            <div class="menuHead"> <span class="button_01"><a href="#">Lectures</a></span></div>
			<div id="menu1choices" class="menuChoices">
              <p><span class="button_02"><a href="SessionDetails.php">Session</a></span>
                <span class="button_02"><a href="FacilitatorsDetails.php">Facilitator</a></span>
                <span class="button_02"><a href="SessionTable.php">ViewSession</a></span>
                <span class="button_02"><a href="FacilitatorsTable.php">ViewFacilitator</a></span></p>
              <p>&nbsp;</p>
			</div>
			</div>
            </br>
			<div id="menu2" dir="ltr" class="menu" onmouseover="show('menu2');" onmouseout="hide('menu2');">
            <div class="menuHead"><span class="button_01"><a href="#">Lecture hall</a></span></div>
			<div id="menu2choices" class="menuChoices">
			  <p><span class="button_02"><a href="LectureHallView.php">View</a></span>
			    <span class="button_02"><a href="LectureHallMore.php">More</a></span></p>
			  <p>&nbsp;</p>
            </div>
			</div>
            </br>
			<div id="menu3" dir='ltr' class="menu" onmouseover="show('menu3');" onmouseout="hide('menu3');">
            <div class="menuHead"><span class="button_01"><a href="#">Laboratory</a></span></div>
			<div id="menu3choices" class="menuChoices">
			<span class="button_02"><a href="LaboratoryView.php">View</a></span>
			<span class="button_02"><a href="LaboratoryMore.php">More</a></span>
			
			</div>
			</div>
			
          </div>
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
          <div id="bm">
            <?php
	$result=mysql_query("SELECT * FROM history");
	$name = array();
	while($row=mysql_fetch_array($result))
	{	
		$id[]=$row['Id'];
		$name[]=$row['Username'];
		$tim[]=$row['Time'];
		$des[]=$row['Description'];
	}
	?>
          
            <h2>History</h2>
           <marquee direction="up" onmousemove="this.stop();" onmouseout="this.start();" style="marquee-speed:slow">
	<font size="+1">last update on&nbsp;
	<?php 
	for($i=sizeof($id)-3;$i<sizeof($id);$i++)
	{
		echo $id[$i],"&nbsp;",$name[$i],"&nbsp;",$tim[$i],"&nbsp;",$des[$i];
		echo "<br>------------------------------<br>";
	}
	?>
	</font>
	</marquee>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
  <div id="footer">
    <div class="ft">
     
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
