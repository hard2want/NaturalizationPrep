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
                        if ($score/10 >= 0.6){
                            echo "You PASSED the practice exam with a score of $percent%";
                        } else {
                            echo "Keep practicing.  You scored a $percent% and needed $improve more correct answers to pass.";
                        }
                ?>                
            </p>
            <p>The correct answers are in green.  Incorrect answers are in red.  Retake the practice exam by selecting the button below.</p>

                <?php   $answerSet = array();
                        for ($i = 0; $i < count($indexTracker); $i++) : ?><br>
                <?php   echo "Question " . ($i + 1) . ")  ";
                        echo $allQuestions[$indexTracker[$i]];?> <br>
                <?php   $answerSet[0] = implode($allCorrectAnswers[$indexTracker[$i]]);
                        foreach($allIncorrectAnswers[$indexTracker[$i]] as $incorrect){
                            array_push($answerSet, $incorrect);}
                        if ($answerSet[0] == "All of the above"){
                            krsort($answerSet);
                        } else {asort($answerSet);} ?><br>
                <?php   foreach  ($answerSet as $key => $answer) : ?>
                        <span class="answer<?php echo $key; ?>"> <?php echo $answer; ?></span><br>
                <?php   endforeach;
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