<?php
require_once 'string.func.php';
//通过GD库做验证码
function verifyImage($type=1,$length=4,$pixel=0,$line=0,$sess_name="verify"){
    //session_start();
    //创建画布
    $width=80;
    $height=28;
    $image=imagecreatetruecolor($width, $height);
    $white=imagecolorallocate($image, 255, 255, 255);
    $black=imagecolorallocate($image, 0, 0, 0);

    //用填充矩形填充画布
    imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);
    //$type=1;
    //$length=4;
    $chars=buildRandomString($type,$length);
    //$sess_name="verify";
    $_SESSION[$sess_name]=$chars;
    $fontfiles=array("SIMKAI.TTF","SIMYOU.TTF","STZHONGS.TTF","SIMHEI.TTF");
    for($i=0;$i<$length;$i++){
        $size=mt_rand(14,18);
        $angle=mt_rand(-15,15);
        $x=5+$i*$size;
        $y=mt_rand(20,26);
        $fontfile="../fonts/".$fontfiles[mt_rand(0,count($fontfiles)-1)];
        $color=imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(90,180));
        $text=substr($chars,$i,1);
        imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
    }
    //$pixel=50;
    if($pixel){
        for ($i=0;$i<$pixel;$i++){
            $pointcolor=imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
            imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0,$height-1), $pointcolor);
        }
    }
    //$line=5;
    if($line){
        for ($i=1;$i<$line;$i++){
            $color=imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(90,180));
            imageline($image, mt_rand(0,$width-1), mt_rand(0,$height-1),mt_rand(0,$width-1), mt_rand(0,$height-1), $color);
        }
    }
    header("content-type:image/gif");
    imagegif($image);
    imagedestroy($image);
}

/**
 *生成相应的缩略图
 * @param string $filename
 * @param string $destination
 * @param int $dst_w
 * @param int $dst_h
 * @param bool $isReservedSource
 * @param number $scale
 * @return string
 */
function thumb($filename,$destination=null,$dst_w=null,$dst_h=null,$isReservedSource=true,$scale=0.5) {
    list($src_w,$src_h,$imagetype)=getimagesize($filename);
    // $scale=0.5;
    if (is_null($dst_w)||is_null($dst_h)){
        $dst_w=ceil($src_w*$scale);
        $dst_h=ceil($src_h*$scale);
    }
    $mime=image_type_to_mime_type($imagetype);
    $createFun=str_replace("/", "createfrom", $mime);
    $outFun=str_replace("/", null, $mime);
    $src_image=$createFun($filename);
    $dst_image=imagecreatetruecolor($dst_w, $dst_h);
    imagecopyresampled($dst_image, $src_image, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    // image_50/adsfgfdgfh.jpg
    if ($destination&&!file_exists(dirname($destination))){
        mkdir(dirname($destination),0777,true);
    }
    $dstFilename=$destination==null?getUniName().".".getExt($filename):$destination;
    $outFun($dst_image,$dstFilename);

    imagedestroy($src_image);
    imagedestroy($dst_image);
    // $isReservedSource=false;
    if (!$isReservedSource){
        unlink($filename);
    }
    return $dstFilename;
}

/**
 * 添加文字水印
 * @param string $filename
 * @param string $text
 * @param string $fontfile
 */
function waterText($filename,$text="Silence",$fontfile="SIMHEI.TTF"){
    $fileInfo=getimagesize($filename);
    $mime=$fileInfo['mime'];
    $createFun=str_replace("/", "createfrom",$mime);
    $outFun=str_replace("/", null, $mime);
    $image=$createFun($filename);
    $color=imagecolorallocatealpha($image, 255, 0, 0, 50);
    $fontfile="../fonts/{$fontfile}";
    $text="Silence";
    imagettftext($image, 14, 0, 0, 14, $color, $fontfile, $text);
    //header("content-type:".$mime);
    $outFun($image,$filename);
    imagedestroy($image);
}

/**
 * 添加图片水印
 * @param string $dstFile
 * @param string $srcFile
 * @param int $pct
 */
function waterPic($dstFile,$srcFile="../images/sy.jpg",$pct=30){
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

    //header("content-type:".$dstMime);
    $outDstFun($dst_im,$dstFile);
    imagedestroy($src_im);
    imagedestroy($dst_im);
}