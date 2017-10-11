<?php 
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>welcome</title>
    </head>
    <body>
        <h1>Welcome user</h1>
        <div style="text-align: right">
            <a href="logout.php">Logout</a>
        </div>
        <hr>
        <?php
        require_once 'databaseconnection.php';
        if (!user_loggedin()) {
            header('Location:index.php');
        }
        echo "Your User name : " . $_SESSION['username'] . "<br>";
        echo "Your Password : " . $_SESSION['password'];
		?>
        <hr>
        &copy;University of Jaffna
    </body>
</html>
