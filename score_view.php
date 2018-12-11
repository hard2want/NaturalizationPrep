<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Naturalization Practice Test</title>
    </head>
    <body>
        <header>
            <img src="images/USCIS400x120.png" alt="U.S. Imigration Services Logo" width="400" height="120">
            <h1>Naturalization Practice Test</h1>
        </header>
        <main>
            <div id="results">
                <p>Thank your for taking the quiz.</p>
                <p><?php   $percent = $score*10;                                                                                                    // calculate percent
                            $improve = 6 - $score;                                                                                                  // calculate questions needed to pass
                            if ($score/10 >= 0.6){ echo "You PASSED the practice exam with a score of $percent%";}                                  // passing message
                            else {echo "Keep practicing.  You scored $percent% and needed $improve more correct answers to pass."; } ?></p>           <!-- try again message -->
                <p><span class="answer0">The correct answers are in green.</span><span class="wrong">  Incorrect answers are in red.</span></p>
                <p>You may take another practice exam by selecting the "Take Another Quiz" button below.</p><br> 
            </div>
            <div class="flex-container">
                <div>
                    <h2>You correctly answered the following questions</h2>
                        <?php   for ($i = 0; $i < count($aSet); $i++) : ?>
                        <?php   switch ($aSet[$i]){                                                                                                 // show questions & answers for correct responses
                                    case '0': 
                                        echo $allQuestions[$indexTracker[$i]]; ?> <br><span class="answer0"> <?php                                  // show question
                                        echo " Correct: ".implode($allCorrectAnswers[$indexTracker[$i]])."\n"; ?></span><br><br> <?php              // show answer
                                        break;
                                    case 'default':
                                        break;}
                                endfor; 
                                if ($score == 0){ echo "You do not have any correct answers.  Retake the practice quiz via the button below.";} ?>  <!-- message if all are wrong -->
                </div>
                <div>
                    <h2>The following questions require additional study</h2>
                        <?php   if ($score == 10){ echo "You correctly answered every question !!"; }                                               // all correct message
                                else {
                                $answerSet = array();                                                                                               // array for incorrect responses
                                for ($j = 0; $j < count($indexTracker); $j++) : ?>
                        <?php       foreach($allIncorrectAnswers[$indexTracker[$j]] as $incorrect){
                                        array_push($answerSet, $incorrect);}                                                                        // add incorrect answer to answer set
                                switch ($aSet[$j]){                                                                                                 // cycle through the answer set
                                    case '1':
                                        echo $allQuestions[$indexTracker[$j]]; ?><br>                                                               <!-- show question -->
                                        <span class="wrong"> <?php echo "Your Answer: ".$answerSet[0]; ?> </span><br>                               <!-- show user answer -->
                                        <span class="answer0"> <?php echo "Correct: ".implode($allCorrectAnswers[$indexTracker[$j]]); ?></span><br><br> <?php // show correct answer
                                        break;
                                    case '2':
                                        echo $allQuestions[$indexTracker[$j]]; ?><br>                                                               <!-- show question -->
                                        <span class="wrong"> <?php echo "Your Answer: ".$answerSet[1]; ?> </span><br>                               <!-- show user answer -->
                                        <span class="answer0"> <?php echo "Correct: ".implode($allCorrectAnswers[$indexTracker[$j]]); ?></span><br><br> <?php // show correct answer
                                        break;
                                    case '3':
                                        echo $allQuestions[$indexTracker[$j]]; ?><br>                                                               <!-- show question -->
                                        <span class="wrong"> <?php echo "Your Answer: ".$answerSet[2]; ?> </span><br>                               <!-- show user answer -->
                                        <span class="answer0"> <?php echo "Correct: ".implode($allCorrectAnswers[$indexTracker[$j]]); ?></span><br><br> <?php // show correct answer
                                        break;}                                
                                $answerSet = array();                                                                                               // empty answerSet array
                                endfor;} ?><br>
                </div>
            </div>
            <form action="." method="post">
                <input type="hidden" name="action" value="redo">                                                                                    <!-- send redo to index.php switch -->
                <input type="submit" value="Take Another Quiz"  id="button">                                                                        <!-- enable user to take another exam -->
            </form>
        </main>
        <footer>
            <p><?php   date_default_timezone_set('America/Chicago');                                                                                // set local time zone
                        $now = new DateTime(); ?>
                Your exam was received <?php echo $now->format('l F j, Y \a\t g:i a'); ?></p>                                                       <!-- show day, date, time user completes exam -->
        </footer>
    </body>
</html>