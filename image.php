<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 2017-11-23
 * Time: 오후 7:19
 */


$height = 400;
$width = 400;
$image_name = "pretty.png";
$im = imagecreatefrompng($image_name);



//
//
//imagefilter($im , IMG_FILTER_GRAYSCALE);
imagefilter($im , IMG_FILTER_EMBOSS);




//옵션
header('Content-type: image/png');
//캔버스id ㅔpngf로 출력
imagepng($im);

//캔퍼스 자원회수
imagedestroy($im);