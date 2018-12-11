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
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Naturalization Practice Test - Home</title>
    </head>
    <body>
        <header>
            <img src="images/USCIS400x120.png" alt="U.S. Imigration Services Logo" width="400" height="120">
            <h1>Naturalization Practice Test</h1>
        </header>
        <main id="landing">
            <p>Welcome to the U.S. Naturalization Practice Test</p>
            <p>Select "Start Quiz" below to receive ten randomly generated questions</p>
            <p>You must correctly answer six of the ten questions to pass the exam</p>
        </main>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="start">
            <input type="submit" value="Start Quiz"  id="button">
        </form>
    </body>
</html>

