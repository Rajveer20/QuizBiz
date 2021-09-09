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

    <script>
    $(document).ready(function() {
      $('.ques1').click();
    });

    </script>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

    <title>QuizBiz</title>
  </head>
  <body>
    <div class="container">
      <div class="row" id="logo">
       <img src="img/quizbiz.svg" alt="QuizBiz" height=75px>
      </div>
      <div class="row">
        <form method="post" action="createQuiz.php">
          <div class="form_content">
          <button type="button" onclick="show('question1')" class="btn btn-primary ques1" id="navques">1</button>
          <button type="button" onclick="show('question2')" class="btn btn-primary" id="navques">2</button>
          <button type="button" onclick="show('question3')" class="btn btn-primary" id="navques">3</button>
          <button type="button" onclick="show('question4')" class="btn btn-primary" id="navques">4</button>
          <button type="button" onclick="show('question5')" class="btn btn-primary" id="navques">5</button>
          <button type="button" onclick="show('question6')" class="btn btn-primary" id="navques">6</button>
          <button type="button" onclick="show('question7')" class="btn btn-primary" id="navques">7</button>
          <button type="button" onclick="show('question8')" class="btn btn-primary" id="navques">8</button>
          <button type="button" onclick="show('question9')" class="btn btn-primary" id="navques">9</button>
          <button type="button" onclick="show('question10')" class="btn btn-primary" id="navques">10</button>
          <button type="button" onclick="showAll()" class="btn btn-primary" id="navques" style="width:auto; padding-left:10px; padding-right:10px;">Show All</button>
          <hr>
            <div id="question1" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 1:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control" id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[0]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[0]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">  
                      <input class="form-check-input" type="radio" name="c_op[0]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[0]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question2" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 2:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[1]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[1]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[1]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[1]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question3" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 3:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[2]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[2]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[2]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[2]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question4" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 4:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[3]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[3]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[3]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[3]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question5" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 5:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[4]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[4]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[4]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[4]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question6" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 6:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[5]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[5]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[5]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[5]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question7" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 7:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[6]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[6]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[6]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[6]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question8" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 8:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[7]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[7]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[7]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[7]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question9" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 9:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[8]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[8]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[8]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[8]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
            <div id="question10" class="page">
              <div class="mb-3">
                <label for="totalQues" class="form-label">Question 10:</label>
                <textarea class="form-control" id="question" name="question[]" rows="3" required></textarea><br>
                <input style="width: 230px" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 1:</label>
                  <input type="option" class="form-control" id="option1" name="option1[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 2:</label>
                  <input type="option" class="form-control" id="option2" name="option2[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 3:</label>
                  <input type="option" class="form-control" id="option3" name="option3[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Option 4:</label>
                  <input type="option" class="form-control"id="option4" name="option4[]" required>
              </div>
              <div class="mb-3">
                  <label for="option1" class="form-label">Correct Option:</label>
                  <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[9]" value="option1" id="op1" required>
                      <label style="color:#8A4FFF;" class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[9]" value="option2" id="op2" required>
                      <label style="color:#8A4FFF;" class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[9]" value="option3" id="op3" required>
                      <label style="color:#8A4FFF;" class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="c_op[9]" value="option4" id="op4" required>
                      <label style="color:#8A4FFF;" class="form-check-label">4</label>
                    </div>
                    <hr>
              </div>
            </div>
          </div>
              <button type="submit" class="nextbtn btn btn-primary" name="next" value="next">NEXT <b style="font-family: Impact">></b></button>
              <button  type="submit" class="backbtn btn btn-primary" name="back" value="back" formnovalidate><b style="font-family: Impact"><</b> BACK</button>
        </form>
      </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>