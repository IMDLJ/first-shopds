<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/index.css"/>
	<link rel="stylesheet" type="text/css" href="styles/login.css"/>
</head>
<body>
	<div class="headerBar">
		<div class="logoBar reg_logo">
			<div class="comWidth">
				<div class="logo fl">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
				</div>
				<h3 class="welcome_title">欢迎注册</h3>
			</div>
		</div>
	</div>
	<div class="regBox">
		<div class="login_cont">
			<form action="doAction.php?act=reg" method="post" enctype="multipart/form-data">
				<ul class="login">
    				<li>
    					<span class="res_item"><i>*</i>用户名：</span>
    					<div class="input_item">
    						<input type="text" class="login_input user_icon" name="username" placeholder="请输入用户名">
    					</div>
    				</li>
    				<li>
    					<span class="res_item"><i>*</i>密码：</span>
    					<div class="input_item">
    						<input type="password" class="login_input pass_icon" name="password">
    					</div>
    				</li>
    				<li>
    					<span class="res_item"><i>*</i>邮箱：</span>
    					<div class="input_item">
    						<input type="email" class="login_input pass_icon" name="email" placeholder="请输入合法邮箱">
    					</div>
    				</li>
    				<li>
    					<span class="res_item"><i>*</i>性别：</span>
    					<div class="input_item radio_divbox">
    						<input type="radio" checked="checked" name="sex" value="1">男
    						<input type="radio" name="sex" value="2">女
    						<input type="radio" name="sex" value="3">保密
    					</div>
    				</li>
    				<li>
    					<span class="res_item"><i>*</i>头像：</span>
    					<div class="input_item file_divbox">
    						<input type="file" name="myface">
    					</div>
    				</li>
    				<li class="res_agree">
    					<span class="res_item"><i></i></span>
    					<input type="checkbox" id="agree" class="checked"><label for="agree">我已阅读并同意</label>
    					<a href="#">&lt;&lt;用户协议&gt;&gt;</a>
    				</li>
    				<li>
    					<span class="res_item"><i></i></span>
    					<input type="submit" value="提交" class="reg_btn">
    				</li>
    			</ul>
			</form>
		</div>
	</div>
</body>
</html>
