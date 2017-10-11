<?php
$x = $_GET["x"];
include("conn.php");
$sql = "SELECT * from test_require WHERE stregno = '$x' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if( $row["isChecked"] == 1)
{
    $result = mysqli_query($conn,"Update test_require set isChecked=0 where stregno='$x'");
}
 else if($row["isChecked"] == 0) {
    $result = mysqli_query($conn,"Update test_require set isChecked=1 where stregno='$x'");
       
 }
