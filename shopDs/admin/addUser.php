<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>添加用户</title>
	<style>
        .table{
	           width:70%;background-color:#ccc; border-spacing: 0;
        }
        .table th , .table td{padding:5px;}
    </style>
</head>
<body>
	<h3>添加用户</h3>
	<form action="doAdminAction.php?act=addUser" method="post" enctype="multipart/form-data">
		<table class="table"  border="1">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="username" placeholder="请输入用户名"/></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="text" name="email" placeholder="请输入邮箱"/></td>
			</tr>
			<tr>
				<td>性别</td>
				<td>
					<input type="radio" name="sex" checked="checked" value="1"/>男
					<input type="radio" name="sex" value="2"/>女
					<input type="radio" name="sex" value="3"/>保密
				</td>
			</tr>
			<tr>
				<td>头像</td>
				<td><input type="file" name="myFile"/></td>
			</tr>
		</table>
		<input type="submit" value="添加用户"/>
	</form>
</body>
</html>