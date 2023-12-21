<?php 

include('./config.php');

// Récupérez les données du formulaire
$username = $_POST['username'];
// empecher les injections SQL
$username = $mysqli->real_escape_string($username);
$sql_addPlayer = "INSERT INTO `Players` (`Name`, `Score`) VALUES('".$username."', 0);";
$result = $mysqli->query($sql_addPlayer);
?>

<?php include('./header.php'); ?>
<?php include ('firstCol.php');?>
    <section>
        <h1> Dans les nuages</h1>
        <div class="intro">
            <h2>Quizz</h2>
            <p>J'adore regarder le ciel et imaginer les formes des nuages.
                Saura-tu retrouver les formes de chacun d'eux ?</p>
            <img src="./medias/Cumulus.svg" alt="Cumulus, un nuage blanc souriant avec un petit soleil dans le coin est allongé dans l'herbe en regardant vers le ciel">
        </div>

       <form class="question-container question"  method="post">
            <div  class="image">
                <img class="question-image" >
           </div>
            <label id="question-element"></label>
            <div id="answers-container">
            </div>
        </form> 
    </section>
<?php include('./lastCol.php');?>
<?php include('./footer.php'); ?>

