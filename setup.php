<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>Naturalization Practice Test - Home</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Naturalization Practice Test</h1>
        </header>
        <main>
            <p>Welcome to the U.S. Naturalization Practice Test</p>
            <p>Select start practice quiz to receive ten randomly generated questions</p>
            <p>You must answer six of the ten questions correct to pass the exam</p>

            <form action="index.php" method="post">
                <input type="hidden" name="action" value="start">
                <input type="checkbox" name="all" checked> Select practice quiz from all questions<br>
                <div>
                    <label>&nbsp;</label>
                    <input type="submit" value="Start Quiz">
                </div>                
            </form>
        </main>
    </body>
</html>

