<?php
include_once 'databaseconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == "") {
    header("Location:./../index.php?err=Please enter user name!");
} else if ($password == "") {
    header("Location:./../index.php?err=Please enter username and password!");
} else {

    if (auth($username, md5($password))) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:./../loginhome.php");
    } else {
        header("Location:./../index.php?err=Your username or password is incorrect!");
    }
}
?>
