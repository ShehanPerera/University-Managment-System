<?php 
require_once 'databaseconnection.php';
session_start();
$username= $_SESSION['username'];
$oldpassword = $_POST['password'];
$encrypted_password=md5($oldpassword);
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];
$result = mysql_query("SELECT password FROM user_administrator WHERE Username='$username' and Password = '$encrypted_password'");
if(!$result) 
{ 
    header("Location:./../Changepassword.php?lls=Your password is incorrect!");
} 
if(mysql_num_rows($result)==1)
{
    if($newpassword==$confirmpassword){
		$encriptednewpassword=md5($newpassword);
        $sql=mysql_query("UPDATE user_administrator SET Password='$encriptednewpassword' where Username='$username'");        
        if($sql) 
        { 
           header("Location:./../Changepassword.php?lls=Your password is successfully change!");
        }
        else
        {
           header("Location:./../Changepassword.php?lls=Your password is cannot be change!");
        }       
    } 
	else 
	{
		header("Location:./../Changepassword.php?lls=The new password and confirm new password fields must be the same!");
    }
} 
else 
{
    header("Location:./../Changepassword.php?lls=Your password is incorrect!"); 
}

?>