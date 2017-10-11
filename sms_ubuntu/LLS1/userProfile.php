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
  <div id="content">
    <div id="inner">
      <div class="left float-l">
      
<br><br>
		<p><?php
        if (isset($_GET['lls'])) {
            $lls = $_GET['lls'];
            echo '<span style="color: yellow">'.$lls.'</span>';
        }
        ?>
      </p>
		<?php
		include_once 'code/databaseconnection.php';
		session_start();
		$a=$_SESSION['username'];
		$b=md5($_SESSION['password']);
		$result=mysql_query("SELECT * FROM user_administrator WHERE Username='$a' AND Password='$b'");
		while($row=mysql_fetch_array($result))
		{
			$name=$row['Fullname'];
			$entity=$row['Entity'];
			$mail=$row['mail_id'];
			$uname=$row['Username'];
		}
	   ?>
	   <h2>User Profile</h2>
        <form id="form2" name="form2" method="post" action="code/create.php">
        <table width="265" border="0">
          <tr>
            <td width="108" height="43">Fullname</td>
            <td width="147">
              <input type="text" name="name" required="required" value="<?php echo $name; ?>" id="textfield2" /></td>
          </tr>
          <tr>
            <td height="45"> Entity</td>
            <td><input type="text" name="entity" required="required" value="<?php echo $entity;?>" id="textfield4" /></td>
          </tr>
          <tr>
            <td height="46">Mail id</td>
            <td><input type="email" name="mail"  required="required" value="<?php echo $mail;?>" id="textfield5" /></td>
          </tr>
          <tr>
            <td height="31">Username</td>
            <td height="31"><input type="text" required="required" name="username"  value="<?php echo $uname;?>" id="textfield6" /></td>
          </tr>
          <tr>
            <td height="31" colspan="2"><div align="center">
              <input type="submit" name="Update" id="button2" value="Update" />
            </div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<p>&nbsp;</p>
        <div id="homepage_slider">
                <div id="slider">
                    
                   <a href="#"><img  src="images/slideshow/pro.jpg" alt="pro" width="400" height="275" /></a>
                     <a href="#"><img  src="images/slideshow/lab/lab2.jpg" alt="lab2" width="400" height="275" /></a>
                     <a href="#"><img  src="images/slideshow/lab/lab17.jpg" alt="lab17" width="400" height="275" /></a>
                     <a href="#"><img  src="images/slideshow/lab/lab9.jpg" alt="lab9" width="400" height="275" /></a>
                    <a href="#"><img  src="images/slideshow/log/log.jpg" alt="log" width="400" height="275" /></a>
                  <a href="#"><img  src="images/slideshow/lab/lab26.jpg" alt="lab26" width="400" height="275" /></a>
                  <a href="#"><img  src="images/slideshow/lab/lab12.jpg" alt="lab12" width="400" height="275" /></a>
                  
                  
                </div>
			</div>
        </form>
        <p>&nbsp;</p>
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
            
          </div>
        </div>
      </div>
    </div>
  </div>
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
