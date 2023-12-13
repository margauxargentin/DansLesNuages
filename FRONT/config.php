<?php
$servername = "localhost"; // ou l'adresse IP de votre serveur MySQL
$username = "iai3_05_user";
$password = "P@ssw0rd";
$dbname = "Nuage";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>
