<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>用户登陆</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/index.css"/>
	<link rel="stylesheet" type="text/css" href="styles/login.css"/>
</head>
<body>
	<div class="headerBar">
		<div class="logoBar login_logo">
			<div class="comWidth">
				<div class="logo fl">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
				</div>
				<h3 class="welcome_title">欢迎登陆</h3>
			</div>
		</div>
	</div>
	<div class="loginBox">
		<div class="login_cont">
			<form action="doAction.php?act=login" method="post">
				<ul class="login">
    				<li class="l_tit">邮箱/用户名/已验证手机</li>
    				<li class="mb_10">
    					<input type="text" class="login_input user_icon" name="username" placeholder="请输入用户名">
    				</li>
    				<li class="l_tit">密码</li>
    				<li class="mb_10">
    					<input type="password" class="login_input pass_icon" name="password">
    				</li>
    				<li class="autoLogin">
    					<input type="checkbox" id="login01" class="checked"><label for="login01" class="pad_r">自动登录</label>
    					<input type="checkbox" id="login02" class="checked"><label for="login02" class="pad_r">安全控件登录</label>
    					<a href="#" class="forgot_pas">忘记密码？</a>
    				</li>
    				<li><input type="submit" value="登录" class="login_btn"></li>
    			</ul>
			</form>
			<div class="login_partners">
				<p  class="l_tit">使用合作网站账号登录：</p>
				<ul class="login_list clearfix">
					<li><a href="#">QQ</a></li>
					<li><span>|</span></li>
					<li><a href="#">网易</a></li>
					<li><span>|</span></li>
					<li><a href="#">人人</a></li>
					<li><span>|</span></li>
					<li><a href="#">奇虎360</a></li>
					<li><span>|</span></li>
					<li><a href="#">开心</a></li>
					<li><span>|</span></li>
					<li><a href="#">豆瓣</a></li>
					<li><span>|</span></li>
					<li><a href="#">搜狐</a></li>
					<li><span>|</span></li>
					<li><a href="#" class="more">更多</a></li>
				</ul>
			</div>
		</div>
		<a href="reg.php" class="reg_link">免费注册&gt;&gt;</a>
	</div>
</body>
</html>