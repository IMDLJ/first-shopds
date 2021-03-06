<?php
    require_once '../include.php';
    checkLogined();
    $rows=getAllCate();
    //print_r($rows);
    if(!$rows){
        alertMes("没有相应分类，请先添加分类！", "addCate.php");
    }

    $id=$_REQUEST['id'];
    $proInfo=getProById($id);
    //print_r($proInfo); exit;

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>商品修改</title>
	<link href="styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
	<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"></script>
	<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"></script>
	<script type="text/javascript" src="./scripts/jquery-1.6.4.js"></script>
	<style>
        .table{width:70%;background-color:#ccc;border-spacing: 0;}
        .table td{padding:5px;}
    </style>
    <script>
        KindEditor.ready(function(K) {
            window.editor = K.create('#editor_id');
    	});
        $(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="thumbs[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
            		$path = $(this).val();
            		$filename = $path.substring($path.lastIndexOf("\\")+1);
            		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
            		$attachItem.find(".left").html($filename);
            		$("#attachList").append($attachItem);
        		});
        	});
        	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
        });
    </script>
</head>
<body>
	<h3>添加商品</h3>
    <form action="doAdminAction.php?act=editPro&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <table class="table" border="1">
        	<tr>
        		<td align="right">商品名称</td>
        		<td><input type="text" name="pName" value="<?php echo $proInfo['pName'];?>"/></td>
        	</tr>
        	<tr>
        		<td align="right">商品分类</td>
        		<td>
        		<select name="cId">
					<?php foreach ($rows as $row):?>
        				<option value="<?php echo $row['id']?>" <?php echo $row['id']==$proInfo['cId']?"selected='selected'":null;?>><?php echo $row['cName'];?></option>
					<?php endforeach;?>
        		</select>
        		</td>
        	</tr>
        	<tr>
        		<td align="right">商品货号</td>
        		<td><input type="text" name="pSn"  value="<?php echo $proInfo['pSn'];?>"/></td>
        	</tr>
        	<tr>
        		<td align="right">商品数量</td>
        		<td><input type="text" name="pNum"  value="<?php echo $proInfo['pNum'];?>"/></td>
        	</tr>
        	<tr>
        		<td align="right">商品市场价</td>
        		<td><input type="text" name="mPrice"  value="<?php echo $proInfo['mPrice'];?>"/></td>
        	</tr>
        	<tr>
        		<td align="right">商品电商价</td>
        		<td><input type="text" name="iPrice"  value="<?php echo $proInfo['iPrice'];?>"/></td>
        	</tr>
        	<tr>
        		<td align="right">商品描述</td>
        		<td>
        			<textarea name="pDesc" id="editor_id" style="width:100%;height:150px;"><?php echo $proInfo['pDesc'];?></textarea>
        		</td>
        	</tr>
        	<tr>
        		<td align="right">商品图像</td>
        		<td>
        			<a href="javascript:void(0)" id="selectFileBtn">添加附件</a>
        			<div id="attachList" class="clear"></div>
        		</td>
        	</tr>
        </table>
        <input type="submit" style="margin-top: 5px;" value="确定"/>
    </form>
</body>
</html>