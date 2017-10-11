<?php
session_start();
require_once "databaseconnection.php";
if(!user_loggedin())
{
	header("Location:index.php");
}
?>