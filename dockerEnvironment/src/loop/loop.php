<?php 
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
    foreach($pronouns as $pronouns){
        if($pronouns != 'He/She'){
            echo $pronouns." code<br>";
        } else {
            echo $pronouns." codes<br>";
        }
    }
    $cpt = 0;
    while ($cpt<120){
        echo $cpt;
        $cpt++;
    }

    for ($cpt=0;$cpt<120;$cpt++){
        echo ($cpt+1);
    }

    $names=["adrien","Angélique","Antoine","Audric","baysaa","Corentin","Corentine","El Thomas","Eva","Iris","Julien","Laurent","Lisa","Luca","Jérémy","Naim","Stephanie","Thomas","Tibo","William","Yassine","Yves","Zoé"];
    foreach($names as $name){
        echo $name;
    }

    $countries = ["Belgium","France","Luxembourg","Pays-Bas","Allemagne","Estonie","Hongrie","Angleterre","Lybie","Canada","Japon"];
    $templateFirstHalf = "
        <form method='GET' action='#'>
            <label for='select'>Choose a country my lad<br></label>
            <select id='select'>
                <option value=''>--Please choose an option--</option>";
    $templateSecondHalf = "
            </select>
        </form>
        ";

    echo $templateFirstHalf;
    foreach($countries as $country){
        echo "<option id='pickedCountry' value='$country'>$country</option>";
    };
    echo $templateSecondHalf;

    $pays = array(
        'BE'=>'Belgique',
        'FR'=>'France',
        'LU'=>'Luxembourg',
        'NL'=>'Pays-Bas',
        'DE'=>'Allemagne',
        'ES'=>'Estonie',
        'HU'=>'Hongrie',
        'UK'=>'Angleterre',
        'LY'=>'Lybie',
        'CA'=>'Canada',
        'JP'=>'Japon'
    );
    echo $templateFirstHalf;
    foreach($pays as $key => $data){
        echo "<option id='pickedCountry' value='$key'>$data</option>";
    }
    echo $templateSecondHalf;
?>