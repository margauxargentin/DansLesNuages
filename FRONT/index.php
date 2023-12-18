<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

<title>Dans les nuages</title>
</head>

<body>
    <main> 
    <aside  id="section1">
        <img src="medias/Cumulus.svg" alt="Nuage blanc souriant avec un petit soleil dans le coin droit">
        <h2>Cumulus</h2>
        <p>Hello, moi c'est Cumulus ! </p>

        <div class="ad" id="ad_Cumulus">
            <button onclick="closeAd('ad_Cumulus')">close</button>
            <img src="medias/ad_Cumulus.png" alt="Nouveau ! acheter Cumulus pour seulement 9,99€ ! Une peluche en 100% polyestère aussi doux que du coton et légère comme l'air.">
        </div>

        <div>
            <h2>Le savais-tu ?</h2>
            <p> <span>La paréidolie</span> est comme une illusion d'optique par laquelle nous associons une forme connue à un élément neutre. C'est par exemple l'effet qui nous permet de trouver une forme familère dans les nuages.</p>
        </div>
    </aside>
     
    <section>
        <h1> Dans les nuages</h1>
        <div class="intro">
        <h2>Petit titre</h2>
        <img alt="Cumulus, un nuage blanc souriant avec un petit soleil dans le coin est allongé dans l'herbe en regardant vers le ciel">
        <p>J'adore regarder le ciel et imaginer les formes des nuages.
        Saura-tu retrouver les formes de chacun d'eux ?</p>
     
        </div>
        <form class="question" id="first-question"> 
            <p >Pour commencer à jouer avec moi, peut-tu me donner un pseudo ?</p> 
            <label for="pseudo">pseudo</label>
            <input type="text" id="pseudo" placeholder="Cumulus">
            <button onclick="displayQuestion()"> C'est parti ! </button>
        </form>
        <!-- <form class="question">
            <div class="image">
                <img src="medias/cloud/hearth.jpg">-->
                <!-- <p >src : <a href="https://actu.fr/bretagne/saint-brieuc_22278/pres-saint-brieuc-nuage-forme-coeur_22917080.html">actu.fr</a></p>     -->
           <!-- </div>
            <label>A quoi ressemble ce nuage pour toi ?</label>
            <button class="answer"> un coeur </button>
            <button class="answer"> une patate </button>
            <button class="answer"> un papillon </button>
            <button>Valider</button>
        </form> 
        <div class="question hidden">
            <div>
                <img id="question-image">
            </div>
            <p id="question"></p>
            <div id="answers-container"></div>
        </div> -->
    
    </section>
    <aside id="section3">
        <h2>Classement</h2>
        <form>
           <label for="name">ton pseudo</label>
           <input type="text" id="name">
           <button>Valider</button>
        </form>
    </aside>
    </main>
    <footer>
        <p> &copy; Margaux Argentin - Apolline Chenais | IAI3 | Décembre 2023</p>
        <a href="https://fr.freepik.com/vecteurs-libre/vecteur-fond-nuage-fond-ecran-mignon_18247701.htm#query=Fond%20D%20039%20%C3%A9cran%20De%20Nuages&position=34&from_view=search&track=ais&uuid=b979f6c4-3ace-44dd-85e0-051d5da663b6">Image de rawpixel.com</a> sur Freepik
    </footer>
</body>
</html>