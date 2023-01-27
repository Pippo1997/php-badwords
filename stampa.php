<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Stampa</title>
</head>
    <body>
    <?php
        // stampo in un array il post e stampo le parole a video
        echo '<pre>';
        var_dump($_POST);
        echo '</br>';

        // inserisco il testo messo negli inpunt in una variabile
        $myString = "{$_POST['testo']} {$_POST['badwords']}";
        echo $myString;
        echo '</br>';
        $newString = str_replace($_POST['badwords'], '***', $myString);
        echo strlen($myString);
        echo '</br>';
        echo $newString
    ?>
        <h2><?php echo $newString?></h2>
    </body>
</html>