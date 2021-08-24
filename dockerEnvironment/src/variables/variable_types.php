<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php
    $myFirstName = "audric";
    $myAge = 28;
    $myEyeColor = "blue";
    $myFamily = array("judith","maman","papa","yann","thaisy");
    $amIangry = false;
    echo("<p>Hi my name is $myFirstName</p>");
    echo("<p>I am $myAge</p>");
    echo("<p>My eyes are $myEyeColor</p>");
    foreach ($myFamily as $member) {
        echo("<p>this is my family member : $member"); 
    }

    ?>
  </body>
</html>