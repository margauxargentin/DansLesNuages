<?php
$servername = "192.168.105.10";
$username = "iai3_05_user";
$password = "P@ssw0rd";
$dbname = "Nuage";

try {
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database'); //Should be a message a typical user could understand
}

?>
