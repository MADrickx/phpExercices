<?php
    $timeStampH = gmdate("H");
    $timeStampM = gmdate("i");
    $timeStampH = $timeStampH+2;

    if ($timeStampH >=5 AND ($timeStampH < 9 or ($timeStampM == 9 AND $timeStampM == 0))){
        echo "Good morning !";
    } else if ($timeStampH >= 9 AND $timeStampH < 12 AND $timeStampM > 0){
        echo "Good day !";
    } else if ($timeStampH >=12 AND ($timeStampH < 16 OR ($timeStampM == 12 AND $timeStampM == 0))){
        echo "Good afternoon !";
    } else if ($timeStampH >=16 AND ($timeStampH < 21 OR ($timeStampM == 16 AND $timeStampM == 0))){
        echo "Good afternoon my lad!";
    } else {
        echo "Good night !";
    }
?>