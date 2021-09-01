<?php //1
    function capitalize ($string){
        if (mb_detect_encoding($string) != 'UTF-8') {
            $string = mb_convert_case(utf8_encode($string), MB_CASE_TITLE, 'UTF-8');
        } else {
            $string = mb_convert_case($string, MB_CASE_TITLE, 'UTF-8');
        }
        return $string;
    }

    echo capitalize('émilie');
?>

<?php //2
   echo "Today is " . date("Y/m/d") . "<br>";
   echo "Today is " . date("Y.m.d") . "<br>";
   echo "Today is " . date("Y-m-d") . "<br>";
   echo "Today is " . date("l");
?>

<?php //3
    date_default_timezone_set("Europe/Brussels");
    echo "It is " . date('H:i:s') . "<br>";
?>

<?php //4
   function newSum ($number1,$number2){
       return $number1+$number2;
   }

   echo newSum(5,2);
?>

<?php //5
   function newSum2 ($number1,$number2){
        if (gettype($number1) =='integer' AND gettype($number2) =='integer'){
            return $number1+$number2;
        } else {
           echo "Error: argument is not a number.";
        }
    }

   echo newSum2(5,2);
?>

<?php //6
   function returnFirstLetter ($string){
       $arrOfString = explode(" ",$string);
       $accumLetter = "";
       foreach($arrOfString as $word){
           $accumLetter = $accumLetter.$word[0];
       }
       return $accumLetter;
    }

   echo returnFirstLetter('coucou les copains');
?>

<?php //7
   function makeLigature ($string){
       return $string = str_replace("ae","æ",$string);
    }

   echo makeLigature('caecotrophie');
?>

<?php //8
   function removeLigature ($string){
       return $string = str_replace("æ","ae",$string);
    }

   echo removeLigature('cæcotrophie');
?>

<?php //9
   function returnMessages ($message,$cssClass){
       return "<div class='$cssClass'>$message</div>";
    }

   echo returnMessages("error, ce n'est pas un email valide","error");
?>

<?php //10
   function returnMessagesAndInfo ($message,$cssClass,$info){
       return "<div class='$cssClass'>$message</div>";
    }

   echo returnMessages("error, ce n'est pas un email valide","error");
?>

<?php //11
   function calculate_cone_volume ($ray,$height){
      $pi = 3.1415;
      return $ray * $ray * $pi * $height;
    }

   echo calculate_cone_volume(5,6);
?>