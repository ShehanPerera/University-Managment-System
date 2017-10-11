<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
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
	<li class="top"><a href="#" class="top_link"><span>Home</span></a></li>
		<li class="top"><a href="#" id="timetablen" class="top_link"><span class="down">Time table</span></a>
		<ul class="sub">
		<form method="post" action="Timetable.php">
			<li><a href="Timetable.php?lls=timetable1" >Level 1G</a></li>
			<li><a href="Timetable.php?lls=timetable2">Level 2G</a></li>
			<li><a href="Timetable.php?lls=timetable3">Level 3G</a></li>
		</form>
		</ul>
	</li>
      
      <li class="top"><a href="AboutUs.php" class="top_link"><span>About Us</span></a></li>
	  <li class="top"><a href="ContactUs.php" class="top_link"><span>Contact Us</span></a></li>
	  <li class="top"><a href="Help.php" class="top_link"><span>Help</span></a></li>
    </ul>
  </div>
  <!-- /header -->
  <div id="content">
    <div id="inner">
      <div class="left float-l">
       
        <h2>Welcome to LLS</h2>
        <div id="homepage_slider">
                <div id="slider">
                    <a href="#"><img  src="images/slideshow/log/welcome.jpg" height="300" /></a>
                     <a href="#"><img  src="images/slideshow/log/login.jpg" alt="log" width="400" height="300" /></a>
                      <a href="#"><img  src="images/slideshow/lab/lab3.jpg" alt="lab3" width="400" height="300" /></a>
                  
              <a href="#"><img  src="images/slideshow/lab/lab8.jpg" alt="lab8" width="400" height="300" /></a>
              <a href="#"><img  src="images/slideshow/lec/lec.jpg" alt="lec" width="400" height="300" /></a>
              <a href="#"><img  src="images/slideshow/lab/lab1.jpg" alt="lab1" width="400" height="300" /></a>
              <a href="#"><img  src="images/slideshow/lec/lec7.jpg" alt="lec7" width="400" height="300" /></a>
             
              <a href="#"><img  src="images/slideshow/lec/lec2.JPG" alt="lec2" width="400" height="300" /></a>
             
                  
                  
                </div>
			</div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><font size="+1">Our project aim is to develop a system to maintain Lectures, Lecture        
 hall and Laboratory scheduling System suitable for a University. It is a     
 computerized version than the manual system. In this part explain the method of the project 
 how we are going to accure the data and method   of   preparing the management system for 
 this research collecting data   from   faculty of science.</font> </p>
      </div>
      <div class="right folat-r">
        <div id="side">
          <div id="top">
            <h2><center>Login</center></h2>
		<form method="post" action="code/validateuser.php">
				<p><?php
        if (isset($_GET['err'])) {
            $err = $_GET['err'];
            echo '<span style="color: yellow">'.$err.'</span>';
        }
        ?>
      </p>
		<table width="214" border="0"> 
              <tr>
                <td width="65" height="45">Username</td>
                <td width="133">
                  <label for="textfield"></label>
                  <input type="text" name="username" id="textfield" />
                  </td>
              </tr>
              <tr>
                <td height="41">Password</td>
                <td>
                  <input type="password" title="password must contain uppercase ,lowercase and digit and length atleast 8 characters" name="password" id="textfield2" />
                </td>
              </tr>
              </font>
			  
              <tr>
              <td></td>
                <td height="39" colspan="2"><p>
                  <input type="submit" name="button" id="button" value="Login" />
                </p></td>
              </tr>
                           
            <tr>
              <td></td>
                <td height="19" colspan="2">&nbsp;&nbsp;&nbsp;</td>
                <td height="19" colspan="2">&nbsp;&nbsp;</td>
        </tr>
                           
            <tr>
                <td height="19" colspan="2">&nbsp;</td>
  </tr>
              </table>
              
           </form>
           
            <p>&nbsp;</p>
            <h2><center>
              <p>History</p>
            </center> </h2>
			
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
	<?php
	//}
	?>
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
