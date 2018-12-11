<?php 




$action = filter_input(INPUT_POST, 'action');

//$all = isset($_POST['all']);

if ($action === NULL){
    include('setup.php');
    $score = 0;
}


$allQuestions = array();
$allCorrectAnswers = array();
$allIncorrectAnswers = array();
    
function agpoad(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAGpoadQ as $q){array_push($allQuestions, $q);}    
    foreach ($catAGpoadC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catAGpoadI as $i){array_push($allIncorrectAnswers, $i);}
    } // end agpoad()

function agsog(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAGsogQ as $q){array_push($allQuestions, $q);}
    foreach ($catAGsogC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catAGsogI as $i){array_push($allIncorrectAnswers, $i);}
    } // end agsog()   
    
function agrar(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAGrarQ as $q){array_push($allQuestions, $q);}
    foreach ($catAGrarC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catAGrarI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end agrar()

function ahcpai(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAHcpaiQ as $q){array_push($allQuestions, $q);}
    foreach ($catAHcpaiC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAHcpaiI as $i){array_push($allIncorrectAnswers, $i);}    
} // end ahcpai()    

function ah1800s() {
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAH1800sQ as $q){array_push($allQuestions, $q);}    
    foreach ($catAH1800sC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAH1800sI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end ah1800s

function ahrah(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAHrahQ as $q){array_push($allQuestions, $q);}    
    foreach ($catAHrahC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAHrahI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end ahrah()    

function icgeo(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catICgeoQ as $q){array_push($allQuestions, $q);}    
    foreach ($catICgeoC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICgeoI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end icgeo()    

function icsym(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catICsymQ as $q){array_push($allQuestions, $q);}    
    foreach ($catICsymC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICsymI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end icsym()

function ichol(){
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catICholQ as $q){array_push($allQuestions, $q);}        
    foreach ($catICholC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catICholI as $i){array_push($allIncorrectAnswers, $i);}
    } // end ichol()

function agAll(){
    agpoad();
    agsog();
    agrar();
} // end agAll()

function ahAll(){
    ahcpai();
    ah1800s();
    ahrah();
} // end ahAll()

function icAll(){
    icgeo();
    icsym();
    ichol();
} // end icAll()

function allQ(){
    agAll();
    ahAll();
    icAll();
} // end allQ()

function indexTracker($num){
    $indexTracker = array();
    while (count($indexTracker) < 10){
        $randomNumber = random_int(0, $num-1);
        array_push($indexTracker, $randomNumber);
        $indexTracker = array_unique($indexTracker);
        shuffle($indexTracker);
    } // end while
    return $indexTracker;
} // end newQuiz()


switch($action){

    case 'start':
//        if ($all){
//            allQ();
//        }
        
        allQ();
        $indexTracker = indexTracker(count($allQuestions));
        
        include('quiz_view.php');
        break;
    case 'grade':
        $score = 0;
        $iT = $_POST['iT'];
        $indexTracker = array();
        $indexTracker = explode(" ", $iT);
        allQ();


        // capture user submissions
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
        
        $aSet = array($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10);
        include('score_view.php');        
        break;        
    case 'redo':
        include('setup.php');
        break;
} // end switch

?>


