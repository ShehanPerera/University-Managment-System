<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About us</title>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>


<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
<link rel="stylesheet" href="styles/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-prettyPhoto.js"></script>

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
      
      <li class="top"><a href="#" class="top_link"><span>About Us</span></a></li>
	  <li class="top"><a href="ContactUs.php" class="top_link"><span>Contact Us</span></a></li>
	  <li class="top"><a href="Help.php" class="top_link"><span>Help</span></a></li>
    </ul>
  </div>
  <!-- /header -->
  <div id="content">
    <div id="inner">
      <div class="left float-l">
        <div id="homepage_slider">
          <div id="slider"></div>
                 <div id="gallery" class="clear">
      <div class="gallerycontainer clear">
        <div class="fl_left">
		
          <h2>About Us</h2>
          <p>&nbsp;</p>
          <ul>
            <li><a href="http://www.youtube.com/watch?v=DVxVlsMvCYI&feature=youtu.be" rel="prettyPhoto[gallery1]" title="Video 1"><img src="images/demo/video.jpg" alt="" /></a></li>
            <li class="last"></li>
          </ul>
		  
        </div>
      </div>
      <!-- ########### -->
      
      </div>
        </div>
      </div>
      <div class="right folat-r">
        <div id="side">
          <div id="top">
            <h2><center>
              <p>History</p>
            </center>
    </h2>
         
          <marquee direction="up" onMouseMove="this.stop();" onMouseOut="this.start();" style="marquee-speed:slow"><font size="+1">Mr.K.Sarveswaran has schedulled an additional lectures.<hr />Dr.Charles cancelled lectures of Level 3M 
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
