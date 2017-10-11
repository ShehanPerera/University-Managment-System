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
                    
                    <li><a href="SportGames.php">Sport Games</a></li>
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
                        <h3>You are in student edit page</h3>
                    </div>
                <div class="data">
                    <?php
					//========================================================================================================
                                include('connection.php');
                                //session_start();
                                $_name=$_POST['cat'];
                                //$_SESSION['id1'] = $_POST['reg'];
                                $_reg = $_POST['reg'];
								
                $result = mysql_query("SELECT * FROM studentdetails where Category='$_name' and Reg_No='$_reg'") or die(mysql_error());
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

                                    
                                    $_SESSION['idd']=$reg;?>
                                   <form class='table' action='restore_student.php' method='POST'>
									
									<?php
									
									echo '<input hidden type="text" name ="cat" id="cat" value="'.$Category.'">
											 <input hidden type="text" name ="idd" id="idd" value="'.$reg.'">';
									echo"
									
                                                 <table>
                                    <tr>
                                            <td> Reg_No </td>
                                            <td> Category</td>
                                            <td> Name </td>
                                            <td> Date_of_Birth </td>
                                            <td> Date_of_start_Acadamic_Course </td>
                                            <td> Date_of_completion_of_Course </td>
                                            <td> NIC </td>
                                            <td> Address </td>
                                            <td> Phone_Number </td>
                                            <td> Gender </td>
                                            <td>Status </td>
                                            <td> Place </td>
                                    </tr>

                   
                                    <tr>
                                            <td>$reg</td>
                                            <td>$Category</td>
                                            <td><input name='name1' type='text' value='$name'></td>
                                            <td><input name='bday' type='text' value='$bday'></td>
                                            <td><input name='start' type='text' value='$start'></td>
                                            <td><input name='end' type='text' value='$end'></td>
                                            <td><input name='nic' type='text' value='$nic'></td>
                                            <td><input name='Address' type='text' value='$Address'></td>
                                            <td><input name='phone' type='text' value='$phone'></td>
                                            <td><input name='Gender' type='text' value='$Gender'></td>
                                            <td><input name='Status' id='Status'type='text' value='$Status'></td>
                                            <td><input name='pname' id='pname'type='text' value='$pname'></td>
                                        </tr>
                                        </table>
                                            <center>
                                                <button class='button' type='submit'>
                                                <img src='photos/save_1.jpg' height='45'   />
                                                </button>
                                            </center>
											
                                      
                                        
                                        </form>";
                                }

                    ?>
                    <center>
                    <br><br><br>
                    
                                    
                                
                   
                    <br><br>
                    <form action="delete_student.php" method="POST">
                                    <button type="submit"class="button" ID="Delete"name="sp" VALUE="Delete">
                                    <img src="photos/delete_1.jpg" height="45"   />
                                    </button>
                    </form >
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
