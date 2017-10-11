<?php
include("../../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
   $utype1=$_SESSION['usertype3'];
 $utype2=$_SESSION['usertype1'];
 $utype3=$_SESSION['usertype2'];
       if((!isset($_SESSION['Loged_User']))||(($_SESSION['res']!="padmin")&& (!in_array("padmin",$_SESSION['position1']))))
        {
          header('location:../../UMS/UMSlogin.php');
		  //echo $_SESSION['position1'];
        }
		else{

    	?>
					<html>
						<head>
							<link rel="stylesheet" type="text/css" href="main.css">
							<link rel="stylesheet" href="w3style.css">
							<link rel="stylesheet" type="text/css" href="SportGames.css">
						</head>
						<title>Home</title>
						<body>
							<div class="wap">
								<div class="logo">
									<img src="photos/Untitled.png">

								</div>
								<div class="clear"></div>
								<div class="menu">
									<ul>
										<li>
											<?php
											
											echo'<a class="brand" href="../../UMS/index_multi.php">UMS</a>';
											
											?>
										</li>
										<li><a href="../../UMS/admin/New_Profiles.php">Profiles</a></li>
										<li class="navigation_first_item"><a href="Home1.php">Home</a></li>
										<li><a href="SportGames.php">Games</a></li>
										<li><a href="Events.php">Event</a></li>
										<li><a href="Awards.php">Awards</a></li>
										 <li><a href="Calender.php">Calendar</a></li>
										
									</ul>
									<ul class=logoutlink>
										<li><?php echo '<img height="28px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?><a href="logout.php"><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></a></li>
									</ul>
								</div>
								<div class="contain">
										<div class="footer">
									<h3>You are in home page</h3>
								</div>
									<div class="data">
										<div class="w3-content w3-section" style="max-width:1500px">

					  <img class="mySlides w3-animate-fading" src="photos\a.jpg"  width="100%" height="95%">
					  <img class="mySlides w3-animate-fading" src="photos\d.jpg" width="100%" height="95%">
					  <img class="mySlides w3-animate-fading" src="photos\e.jpg" width="100%" height="95%">
					  
					</div>
					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
					    var i;
					    var x = document.getElementsByClassName("mySlides");
					    for (i = 0; i < x.length; i++) {
					       x[i].style.display = "none";  
					    }
					    myIndex++;
					    if (myIndex > x.length) {myIndex = 1}    
					    x[myIndex-1].style.display = "block";  
					    setTimeout(carousel, 7500);    
					}
					</script>	
									

										
									</div>
									
								</div>
								<div class="footer">
									<h3>University of Jaffna</h3>
								</div>
							</div>
						</body>
					</html>
					<?php
	}

	
?>