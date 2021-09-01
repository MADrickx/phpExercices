// 1.1 Clean your room Exercise 
<?php
$room_is_filthy = false;

function cleanup_room(){
    return true;
};

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>