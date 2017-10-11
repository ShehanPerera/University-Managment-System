<?php
include_once 'conn.php';

$id=$_GET['id'];
	$sql="delete from tabletavai where no=$id";
	$stmt= mysqli_query($conn,"$sql");
	if($stmt)
	{
	header('Location: filtertodrugs.php');
	}
?>