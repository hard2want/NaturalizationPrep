<?php 

    
    
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Naturalization Practice Test</title>
    </head>
    <body>
        <header>
           <h1>Naturalization Practice Test</h1>            
        </header>
        <main>
            <p>Thank your for taking the quiz.  Your score is <?php echo $score; ?> out of 10.</p>
            <p>
                <?php   $percent = $score*10;
                        $improve = 6 - $score;
                        if ($score/10 >= 0.6){ echo "You PASSED the practice exam with a score of $percent%";} 
                        else {echo "Keep practicing.  You scored a $percent% and needed $improve more correct answers to pass.";}
                ?>                
            </p><br>
            <h2>You correctly answered the following questions</h2>
            <?php   for ($i = 0; $i < count($aSet); $i++) : ?>

                <?php   switch ($aSet[$i]){
                            case '0': 
                                echo $allQuestions[$indexTracker[$i]]; ?> <br><span class="answer0"> <?php
                                echo " Correct: ".implode($allCorrectAnswers[$indexTracker[$i]])."\n"; ?></span><br> <?php
                                break;
                            case 'default':
                                break;}
                ?>
            <br>
            <?php   endfor; ?>
            
            <h2>The following questions require additional study</h2>
            <p>The correct answers are in green.  Incorrect answers are in red.</p>
            <p>You may take another practice exam by selecting the button below.</p>

                <?php   $answerSet = array();        
                        for ($j = 0; $j < count($indexTracker); $j++) : ?>
                <?php       foreach($allIncorrectAnswers[$indexTracker[$j]] as $incorrect){
                                array_push($answerSet, $incorrect);}
                                //print_r($answerSet); 
                                ?><br>
                <?php   switch ($aSet[$j]){
                            case '1':
                                echo $allQuestions[$indexTracker[$j]]; ?><br><span class="answer0"> <?php 
                                echo "Correct: ".implode($allCorrectAnswers[$indexTracker[$j]]); ?></span><br><span class="wrong"> <?php
                                echo "Your Answer: ".$answerSet[0]; ?> </span><br> <?php
                                break;
                            case '2':
                                echo $allQuestions[$indexTracker[$j]]; ?><br><span class="answer0"> <?php 
                                echo "Correct: ".implode($allCorrectAnswers[$indexTracker[$j]]); ?></span><br><span class="wrong"> <?php
                                echo "Your Answer: ".$answerSet[1]; ?> </span><br> <?php
                                break;
                            case '3':
                                echo $allQuestions[$indexTracker[$j]]; ?><br><span class="answer0"> <?php 
                                echo "Correct: ".implode($allCorrectAnswers[$indexTracker[$j]]); ?></span><br><span class="wrong"> <?php
                                echo "Your Answer: ".$answerSet[2]; ?> </span><br> <?php
                                break;}                                
                        $answerSet = array();
                        endfor; ?>
            <form action="." method="post">
                <input type="hidden" name="action" value="redo">        
                <div id="submit">
                    <label>&nbsp;</label>
                    <input type="submit" value="Take Another Quiz">
                </div>
            </form>
        </main>
        <footer>
            <p>
                <?php   date_default_timezone_set('America/Chicago');
                        $now = new DateTime();
                ?>
                Your exam was received <?php echo $now->format('l F j, Y \a\t g:i a'); ?>
            </p>
        </footer>
    </body>
</html>