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
        <script type="text/javascript">
            function function1 () {
                    window.location = "login.html";
                }   

        </script>
    </head>
    <title>Seach By Year</title>
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
                    <li><a href="Calender.php">Calender</a></li>
                </ul>
                <ul class=logoutlink>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
            <div class="contain">
                <div class="footer">
                        <h3>You are in results page</h3>
                    </div>
                <div class="data">
                <center><br><br><br>
                <table>
                <tr>
						<th> Reg_No </th>
						<th> Game </th>
						<th> Tournament </th>
						<th> Year </th>
						
						<th> Achievment </th>
						<th> Colour</th>
                        <th>Medal</th>
						
				</tr>

                	<?php
								include('connection.php');
								
								
								$_reg = $_POST['reg_no'];

				$result = mysql_query("SELECT * FROM awards where Tournament_Year='$_reg'") or die(mysql_error());
								while($query_row = mysql_fetch_assoc($result))
								{
									
									$reg =  $query_row['Reg_No'];
									$name =  $query_row['Game'];
									$bday =  $query_row['Tournament_Name'];
									$start = $query_row['Tournament_Year'];
									
									$nic =  $query_row['Achievment'];
									$Address =  $query_row['Colours'];
                                    $medal =$query_row['Medal'];
									

									echo "<tr>
											<td>".$reg."</td>
											<td>".$name."</td>
											<td>".$bday."</td>
											<td>".$start."</td>
								
											<td>".$nic."</td>
											<td>".$Address."</td>
                                            <td>".$medal."</td>
											
										</tr>";
								}

					?>
					</table>
					<form action="search_awrd.php">
                                <button class="button" id="du">
                                    <img src="photos/back_1.jpg" height="45" />
                                    <figcaption> </figcaption>
                                </button>
                           </form>
               
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
