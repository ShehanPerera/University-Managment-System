<?php

	if(count($_FILES["item_file"]['name'])>0) { //check if any file uploaded

		for($j=0; $j < count($_FILES["item_file"]['name']); $j++) { //loop the uploaded file array
			
			$filen = $_FILES["item_file"]['name'][$j];	

			// ingore empty input fields
			if ($filen!="")
			{
				$storagename = "excel.xlsx";
				$new_file_name=$storagename;
				// destination path - you can choose any file name here (e.g. random)
				$path = "../spread/" . $new_file_name; 
				
				if(move_uploaded_file($_FILES["item_file"]['tmp_name']["$j"],$path)) {
				?>
	<script type="text/javascript">
		window.location="../admin/uploadlast.php";
	</script>
<?php
					echo "File# ".($j+1)." ($filen) uploaded successfully!<br>"; 

				} else
				{
					echo  "Errors occoured during file upload!";
				}
			}	

		}
	}
	else
		?>
	<script type="text/javascript">
		window.location="../admin/uploadnew.php";
	</script>
	<?php
?>

