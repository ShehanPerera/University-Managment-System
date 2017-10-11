
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="aplication.css">

        
        
    </head>
    <title>forgetpassword</title>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </div>
            <div class="contain">
               <div class="footer">
                        <h3>You are in update password page</h3>
                    </div>
                <form class="data" action="" method="POST">
                    <center>
                            <table>
                                <tr>
                     <td>
                         <label>E-mail</label>
                     </td>
                        <td>
                        <input type="email" name ="email" placeholder="E_mail       Eg:Admin123@gmail.com" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Old password</label>
                        </td>
                        <td><input type="password" id="passwordold" name ="passwordold" placeholder=" Old passWord       Eg:Admin123@" required ></td>
                        </tr>
                          <tr>
                        <td>
                            <label>New password</label>
                        </td>
                        <td><input type="password" id="passwordnew" name ="passwordnew" placeholder=" New password       Eg:Admin123@" required ></td>
                        </tr>
                       
                        <tr>
                        <td>
                            <label>Confirm new password</label>
                        </td>
                        <td><input type="password" id="passwordcon" name ="passwordcom" placeholder=" Confirm new password       Eg:Admin123@" required ></td>
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
            <div class="footer">
                <h3>University of Jaffna</h3>
            </div>
        </div>
    </body>
</html>
<?php

include ('connection.php');
    if(isset($_POST['submit']))
    {
        $email= $_POST['email'];
        $passwordold = $_POST['passwordold'];
        $usernamenew = md5($_POST['passwordnew']);
        $passwordcom = md5($_POST['passwordcom']);
        $count =0;
        $result = mysql_query("select * from logindtails where email='$email'") or die (mysql_error());

        $count = mysql_num_rows($result);

        
  
        if($count>0)
        {
            if($usernamenew!= $passwordcom)
                {
                    ?>
                    <script type="text/javascript">
                        alert("Passwords does not match");
                    </script>
                    <?php
                }
                else
                        {
                                $query = "UPDATE logindtails SET password='$usernamenew'
                                where email='$email'";
                                $result = mysql_query($query) or die(mysql_error());

                                if($result)
                                {
                                    ?>
                                <script>

                                       alert("password updated successful!");

                                </script>";
                                <?php
                                   
                                }
                            }
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Email not found");
            </script>
            <?php
        }
          

    }
        
    

?>

