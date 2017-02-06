<?php
/**
 *  检查管理员是否存在
 * @param unknown $sql
 * @return multitype
 */
function checkAdmin($sql){
   return fetchOne($sql);
}

/**
 *  检测是否有管理员登陆.
 */
function checkLogined() {
    if(!isset($_SESSION['adminId']) || $_SESSION['adminId']==""){
        if(!isset($_COOKIE['adminId']) || $_COOKIE['adminId']==""){
            alertMes("请先登陆", "login.php");
        }
    }
}

/**
 * 添加管理员
 * @return string
 */
function addAdmin(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if (insert("ds_admin", $arr)){
        $mes="添加成功！<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="添加失败！<br/><a href='addAdmin.php'>重新添加</a>";
    }
    return $mes;
}

/**
 * 得到所有的管理员
 * @return multitype
 */
function getAllAdmin(){
    $sql="select * from ds_admin";
    $rows=fetchAll($sql);
    return $rows;
}

/**
 * 管理员分页。返回分页数据
 * @param number $pageSize
 * @return multitype
 */
function getAdminByPage($page,$pageSize=2){
    $sql="select * from ds_admin";
    global $totalRows;
    $totalRows=getResultNum($sql);
    global $totalPage;
    $totalPage=ceil($totalRows/$pageSize);
    if ($page<1||$page==null||!is_numeric($page)){
        $page=1;
    }
    if ($page>=$totalPage)$page=$totalPage;
    $offset=($page-1)*$pageSize;
    $sql="select id,username,email from ds_admin limit {$offset},{$pageSize}";
    $rows=fetchAll($sql);
    return $rows;
}

/**
 * 编辑管理员
 */
function editAdmin($id){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if (update("ds_admin", $arr,"id={$id}")){
        $mes="编辑成功！<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="编辑失败！<a href='listAdmin.php'>请重新修改</a>";
    }
    return $mes;
}

/**
 * 删除管理员
 * @param unknown $id
 */
function delAdmin($id){
    if(delete("ds_admin","id={$id}")){
        $mes="删除成功！<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="删除失败！<a href='listAdmin.php'>请重新删除</a>";
    }
    return $mes;
}

/**
 * 注销管理员
 */
function logout(){
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-1);
    }
    if(isset($_COOKIE['adminId'])){
        setcookie("adminId","",time()-1);
    }
    if (isset($_COOKIE['adminName'])){
        setcookie("adminName","",time()-1);
    }
    session_destroy();
    header("location:login.php");
}

/*
 * 添加用户
 */
function addUser(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    $arr['regTime']=time();
    $uploadFile=uploadFile("../uploads");

    //print_r($uploadFile);
    if($uploadFile&&is_array($uploadFile)){
        $arr['face']=$uploadFile[0]['name'];
    }else{
        return "添加失败!<a href='addUser.php'>重新添加</a>";
    }
    //	print_r($arr);exit;
    if(insert("ds_user", $arr)){
        $mes="添加成功!<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php'>查看列表</a>";
    }else{
        $filename="../uploads/".$uploadFile[0]['name'];
        if(file_exists($filename)){
            unlink($filename);
        }
        $mes="添加失败!<br/><a href='addUser.php'>重新添加</a>|<a href='listUser.php'>查看列表</a>";
    }
    return $mes;
}

/*
 * 编辑用户
 */
function editUser($id){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if (update("ds_user", $arr,"id={$id}")){
        $mes="编辑成功！<a href='listUser.php'>查看用户列表</a>";
    }else{
        $mes="编辑失败！<a href='listUser.php'>请重新修改</a>";
    }
    return $mes;
}

/*
 * 删除用户
 * @param int $id
 */
function delUser($id){
    $sql="select face from ds_user where id=".$id;
    $row=fetchOne($sql);
    $face=$row['face'];
    if(file_exists("../uploads/".$face)){
        unlink("../uploads/".$face);
    }
    if(delete("ds_user","id={$id}")){
        $mes="删除成功！<a href='listUser.php'>查看管理员列表</a>";
    }else{
        $mes="删除失败！<a href='listUser.php'>请重新删除</a>";
    }
    return $mes;
}