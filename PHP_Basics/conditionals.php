<?php
$name = 'Jessica';

$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
// $string_one = $string_one . "\n";
// prepend to a string
// $string_one = 'I am ' . $string_one;
echo $string_one;

var_dump(1 + "2");
$a = 10;
$b = "10";
// var_dump($a == $b);
// var_dump($a === $b);
// var_dump($string_one == 'Learning to display "Hello Jessica" to the screen.');

if ($string_one == 'Learning to display "Hello Jessica!" to the screen.') {
    echo 'the values match.';
} elseif ($string_one == ""){
    echo '$string_one is empty';
} else {
    echo 'the values DO NOT match';
}

?> 


