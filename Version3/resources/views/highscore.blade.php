<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schnelles Quiz - Highscore</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/quiz.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/highscore.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/quizapp.css') }}">
</head>
<body>
<div class="container">
<div id="home" class="flex-center flex-column">
<h1 class="title m-b-md" id="finalScores">
Highscores - Leaderboard
</h1>
<ul class="highscore-list"></ul>

<a class="btn" href="quiz.html" class="btn btn-primary">Starten</a>
<a class="btn btn-primary" href="index.html">Home</a>
</div>
</div>

<script src="quiz.js"></script>
<script src="highscore.js"></script>

</body>
</html>