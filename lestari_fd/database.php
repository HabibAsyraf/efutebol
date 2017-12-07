<?php
$user_name = "root";
$password = "";
$database = "lestari_fd";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);

//print "Connection to the Server opened";
$db_found = mysql_select_db($database, $db_handle);
$td = date("Y-m-d");
?>

