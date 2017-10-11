<?php
require('../config.php');
$e=$_REQUEST['id'];

mysqli_query($con,"delete from course  where id='$e'");
echo "<script>window.location='index.php?option=subject'</script>";
?>