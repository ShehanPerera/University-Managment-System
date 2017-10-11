<?php
include_once 'code/check.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>create account</title>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
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
      <li class="top"><a href="code/logout.php" class="top_link"><span>Logout &nbsp;:

	   <?php session_start(); echo $_SESSION['username'];?>
	  </span></a></li>
    </ul>
  </div>
  <!-- /header -->
  <div id="content">
    <div id="inner">
      <div class="left float-l">
      
        <p><?php
        if (isset($_GET['lls'])) {
            $lls = $_GET['lls'];
            echo '<span style="color: yellow">'.$lls.'</span>';
        }
        ?>
      </p>
		<h2>Create Account</h2>
		
		<form method="post" action="code/create.php">
		  <table width="319" border="0">
		    <tr>
		      <td width="144" height="38">Id</td>
		      <td width="165"><label for="textfield"></label>
		        <input type="text" required="required" name="id" id="textfield" /></td>
		      </tr>
		    <tr>
		      <td height="33">Full name</td>
		      <td><p>
		        <input type="text" required="required" name="name" id="textfield2" />
		        </p></td>
		      </tr>
		    <tr>
		      <td height="32">Entity</td>
		      <td height="32"><input type="text" required="required" name="entity" id="textfield4" /></td>
		      </tr>
		    <tr>
		      <td height="32">Mail id</td>
		      <td height="32"><label for="textfield3"></label>
		        <input type="email" name="mail" required="required" id="textfield3" /></td>
		      </tr>
		    <tr>
		      <td width="144" height="35">Username</td>
		      <td width="165"><label for="textfield"></label>
		        <input type="text" name="username" required="required" id="textfield" /></td>
		      </tr>
		    <tr>
		      <td width="144" height="33">Password</td>
		      <td width="165"><label for="textfield"></label>
		        <input type="password" name="password" pattern="^(?=.*\d{6})(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="password must contain uppercase ,lowercase and digit and length atleast 8 characters" required="required" id="textfield" /></td>
		      </tr>
		    <tr>
		      <td height="44">Retype password</td>
		      <td><input type="password" name="pass" required="required" id="textfield5" /></td>
		      </tr>
			  <tr>
		      <td width="144" height="35">Created by</td>
		      <td><input type="text" name="create" disabled="disabled" id="textfield" value="<?php session_start(); echo $_SESSION['username'];?>" /></td>
		      </tr>
		    <tr>
		      <td></td>
		      </tr>
		    <tr>
		      <td height="44" colspan="2"><div align="center"><font>
		        <input type="submit" name="Create" id="button" value="Create" /><br>
		        </font> </div></td>
		      </tr>
		    </table>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p><img name="" src="images/slideshow/cre/cre.jpg" width="406" height="290" alt="" /></p>
        </form>
        
       </div>
      <div class="right folat-r">
        <div id="side">
          <div id="top">
           <h2>Categories</h2>
            <div id="menu1" dir='ltr' class="menu" onmouseover="show('menu1');" onmouseout="hide('menu1');">
            <div class="menuHead"> <span class="button_01"><a href="#">Lectures</a></span></div>
			<div id="menu1choices" class="menuChoices">
               <p><span class="button_02"><a href="SessionDetails.php">Session</a></span>
			<span class="button_02"><a href="FacilitatorsDetails.php">Facilitator</a></span>
			<span class="button_02"><a href="SessionTable.php">ViewSession</a></span>
			<span class="button_02"><a href="FacilitatorsTable.php">ViewFacilitator</a></span>               
               <p>&nbsp;	</p>		</div>
		</div>
            </br>
			<div id="menu2" dir='ltr' class="menu" onmouseover="show('menu2');" onmouseout="hide('menu2');">
            <div class="menuHead"><span class="button_01"><a href="#">Lecture hall</a></span></div>
			<div id="menu2choices" class="menuChoices">
			  <p><span class="button_02"><a href="LectureHallView.php">View</a></span>
			    <span class="button_02"><a href="LectureHallMore.php">More</a></span></p>
			  <p>&nbsp;</p>
            </div>
			</div>
            </br>
			<div id="menu3" dir="ltr" class="menu" onmouseover="show('menu3');" onmouseout="hide('menu3');">
            <div class="menuHead"><span class="button_01"><a href="#">Laboratory</a></span></div>
			<div id="menu3choices" class="menuChoices">
			<span class="button_02"><a href="LaboratoryView.php">View</a></span>
			<span class="button_02"><a href="LaboratoryMore.php">More</a></span></div>
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
	include_once 'code/databaseconnection.php';
	$result=mysql_query("SELECT * FROM history");
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
