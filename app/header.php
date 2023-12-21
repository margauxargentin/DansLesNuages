<?php
    include('./config.php');
    include('./seeder.php');
    // keep all players whith their score
    $sql = "SELECT * FROM `Players` ORDER BY Score DESC";
    $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Dans les nuages</title>
</head>