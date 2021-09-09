<?php

    session_start();

    //Connecting to database
    $db = mysqli_connect('localhost', 'root', '', 'quizbiz') or die( "could not connect to database" );
            
    //initializing variables
    $quizID = "ABCDEF";
    $question = "";
    $option1 = "";
    $option2 = "";
    $option3 = "";
    $option4 = "";
    $c_option = "";


    //If create button is clicked
    if(isset($_POST['create'])){

        header("location: createQuiz.php");
    }
    
    //If Next button is clicked
    if(isset($_POST['next'])){

        for($x=0; $x < 10; $x++){
            $quizID = generateRandomString();
            //check if quizID already exists
            $boo = false;
            while(boo==false){
                $check = "SELECT * FROM quizdb WHERE quizID=$quizID";
                $result = mysqli_query($db, $check);
                if($result)
                    $quizID = generateRandomString();
                else
                    $boo = true;
            }
            $question = $_POST['question'][$x];
            $option1 = $_POST['option1'][$x];
            $option2 = $_POST['option2'][$x];
            $option3 = $_POST['option3'][$x];
            $option4 = $_POST['option4'][$x];
            $c_option = $_POST['c_op'][$x];

            $sql = "INSERT INTO quizdb (ques, op1, op2, op3, op4, c_op, quizID)
                    VALUES ('$question', '$option1', '$option2', '$option3', '$option4', '$c_option', '$quizID');";
            $_SESSION['host'] = true;
            mysqli_query($db, $sql);
            header("location:room.php");
        }
    } 

    if(isset($_POST['back'])){
        session_destroy();
        header("location: index.php");
    }
?>