<?php
require('../config.php');
$e=$_REQUEST['eid'];

mysqli_query($con,"delete from results  where stu_id='$e'");

mysqli_query($con,"delete from student  where id='$e'");
echo "<script>window.location='index.php?option=Student'</script>";
?>