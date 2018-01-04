<?php
session_start();

//mengashilkan bilangan acak 7 digit
$bilangan = rand(1000000, 9999999);

//mendaftarkan variabel di dalam sesion
$_SESSION["captcha"] = $bilangan;

//membuat gambar captcha
$gambar = imagecreatetruecolor(85,35);
$background = imagecolorallocate ($gambar, 99,99,99);
$foreground = imagecolorallocate ($gambar, 255,255,255);
imagefill ($gambar, 0,0,$background);
imagestring ($gambar,10,10,10,$bilangan, $foreground);

//menentukan header
header("cache-control: no-cache, must-revalidate");
header ("content-type: image/png");
imagepng($gambar);
imagedestroy ($gambar);

?>