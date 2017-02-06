<?php
require_once '../include.php';
$pageSize=8;
@$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$rows=getAdminByPage($page,$pageSize);
// $sql="select * from ds_admin";
// $totalRows=getResultNum($sql);
// $pageSize=2;
// $totalPage=ceil($totalRows/$pageSize);
// @$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
// if ($page<1||$page==null||!is_numeric($page)){
//     $page=1;
// }
// if ($page>=$totalPage)$page=$totalPage;
// $offset=($page-1)*$pageSize;
// $sql="select id,username,email from ds_admin limit {$offset},{$pageSize}";
// $rows=fetchAll($sql);

// //$rows=getAllAdmin();
if (!$rows){
    alertMes("sorry,没有管理员，请添加！", "addAdmin.php");
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
				<input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addAdmin()">
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th width="15%">编号</th>
					<th width="25%">管理员名称</th>
					<th width="35%">管理员邮箱</th>
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
					<td align="center">
						<input type="button" value="修改" class="btn" onclick="editAdmin(<?php echo $row['id'];?>)">
						<input type="button" value="删除" class="btn" onclick="delAdmin(<?php echo $row['id'];?>)">
					</td>
				</tr>
				<?php endforeach;?>
				<?php if($totalRows>$pageSize):?>
					<tr>
						<td colspan="4"><?php echo showPage($page, $totalPage);?></td>
					</tr>
        		<?php endif;?>
            </tbody>
		</table>
	</div>
	<script type="text/javascript">
    	function addAdmin(){
    		window.location="addAdmin.php";
    	}
    	function editAdmin(id){
    		window.location="editAdmin.php?id="+id;
    	}
    	function delAdmin(id){
    		if(window.confirm("你确定要删除吗?")){
    			window.location="doAdminAction.php?act=delAdmin&id="+id;
    		}
    	}
    </script>
</body>
</html>