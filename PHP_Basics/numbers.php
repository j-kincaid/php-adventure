<?php
$num_1 = 0;
$num_2 = 1;
$num_3 = 2;

// var_dump provides data type

// var_dump($num_1);
// var_dump(0);
// var_dump('0');

// var_dump($num_2 + $num_3 - $num_2);

$distance_home = 1.2;
$distance_work = 2.5;
var_dump($distance_home + $distance_work + $num_2 + .3);

$a  = 5;
$b = 10;
var_dump($a * $b);
var_dump($a / $b);

$a = $a + 1;

// increment
var_dump($a);
$a++;
var_dump($a);
$a++;
// decrement
var_dump($a);
$a--;
var_dump($a);
$a--;
var_dump($a--);
var_dump($a);

$a += 5;
var_dump($a);
$b = 5;
var_dump(--$b);
?>