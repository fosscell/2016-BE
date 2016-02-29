<?php
// database variables
$db_server = "";
$db_name = "";
$db_user = "";
$db_pass = "";
$user_id = "";
$no_pass = "";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
// database variables
require "instamojo.php";
// instamojo variables
$my_api_key = "";
$my_auth_token = "";
// instamojo variables
$api = new Instamojo($my_api_key, $my_auth_token);
?>
