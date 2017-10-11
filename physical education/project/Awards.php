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
		else
{
        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        
        <link rel="stylesheet" type="text/css" href="SportGames.css">
    </head>
    <title>Awards</title>
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
                        <h3>You are in awards page</h3>
                    </div>
                <div class="data">
                    <div class="table">
                        
                        <form action="aplication_form_awrd.php" method="POST">
                        <center>
                            <button class="desibutton" id="Add" name="Add" type="submit" value="Add">Click To Add Student Details</button><br><br><br>
                        </center>
                        </form>



                        <form action="search_awrd.php" method="POST">
                        <center>
                            <button class="desibutton" id="Search" name="Search" type="submit" value="Search">Click To Search Student Details</button><br><br><br>
                            
                        </center>
                        </form>

                        <form action="edit_award2.php" method="POST">
                        <center>
                            <button class="desibutton" id="Edit" name="Edit" type="submit" value="Edit">Click to Edit Student Details</button><br><br><br>
                            
                        </center>
                        </form>
                </div>
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
