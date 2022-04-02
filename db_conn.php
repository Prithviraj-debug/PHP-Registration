<?php
$db_host = '';          // Enter your DB Host name 
$db_user = '';          // DB username
$db_pass = '';          // Password (if any)

$db_name = "";          // DB name which you suppose to connect

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$con) {
    echo "Connection Failed";
}
?>