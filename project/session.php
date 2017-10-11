<?php   

 session_start();
 if(isset($_SESSION['username']) && isset($_SESSION['password']))
 {
  $user=$_SESSION['username'];			
  $pass=$_SESSION['password'];
  }
else{
header("location:home.php");

}	
?>