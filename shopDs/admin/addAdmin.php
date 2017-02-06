<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style>
        .table{
	           width:70%;background-color:#ccc; border-spacing: 0;
        }
        .table th , .table td{padding:5px;}
    </style>
</head>
<body>
	<h3>添加管理员</h3>
	<form action="doAdminAction.php?act=addAdmin" method="post">
		<table class="table"  border="1">
			<tr>
				<td>管理员名称</td>
				<td><input type="text" name="username" placeholder="请输入管理员名称"/></td>
			</tr>
			<tr>
				<td>管理员密码</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>管理员邮箱</td>
				<td><input type="text" name="email" placeholder="请输入管理员邮箱"/></td>
			</tr>
		</table>
		<input type="submit" value="添加管理员"/>
	</form>
</body>
</html>
