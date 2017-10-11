<?php

include ('connection1.php');
	if(isset($_POST['submit']))
	{
		$username = $_POST['user'];
		$password =md5($_POST['pass']);

		$result = mysql_query("select * from test1 where username='$username' and pasword='$password'") or die (mysql_error());

		$count = mysql_num_rows($result);

		
  
		if($count>0)
		{

			header('location:Home1.html');
		}
		else{
			?>
			<script type="text/javascript">
         		 window.location="login.html";
         		 alert("check password  username!");
          </script>
          <?php

	}
		}
	

?>
