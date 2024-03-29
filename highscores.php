<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>High Scores</title>
    <link rel="stylesheet" href="app.css" />
    <link rel="stylesheet" href="highscores.css" />
  </head>
  

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HLD0FZ42H9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HLD0FZ42H9');
</script>


  <body>
    <div class="container">
      <div id="highScores" class="flex-center flex-column">
        <h1 id="finalScore">High Scores</h1>
        <ul id="highScoresList"></ul>
        <a class="btn" href="index.php">Go Home</a>
        <a class="btn" href="highscores.php" onclick="reset()">Reset HighScores</a>
      </div>

    </div>
    <script src="highscores.js"></script>
  </body>
</html>
