<?php
/**
 * 连接数据库
 * @return resource
 */
function connect() {
    $link=mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库连接失败Error:".mysqli_errno().":".mysqli_error());
    mysqli_set_charset($link,DB_CHARSET);
    mysqli_select_db($link,DB_DBNAME) or die("指定数据库打开失败");
    return $link;
}

/**
 * 完成记录插入操作
 * @param string $table
 * @param array $array
 * @return number
 */
function insert($table,$array){
    $conn=connect();
    $keys="".join(",", array_keys($array));
    $vals="'".join("','", array_values($array))."'";
    $sql="insert into {$table} ($keys) values ({$vals})";

    mysqli_query($conn,$sql);

    return mysqli_insert_id($conn);
}

/**
 * 记录的更新操作
 * @param string $table
 * @param array $array
 * @param string $where
 * @return number
 */
function update($table,$array,$where=null){
    $conn=connect();
    $str="";
    foreach ($array as $key=>$val){
        if($val==null){
            $sep="";
        }else {
            $sep=",";
        }
        $str.=$key."='".$val."'".$sep;
    }
    $str=rtrim($str,",");
    $sql="update {$table} set {$str}".($where==null?null:" where ".$where);
    $result=mysqli_query($conn,$sql);
    if($result){
        return mysqli_affected_rows($conn);
    }else{
        return false;
    }
}

/**
 * 删除记录
 * @param string $table
 * @param string $where
 * @return number
 */
function delete($table,$where=null){
    $conn=connect();
    $where=$where==null?null:"where ".$where;
    $sql="delete from {$table} {$where}";
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}

/**
 * 得到指定一条记录
 * @param string $sql
 * @param string $result_type
 * @return array
 */
function fetchOne($sql,$result_type=MYSQLI_ASSOC){
    $conn=connect();
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,$result_type);
    return $row;
}

/**
 * 得到结果集中所有记录
 * @param string $sql
 * @param string $result_type
 * @return array
 */
function fetchAll($sql,$result_type=MYSQLI_ASSOC){
    $conn=connect();
    $result=mysqli_query($conn,$sql);
    while (@$row=mysqli_fetch_array($result,$result_type)){
        $rows[]=$row;
    }
    //return $rows;
    return isset($rows)?$rows:"";
}

/**
 * 得到结果集中的记录条数
 * @param string $sql
 * @return number
 */
function getResultNum($sql){
    $conn=connect();
    $result=mysqli_query($conn,$sql);
    return mysqli_num_rows($result);
}

/**
 * 得到上一步插入记录的ID号
 * @return number
 */
function getInsertId(){
    $conn=connect();
    return mysqli_insert_id($conn);
}
