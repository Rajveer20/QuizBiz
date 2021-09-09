<?php include('server.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JS -->
    <script src="script.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

    <title>QuizBiz</title>
  </head>
  <body>
    <div class="container">
      <div class="row" id="logo">
       <img src="img/quizbiz.svg" alt="QuizBiz" height=150px>
      </div>
      <form method="post" action="index.php">
        <div class="row" id="mainbtn">
          <button onclick="showQues1()" class="btn btn-primary" type="submit" name="create" value="create">CREATE a QUIZ</button>
        </div>
        <div class="row" id="mainbtn">
          <a class="btn btn-primary" type="button">JOIN a QUIZ</a>
        </div>
      </form>
        <div style="background:#FFAD05; color: #DF2935;" class="row fixed-bottom p-4 mx-auto align-items-center" id="forum">
          <p align=center> Check out our Forum! <a href="forum.html">QuizBiz Forum</a></p>
        </div>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>