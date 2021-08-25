<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.0 into 4.0 PHP</title>
</head>
<body>
    <h1>3.0 into 4.0 mamène</h1>
    <form action="#" method="GET">
        <label for="age">What is your age my lad?</label>
        <input type="number" name="age" id="age">
        <p>Did you just assume my gender?!</p>
        <label for="man">man</label>
        <label for="woman">woman</label><br>
        <input type="radio" id="man" value="man" name="gender">
        <input type="radio" id="woman" value="woman" name="gender"><br>
        <p>English, do you speak it mfkz?</p>
        <label for="englishYes">yes</label>
        <label for="englishNo">no</label><br>
        <input type="radio" id="yes" value="true" name="english">
        <input type="radio" id="no" value="false" name="english"><br>
        <input type="submit" value="envoyer">
    </form>

    <?php
    error_reporting(E_ALL ^ E_WARNING); 
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $englishBool = $_GET['english'];

    echo $englishBool;

    function takes_ageAndGenderAndMothertongue($givenAge,$givenGender,$givenMothertongue){
        if($givenMothertongue == 'false'){
            if($givenGender == "woman"){
                if ($givenAge<12){
                    echo "Bonjour, petite fille";
                } else if ($givenAge >= 12 AND $givenAge<18){
                    echo "Bonjour, jeune fille";
                } else if ($givenAge >= 18 AND $givenAge<115){
                    echo "Bonjour, femme adulte!";
                } else {
                    echo "WAOUW t'es en vie vieille ?";
                }
            } else {
                if ($givenAge<12){
                    echo "Bonjour, jeune garçon";
                } else if ($givenAge >= 12 AND $givenAge<18){
                    echo "Bonjour, jeune homme!";
                } else if ($givenAge >= 18 AND $givenAge<115){
                    echo "Bonjour, homme adulte";
                } else {
                    echo "WAOUW t'es en vie vieux ?";
                }
            }
        } else {
            if($givenGender == "woman"){
                if ($givenAge<12){
                    echo "Hello miss!";
                } else if ($givenAge >= 12 AND $givenAge<18){
                    echo "hello miss teen!";
                } else if ($givenAge >= 18 AND $givenAge<115){
                    echo "Hello Adult woman!";
                } else {
                    echo "Wow! Still alive ? Women DO live longer!";
                }
            } else {
                if ($givenAge<12){
                    echo "Hello Kiddo!";
                } else if ($givenAge >= 12 AND $givenAge<18){
                    echo "hello teenager!";
                } else if ($givenAge >= 18 AND $givenAge<115){
                    echo "Hello Adult!";
                } else {
                    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
        }
    }

    if(isset($_GET['age']) AND isset($_GET['gender'])){
       takes_ageAndGenderAndMothertongue($age,$gender,$englishBool);
    }
    ?>
</body>
</html>