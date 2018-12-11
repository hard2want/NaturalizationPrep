<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">		
        <script src="validateAnswers.js"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Naturalization Practice Test</title>
    </head>
    <body>
        <header>
            <img src="images/USCIS400x120.png" alt="U.S. Imigration Services Logo" width="400" height="120">
            <h1>Naturalization Practice Test</h1>
        </header>
        <main id="qSet">
            <form action="." onsubmit="return allAnswered()" method="POST">                                                     <!-- validate all questions are answered prior to submitting -->                                                                                    
                <input type="hidden" name="action" value="grade">                                                               <!-- Send the grade action and indexTracker values via POST -->
                <input type="hidden" name="iT" value="<?php echo implode(" ", $indexTracker); ?>">
                <!-- use each question number in the indexTracker to pull from the test bank -->
                <?php   $answerSet = array();                                                                                   // array to hold the answers
                        for ($i = 0; $i < count($indexTracker); $i++) : ?><br> <span id="question">
                <?php   echo ($i + 1) . ")  ";                                                                                  // itemize the question number
                        echo $allQuestions[$indexTracker[$i]];?> </span><br>                                                    <!-- output the question per the randomly picked number within indexTracker -->
                        <input type="hidden" name="Q<?php echo $i; ?>" value="<?php echo $allQuestions[$indexTracker[$i]]?>">   <!-- identify the question # and its value  -->
                <?php   $answerSet[0] = implode($allCorrectAnswers[$indexTracker[$i]]);                                         //  add the correct answer to the answer set
                        foreach($allIncorrectAnswers[$indexTracker[$i]] as $incorrect){array_push($answerSet, $incorrect);}     // add incorrect answers to the answer set
                        if ($answerSet[0] == "All of the above"){krsort($answerSet);}                                           // if "all of the above", sort so answer is last via krsort()                                                                                     
                        else {asort($answerSet);}?><br>                                                                         <!-- else, sort answers alphabetically -->
                <?php   foreach  ($answerSet as $key => $answer) : ?>
                        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $key; ?>" id="<?php echo $i.$key; ?>" > <?php echo $answer; ?><br><!-- present each answer with a radio dial option -->
                <?php   endforeach;                                                                                             
                        $answerSet = array();                                                                                   // empty the answer set array
                        endfor; ?>
                 <input type="submit" value="Submit Answers"  id="button">
            </form>
        </main>
    </body>
</html>