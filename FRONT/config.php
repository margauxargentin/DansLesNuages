<?php
$servername = "localhost"; // ou l'adresse IP de votre serveur MySQL
$username = "iai3_05_user";
$password = "P@ssw0rd";
$dbname = "Nuage";

// Créer une connexion
//$conn = new mysqli($servername, $username, $password, $dbname);
//$dbh = new PDO('mysql:host=localhost:3306;dbname=Nuage', $username, $password);
// Vérifier la connexion
//if ($dbh->connect_error) {
//    die("La connexion a échoué : " . $dbh->connect_error);
//}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $mysqli = new mysqli("192.168.105.10", "iai3_05_user", "P@ssw0rd", "Nuage");
  $mysqli->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database'); //Should be a message a typical user could understand
}
?>
