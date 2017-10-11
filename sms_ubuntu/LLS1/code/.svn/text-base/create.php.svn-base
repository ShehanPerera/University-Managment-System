<?php
require_once 'databaseconnection.php';
session_start();
$a=$_SESSION['username'];
$b=md5($_SESSION['password']);
$id=$_POST['id'];
$name=$_POST['name'];
$entity=$_POST['entity'];
$mail=$_POST['mail'];
$username=$_POST['username'];
$pass=$_POST['password'];
$pass1=$_POST['pass'];
if(isset($_POST['Create']))
{
	if($pass==$pass1)
	{
		$password=md5($pass);
		$sql=mysql_query("INSERT INTO user_administrator values('$id','$name','$mail','$username','$password','$entity','$a')");
		if (!$sql)
		{
			die('Error: ' . mysql_error());
		}
		header("Location:./../create account.php?lls=Successfully created.");
	}
}

elseif(isset($_POST['Update']))
{
	$sql=mysql_query("UPDATE user_administrator set Fullname='$name',Entity='$entity',mail_id='$mail',Username='$username' WHERE Username='$a' AND Password='$b'");
	if (!$sql)
	{
		die('Error: ' . mysql_error());
	}
	header("Location:./../Userprofile.php?lls=Your profile details successfully updated check your details below!");
}
?>