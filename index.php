<?php
    // queste 3 righe servono per visualizzare gli errori
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //scrivo le due variabili
    $Primo ='Primo';
    $Esercizio ='Esercizio';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords</title>
</head>
    <body>

        <h1 class="text-red">            
            <?php 
                // primo esercizio con PHP
                echo "{$Primo} {$Esercizio} con PHP"; 
            ?>
        </h1>
        <!-- form dove mi inserisco POST o GET e riprendo in stampa.php-->
        <form action="./stampa.php" method="POST">
            <input type="text" name="testo" id="nome" placeholder="Testo">
            <input type="text" name="badwords" id="nome" placeholder="Badwords">
            <button type="submit">Invia</button>
        </form>

    </body>
</html>