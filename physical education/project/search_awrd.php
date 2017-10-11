<?php
include("../../Hostel/HMS/lib/session.php");
 // if the session not yet started 
  //session_start();
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
        <link rel="stylesheet" type="text/css" href="aplication.css">
        <link rel="stylesheet" type="text/css" href="award.css">
        
    </head>
    <title>Search_Award_Details</title>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="contain">
                <div class="footer">
                        <h3>You are in search award page</h3>
                    </div>
                <div class="data">
                    <center>
                    <form class="table1" action="award_seach_reg.php" method="POST" id="Search">
                     To Search By Registration No<br>
                        <input type="text" name ="reg_no" placeholder="Enter Registration No Eg:-2014SP(enter number with 3 digits)" required pattern="^[A-Z0-9]+$"><br>
                        

                        <button type="submit" class="button12" value="Search" id="Search">
                         <img src="photos/search_1.png" height="45"   />
                        </button>
                        <button type="reset" class="button12">
                        <img src="photos/refresh.png" height="45"   />
                        <figcaption>Refresh</figcaption>
                        </button>
                        <br>
                            </form>

                            <form class="table1" action="award_seach_year.php" method="POST" id="Search">
                      Search By Year<br>
                        <input type="text" name ="reg_no" placeholder=" Eg:- 2014" required pattern="^[0-9]+$"><br>
                        

                        <button type="submit" class="button12" value="Search" id="Search">
                         <img src="photos/search_1.png" height="45"   />
                        </button>
                        <button type="reset" class="button12">
                        <img src="photos/refresh.png" height="45"   />
                        <figcaption>Refresh</figcaption>
                        </button>
                      
                            </form>


                            <form class="table1" action="award_seach_colour.php" method="POST" id="Search">
                     To Search By Colour<br>
                        <select name="colour">
                            <option value="Full">Full</option>
                            <option value="Half">Half</option>
                            <option value="-">No Colour</option>
                            
                        </select><br>
                        

                        <button type="submit" class="button12" value="Search" id="Search">
                         <img src="photos/search_1.png" height="45"   />
                        </button>
                        
                        
                            </form>
                            <form class="table1" action="award_seach_medal.php" method="POST" id="Search">
                     To Search By Medal<br>
                        <select name="medal">
                                    <option value="Gold">Gold</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Bronze">Bronze</option>
                                    <option value="-">Participation</option>
                
                            
                        </select><br>
                        

                        <button type="submit" class="button12" value="Search" id="Search">
                         <img src="photos/search_1.png" height="45"   />
                        </button>
                        
                        
                            </form>


                        </center>

                    
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