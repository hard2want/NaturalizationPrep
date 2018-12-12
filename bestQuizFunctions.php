<?php

namespace best\quizFunctions {
    // future feature expansion - enable candidates to study all (but only) questions within American Government: Principls of American Democracy section
function agpoad(){                                                              // function to load American Government: Principles of American Democracy questions & answers
    require('question_set.php');                                                // require the question set
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;             // access the arrays
    foreach ($catAGpoadQ as $q){array_push($allQuestions, $q);}                 // load the questions from the section into the array
    foreach ($catAGpoadC as $c){array_push($allCorrectAnswers, $c);}            // load the correct answers into the array
    foreach ($catAGpoadI as $i){array_push($allIncorrectAnswers, $i);}          // load the incorrect answers into the array
    } // end agpoad()

// future feature expansion - enable candidates to study all (but only) questions within American Government: System of Government section    
function agsog(){                                                               // function to load American Government: System of Government questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAGsogQ as $q){array_push($allQuestions, $q);}
    foreach ($catAGsogC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catAGsogI as $i){array_push($allIncorrectAnswers, $i);}
    } // end agsog()   
    
// future feature expansion - enable candidates to study all (but only) questions within American Government: Rights and Responsibilities section
function agrar(){                                                               // function to load American Government: Rights and Responsibilities questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAGrarQ as $q){array_push($allQuestions, $q);}
    foreach ($catAGrarC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catAGrarI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end agrar()

// future feature expansion - enable candidates to study all (but only) questions within American History: Colonial Period and Independence section    
function ahcpai(){                                                              // function to load American History: Colonial Period and Independence questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAHcpaiQ as $q){array_push($allQuestions, $q);}
    foreach ($catAHcpaiC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAHcpaiI as $i){array_push($allIncorrectAnswers, $i);}    
} // end ahcpai()    

// future feature expansion - enable candidates to study all (but only) questions within American History: 1800's section
function ah1800s() {                                                            // function to laod American History: 1800's questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAH1800sQ as $q){array_push($allQuestions, $q);}    
    foreach ($catAH1800sC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAH1800sI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end ah1800s

// future feature expansion - enable candidates to study all (but only) questions within American History: Rights and Responsibilities section    
function ahrah(){                                                               // function to load American History: Recent American History and Other Important Historical Information questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catAHrahQ as $q){array_push($allQuestions, $q);}    
    foreach ($catAHrahC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catAHrahI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end ahrah()    

// future feature expansion - enable candidates to study all (but only) questions within Integrated Civics: Geography section    
function icgeo(){                                                               // function to load Integrated Civics: Geography questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catICgeoQ as $q){array_push($allQuestions, $q);}    
    foreach ($catICgeoC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICgeoI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end icgeo()    

// future feature expansion - enable candidates to study all (but only) questions within Integrated Civics: Symbols section
function icsym(){                                                               // function to load Integrated Civics: Symbols questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catICsymQ as $q){array_push($allQuestions, $q);}    
    foreach ($catICsymC as $c){array_push($allCorrectAnswers, $c);}
    foreach ($catICsymI as $i){array_push($allIncorrectAnswers, $i);}    
    } // end icsym()

// future feature expansion - enable candidates to study all (but only) questions within Integrated Civics: Holidays section
function ichol(){                                                               // function to load Integrated Civics: Holidays questions & answers
    require('question_set.php');
    global $allQuestions, $allCorrectAnswers, $allIncorrectAnswers;
    foreach ($catICholQ as $q){array_push($allQuestions, $q);}        
    foreach ($catICholC as $c){array_push($allCorrectAnswers, $c);}    
    foreach ($catICholI as $i){array_push($allIncorrectAnswers, $i);}
    } // end ichol()

// future feature expansion - enable candidates to study all (but only) questions within American Government section
function agAll(){                                                               // function to load all American Government questions & answers
    agpoad();                                                                   // call to load all Principles of American Democracy questions & answers
    agsog();                                                                    // call to load all System of Government questions & answers
    agrar();                                                                    // call to load all Rights and Responsibilities questions & answers
} // end agAll()

// future feature expansion - enable candidates to study all (but only) questions within American History section
function ahAll(){                                                               // function to load all American History questions & answers
    ahcpai();                                                                   // call to load all Colonial Period and Independence questions & answers
    ah1800s();                                                                  // call to load all 1800's questions & answers
    ahrah();                                                                    // call to load all Recent American History questions & answers
} // end ahAll()

// future feature expansion - enable candidates to study all (but only) questions within Integrated Civics section
function icAll(){                                                               // function to load all Integrated Civics questions & answers
    icgeo();                                                                    // call to load all Geography questions & answers
    icsym();                                                                    // call to load all Symbols questions & answers
    ichol();                                                                    // call to laod all Holidays questions & answers
} // end icAll()

// default feature - load all questions into the quiz bank
function allQ(){                                                                // function to load all questions & answers
    agAll();                                                                    // call to load all American Government questions & answers
    ahAll();                                                                    // call to load all American History questions & answers
    icAll();                                                                    // call to load all Integrated Civics questions & answers
} // end allQ()

function indexTracker($num){                                                    // function to create an array with each randomly selected question number
    $indexTracker = array();                                                    // set up an array to hold the randomly selected question numbers
    while (count($indexTracker) < 10){                                          // set the default number of questions to select to 10
        $randomNumber = random_int(0, $num-1);                                  // generate 10 random numbers
        array_push($indexTracker, $randomNumber);                               // store each random number into the index tracker array
        $indexTracker = array_unique($indexTracker);                            // remove any duplicate random numbers
        shuffle($indexTracker);                                                 // shuffle the random numbers so empty index values from array_unique() are eliminated
    } // end while
    return $indexTracker;                                                       // return the array to the caller
} // end indexTracker()

}
?>