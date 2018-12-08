<?php 

require_once('question_set.php');


$action = filter_input(INPUT_POST, 'action');



if ($action === NULL){
    include('index.html');
    $score = 0;
}


$allQuestions = array();
$allCorrectAnswers = array();
$allIncorrectAnswers = array();
    
    foreach ($catAGpoadQ as $q){array_push($allQuestions, $q);}
    foreach ($catAGsogQ as $q){array_push($allQuestions, $q);}
    foreach ($catAGrarQ as $q){array_push($allQuestions, $q);}
    foreach ($catAHcpaiQ as $q){array_push($allQuestions, $q);}
    foreach ($catAH1800sQ as $q){array_push($allQuestions, $q);}
    foreach ($catAHrahQ as $q){array_push($allQuestions, $q);}
    foreach ($catICgeoQ as $q){array_push($allQuestions, $q);}
    foreach ($catICsymQ as $q){array_push($allQuestions, $q);}
    foreach ($catICholQ as $q){array_push($allQuestions, $q);}    
    
    foreach ($catAGpoadC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAGsogC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAGrarC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAHcpaiC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAH1800sC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAHrahC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICgeoC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICsymC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICholC as $c){array_push($allCorrectAnswers, $c);}
    
    foreach ($catAGpoadI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catAGsogI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catAGrarI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catAHcpaiI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catAH1800sI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catAHrahI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catICgeoI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catICsymI as $i){array_push($allIncorrectAnswers, $i);}
    foreach ($catICholI as $i){array_push($allIncorrectAnswers, $i);}
    
function clearScore(){$score = 0;}


function indexTracker($num){
    $indexTracker = array();
    while (count($indexTracker) < 4){
        $randomNumber = random_int(0, $num-1);
        array_push($indexTracker, $randomNumber);
        $indexTracker = array_unique($indexTracker);
        shuffle($indexTracker);
    } // end while
    return $indexTracker;
} // end newQuiz()



switch($action){

    case 'start':
        $indexTracker = indexTracker(count($allQuestions));
        include('quiz_view.php');
        break;
    case 'grade':
        $score = 0;
        $iT = $_POST['iT'];
        $indexTracker = array();
        $indexTracker = explode(" ", $iT);
        // capture user submissions
        $a1 = $_POST['0'];
        $a2 = $_POST['1'];
        $a3 = $_POST['2'];
        $a4 = $_POST['3'];
        
        if ($a1 == 0){$score++;}
        if ($a2 == 0){$score++;}
        if ($a3 == 0){$score++;}
        if ($a4 == 0){$score++;}

        $aSet = array($a1, $a2, $a3, $a4);
        include('score_view.php');        
        break;        
    case 'redo':
        $indexTracker = indexTracker(count($allQuestions));
        $score = 0;
        include('quiz_view.php');
        break;
} // end switch

?>


