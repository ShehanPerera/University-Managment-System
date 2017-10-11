<?php
/*session_start();
$securityId =$_SESSION['security']; 
    if(isset($securityId))
    {*/
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
    <title>Seach Team</title>
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
                    <li><a href="Calender.php">Calendr</a></li>
                </ul>
                <ul class=logoutlink>
					<li><a href="logout.php">Logout</a></li>
				</ul>
            </div>
            <div class="contain">
                <div class="footer">
						<h3>You are in results page</h3>
					</div>
                <div class="data">
                <table>
                <tr>
						<th> Reg_No </th>
						<th> Category </th>
						<th> Name </th>
						<th> Date_of_Birth </th>
						<th> Date_of_start_Acadamic_Course </th>
						<th> Date_of_completion_of_Course </th>
						<th> NIC </th>
						<th> Address </th>
						<th> Phone_Number </th>
						<th> Gender </th>
						<th>Status </th>
						<th> Place </th>
				</tr>

                	<?php
								include('connection.php');
								//session_start();
								$_name=$_POST['cat'];
								$_Status = $_POST['Status'];

				$result = mysql_query("SELECT * FROM studentdetails where Category='$_name' and Status='$_Status'") or die(mysql_error());
								while($query_row = mysql_fetch_assoc($result))
								{
									
									$reg =  $query_row['Reg_No'];
									$Category =  $query_row['Category'];
									$name =  $query_row['Name'];
									$bday =  $query_row['Date_of_Birth'];
									$start = $query_row['Date_of_start_Acadamic_Course'];
									$end =  $query_row['Date_of_completion_of_Course'];
									$nic =  $query_row['NIC'];
									$Address =  $query_row['Address'];
									$phone =  $query_row['Phone_Number'];
									$Gender =  $query_row['Gender'];
									$Status=  $query_row['Status'];
									$pname =  $query_row['Place'];

									echo "<tr>
											<td>".$reg."</td>
											<td>".$Category."</td>
											<td>".$name."</td>
											<td>".$bday."</td>
											<td>".$start."</td>
											<td>".$end."</td>
											<td>".$nic."</td>
											<td>".$Address."</td>
											<td>".$phone."</td>
											<td>".$Gender."</td>
											<td>".$Status."</td>
											<td>".$pname."</td>
										</tr>";
								}

					?>
					</table>
					<center>
				<form action="search_student.php">
               		<button class="button">
               		<img src="photos/back_1.jpg" height="35" width="100px"  />
                                    <figcaption></figcaption>
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