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

                    <link rel="stylesheet" type="text/css" href="SportGames.css">
                </head>
                <title>SportGames</title>
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
                                <li><?php echo '<img height="26px" width="25px" src="data:image;base64,'.$_SESSION['image'].'" id="pro_pic"/></td>'; ?><a href="logout.php"><?php echo "$utype3." ;echo " $utype1" ;echo " $utype2"; ?></a></li>
                            </ul>
                        </div>
                        <div class="contain">
                            <div class="footer">
                                    <h3>You are in games page</h3>
                                </div>
                            <div class="data">
                                
                                <div class="table" >
                                    <table>
                                        <tr>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="badminton"name="sp" VALUE="badminton">
                                                <img src="photos/Badminton.ico" height="55"/>
                                                 <figcaption>badminton</figcaption>
                                                </button>
                                                </form >
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="basketball"name="sp" VALUE="basketball">
                                                <img src="photos/Basketball.png" height="55"/>
                                                <figcaption>basketball</figcaption>
                                                </button>
                                                </form >
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="baseball"name="sp" VALUE="baseball">
                                                <img src="photos/Baseball.ico" height="55"/>
                                                <figcaption>baseball</figcaption>
                                                </button>
                                                </form >
                                            </td>
                                            <td>
                                                 <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="carrom"name="sp" VALUE="carrom">
                                                <img src="photos/carrom.jpg" height="55"  />
                                                <figcaption>carrom</figcaption>
                                                </button>
                                                </form >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="chess"name="sp" VALUE="chess">
                                                <img src="photos/chess.jpg" height="55"/>
                                                <figcaption>chess</figcaption>
                                                </button>
                                                </form>
                                           </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="cricket"name="sp" VALUE="cricket">
                                                <img src="photos/Cricket.ico" height="55"  />
                                                <figcaption>cricket</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="elle"name="sp" VALUE="elle">
                                                <img src="photos/elle.jpg" height="55" width="85px"  />
                                                <figcaption>elle</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="football"name="sp" VALUE="football">
                                                <img src="photos/football.png" height="55"  />
                                                <figcaption>football</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="gymnastic"name="sp" VALUE="gymnastic">
                                                <img src="photos/Gymnastics.png" height="55"  />
                                                <figcaption>gymnastic</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="hockey"name="sp" VALUE="hockey">
                                                <img src="photos/hockey.png" height="55"  />
                                                <figcaption>hockey</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                 <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="karate"name="sp" VALUE="karate">
                                                <img src="photos/karate.jpg" height="55" />
                                                <figcaption>karate</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="netball"name="sp" VALUE="netball">
                                                <img src="photos/netball.jpg" height="55" width="85px" />
                                                <figcaption>netball</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="rawing"name="sp" VALUE="rawing">
                                                <img src="photos/rowing.png" height="55" width="60px"/>
                                                <figcaption>rawing</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="rugby"name="sp" VALUE="rugby">
                                                <img src="photos/rugby.png" height="55"  />
                                                <figcaption>rugby</figcaption>
                                                </button>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="swimming"name="sp" VALUE="swimming">
                                                <img src="photos/swimming.jpg" height="55"  />
                                                <figcaption>swimming</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="table_tennis"name="sp" VALUE="table_tennis">
                                                <img src="photos/table_tenis.png" height="55"  />
                                                <figcaption>table tennis</figcaption>
                                                </button>
                                                </form>

                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="taekwondo"name="sp" VALUE="taekwondo">
                                                <img src="photos/taekwondo.png" height="55"  />
                                                <figcaption>taekwondo</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="tennis"name="sp" VALUE="tennis">
                                                <img src="photos/tennis.jpg" height="55" width="85px"  />
                                                <figcaption>tennis</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="thachchi"name="sp" VALUE="thachchi">
                                                <img src="photos/thachchi.jpg" height="55"  />
                                                <figcaption>thachchi</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="volleyball"name="sp" VALUE="volleyball">
                                                <img src="photos/Volleyball.png" height="55"  />
                                                <figcaption>volleyball</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="wrestling"name="sp" VALUE="wrestling">
                                                <img src="photos/wrestling.jpg" height="55"  />
                                                <figcaption>wrestling</figcaption>
                                                </button>
                                                </form>

                                            </td>
                                            <td>
                                                <form action="decision.php" method="POST">
                                                <button type="submit" class="button" ID="weightlifting"name="sp" VALUE="weightlifting">
                                                <img src="photos/weightlifting.jpg" height="55" width="85px"  />
                                                <figcaption>weightlifting</figcaption>
                                                </button>
                                                </form>
                                            </td>
                                            
                                        </tr>
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