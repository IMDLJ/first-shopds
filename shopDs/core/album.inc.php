<?php
function addAlbum($arr){
    insert("ds_album", $arr);
}

/**
 * 根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getProImgById($id){
    $sql="select albumPath from ds_album where pId={$id} limit 1";
    $row=fetchOne($sql);
    return $row;
}

/**
 * 根据商品id得到所有商品图片
 * @param int $id
 * @return array
 */
function getProImgsById($id){
    $sql="select albumPath from ds_album where pId={$id}";
    $row=fetchAll($sql);
    return $row;
}

/**
 * 添加文字水印
 * @param int $id
 * @return string
 */
function doWaterText($id) {
    $rows=getProImgsById($id);
    foreach ($rows as $row){
        $filename="../image_800/".$row['albumPath'];
        waterText($filename);
    }
    $mes="添加文字水印成功";
    return $mes;
}

/**
 * 添加图片水印
 * @param int $id
 * @return string
 */
function doWaterPic($id){
    $rows=getProImgsById($id);
    foreach ($rows as $row){
        $filename="../image_800/".$row['albumPath'];
        waterPic($filename);
    }
    $mes="添加图片水印成功";
    return $mes;
}