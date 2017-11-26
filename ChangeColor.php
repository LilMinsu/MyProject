<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 2017-11-23
 * Time: 오후 7:10
 */

$height = 400;
$width = 400;

$im = imagecreatetruecolor($width , $height);

$pink = imagecolorallocate($im , 255 ,192 ,203);

imagefill($im , 0 , 0, $pink);

//프로토콜 규칙
header('Content-type: image/gif');
imagepng($im);

imagedestroy($im);