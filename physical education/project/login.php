
<html>
<head>
	<title>Login page</title>
	 <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="aa">

 <form name="form1" action="" method="POST">
 	<h1>Member Login </h1>
 	<table>
    <tr>
    	<td>User Name : </td>
    	<td>
    		<input type="text" name="user" placeholder="Please Enter UserName">
    	</td>
    </tr>
    <tr><td>Password  : </td>
    	<td>
    		<input type="password" name="pass" placeholder="Please Enter PassWord">
    	</td>
    </tr>
    </table>
    <input type="submit" value="Login" name="submit">
	
	 <div class="text-center">
        <ul class="list-inline">
		<br>
		<li> <a class="text-muted" href="../../UMS/index.php" ><font color ="black">UMS</font></a> </li>
          <li> <a class="text-muted" href="../../UMS/login.php" ><font color ="black">Login UMS</font></a> </li>
		   <li> <a class="text-muted" href="../../UMS/CreateNew.php" ><font color ="black">Create New Account</font></a> </li>
          <li> <a  class="text-muted"  href="forgetpassword.php"><font color ="black">Forget Password?</font></a> </li>
        </ul>
      </div>
    </div>

 </form>

</div>
</body>
</html>
<?php

include ('connection1.php');
    if(isset($_POST['submit']))
    {
        $username = $_POST['user'];
        $password = md5($_POST['pass']);
        session_start();
        $_SESSION['security']=$_POST['user'];


        $result = mysql_query("select * from test1 where username='$username' and pasword='$password' and (admin='true' or p_admin='true')") or die (mysql_error());

        $count = mysql_num_rows($result);
        if($count>0)
        {
            ?>
            <script type="text/javascript">
            window.location="Home1.php";
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Check password or username");
            </script>
            <?php
        }
          

    }
        
    

?>
