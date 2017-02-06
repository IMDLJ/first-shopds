<?php
    require_once '../include.php';
    $id=$_REQUEST['id'];
    $row=getCateById($id);
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
	<h3>修改分类</h3>
	<form action="doAdminAction.php?act=editCate&id=<?php echo $id;?>" method="post">
		<table class="table"  border="1">
			<tr>
				<td>分类名称</td>
				<td><input type="text" name="cName" value="<?php echo $row['cName'];?>"/></td>
			</tr>
		</table>
		<input type="submit" value="确定"/>
	</form>
</body>
</html>
