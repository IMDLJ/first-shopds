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
	<h3>添加分类</h3>
	<form action="doAdminAction.php?act=addCate" method="post">
		<table class="table"  border="1">
			<tr>
				<td>分类名称</td>
				<td><input type="text" name="cName" placeholder="请输入分类名称"/></td>
			</tr>
		</table>
		<input type="submit" value="添加分类"/>
	</form>
</body>
</html>