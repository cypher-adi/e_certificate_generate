<?php

    header('content-type:image/jpeg');
    $name = $_GET['name'];
    $font="./assets/fonts/BRUSHSCI.TTF";
    $image=imagecreatefromjpeg("./certificate.jpg");
    $color=imagecolorallocate($image,19,21,22);
    imagettftext($image,50,0,365,420,$color,$font,$name);
    $date="31st December 2020";
    imagettftext($image,20,0,450,595,$color,"./assets/fonts/AGENCYR.TTF",$date);
    imagejpeg($image);
    imagedestroy($image);
?>