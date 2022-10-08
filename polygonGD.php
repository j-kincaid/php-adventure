<?php

// Creates a polygon that looks like a black box on a black background emitting green light from it. 

// set up array of points for polygon

//green
$values = array(
            40,  50,  // Point 1 (x, y)
            20,  240, // Point 2 (x, y)
            60,  60,  // Point 3 (x, y)
            240, 20,  // Point 4 (x, y)
            50,  40,  // Point 5 (x, y)
            60,  10   // Point 6 (x, y)
            );
//aqua
$topcenter = array(
            340,  50,  // Point 1 (x, y)
            320,  240, // Point 2 (x, y)
            360,  60,  // Point 3 (x, y)
            540, 20,  // Point 4 (x, y)
            350,  40,  // Point 5 (x, y)
            410,  10   // Point 6 (x, y)
            );

// blue
$values1 = array(
            250,  160,  // Point 1 (x, y)
            220,  240, // Point 2 (x, y)
            260,  160,  // Point 3 (x, y)
            500, 300,  // Point 4 (x, y)
            220,  240,  // Point 5 (x, y)
            120,  110   // Point 6 (x, y)
            );
// create image

// red polygon
$values2 = array(
            250,  60,  // Point 1 (x, y)
            440,  230, // Point 2 (x, y)
            300,  60,  // Point 3 (x, y)
            450, 20,  // Point 4 (x, y)
            270,  40,  // Point 5 (x, y)
            280,  10   // Point 6 (x, y)
            );
//yellow
$topRight = array(
            640,  130,  // Point 1 (x, y)
            620,  240, // Point 2 (x, y)
            660,  60,  // Point 3 (x, y)
            840, 20,  // Point 4 (x, y)
            630,  40,  // Point 5 (x, y)
            610,  15   // Point 6 (x, y)
            );
            
//fuschia
$centerLeft = array(
            40,  450,  // Point 1 (x, y)
            30,  440, // Point 2 (x, y)
            80,  560,  // Point 3 (x, y)
            240, 620,  // Point 4 (x, y)
            50,  640,  // Point 5 (x, y)
            10,  520   // Point 6 (x, y)
            );

// create image
$image = imagecreatetruecolor(1000, 1000);

// allocate colors
$bg   = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$yellow = imagecolorallocate($image, 255, 255, 0);

$green = imagecolorallocate($image, 0, 255, 0);

$aqua = imagecolorallocate($image, 51, 226, 255);

$fuschia = imagecolorallocate($image, 194, 51, 255);
// fill the background
imagefilledrectangle($image, 0, 0, 249, 249, $bg);

// draw a polygon
imagefilledpolygon($image, $values, 6, $green);


// draw a polygon
imagefilledpolygon($image, $values1, 5, $blue);

// draw a polygon
imagefilledpolygon($image, $topcenter, 6, $aqua);
// draw a polygon
imagefilledpolygon($image, $values2, 6, $red);

// draw a polygon
imagefilledpolygon($image, $centerLeft, 6, $fuschia);

// draw a polygon
imagefilledpolygon($image, $topRight, 6, $yellow);
// flush image

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>