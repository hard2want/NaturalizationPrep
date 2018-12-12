<?php 

require_once('bestQuizFunctions.php');

$action = filter_input(INPUT_POST, 'action');                                   // capture submit button action for switch statement

if ($action === NULL){                                                          // if no action exists, default to the setup page
    include('setup.php');                                                       // include the setup.php page upon site load
    $score = 0;                                                                 // default the test takers' score to zero
}

$allQuestions = array();                                                        // an array for the questions
$allCorrectAnswers = array();                                                   // an arry for correct answers
$allIncorrectAnswers = array();                                                 // an array for incorrect answers



switch($action){                                                                // actions arrive via post from each page's submit button
    case 'start':                                                               // start case is from setup.php to begin the quiz
        best\quizFunctions\allQ();                                                                 // call to use all questions in the test pool
        $indexTracker = best\quizFunctions\indexTracker(count($allQuestions));                     // send the number of questions in the pool as the argument to be used as the bounds for the random number generator
        include('quiz_view.php');                                               // include the quiz view to show the questions randomly selected
        break;
    case 'grade':                                                               // grade case is from quiz_view.php to grade the user's answers
        $score = 0;                                                             // reset the user's score to zero
        $iT = $_POST['iT'];                                                     // the index tracker array is passed back to index.php
        $indexTracker = array();                                                // a new array is readied for the index tracker's question numbers
        $indexTracker = explode(" ", $iT);                                      // the string is exploded back to an array format
        best\quizFunctions\allQ();                                                                 // all questions are generated again to use on the results page

        // capture user submissions to each of the 10 questions
        $a1 = $_POST['0'];
        $a2 = $_POST['1'];
        $a3 = $_POST['2'];
        $a4 = $_POST['3'];
        $a5 = $_POST['4'];
        $a6 = $_POST['5'];
        $a7 = $_POST['6'];
        $a8 = $_POST['7'];
        $a9 = $_POST['8'];
        $a10 = $_POST['9'];

        // score each question if correct
        if ($a1 == 0){$score++;}
        if ($a2 == 0){$score++;}
        if ($a3 == 0){$score++;}
        if ($a4 == 0){$score++;}
        if ($a5 == 0){$score++;}
        if ($a6 == 0){$score++;}        
        if ($a7 == 0){$score++;}        
        if ($a8 == 0){$score++;}       
        if ($a9 == 0){$score++;}        
        if ($a10 == 0){$score++;}        
        
        $aSet = array($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10);       // add each user answer to an answer set array
        include('score_view.php');                                              // call the score_view.php file
        break;        
    case 'redo':                                                                // redo case is from score_view.php
        include('setup.php');                                                   // call setup.php to restart quiz
        break;
} // end switch
?>