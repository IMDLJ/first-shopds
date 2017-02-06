<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>管理员登陆</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/login.css"/>
</head>
<body>
	<div class="headerBar">
		<div class="logoBar login_logo">
			<div class="comWidth">
				<div class="logo fl">
					<a href="#"><img src="images/logo.png" alt="呵呵网"/></a>
				</div>
				<h3 class="welcome_title">欢迎登陆</h3>
			</div>
		</div>
	</div>
	<div class="loginBox">
		<div class="login_cont">
    		<form action="doLogin.php" method="post">
    			<ul class="login">
    				<li class="l_tit">管理员帐号</li>
    				<li class="mb_10"><input type="text" name="username" placeholder="请输入管理员帐号" class="login_input user_icon"></li>
    				<li class="l_tit">密码</li>
    				<li class="mb_10"><input type="password" name="password" class="login_input pass_icon"></li>
    				<li class="l_tit">验证码</li>
    				<li class="mb_10"><input type="text" name="verify" class="login_input"></li>
    				<li><img src="getVerify.php" alt=""></li>
    				<li class="autoLogin">
    					<input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登陆(一周内自动登陆)</label>
    				</li>
    				<li><input type="submit" value="登录" class="login_btn"></li>
    			</ul>
    		</form>
		</div>
	</div>
</body>
</html>
