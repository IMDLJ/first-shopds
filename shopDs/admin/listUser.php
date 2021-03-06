<?php
require_once '../include.php';
$sql="select * from ds_user";
$totalRows=getResultNum($sql);
$pageSize=8;
$totalPage=ceil($totalRows/$pageSize);
@$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if ($page<1||$page==null||!is_numeric($page)){
    $page=1;
}
if ($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select * from ds_user limit {$offset},{$pageSize}";
$rows=fetchAll($sql);

if (!$rows){
    alertMes("sorry,没有用户，请添加！", "addUser.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>管理员列表</title>
	<link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
	<div class="details">
		<div class="details_operation clearfix">
			<div class="bui_select">
				<input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addUser()">
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th width="15%">编号</th>
					<th width="20%">用户名</th>
					<th width="20%">邮箱</th>
					<th width="20%">是否激活</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($rows as $row):?>
                <tr>
					<td>
						<input type="checkbox" id="<?php echo $row['id'];?>" class="check">
						<label for="<?php echo $row['id'];?>" class="label"><?php echo $row['id'];?></label>
					</td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['activeFlag']==0?"未激活":"激活";?></td>
					<td align="center">
						<input type="button" value="修改" class="btn" onclick="editUser(<?php echo $row['id'];?>)">
						<input type="button" value="删除" class="btn" onclick="delUser(<?php echo $row['id'];?>)">
					</td>
				</tr>
				<?php endforeach;?>
				<?php if($totalRows>$pageSize):?>
					<tr>
						<td colspan="5"><?php echo showPage($page, $totalPage);?></td>
					</tr>
        		<?php endif;?>
            </tbody>
		</table>
	</div>
	<script type="text/javascript">
    	function addUser(){
    		window.location="addUser.php";
    	}
    	function editUser(id){
    		window.location="editUser.php?id="+id;
    	}
    	function delUser(id){
    		if(window.confirm("你确定要删除吗?")){
    			window.location="doAdminAction.php?act=delUser&id="+id;
    		}
    	}
    </script>
</body>
</html>