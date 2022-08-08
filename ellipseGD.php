<?php
//https://www.php.net/manual/en/book.image.php
$im = imagecreatetruecolor(1200 , 1000);

$color = imagecolorallocate($im, 255,245,255);
// $color = imagefilledrectangle($im, 0,0,1000,1000,$color);

$color = imagecolorallocate($im, 255,100,243);

// the arc isn't working/ idk how to make one

// $color = imagearc($im, 
// 2000,
// 2000,
//     200,
//     200,
//     45,
//     60);

//imagefilledrectangle($im, 100,100,200,200, $color);
for ($i=0;$i<50;$i++) {
    $z=$i*6;
    //imagerectangle($im, 50+$z, 50+$z, 150, 150, $color);
    imageellipse($im, 
    450, // moves right / left
    550, // moves up / down
    650+($z*2.75), // narrow / wider
    450+($z*4.5), // opening more narrow and taller
    $color);
}
header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);
?>