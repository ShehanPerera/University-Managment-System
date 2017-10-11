<?php
//include('session.php');
//session_start();
include ('conn.php');
include ('prescription.php');
//$sql = "INSERT INTO prescription(drug_name,noofmedicines) VALUES ('$drug_name','$noofmedicines')";
$sql1="INSERT INTO prescription(doctorname,stregno,date,symptoms,disease,drugname_drugvalue) VALUES ('$_POST[doctorname]','$_POST[stregno]','$_POST[date]','$_POST[symptoms]','$_POST[disease]','$_POST[drugname_drugvalue]')";




if(!$sql1)
	{
		die(mysqli_error($conn));
		echo "<script>alert('Your account not created !!');</script>";
	}
  
   echo "<script>alert('Your account has been created !!');</script>";
	
 
  





/* if(mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); */
?>