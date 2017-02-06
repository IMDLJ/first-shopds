<?php 
    require_once '../include.php';
    $id=$_REQUEST['id'];
    $sql="select id,username,password,email from ds_admin where id='{$id}' ";
    $row=fetchOne($sql);
?>
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
	<h3>编辑管理员</h3>
	<form action="doAdminAction.php?act=editAdmin&id=<?php echo $id;?>" method="post">
		<table class="table"  border="1">
			<tr>
				<td>管理员名称</td>
				<td><input type="text" name="username" value="<?php echo $row['username'];?>"/></td>
			</tr>
			<tr>
				<td>管理员密码</td>
				<td><input type="password" name="password" value="<?php echo $row['password'];?>"/></td>
			</tr>
			<tr>
				<td>管理员邮箱</td>
				<td><input type="text" name="email" value="<?php echo $row['email'];?>"/></td>
			</tr>
		</table>
		<input type="submit" value="确定"/>
	</form>
</body>
</html>
