const username = document.getElementById("username");
const saveScoreBtn = document.getElementById("save-score");
const mostRecentScore = localStorage.getItem("mostRecentScore");

//oder highscore? Was macht einen Highscore aus?
//const highStore = localStorage.getItem("highScore");
//console.log(mostRecentScore);
finalScore.innerText = mostRecentScore;

localStorage.setItem("mostRecentScore", JSON .stringify(score));
saveHighScore(HighScore);
//console.log(JSON.parse(localStorage.getItem("highscores")));

const score = {
    score: mostRecentScore,
    name: username.value
};   

HighScore.push(score);
console.log(HighScore);

// Scores vergleichen?
highScores.sort = function(compare) {
    return compare(a.score, b.score);
    };

// Wie nehme ich nur die besten 3?
//const MAX_HIGHSCORES = 3;
highScores.splice(3);

saveScoreBtn.disabled = !username.value;

/*addEventListener("click", function() {
    const username = document.getElementById("username").value;
    if (username === "") {
        alert("Bitte Namen eingeben");
    } else {
        localStorage.setItem("username", username);
        window.location.href = "end.html";
// sinnvoll mit einem Listener?
*/

}
);

username.addEventListener("keyup", function(event) {
});

//Wenn der Username leer ist, dann ist der Button disabled
//console.log(username.value);));

saveHighscore = function(score) {
    let scoreList = JSON.parse(localStorage.getItem("highscores")) || [];
    scoreList.push(score);
    localStorage.setItem("highscores", JSON.stringify(scoreList));
}
// 
 
//
// getNewQuestion = () => {
//     if (availableQuestions.length === 0 || questionCounter >= MAX_QUESTIONS) {
//         localStorage.setItem("highscore", score);
//         return window.location.assign("end.html");
//     }
//     questionCounter++;
//     let questionIndex = Math.floor(Math.random() * availableQuestions.length);
//     let question = availableQuestions[questionIndex];
//     questionCounterText.innerText = "Frage " + questionCounter + " von " + MAX_QUESTIONS;
//     questionElement.innerText = question.question;
//     choice1Element.innerText = question.choice1;
//     choice2Element.innerText = question.choice2;
//     choice3Element.innerText = question.choice3;
//     choice4Element.innerText = question.choice4;
//     availableQuestions.splice(questionIndex, 1);
//     acceptingAnswers = true;
// }
//
// getNewQuestion();
