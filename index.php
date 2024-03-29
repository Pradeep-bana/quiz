<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="2-_CwZ8NTuMll5jdLZDPkXV3AfJBk-5aImn3d8bxGsg" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quick Quiz</title>
    <link rel="stylesheet" href="app.css" />
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
      <div id="home" class="flex-center flex-column">
        <h1>Quick Quiz</h1>
        <a class="btn" id='cheif_minister' href="game.php" onclick="func4()">Authors</a> 
        <a class="btn" id='cheif_minister' href="game.php" onclick="func3()">All CM</a>        
        <a class="btn" id='bana' href="game.php" onclick="func1()">Important Full Forms</a>        
        <a class="btn" id='computer' href="game.php" onclick="func2()">Computer</a>
        <a class="btn" href="highscores.php">High Scores</a>
      </div>
    </div>
  </body>
  <script>
    function func1(){
      localStorage.removeItem('Data');
      let data = localStorage.setItem('Data','Defence');
    }
    function func2(){
      localStorage.removeItem('Data');
      let data = localStorage.setItem('Data','Computer');
    }
    function func3(){
      localStorage.removeItem('Data');
      let data = localStorage.setItem('Data','Chief_Minister');
    }
    function func4(){
      localStorage.removeItem('Data');
      let data = localStorage.setItem('Data','Authors');
    }
  </script>
</html>
