<?php
include('connection.php');
	
	$_reg = $_POST['reg'];
	$game = $_POST['game'];
	$Tournament = $_POST['Tournament'];
	$Year = $_POST['Year'];
	$Place = $_POST['Place'];
	$Achievment = $_POST['Achievment'];
	$Colour = $_POST['Colour'];
	$medal = $_POST['Medal'];
	

$query = "UPDATE  awards SET Game='$game', Tournament_Name='$Tournament',Tournament_Year='$Year',Place='$Place',Achievment='$Achievment',Colours='$Colour', Medal='$medal' where  Reg_No='$_reg'";
	$result = mysql_query($query) or die(mysql_error());

	if($result)
	{
		echo "<script>

    var x;
    if (confirm('Edit is successful!') == true) {
        window.location='edit_award2.php';
    } else {
         window.location='edit_award2.php';
    }
    

</script>";

		
	}