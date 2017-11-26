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
imagestring($im , 20 , 200 ,200 ,"test" , $pink);

header('Content-type: image/gif');
imagepng($im);

imagedestroy($im);