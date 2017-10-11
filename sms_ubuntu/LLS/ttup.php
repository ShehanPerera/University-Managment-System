		<?php


	$connection = mysql_connect("localhost", "root", "");

	$db = mysql_select_db("lls", $connection);


		
if(isset($_POST['update'])){
		$day=$_POST['day'];
			$period=$_POST['period'];
			$code=$_POST['code'];
			$venue=$_POST['venue'];
		$sql     = "UPDATE $level SET Venue_No='$venue' and code='$code' WHERE Day='$day' and Period='$period'";
		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			}
			
?>