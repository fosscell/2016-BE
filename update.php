<?php
$valid_passwords = array ("username" => "password");
$valid_users = array_keys($valid_passwords);
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);
if (!$validated) {
  header('WWW-Authenticate: Basic realm=" athena cPanel "');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}
// continue only if authenticated
require_once("config.php");

$qry = "SELECT * FROM instamojo_responses ORDER BY modified_at ASC";
$rslt = $mysqli->query($qry);

while($row = $rslt->fetch_assoc()){
$id = $row['ID'];
$rspnse = $api->paymentRequestStatus($id);
$status = $rspnse['status'];
$nqwer = "UPDATE instamojo_responses SET STATUS = '" . $status . "' WHERE ID = '" . $id . "';";
echo $nqwer;
}
?>
