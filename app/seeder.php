
<?php
// create table players
$sql= "CREATE TABLE IF NOT EXISTS `Players` (";
$sql .= "`Name` varchar(512) NOT NULL,";
$sql .= " `Score` int(5)";
$sql .= ")ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$result = $mysqli->query($sql);


// insert data into the table player 
// $sql_add = "INSERT INTO `Players` (`Name`, `Score`) VALUES
// ('Cumuls', 5),('Margaux', 4);";
// $result = $mysqli->query($sql_add);

// cleand data base 
// $sql_clean = "DELETE FROM `Players`;";
// $result = $mysqli->query($sql_clean);
?>
