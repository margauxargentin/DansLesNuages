<?php
$servername = "localhost"; // ou l'adresse IP de votre serveur MySQL
$username = "iai3_05_user";
$password = "P@ssw0rd";
$dbname = "Nuage";

// Créer une connexion
//$conn = new mysqli($servername, $username, $password, $dbname);
$dbh = new PDO('mysql:host=192.168.105.10:3306;dbname=Nuage', $username, $password);
// Vérifier la connexion
if ($dbh->connect_error) {
    die("La connexion a échoué : " . $dbh->connect_error);
}
?>
