<?php
include_once 'configure.php';
$con = mysql_connect($host, $user, $password);
if (!$con) {
    echo "Sorry unable to connect database" . mysql_error();
}
if (!mysql_select_db($dbname)) {
    die("Cannot connect to the Database" . mysql_error($link));
}

function auth($username, $password) {
    $result = mysql_query("SELECT * FROM user_administrator WHERE Username='$username' AND Password='$password'");
	if (!$result) {
        die('Invalid query: ' . mysql_error());
    }
    if (mysql_num_rows($result) == 1) {
        mysql_free_result($result);
        return true;
    } else {
        mysql_free_result($result);
        return false;
    }
}

function user_loggedin() {
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        if (!auth($_SESSION['username'], $_SESSION['password'])) {
            return true;
        } else {
            return false;
        }
    }
}
?>
