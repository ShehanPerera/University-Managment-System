

<?php
require('../config.php');
$e=$_REQUEST['id'];

mysqli_query($con,"delete from results  where id='$e'");
echo "<script>window.location='index.php?option=result'</script>";
?>