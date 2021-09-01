<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6.0 PHP</title>
</head>
<body>
    <h1>6.0 mamène</h1>
    <form action="#" method="GET">
        <label for="name">What is your name?</label>
        <input type="text" id="name" name="name"><br>
        <label for="age">What is your age my lad?</label>
        <input type="number" name="age" id="age">
        <p>Did you just assume my gender?!</p>
        <label for="man">man</label>
        <label for="woman">woman</label><br>
        <input type="radio" id="man" value="man" name="gender">
        <input type="radio" id="woman" value="woman" name="gender"><br>
        <input type="submit" value="envoyer">
    </form>

    <?php


    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $name = $_GET['name'];
    $msg = "#deso meuf";

    function takes_nameAgeAndGender($givenName, $givenAge, $givenGender){
        if (($givenGender == "woman") AND ($givenAge <= 40 AND $givenAge >= 21)){
            global $msg;
            $msg = "Bienvenue dans l'équipe, $givenName !";
        };
    }

    if(isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['name'])){
        takes_nameAgeAndGender($name,$age,$gender);
        echo $msg;
    }
    ?>
</body>
</html>