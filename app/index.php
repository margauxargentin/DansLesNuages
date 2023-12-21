<?php
    include('./config.php');
    include('./seeder.php');
    // keep all players whith their score
    $sql = "SELECT * FROM `Players` ORDER BY Score DESC";
    $result = $mysqli->query($sql);
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
            <form id="start-container"  action="./savePlayer.php" method="post">
                <label for="username">Entrez votre pseudo :</label>
                <input type="text" id="username" name="username" />
                <button>Commencer le quizz</button>
            </form>
        </section>
<?php include('./lastCol.php');?>
<?php include('./footer.php'); ?>