<?php
session_start();
$md5=md5(microtime()*mktime());
$string=substr($md5,0,7);
$captcha=imagecreatefromgif("./1.gif");
$black=imagecolorallocate($captcha,0,0,0);
$line=imagecolorallocate($captcha,23,239,239);
imageline($captcha,40,20,94,80,$line);
$a=imagestring($captcha,30,80,20,$string,$black);
$_SESSION['key']=md5($string);
header("Content-type:image/gif");
echo imagepng($captcha);
?>