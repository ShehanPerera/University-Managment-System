<?php
include('../connection.php');
$user_id=$_REQUEST['user_id'];


	         			  
	 	
				
				  $query ="DELETE FROM type WHERE position='".$user_id."'";
  
	             $result =mysql_query($query);
	             if($result)
	             {
					
					echo "<script type='text/javascript'>alert('Delete successfully');window.location =\"Responsibles.php\"</script>";
	             	
	             }
	             
	             else
	             {

	             	echo "<script type='text/javascript'>alert('Delete is faild');window.location =\"Responsibles.php\"</script>";
	             
	             }
			  

	    	
			
?>