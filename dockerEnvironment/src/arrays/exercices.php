<?php 
    $family = ["Judith","Maman","Papa","Yann","Thaisy"];
    print_r($family);

    $recipe = ["pasta","cheese","more cheese","cheeeeeeeeeeese"];
    print_r($recipe);

    $favFilms = ["terminator","terminator 2","terminator 4","terminator 5",];
    echo $favFilms[2];

    var_dump($recipe);

    $recipe[] = 'pepper';
    $person['homeLoc'] = "Liège";

    //exos

    $me = array(    'firstname' => 'Audric',
                    'age' => 28,
                    'lastname' => 'Skivée',
                    'favoriteMovies' => ["terminator","terminator 2","terminator 4","terminator 5",]);
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $me['hobbies'] = ['jeux vidéo','films','musics'];
    $mum = array(   'firstname' => 'Linda',
                    'age' => 55,
                    'lastname' => 'Vossen',
                    'favoriteMovies' => ["terminator","terminator 2","terminator 4","terminator 5",],
                    'hobbies' => ["kayak","vélo","coudre","films"]);
                    

    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $me['mother'] = $mum;

    echo '<pre>';
    print_r($me);
    echo '</pre>';

    echo count($me['mother']);
    echo count($me['hobbies']);
    echo count($me['mother'])+count($me['hobbies']);


    $me['hobbies'][] = 'manger des soupes';

    $possible_hobbies_via_intersection = array_intersect($me['hobbies'],$mum['hobbies']);
    $possible_hobbies_via_merge = array_merge($me['hobbies'],$mum['hobbies']);

    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';


    $web_development = array(
        'front-end' => [],
        'back-end' => []
    );
    array_push($web_development['front-end'], 'xhtml');
    array_push($web_development['back-end'], 'Ruby on Rails');
    array_push($web_development['front-end'], 'CSS');
    array_push($web_development['front-end'], 'Flash');
    array_push($web_development['front-end'], 'JavaScript');
    array_replace($web_development['front-end'],array(0=>'html'));
    unset($web_development['front-end'][2]);

    var_dump($web_development);

?>