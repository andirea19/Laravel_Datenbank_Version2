//console.log(question);

const question = document.getElementById("question");
const choices = getElementsByClassName("choice-text");

//console.log(choices);

//Damit nicht doppelt: const progress = document.getElementById("progress-text");
//const score = document.getElementById("score");
const CORRECT_BONUS = 10;
const MAX_QUESTIONS = 3;
const questionCounterText = document.getElementById("question-counter");
const scoreText = document.getElementById("score");

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let questionCounter = 0;
// Kopie von fullQuestions Array zum Bearbeiten
let availableQuestions = [];

let questions = [];

// HHTP Request zum Abrufen der Fragen
fetch("questions.json")
    .then(res => {
     console.log(res);
     return res.json();
    }).then(loadedQuestions => {
        console.log(loadedQuestions);
//        questions = loadedQuestions;
        questions = loadedQuestions.questions;
        startGame();
    });

    .catch(err => {
        console.error(err);
    }
    );
    

/*  Fragen hardcoded zum Testen  {
        question: "Wie heißt der Hauptstadt von Vorarlberg?",
        choice1: "Dornbirn",
        choice2: "Bregenz",
        choice3: "Vorarlberg-Stadt",
        choice4: "Triesen",
//        correctAnswer: "Bregenz"
        Answer: 2
    },
    {
        question: "Wie heißt der Hauptstadt von Frankreich?",
        choice1: "Paris",
        choice2: "Marseille",
        choice3: "Lyon",
        choice4: "Toulouse",
//        correctAnswer: "Paris"
        Answer: 1
    },
    {
        question: "Wie heißt der Hauptstadt von Italien?",
        choice1: "Roma",
        choice2: "Milano",
        choice3: "Firenze",
        choice4: "Napoli",
        Answer: 1
    },

    {
        question: "Wie heißt der Hauptstadt von Deutschland?",
        choice1: "Berlin",
        choice2: "München",
        choice3: "Köln",
        choice4: "Frankfurt",
        Answer: 1

    },
*/

startQuiz = () => {
    questionCounter = 0;
    score = 0;
//Den Arry Question mit Spread aufteilen
    availableQuestions = [...questions];
//console.log(availableQuestions);
    getNewQuestion();
};

getNewQuestion = () => {

    if (availableQuestions.length === 0 || questionCounter >= MAX_QUESTIONS) {
        //Ende vom quiz
        return window.location.assign("end.html");
    }

    questionCounter++;
    questionCounterText.innerText = "Frage " + questionCounter + " von " + MAX_QUESTIONS;
    
//random Frage aus dem Pool - floor ist die basis - length verändert sich
    const questionIndex = Math.floor(Math.random() * availableQuestions.length);
    currentQuestion = availableQuestions[questionIndex];
    question.innerText = currentQuestion.question;

    choices.forEach(choice => {
        const number = choice.dataset['number'];
        choice.innerText = currentQuestion["choice" + number];
    
    });	
 //Verwendete Frage entfernen
    availableQuestions.splice(questionIndex, 1);
    console.log(availableQuestions);
    acceptingAnswers = true;

};

/*/Antwort-Phase - Antworten erlaufen
    acceptingAnswers = true;
    let score = 0;
    let questionCounter = 0;
*/

//Werden Antworten akzeptiert oder nicht?<

choices.forEach(choice => {
    choice.addEventListener("click", e => {
        console.log(e.target);
        if (!acceptingAnswers) return;

        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset["number"];
 //       console.log(selectedAnswer === currentQuestion.Answer); Warum nicht?

 //Klassen Flasch/Wahr
        const classToApply = "incorrect";
        if (selectedAnswer == currentQuestion.Answer) 
            classToApply === "correct") {  
                //Richtige Antwort oder falsch? - Auswahl auf Score
                if (classToApply === "correct") {incrementScore(CORRECT_BONUS);

                selectedChoice.parentElement.classList.add(classToApply);
//  incrementScore(CORRECT_BONUS); Vorher oder nachher?
        }
//Terinär?       const classToApply = selectedAnswer === currentQuestion.Answer ? "correct" : "incorrect";
        console.log(classToApply);
        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply);
        } , 100);

        getNewQuestion() => {
            if (availableQuestions.length === 0) {
                local Storage.setItem("mostRecentScore", score);
//                return window.location.assign("end.html");
    });
});

incrementScore = num => { score += num;
    scoreText.innerText = score;
}

startQuiz();
