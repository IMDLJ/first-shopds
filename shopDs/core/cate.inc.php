<?php
// global $table;
// $table="ds_cate";
/**
 * 添加分类
 * @return string
 */
function addCate(){
    $arr=$_POST;
    if(insert("ds_cate", $arr)){
        $mes="分类添加成功！<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
    }else {
        $mes="分类添加失败！<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
    }
    return $mes;
}

/**
 * 根据id得到指定分类信息
 * @param unknown $id
 * @return multitype
 */
function getCateById($id){
    $sql="select * from ds_cate where id={$id}";
    return fetchOne($sql);
}

/**
 * 编辑分类信息
 * @param string $where
 * @return string
 */
function editCate($where){
    $arr=$_POST;
    if (update("ds_cate", $arr, $where)){
        $mes="分类修改成功！<br/><a href='listCate.php'>查看分类列表</a>";
    }else{
        $mes="分类修改失败！<br/><a href='listCate.php'>请重新修改</a>";
    }
    return $mes;
}

/**
 * 删除分类
 * @param string $where
 */
function delCate($id){
    $res=checkProExist($id);
    if(!$res){
        $where="id={$id}";
        if(delete("ds_cate",$where)){
            $mes="分类删除成功！<br/><a href='listCate.php'>查看分类列表</a>";
        }else{
            $mes="分类删除失败！<br/><a href='listCate.php'>请重新删除</a>";
        }
        return $mes;
    }else{
        alertMes("不能删除分类，请先删除该分类下的商品", "listPro.php");
    }
}

/**
 * 得到所有分类
 * @return array
 */
function getAllCate(){
    $sql="select * from ds_cate";
    $rows=fetchAll($sql);
    return $rows;
}