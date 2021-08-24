<?php
// 1.2 Clean your room Exercise 
    $possible_state = array("health hazard", "filthy", "dirty", "clean", "immaculate");
    $room_state = "filthy";

    if ($room_state == $possible_state[0]) 
        echo "Yuk, Room is dirty : let's clean it up !";
    else if ($possible_state[1] == $room_state)
        echo "Yuk, Room is dirty : let's clean it up !";
    else if ($possible_state[2] == $room_state)
        echo "Yuk, Room is dirty : let's clean it up !";
    else if ($possible_state[3] == $room_state)
        echo "<br>Nothing to do, room is neat.";
    else if ($possible_state[4] == $room_state)
        echo "<br>Nothing to do, room is WAOUW.";
    else
        echo "error error error"
?>