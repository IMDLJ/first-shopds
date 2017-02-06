<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>多个单文件上传</title>
</head>
<body>
	<form action="doAction2.php" method="post" enctype="multipart/form-data">
		<!-- 通过表单隐藏域限制上传文件的最大值 -->
 		<!-- <input type="hidden" name="MAX_FILE_SIZE" value="51200"/> -->
 		<!-- 通过accept属性限制上传文件的类型-->
        <!-- <input type="file" name="myfile" accept="image/jpeg,image/gif,image/png"/> -->
		请选择上传文件：<input type="file" name="myFile1"/><br/>
		请选择上传文件：<input type="file" name="myFile2"/><br/>
		请选择上传文件：<input type="file" name="myFile3"/><br/>
		<input type="submit" value="上传"/>
	</form>
</body>
</html>