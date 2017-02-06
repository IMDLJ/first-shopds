<?php
$srcFile="../logo.png";
$dstFile="image_800/cat.jpg";
waterPic($dstFile,$srcFile);
function waterPic($dstFile,$srcFile="../logo.png",$pct=30){
    $srcFileInfo=getimagesize($srcFile);
    $src_w=$srcFileInfo[0];
    $src_h=$srcFileInfo[1];
    $dstFileInfo=getimagesize($dstFile);
    $srcMime=$srcFileInfo['mime'];
    $dstMime=$dstFileInfo['mime'];
    $createSrcFun=str_replace("/", "createfrom", $srcMime);
    $createDstFun=str_replace("/", "createfrom", $dstMime);
    $outDstFun=str_replace("/", null, $dstMime);
    $dst_im=$createDstFun($dstFile);
    $src_im=$createSrcFun($srcFile);

    imagecopymerge($dst_im, $src_im, 0, 0, 0, 0, $src_w, $src_h, $pct);

    header("content-type:".$dstMime);
    $outDstFun($dst_im,$dstFile);
    imagedestroy($src_im);
    imagedestroy($dst_im);
}
