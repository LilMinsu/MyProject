<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 2017-11-23
 * Time: 오후 7:19
 */


$height = 400;
$width = 400;

$im = imagecreatetruecolor($width , $height);

$pink = imagecolorallocate($im , 255 ,192 ,203);

//draw on canvas

$text = 'Testing';
$font = 'arial.ttf';

imagettftext($im, 20, 0, 11, 21, $pink, $font, $text);

header('Content-type: image/png');
imagepng($im);

imagedestroy($im);