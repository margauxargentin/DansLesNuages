// ====== MANAGE AD WINDOWS ====== //
function closeAd(id){
    ad=document.getElementById(id).getElementsByTagName("img");
    button = document.getElementById(id).getElementsByTagName("button");
    console.log(button)
    if (ad[0].style.display === 'none') {
        ad[0].style.display = 'block';
        button[0].innerHTML="close";

    } else {
        ad[0].style.display = 'none';
        button[0].innerHTML="see";
    }
}



// ====== MANAGE QUIZZ ====== //
const questions = [
    {
        question: "A quoi te fait penser le nuage ?",
        options: ["Coq", "Coeur", "Patate"],
        answer: "Coq",
        image: "chicken"
    },
    {
        question: "A quoi te fait penser le nuage ?",
        options: ["Banane", "Baleine", "Sirène"],
        answer: "Baleine",
        image: "whale"
    },
    {
        question: "A quoi te fait penser le nuage ?",
        options: ["Rhinocéros", "Dumbo", "Eléphant"],
        answer: "Eléphant",
        image: "elephant"
    },
    {
        question: "A quoi te fait penser le nuage ?",
        options: ["Loup", "Papillon", "Chien"],
        answer: "Chien",
        image: "dog"
    },
    {
        question: "A quoi te fait penser le nuage ?",
        options: ["Cochon", "Sanglier","Veau"],
        answer: "Cochon",
        image: "pig"
    },

];
let currentQuestion=0;

// Display the current question
function displayQuestion() {
    const questionElement = document.getElementById("question-element");
    const optionsContainer = document.getElementById("answers-container");
    // Print the question
    questionElement.textContent = questions[currentQuestion].question;
    
    //Print the image
    // document.getElementsByClassName("question-image")[0].src=
    document.getElementsByClassName("question-image")[0].src = "./medias/cloud/"+ questions[currentQuestion].image+".png";
    // // Affiche les options
    optionsContainer.innerHTML = "";
    questions[currentQuestion].options.forEach(option => {
        const button = document.createElement("button");
        button.textContent = option;
        button.addEventListener("click", () => checkAnswer(option));
        optionsContainer.appendChild(button);
    });
}

// Fonction pour vérifier la réponse
function checkAnswer(answer) {
    if (answer === questions[currentQuestion].answer) {
        // La réponse est correcte (vous pouvez ajouter des actions supplémentaires ici)
        alert("Bonne réponse !");
    } else {
        // La réponse est incorrecte (vous pouvez ajouter des actions supplémentaires ici)
        alert("Mauvaise réponse !");
    }

    // Passer à la question suivante
    currentQuestion++;

    // Vérifiez s'il reste des questions
    if (currentQuestion < questions.length) {
        displayQuestion();
    } else {
        // Fin du quiz
        alert("Quiz terminé !");
    }
}

// Fonction pour passer à la question suivante
function nextQuestion() {
    // Vérifiez s'il reste des questions
    if (currentQuestion < questions.length) {
        displayQuestion();
    } else {
        // Fin du quiz
        alert("Quiz terminé !");
    }
}

displayQuestion();

