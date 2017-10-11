<?php
session_start();
$securityId =$_SESSION['security']; 
    if(isset($securityId))
    {
        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="SportGames.css">
        <link rel="stylesheet" type="text/css" href="aplication.css">
        
    </head>
    <title>New User</title>
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
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
            <div class="contain">
                <div class="footer">
                        <h3>You are in add new user page</h3>
                    </div>
                <div class="data">
                    <form class="table" action="" method="POST" name="frm">
                    <center><br><br>New User Apilication<br><br>
                            <table>
                                <tr>
                     <td>
                         <label>User Name</label>
                     </td>
                        <td>
                        <input type="text" name ="username" placeholder="Enter User Name       Eg:Admin" required pattern="^[A-Za-z]+">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td><input type="password" id="password" name ="password" placeholder="At least one capital & simple letter, number,spacial character not lessthan 8" required pattern="^\S*(?=\S{8,20})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$"></td>
                        </tr>
                          <tr>
                        <td>
                            <label>Confirm Password</label>
                        </td>
                        <td><input type="password" id="password1" name ="password1" placeholder="Password" required ></td>
                        </tr>
                        <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name ="phonenumber" placeholder="Phone Number       " pattern="^\d{10}$" required></td>
                        </tr>
                        <tr>
                        <td>
                            <label>E-mail</label>
                        </td>
                        <td><input type="email" name ="email" placeholder="E_mail       Eg:Admin123@gmail.com" required></td>
                        </tr>
                        <tr>
                        <td>
                            <button type="reset" class="button12">
                            <img src="photos/refresh.png" height="45" />
                            <figcaption>Refresh </figcaption>
                        </td>
                        <td>
                            <button type="submit" class="button12" value="Save" name="submit">
                            <img src="photos/save_1.jpg" height="45" />
                                    <figcaption> </figcaption>
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
if(isset($_POST["submit"]))
{
include('connection.php');
    
   

    $reg = $_POST['username'];
    $name = md5($_POST['password']);
    $name1 = md5($_POST['password1']);
    $bday = $_POST['phonenumber'];
    $start = $_POST['email'];

    
     $count=0;
     $query1 = "SELECT * from logindtails where username='$reg'";
     $result = mysql_query($query1) or die(mysql_error());
     $count = mysql_num_rows($result);
     if($count>0)
     {
         ?>
            <script type="text/javascript">
                alert("username already exist");
            </script>
         <?php
     }

     else
     {
        if($name!= $name1)
        {
            ?>
            <script type="text/javascript">
                alert("Passwords does not match");
                frm.password.focus();
            </script>
            <?php
        }
        else
        {
                $query = "INSERT INTO logindtails (username, password, phonenumber, email) VALUES('$reg', '$name', '$bday', '$start')";
                $result = mysql_query($query) or die(mysql_error());

                if($result)
                {
                    ?>
                <script>

                       alert("new entry is successful!");

                </script>";
                <?php
                   
                }
            }
    }
}



    }

    else
    {
        ?>
        <script type="text/javascript">
                alert("Login first");
                window.location="login.php";
         </script>
         <?php
    }
?>