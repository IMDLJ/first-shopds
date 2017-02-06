<?php
require_once '../include.php';

$username=$_POST['username'];
$link=connect();
$username=mysqli_escape_string($link, $username);
$password=md5($_POST['password']);
//var_dump($password);
//exit;
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlag=$_POST['autoFlag'];

if(strtolower($verify)==strtolower($verify1)){
    $sql="select * from ds_admin where username='{$username}' and password='{$password}' ";
    $row=checkAdmin($sql);
    //var_dump($row);
    if ($row){
        //如果选择了一周自动登陆
        if ($autoFlag){
            setcookie("adminId",$row['id'],time()+7*24*3600);
            setcookie("adminName",$row['username'],time()+7*24*3600);
        }
        $_SESSION['adminName']=$row['username'];
        $_SESSION['adminId']=$row['id'];
        //header("location:index.php");
        alertMes("登陆成功", "index.php");
    }else {
        alertMes("登陆失败，重新登陆", "login.php");
    }
}else{
    alertMes("验证码错误", "login.php");
}