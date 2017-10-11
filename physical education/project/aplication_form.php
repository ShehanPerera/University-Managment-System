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
        <link rel="stylesheet" type="text/css" href="aplication.css">
        <link rel="stylesheet" type="text/css" href="SportGame.css">
        
    </head>
    <title>Application Student</title>
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
                        <h3>You are in new student application page</h3>
                    </div>
                <div class="data">
                <form class="table" action="" method="POST">
 <!--==============================================================================================================-->                   
                     <center>Your selected game or event is
                        <?php
                            include('connection.php');
							if(!empty($_POST['variable']))
							{
							$id=$_POST['variable'];
							}
						else
						{
							$id=$_POST['cat'];
						}
                          echo $id;
						  echo'<input hidden type="text" name ="cat" id="cat" value="'.$id.'">
                           ';

                        ?>
                    <table>
                    <br>
                        <tr>
                            <td>
                                <label>Registration No</label>
                            </td>
                            <td>
                                <input type="text" name ="reg" id="reg" placeholder="Enter Registration No Eg:-2014SP(enter number with 3 digits)" required pattern="^[A-Z0-9]+$">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Name with initials</label>
                            </td>
                            <td>
                                <input type="text" name ="name" placeholder="Enter name" required pattern="d{4}+[A-Z-1-3]+d{3}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date Of Birth</label>
                            </td>
                            <td>
                                <input type="text" name ="bday" placeholder=" YYYY/MM/DD" pattern="\d{4}/\d{1,2}/\d{1,2}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date Of Start Acadamic Course</label>
                            </td>
                            <td>
                                <input type="text" name ="start" placeholder=" YYYY/MM/DD" pattern="\d{4}/\d{1,2}/\d{1,2}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date Of Completion Of Course</label>
                            </td>
                            <td>
                                <input type="text" name ="end" placeholder=" YYYY/MM/DD" pattern="\d{4}/\d{1,2}/\d{1,2}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>National Identity Card Number</label>
                            </td>
                            <td>
                                <input type="text" name ="nic" placeholder="Enter Nationa Identity Card Number" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Permanent Address</label>
                            </td>
                            <td>
                                <input type="text" name ="Address" placeholder="Enter Address" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>mobile Number</label>
                            </td>
                            <td>
                                <input type="text" name ="phone" placeholder="Enter Phone Number" >
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>Gender</label>
                            </td>
                            <td>
                                <input type="radio" name ="Gender" value="male" checked>Male
                                <input type="radio" name ="Gender" value="female" >Female
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Condition</label>
                            </td>
                            <td>
                                 <input type="radio" name ="Status" value="Active" checked>Active
                                <input type="radio" name ="Status" value="Deactive" >Deactive
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Position</label>
                            </td>
                            <td>
                                <input type="text" name ="pname" placeholder="Enter Place Eg:- Captain">
                            </td>
                        </tr>

                        <tr>
                        <td>
                            <button class="buttonl" type="reset">
                             <img src="photos/refresh.png" height="35"  />
                                    <figcaption>Refresh</figcaption>
                            </button>
                        </td>
                        <td>
                            <button class="buttonl" type="submit" name="submit">
                                <img src="photos/submit.png" height="45"  />
                                    

                            </button>
                        </td>
                        
                    </tr>
                    
                
                    </table>
                    </center>
                    <br>
                    
                    
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

if(isset($_POST["submit"]))
{
include('connection.php');
    $_name=$_POST['cat'];

    $reg = $_POST['reg'];
    $name = $_POST['name'];
    $bday = $_POST['bday'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $nic = $_POST['nic'];
    $Address = $_POST['Address'];
    $phone = $_POST['phone'];
    $Gender = $_POST['Gender'];
    $Status= $_POST['Status'];
    $pname = $_POST['pname'];
     
     $query = "INSERT INTO studentdetails(Reg_No,Category, Name, Date_of_Birth, Date_of_start_Acadamic_Course,Date_of_completion_of_Course,NIC,Address,Phone_Number,Gender,Status,Place) VALUES('$reg','$_name', '$name', '$bday', '$start','$end','$nic','$Address','$phone','$Gender', '$Status','$pname')";
    $result = mysql_query($query) or die(mysql_error());
     if($result)
    {
		
   ?>
        <script type='text/javascript'>
            
         alert("submitted successfully!");
		
        </script>
        <?php
        
    }

     else
     {
        ?>
        <script type='text/javascript'>
            alert("submitted Not successfully!");
		
        </script>
        <?php
}



    }
}

   
?>