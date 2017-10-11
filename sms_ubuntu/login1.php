<?php
include('connect1.php');
session_start();
if(isset($_POST['submit']))
{
	 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	} 
	
	$RegNo = clean($_POST['RegNo']);
	$password = clean(md5($_POST['password']));
	
	$result = mysql_query("SELECT * FROM test1 where username='$RegNo'AND pasword='$password' ") or die(mysql_error());
	$count = mysql_num_rows($result);
        if($count>0)
		{
				while($query_row = mysql_fetch_assoc($result))
				{
					$p1=$query_row['admin'];
				}
				if($p1=='true')
				{
					header('location:admin/index.php');
				}
				
		}
		else
		{
			echo "sorry";
		}
}

?>