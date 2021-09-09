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
    <script>
      $(document).ready(function(){    
        loadstation();
      });

      function loadstation(){
        $("#station_data").load("station.php");
        setTimeout(loadstation, 2000);
      }

    </script>
    <style>
      body{
        overflow: auto;
      }
      .box{
        margin-top: 50px;
        height: 400px;
        column-width: 150px;
        background-color: #F7FFF7;
        border: 5px solid #FFAD05;
        border-radius: 10px;
      }

      .code{
        width: 150px;
        height: 120px;
        margin-top: 10px;
        display: inline-block;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #F7FFF7;
        border: 5px solid #FFAD05;
        border-radius: 10px;
      }
      p{
        font-size: 30px;
        font-family: Anton;
        color: #16001E;
      }

      small{
        color:#DF2935;
        font-size: 15px;
      }
      #station_data{
        text-align: center;
        text-transform: uppercase;
        font-size: 25px;
        font-family: Anton;
      }
      @media (min-height: 300px) {
        #station_data {
          column-width: 150px;
        }
      }
      @media screen and (max-width: 1440px){
      .btn{
          font-size: 15px;
          width: auto;
      }
      @media screen and (max-width: 768px){
        body{
          margin-bottom: 20px;
        }
      
      small{
        font-size: 15px;
      }
      p{
        font-size: 10px;
      }
      .code{
        font-size: 25px;
        text-align: center;
        width: 100%;
        height: 90px;
        border-width: 2px;
        border-radius: 1px;
      }
    }
}
    </style>
  </head>
  <body>
    <div class="container mx-auto w-50">
      <div class="row" id="logo">
       <img src="img/quizbiz.svg" alt="QuizBiz" height=75px>
      </div>
      <div class="row box w-100 h-auto p-3 mx-0">
        <p align=center>Players joined: </p><HR style="height: 2px; color: #FFAD05; opacity: 1;">
          <div id="station_data"></div>
      </div>
      <form method="post" action="room.php">
      <div class="box2 mt-md-3 mt-2 p-md-0 d-flex align-items-center justify-content-md-between justify-content-center flex-wrap">
          <button type="submit" class="btn btn-primary" name="back" onclick="return confirm('Are you sure?')"><b style="font-family: Impact"><</b> BACK</button>
          <p class="code"><small>Room Code: </small><Br><?php echo $quizID ?></p>
          <button type="submit" class="btn btn-primary" name="start">START</button>
      </div>
      </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>