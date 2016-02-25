<?php
$db_server = "";
$db_name = "";
$db_user = "";
$db_pass = "";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>
