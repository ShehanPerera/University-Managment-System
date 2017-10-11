<?php

/* Database config */

 $db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'student'; 
 
/* End config */
 $link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET names UTF8");

mysql_select_db($db_database,$link); 

?>
<?php
/* 
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "student1";
  $conn = mysql_connect($host , $user ,$password);
  mysql_select_db($db); */
  ?>
