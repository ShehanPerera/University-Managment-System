<script type="text/javascript">
    var macAddress = "";
    var ipAddress = "";
    var computerName = "";
    var wmi = GetObject("winmgmts:{impersonationLevel=impersonate}");
    e = new Enumerator(wmi.ExecQuery("SELECT * FROM Win32_NetworkAdapterConfiguration WHERE IPEnabled = True"));
    for(; !e.atEnd(); e.moveNext()) {
        var s = e.item();
        macAddress = s.MACAddress;
        ipAddress = s.IPAddress(0);
        computerName = s.DNSHostName;
    }
</script>

<input type="text" id="txtMACAdress" />
<input type="text" id="txtIPAdress" />
<input type="text" id="txtComputerName" />

<script type="text/javascript">
    document.getElementById("txtMACAdress").value = unescape(macAddress);
    document.getElementById("txtIPAdress").value = unescape(ipAddress);
    document.getElementById("txtComputerName").value = unescape(computerName);
</script>

<?php
			$mac = $_SERVER['REMOTE_ADDR'];
			$localIP = getHostByName(getHostName());
			/*
			* Getting MAC Address using PHP
			* Md. Nazmul Basher
			*/
			ob_start(); // Turn on output buffering
			system('ipconfig /all'); //Execute external program to display output
			$mycom=ob_get_contents(); // Capture the output into a variable
			ob_clean(); // Clean (erase) the output buffer
			$findme = "Physical";
			$pmac = strpos($mycom, $findme); // Find the position of Physical text
			$mac=substr($mycom,($pmac+36),17); // Get Physical Address

			//echo "<li> Your Mac ID = ".$mac."</li>";
			//echo "<li> Your Local IP = ".$localIP."</li>";
				?>
<?php
include '../config.php';
if(isset($_POST["Import"])){


		echo $filename=$_FILES["file"]["tmp_name"];


		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				$index[]= $emapData[0];
				$Course_Code[]=$emapData[1];
				$credit[]=$emapData[2];
				$semester[]=$emapData[3];
				$attempt[]=$emapData[4];
				$Level[]=$emapData[5];
				$marks[]=$emapData[6];
				$Result[]=$emapData[7];
				$gpv[]=$emapData[8];
				$credit_gpv[]=$emapData[9];
				
			 }
				for($i=1;$i<sizeof($index);$i++)
				{
					
	          //It will insert a row to our subject table from our csv file`
	           $sql = "INSERT into results (`Index_no`,`Course_Code`,`credit`,`semester`,`attempt`,`Level`,`marks`,`Result`,`gpv`,`credit*gpv`)
	            	values('$index[$i]','$Course_Code[$i]','$credit[$i]','$semester[$i]','$attempt[$i]','$Level[$i]','$marks[$i]','$Result[$i]','$gpv[$i]','$credit_gpv[$i]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($con,$sql);
				}
				$status = "fail";
				if($result)
				{
					$status="successfull";
				}
				
				$sqld= mysqli_query($con,"INSERT into ip_address(`mac_id`,`ip_add`,`up_status`) values('$mac','$localIP','$status')");
				
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php?option=add_result\"
						</script>";

				}


	         fclose($file);
           if($result)
           {
			 unset($_SESSION['enterkey']);
            }
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php?option=result\"
					</script>";



			 //close of connection
			mysqli_close($conn);

		 }
	}
?>
