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
    </head>
    <title>Edit_Student_details</title>
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
                        <h3>You are in search student for edit page</h3>
                    </div>
                <div class="data">
                    <form class="table" action="edit_student.php" method="POST">
                    <center>
                    Your selected game or event is
                        <?php
                            include('connection.php');
//======================================================================================================================================                            
                           if(!empty($_POST['variable']))
							{
							$id=$_POST['variable'];
							}
							else if(!empty($_REQUEST['user_id']))
							{
								$id=$_REQUEST['user_id'];
							}
						else
						{
							$id=$Category;
						}
                          echo $id;
						  echo'<input hidden type="text" name ="cat" id="cat" value="'.$id.'">
                           ';

                        ?>
                    <br><br><br><br><br><br>
                        <input type="text" name ="reg" placeholder="Enter Registration No Eg:-2014SP(enter number with 3 digits)" pattern="^[A-Z0-9]+$" required><br><br>
                        

                        <button type="submit" class="button12" value="Edit/Delete">
                        <img src="photos/edit_1.png" height="45" width="100px"   />
                        </button>
                        <button class="button12" type="reset">
                    <img src="photos/refresh.png" height="45"   />
                                    <figcaption>Refresh</figcaption>
                        </center>
                    </form>
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
