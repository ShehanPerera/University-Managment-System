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
        <link rel="stylesheet" type="text/css" href="seach.css">
        
    </head>
    <title>Search_Student_Details</title>
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
                        <h3>You are in search page</h3>
                    </div>
                <div class="data">
                    <?php
					if(!empty($_POST['variable']))
					{
						$id=$_POST['variable'];
					}
					else
					{
						$id=$_POST['cat'];;
					}
					?>
                    <center>
                    <form class="table1" action="student_search_reg.php" method="POST">
					 <?php echo'<input hidden type="text" name ="cat" id="cat" value="'.$id.'">';?>

                           To Search By Registration No <br>
                                <input type="text" name ="reg" placeholder="Enter Registration No Eg:-2014SP(enter number with 3 digits)" required pattern="^[A-Z0-9]+$"><br><br>
                                
                                <button type="submit" class="button12">
                                <img src="photos/search_1.png" height="50" />
                                    <figcaption>  </figcaption>
                                    </button>
                                
                                <button type="reset" class="button12">
                                <img src="photos/refresh.png" height="55"  />
                                    <figcaption>Refresh</figcaption>
                                </button>
                                
                    </form>
                    </center>
                        <center>
                            <form class="table1" action="student_search_name.php" method="POST">
							 <?php echo'<input hidden type="text" name ="cat" id="cat" value="'.$id.'">';
							 ?>

                                  To Search By Name   <br>
                                <input type="text" name ="name1"  placeholder="Enter Name        Eg:Saman kumara" required><br><br>
                                

                                <button type="submit" class="button12">
                                <img src="photos/search_1.png" height="50" />
                                    <figcaption> </figcaption>
                                </button>
                                </button>
                                <button type="reset" class="button12">
                                <img src="photos/refresh.png" height="55"  />
                                    <figcaption>Refresh</figcaption>
                                </button>
                                
                            </form >
                        </center>
                        <center>
                                <form class="table1" action="team_seach.php" method="POST">
								 <?php echo'<input hidden type="text" name ="cat" id="cat" value="'.$id.'">';?>

                                        <br><br>
                                        <input type="radio" name ="Status" value="Active" checked>Active
                                            <input type="radio" name ="Status" value="Deactive" >Deactive
                                             <input type="submit"class="button1" value="Search Team/Active Members">
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
