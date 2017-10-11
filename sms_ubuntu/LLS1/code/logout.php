<?php
session_start();
require_once 'databaseconnection.php';
session_destroy();
header("Location:./../index.php?err=Your account is successfully logout!");
?>
