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
  function get_option()
  {
      $place = array('first'=>'I','second'=>2,'third'=>3);
      $options='';
      while(list($k,$v)=each($place))
      {
        $options.='<option value="'.$v.'">'.$k.'</option>';
      }
      return $options;
  }
   
        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="aplication.css">
        
    </head>
    <title>Application Award</title>
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
                        <h3>You are in award application page</h3>
                    </div>
                <div class="data">
                <form class="table" action="" method="POST">
                <center>
                <br><br><br>
                    <table>
                        <tr>
                            <td>
                                <label>Registration No</label>
                            </td>
                            <td>
                                <input type="text" name ="reg" placeholder="Enter Registration No Eg:-2014SP(enter number with 3 digits)" required pattern="^[A-Z0-9]+$">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Game or Event</label>
                            </td>
                            <td>
                                <input type="text" name ="game" placeholder="Enter game or event" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tournament Name</label>
                            </td>
                            <td>
                                <input type="text" name ="Tournament" placeholder="Enter Tournament Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tournament Year</label>
                            </td>
                            <td>
                                <input type="text" name ="Year" placeholder="Enter Tournament Year (Eg:-2014)" placeholder=" MM/YYYY" pattern="\d{4}" required>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>Achievment</label>
                            </td>
                            <td>
                                <input type="text" name ="Achievment" placeholder="Enter Achievment" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Colour</label>
                            </td>
                            <td>
                                <select name ="Colour">
                                    <option value="Full">Full</option>
                                    <option value="Half">Half</option>
                                    <option value="-">No</option>
                                    
                                </select>
                            </td>
                            
                            </tr>
                            <tr>
                            <td>
                                <label>Medal</label>
                            </td>
                            <td>
                                <select name ="Medal">
                                    <option value="Gold">Gold</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Bronze">Bronze</option>
                                    <option value="-">Participation</option>
                                </select>
                            </td>
                            
                            </tr>
                            <tr>
                            <td>
                            <button class="button1" type="reset">
                    <img src="photos/refresh.png" height="45"   />
                                    <figcaption>Refresh</figcaption>
                         </button>   
                        </td>
                        <td>
                        <button class="button1" type="submit" name="submit">
                    <img src="photos/submit.png" height="45" width="100px"  />
                                    
                    </button>
                           
                        </td>
                        </tr>
                    </table>
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

 
{
            if(isset($_POST["submit"]))
                 {
                            include('connection.php');
                        $reg = $_POST['reg'];
                        $game = $_POST['game'];
                        $Tournament = $_POST['Tournament'];
                        $Year = $_POST['Year'];
                        
                        $Achievment = $_POST['Achievment'];
                        $Colour = $_POST['Colour'];
                        $Medal = $_POST['Medal'];
                        

                    $query = "INSERT INTO awards(Reg_No,Game, Tournament_Name,Tournament_Year,Achievment,Colours,Medal) VALUES('$reg', '$game', '$Tournament', '$Year','$Achievment','$Colour','$Medal')";
                        $result = mysql_query($query) or die(mysql_error());

                        if($result)
                        {
                            ?>
                            <script>
                                alert("new entry is successful!");
                            </script>
                            <?php
                        }
                    else
                    {
                        ?>
                        <script type="text/javascript">
                            alert(" submit fail");
                        </script>
                        <?php
                    }
                }
}
    
?>
<?php
    }

   
?>