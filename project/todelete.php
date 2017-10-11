<?php
include ('conn.php'); //connect the connection page

  include("../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
       if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="doctor")&& (!in_array("doctor",$_SESSION['position1']))))
        {
          header('location:../UMS/UMSlogin.php');
        }
?>
<!DOCTYPE html>
<html>
<title>
User Registration
</title>
<link href="css/admin.css" type="text/css" rel="stylesheet" />
<body>
	
		<div class="flex-container">
		<header>
		<img src="images/logo.jpg" align ="left" alt="healthcentre" width="150" height="150">
		<h1>Patient and Resource Management System </h1>
		<h2>Health Center University of Jaffna</h2>
		</header>
	<ul>
		<li><a class="active" href="doctor.php">Home</a></li>
		<li><a class="active" href="docpatientview.php">View Prescription Details</a></li>
		<li><a class="active" href="doctestview.php">View Test Details</a></li>
		<li><a class="active" href="test.php">Test Require</a></li>
		<li><a class="active" href="prescription.php">Prescription</a></li>
		<li style="float:right"><a href= "logout.php">Logout</a></li>
	
	</ul>

<body style="background-color:#bfe8f7;">
<img src="image/bg5.jpg" width="110" height="400">
</body>	 
<div id="footer">
      <div class="container">
        <p align="center" class="muted credit"><strong>&copy; 2017 Health Center University of Jaffna</strong></br> Group 8: CSC Project</p>
      </div>
    </div>

</body>
</html>
