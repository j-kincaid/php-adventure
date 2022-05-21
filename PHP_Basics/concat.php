<?php
/* This is a doc block.
  * It gives multiple lines of comments
  * like a Python docstring.
  * @author: Jessica Kincaid
*/

$name = 'Jessica';
$string_one = "Learning to display \"Hello  $name!\" to the screen.\n";

$string_one = 'Learning to display "Hello ' . $name . '!" to the screen.' . "\n";

/* Concatenation guidelines
  * Use "" for a single variable
  * Use . when concatenating in a single line
  * Use .= when concatenating multiple lines
*/
$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one .= "\n";
// prepend to a string
$string_one = 'I am ' . $string_one;
echo $string_one;
?>