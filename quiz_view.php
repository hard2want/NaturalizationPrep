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
            <form action="." method="POST">
                <input type="hidden" name="action" value="grade">
                <input type="hidden" name="iT" value="<?php echo implode(" ", $indexTracker); ?>">
                <?php   $answerSet = array();
                        for ($i = 0; $i < count($indexTracker); $i++) : ?><br>
                <?php   echo "Question " . ($i + 1) . ")  ";
                        echo $allQuestions[$indexTracker[$i]];?> <br>
                        <input type="hidden" name="Q<?php echo $i; ?>" value="<?php echo $allQuestions[$indexTracker[$i]]?>">
                <?php   $answerSet[0] = implode($allCorrectAnswers[$indexTracker[$i]]);
                        foreach($allIncorrectAnswers[$indexTracker[$i]] as $incorrect){
                            array_push($answerSet, $incorrect);}
                        if ($answerSet[0] == "All of the above"){
                            krsort($answerSet);
                        } else {asort($answerSet);}                        
                        print_r($answerSet);?><br>
                <?php   foreach  ($answerSet as $key => $answer) : ?>
                            <input type="radio" name="<?php echo $i; ?>" value="<?php echo $key; ?>"> <?php echo $answer; ?><br>
                <?php   endforeach;
                        $answerSet = array();
                        endfor; ?>
                <div id="submit">
                    <label>&nbsp;</label>
                    <input type="submit" value="Submit Answers">
                </div>
            </form>
        </main>
    </body>
</html>