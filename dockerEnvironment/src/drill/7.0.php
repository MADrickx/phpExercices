<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.0 PHP</title>
</head>
<body>
    <h1>7.0 mamène</h1>
    <form action="#" method="GET">
        <label for="points">How much did you do on that test my lad ? (/20)</label>
        <input type="number" name="points" id="points">
        <input type="submit" value="envoyer">
    </form>

    <?php

    $points = $_GET['points'];

    switch ($points){
        case ($points > 4) :
            echo "This work is really bad. What a dumb kid!";
            break;
            
    }

    ?>
</body>
</html>