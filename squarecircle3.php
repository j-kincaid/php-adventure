<?php
//https://www.php.net/manual/en/book.image.php
$im = imagecreatetruecolor(1000 , 1000);

$color = imagecolorallocate($im, 255,255,255);
imagefilledrectangle($im, 0,0,1000,1000,$color);



$color = imagecolorallocate($im, 255,127,255);


//imagefilledrectangle($im, 100,100,200,200, $color);
for ($i=0;$i<50;$i++) {
    $z=$i*5;
    //imagerectangle($im, 50+$z, 50+$z, 150, 150, $color);
    imageellipse($im, 200, 200, 200+$z, 200+($z*2), $color);
}
header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);
?>
