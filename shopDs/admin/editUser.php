<?php
    require_once '../include.php';
    $id=$_REQUEST['id'];
    $sql="select * from ds_user where id='{$id}' ";
    $row=fetchOne($sql);
    //print_r($row['sex']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>修改用户</title>
	<style>
        .table{
	           width:70%;background-color:#ccc; border-spacing: 0;
        }
        .table th , .table td{padding:5px;}
    </style>
</head>
<body>
	<h3>编辑用户</h3>
	<form action="doAdminAction.php?act=editUser&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
		<table class="table"  border="1">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="username" value="<?php echo $row['username'];?>" /></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="password" value="<?php echo $row['password'];?>" /></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="text" name="email" value="<?php echo $row['email'];?>" /></td>
			</tr>
			<tr>
				<td>性别</td>
				<td>
					<input type="radio" name="sex" value="1" <?php echo $row['sex']=="男"?"checked='checked'":null;?>/>男
					<input type="radio" name="sex" value="2" <?php echo $row['sex']=="女"?"checked='checked'":null;?>/>女
					<input type="radio" name="sex" value="3" <?php echo $row['sex']=="保密"?"checked='checked'":null;?>/>保密
				</td>
			</tr>
		</table>
		<input type="submit" value="确定"/>
	</form>
</body>
</html>

