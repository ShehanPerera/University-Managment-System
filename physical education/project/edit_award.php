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
        <link rel="stylesheet" type="text/css" href="result.css">
       
    </head>
    <title>Edit student Details</title>
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
                        <h3>You are in edit page</h3>
                    </div>
                <div class="data">
                    
                        <center>    
                        

                    <?php
                                include('connection.php');
                                //session_start();
                                $_name=$_SESSION['id'];
                                $_SESSION['id1'] = $_POST['reg'];
                                $_reg = $_POST['reg'];
                $result = mysql_query("SELECT * FROM awards where Reg_No='$_reg'") or die(mysql_error());
                                while($query_row = mysql_fetch_assoc($result))
                                {
                                    
                                    $reg =  $query_row['Reg_No'];
                                    $name =  $query_row['Game'];
                                    $bday =  $query_row['Tournament_Name'];
                                    $start = $query_row['Tournament_Year'];
                                    $end =  $query_row['Place'];
                                    $nic =  $query_row['Achievment'];
                                    $Address =  $query_row['Colours'];
                                    $medal =  $query_row['Medal'];


                                    echo " <form class='table' action='restore_award.php' method='POST'>

                                        <table>
                                <tr>
								
                                        <td> Registration No </td>
                                        <td> Game or Event </td>
                                        <td> Tournament Name </td>
                                        <td> Tournament Year </td>
                                        <td> Place </td>
                                        <td> Achievment </td>
                                        <td> Colour </td>
                                        <td> Medal </td>
                                        
                                </tr>
                                    <tr>
                                            <td>$reg<input hidden name='reg'  value='$reg'></td>
                                            <td><input name='game' type='text' value='$name'></td>
                                            <td><input name='Tournament' type='text' value='$bday'></td>
                                            <td><input name='Year' type='text' value='$start'></td>
                                            <td><select name ='Place'>
                                    <option value='first'>First</option>
                                    <option value='second'>Second</option>
                                    <option value='third'>Third</option>
                                    <option value='-''>No</option>
                                </select></td>
                                            <td><input name='Achievment' type='text' value='$nic'></td>
                                            <td><select name ='Colour'>
                                    <option value='Full'>Full</option>
                                    <option value='Half'>Half</option>
                                    <option value='-'>No</option>
                                    
                                </select></td>
                                            <td>
                                            <select name ='Medal'>
                                    <option value='Gold'>Gold</option>
                                    <option value='Silver'>Silver</option>
                                    <option value='Bronze'>Bronze</option>
                                    <option value='-'>No</option>
                                </select>
                                            </td>
                                            
                                        </tr>
                                        </table>
                                        <button class='button' type='submit'>
                                        <img src='photos/save_1.jpg' height='45' />
                                        </button>
                                    </form >"
                                        ;
                                }

                    ?>

                    
                    </center>
                    <center>
                    <br><br><br>
                    <form action="delete_award.php" method="POST">
                                    <button type="submit"class="button" ID="Delete"name="sp" VALUE="Delete">
                                    <img src="photos/delete_1.jpg" height="45" />
                                    <figcaption> </figcaption>
                                    </button>
                    </form >
                    
                    </center>
                
                
            </div>
            
        </div>
    </body>
</html>
<?php
    }

?>
