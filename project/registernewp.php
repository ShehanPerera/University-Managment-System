<?php
//include('session.php');
session_start();
include ('conn.php');
include ('register.php');
//$sql = "INSERT INTO prescription(drug_name,noofmedicines) VALUES ('$drug_name','$noofmedicines')";
$sql1="INSERT INTO studentdetails(stregno,faculty,fullname,address,dob,lastschool,password,petname,tpno,illness,fartheroccup,fatherage,motheroccup,motherage,usertype) VALUES ('$_POST[stregno]','$_POST[faculty]','$_POST[fullname]','$_POST[address]','$_POST[dob]','$_POST[lastschool]','$_POST[password]','$_POST[petname]','$_POST[tpno]','$_POST[illness]','$_POST[fartheroccup]','$_POST[fatherage]','$_POST[motheroccup]','$_POST[motherage]','$_POST[usertype]')";


if(mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>