<?php 
include('server.php');

    $query = "SELECT * FROM users WHERE quizID = '$quizID'";
    $retval = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($retval)) {
        echo $row['name']."<br>";
    }

?>