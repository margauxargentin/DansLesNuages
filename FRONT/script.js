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
        question: "Quelle est la capitale de la France?",
        options: ["Paris", "Londres", "Berlin", "Madrid"],
        answer: "Paris",
        image: "hearth"
    },
    {
        question: "Quelle est la couleur du ciel?",
        options: ["Bleu", "Vert", "Rouge", "Jaune"],
        answer: "Bleu",
        image:""
    },
    // Ajoutez d'autres questions ici
];
let currentQuestion=0;

// Display the current question
function displayQuestion() {
   
    const questionContainer = document.getElementsByClassName("question");
    const firstquestion = document.getElementById("first-question");
    const questionImage = document.getElementById("question-image");
    const questionElement = document.getElementById("question");
    const optionsContainer = document.getElementById("answers-container");

    firstquestion.classList.add("hidden");
    console.log(questionContainer[0]);
    questionContainer[0].classList.remove("hidden");
    // Print the question
    questionElement.textContent = questions[currentQuestion].question;
    
    //Print the image
    questionImage.src="medias/cloud/hearth.jpg";
    questionImage.classList.add("image");

    // Affiche les options
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

