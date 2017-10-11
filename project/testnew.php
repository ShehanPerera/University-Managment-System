<?php
//include('session.php');
//session_start();
include ('conn.php');
include ('labtest.php');
//$sql = "INSERT INTO prescription(drug_name,noofmedicines) VALUES ('$drug_name','$noofmedicines')";
$sql1 = "INSERT INTO test (test_type,stregno,treatmentid,test_result,date) VALUES
('$_POST[test_type]','$_POST[stregno]','$_POST[treatmentid]','$_POST[test_result]','$_POST[date]')";

if(mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>