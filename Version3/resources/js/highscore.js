const highScoreList = document.getElementById('high-scores-list');

//hier mit Max? oder auf der Seite
const MAX_HIGHSCORES = 3;
const highScores = JSON.parse(localStorage.getItem('highscores')) || [];

//console.log(highScores);

highScoresList.innerHTML = 'Highscores:<br>'.HighScores;

highScores.map(score => {
    return( '<li class="list-group-item">' + score.name + ': ' + score.score + '</li>');
// map zum Umwandeln in eine Liste
//    highScoreList.innerHTML += '<li class="list-group-item">' + score.name + ': ' + score.score + '</li>';
})    
.join('');

//TO-DO Datenbank einbinden als Speicherplatz für Highscores