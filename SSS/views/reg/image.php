<?php

$str = md5(microtime());
$str = substr($str,0,6);
session_start();
$_SESSION['real']=$str; 
 



$img = imagecreate(200, 40);
imagecolorallocate($img, 225, 225, 225);
$txtcol = imagecolorallocate($img, 0, 0, 0);
imagestring($img, 5, 5, 1, $str, $txtcol);
header('Content:image/jpeg');
imagejpeg($img);
 
?>
	



