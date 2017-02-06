<?php
    require_once '../include.php';

    @$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
    $sql="select * from ds_cate";
    $totalRows=getResultNum($sql);
    $pageSize=5;
    $totalPage=ceil($totalRows/$pageSize);
    if($page<1||$page==null||!is_numeric($page))$page=1;
    if($page>=$totalPage)$page=$totalPage;
    $offset=($page-1)*$pageSize;
    $sql="select * from ds_cate order by id asc limit {$offset},{$pageSize}";
    $rows=fetchAll($sql);
    if (!$rows){
        alertMes("sorry,没有分类，请添加！", "addCate.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>分类列表</title>
	<link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
	<div class="details">
		<div class="details_operation clearfix">
			<div class="bui_select">
				<input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addCate()">
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th width="25%">编号</th>
					<th width="35%">分类</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($rows as $row):?>
                <tr>
					<td>
						<!-- 这里的id和for需要循环出来 -->
						<input type="checkbox" id="<?php echo $row['id'];?>" class="check">
						<label for="<?php echo $row['id'];?>" class="label"><?php echo $row['id'];?></label>
					</td>
					<td><?php echo $row['cName'];?></td>
					<td align="center">
						<input type="button" value="修改" class="btn" onclick="editCate(<?php echo $row['id'];?>)">
						<input type="button" value="删除" class="btn" onclick="delCate(<?php echo $row['id'];?>)">
					</td>
				</tr>
				<?php endforeach;?>
				<?php if ($totalRows>$pageSize):?>
					<tr>
						<td colspan="3"><?php echo showPage($page, $totalPage);?></td>
					</tr>
				<?php endif;?>
            </tbody>
		</table>
	</div>
	<script type="text/javascript">
    	function addCate(){
    		window.location="addCate.php";
    	}
    	function editCate(id){
    		window.location="editCate.php?id="+id;
    	}
    	function delCate(id){
    		if(window.confirm("你确定要删除吗?")){
    			window.location="doAdminAction.php?act=delCate&id="+id;
    		}
    	}
    </script>
</body>
</html>