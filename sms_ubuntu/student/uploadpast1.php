	<?php
						function GetImageExtension($imagetype)
						{
						   if(empty($imagetype)) return false;
								  switch($imagetype)
							   {
								   case 'image/bmp': return '.bmp';
								   case 'image/gif': return '.gif';
								   case 'image/jpeg': return '.jpg';
								   case 'image/png': return '.png';
								
								   case 'application/pdf': return '.pdf';
								   case 'text/plain': return '.txt';
								   case 'text/html': return '.html';
								   case 'text/html': return '.htm';
							
								   case 'application/zip': return '.zip';
								   case 'application/msword': return '.doc';
								   case 'application/vnd.ms-excel': return '.xls';
								   case 'application/vnd.ms-powerpoint': return '.ppt';
								   default: return false;
							   }
						}
					?>
<?php
	$connection = mysql_connect("localhost", "root", "");

	$db = mysql_select_db("smspast", $connection);
/*	$connection1 = mysql_connect("localhost", "root", "");

	$db1 = mysql_select_db("student", $connection1);

session_start();
$reg_no = $_SESSION['SESS_REG_NO'];
$l_name = $_SESSION['SESS_LAST_NAME'];
*/
		
if(isset($_POST['submit'])){
  	if (empty($_POST['fname'])) 
		{
			$error = "<br/>** Insertion Failed <br/> ** You must enter the   fields";  
		}
		
		else
		{

		
			$fname=$_POST['fname'];
			$sname=$_POST['sname'];
			$lname=$_POST['lname'];
			//$serialno=$_POST['serialno'];
			//$from=$_POST['outherfrom'];
			//$to=$_POST['outherto'];
			//$heading=$_POST['heading'];
			//$billno=$_POST['billno'];
			//$amount=$_POST['amount'];
			$view=$_FILES["upload"]["name"];
			//$view=$_FILES["upload"]["name"];
			//$view=$_FILES['file']['name'];
			//$rece=$_POST['rece'];
			//$outher=$_POST['outher'];
			//$reason=$_POST['reason'];
			//$rdate=$_POST['retdate'];



				$get_query = mysql_query("SELECT `id` FROM `$sname$lname` WHERE `fname` = '".$fname."'");

			  
			if (!empty($_FILES["upload"]["name"])) 
			{
				
				//$view=$_FILES["upload"]["name"];
				
				 $file_name=$_FILES["upload"]["name"];
	   			 $temp_name=$_FILES["upload"]["tmp_name"];
	    			$imgtype=$_FILES["upload"]["type"];
				
	    		$ext= GetImageExtension($imgtype);
	      			 $imagename=$fname.$ext;
	   			 $path = "../files/".$imagename;

				  move_uploaded_file($_FILES["upload"]["tmp_name"],$path);
	
			    
					//Insert Query of SQL
					$query = mysql_query("insert into $sname$lname(`id`,`fname`, `type`) values ('','".$fname.$ext."','".$ext."')");
					//mysql_query("INSERT INTO log (RegNo, lname,position,action) VALUES ('$reg_no','$l_name','admin','".$fname.$ext." Uploaded')") or die('error');
				   
?>
			<script type="text/javascript">
				window.location="../hod/ppaper.php";
			</script>
<?php
				

		    }
   		
		   
		}
}
if(isset($_POST['reset'])){
?>
	<script type="text/javascript">
		window.location="../hod/uploadpast.php";
	</script>
	<?php
}

	//Closing Connection with Server
	mysql_close($connection);
?>	