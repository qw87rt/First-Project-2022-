<?php
session_start();
$random = substr(md5(mt_rand()), 0, 5);
$_SESSION['captcha'] = $random;
$captcha = imagecreatefromjpeg("../../img/captcha.jpg");
$color = imagecolorallocate($captcha, 0, 0, 0);
$font = realpath('../../fonts/BRADHITC.ttf');
imagettftext($captcha, 20, 0, 90, 30, $color, $font, $random );
imagepng($captcha);
imagedestroy($captcha);
?>