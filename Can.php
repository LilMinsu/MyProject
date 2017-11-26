<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 2017-11-23
 * Time: 오후 3:28
 */

$height = 200;
$width = 200;

$im = imagecreatetruecolor($width , $height);
$white = imagecolorallocate($im , 255 , 255, 255);
$blue = imagecolorallocate($im , 0 , 0  , 0);

imagefill($im , 0 , 0, $blue);
imageline($im ,0 ,0 ,$width ,$height ,$white);
imagestring($im , 4 ,50 ,150 , 'Sales ' ,$white);

//프로토콜 규칙
header('Content-type: image/gif');
imagepng($im);

imagedestroy($im);