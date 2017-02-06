<?php
/**
 * 注册
 * @return string
 */
function reg(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    $arr['regTime']=time();
    $uploadFile=uploadFile();

    //print_r($uploadFile);
    if($uploadFile&&is_array($uploadFile)){
        $arr['face']=$uploadFile[0]['name'];
    }else{
        return "注册失败";
    }
    //	print_r($arr);exit;
    if(insert("ds_user", $arr)){
        $mes="注册成功!<br/>3秒钟后跳转到登陆页面!<meta http-equiv='refresh' content='3;url=login.php'/>";
    }else{
        $filename="uploads/".$uploadFile[0]['name'];
        if(file_exists($filename)){
            unlink($filename);
        }
        $mes="注册失败!<br/><a href='reg.php'>重新注册</a>|<a href='index.php'>查看首页</a>";
    }
    return $mes;
}

/**
 * 登陆
 * @return string
 */
function login(){
    $username=$_POST['username'];
    //永远不要相信用户的输入：' or 1=1 # ，输入' or 1=1 # 照样可以登录
    //有两种解决方法（1）addslashes()、（2）mysqli_escape_string
    //addslashes():使用反斜线引用特殊字符
    //$username=addslashes($username);
    $link=connect();
    $username=mysqli_escape_string($link, $username);
    $password=md5($_POST['password']);
    $sql="select * from ds_user where username='{$username}' and password='{$password}'";
    //$resNum=getResultNum($sql);
    $row=fetchOne($sql);
    //echo $resNum;
    if($row){
        $_SESSION['loginFlag']=$row['id'];
        $_SESSION['username']=$row['username'];
        $mes="登陆成功！<br/>3秒钟后跳转到首页<meta http-equiv='refresh' content='3;url=index.php'/>";
    }else{
        $mes="登陆失败！<a href='login.php'>重新登陆</a>";
    }
    return $mes;
}

/**
 * 退出
 */
function userOut(){
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }

    session_destroy();
    header("location:index.php");
}