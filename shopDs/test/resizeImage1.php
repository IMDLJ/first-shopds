<?php
$filename="des_big.jpg";
list($src_w,$src_h,$imagetype)=getimagesize($filename);
$mime=image_type_to_mime_type($imagetype);
//echo $mime;
$createFun=str_replace("/", "createfrom", $mime);
$outFun=str_replace("/", null, $mime);

$src_image=$createFun($filename);

$dst_50_image=imagecreatetruecolor(50, 50);
$dst_220_image=imagecreatetruecolor(220, 220);
imagecopyresampled($dst_50_image, $src_image, 0, 0, 0, 0, 50, 50, $src_w, $src_h);
imagecopyresampled($dst_220_image, $src_image, 0, 0, 0, 0, 220, 220, $src_w, $src_h);

$outFun($dst_50_image,"uploads/image_50/".$filename);
$outFun($dst_220_image,"uploads/image_220/".$filename);

imagedestroy($src_image);
imagedestroy($dst_50_image);
imagedestroy($dst_220_image);

