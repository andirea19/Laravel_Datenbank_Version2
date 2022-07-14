<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Start</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="quiz.css">
  </head>
  <body>
    <div class="container">
        <div id="quiz" class="justify-center flex-column">

            <div id="header" class="quiz-header">
                <p id="progressText" class="header-prefix">Quiz</p>
                <p class="header-prefix">Quizfragen      </p>
                <h1 class="header-main" id="questionCounter">Frage 1</h1>
            </div>

            <div id="header" class="quiz-header">
                <p class="header-prefix">Punkte</p>
                <h1 class="header-main" id="score">0</h1>
            </div>

            <h2 id="question">Frage 1</h2>
            <div class="choice-container">
                <p class="choice-prefix">Antwort</p>
                <p class="choice-text" data-number="1">Antwort 1</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">Antwort</p>
                <p class="choice-text" data-number="2">Antwort 2</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">Antwort</p>
                <p class="choice-text" data-number="3">Antwort 3</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">Antwort</p>
                <p class="choice-text" data-number="4">Antwort 4</p>
            </div>
        </div>
    </div>
    <script src="quiz.js"></script>
</body>
</html>