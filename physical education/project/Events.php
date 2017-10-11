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
    <title>Events</title>
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
                        <h3>You are in event page</h3>
                    </div>
                <div class="data">
                    <div class="table">
                        <table>
                            <tr>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="100m"name="sp" VALUE="100m">
                                    <img src="photos/100m.jpg" height="55" width="85px"  />
                                    <figcaption>100m</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="200m"name="sp" VALUE="200m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>200m</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="400m"name="sp" VALUE="400m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>400m</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="800m"name="sp" VALUE="800m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>800m</figcaption>
                                    </button>
                                    </form>
                                </td>
                            </tr>

                            

                            <tr>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="1500m"name="sp" VALUE="1500m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>1500m</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="3000m"name="sp" VALUE="3000m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>3000m</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="5000m"name="sp" VALUE="5000m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>5000m</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="10000m"name="sp" VALUE="10000m">
                                    <img src="photos/200m.jpg" height="55"  />
                                    <figcaption>10000m</figcaption>
                                    </button>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="110m_hurdles"name="sp" VALUE="110m_hurdles">
                                    <img src="photos/hurdle.jpg" height="55"  />
                                    <figcaption>110m_hurdles</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="400m_hurdle"name="sp" VALUE="400m_hurdle">
                                    <img src="photos/hurdle.jpg" height="55"  />
                                    <figcaption>400m_hurdle</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="4X400_relay"name="sp" VALUE="4X400_relay">
                                    <img src="photos/relay.jpg" height="55"  />
                                    <figcaption>4X400_relay</figcaption>
                                    </button>
                                    </form>

                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="high_jump"name="sp" VALUE="high_jump">
                                    <img src="photos/hight_jump.jpg" height="55"  />
                                    <figcaption>high_jump</figcaption>
                                    </button>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                   <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="long_jump"name="sp" VALUE="long_jump">
                                    <img src="photos/jump.jpg" height="55"  />
                                    <figcaption>long_jump</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="triple_jump"name="sp" VALUE="triple_jump">
                                    <img src="photos/jump.jpg" height="55"  />
                                    <figcaption>triple_jump</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="discus_throw"name="sp" VALUE="discus_throw">
                                    <img src="photos/discus_throw.jpg" height="55"  />
                                    <figcaption>discus_throw</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="javelin_throw"name="sp" VALUE="javelin_throw">
                                    <img src="photos/javelin_throw.jpg" height="55"  />
                                    <figcaption>javelin_throw</figcaption>
                                    </button>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="shotput"name="sp" VALUE="shotput">
                                    <img src="photos/shotput.jpg" height="55"  />
                                    <figcaption>shotput</figcaption>
                                    </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decision.php" method="POST">
                                    <button type="submit"class="button" ID="tug_of_war"name="sp" VALUE="tug_of_war">
                                    <img src="photos/thu_of_war.jpg" height="55"  />
                                    <figcaption>tug_of_war</figcaption>
                                    </button>
                                    </form>
                                
                            
                        </table>
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