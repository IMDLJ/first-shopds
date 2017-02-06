<?php
    require_once 'include.php';
    $cates=getAllCate();
    //print_r($cates);
    if (!($cates && is_array($cates))){
        alertMes("不好意思，网站维护中！", "http://www.baidu.com");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/index.css"/>
</head>
<body>
	<div class="headerBar">
		<div class="topBar">
			<div class="comWidth">
				<div class="leftArea">
					<a href="#" class="collection">收藏</a>
				</div>
				<div class="rightArea">
					欢迎来到电商网！
					<?php if(isset($_SESSION['loginFlag'])):?>
    					<span>欢迎您</span><?php echo $_SESSION['username'];?>
    					<a href="doAction.php?act=userOut">[退出]</a>
					<?php else:?>
						<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="logoBar">
			<div class="comWidth">
				<div class="logo fl">
					<a href="#"><img src="images/logo.png" alt="呵呵网"/></a>
				</div>
				<div class="search_box fl">
					<input type="text" class="search_text fl"/>
					<input type="button" value="搜索" class="search_btn fr"/>
				</div>
				<div class="shopBar fr">
					<span class="shopText fl">购物车</span>
					<span class="shopNum fl">0</span>
				</div>
			</div>
		</div>
		<div class="navBox">
			<div class="comWidth">
				<div class="shopClass fl">
					<h3>全部商品分类<i></i></h3>
					<div class="shopClass_show">
						<dl class="shopClass_item">
							<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a>
								<a href="#" class="aLink">合约机</a></dt>
							<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
						</dl>
						<dl class="shopClass_item">
							<dt><a href="#" class="b">电脑 </a> <a href="#" class="b">硬件外设</a>
								<a href="#" class="aLink">装机宝</a></dt>
							<dd><a href="#">笔记本</a> <a href="#">台式机</a> <a href="#">超极本</a> <a href="#">平板</a></dd>
						</dl>
						<dl class="shopClass_item">
							<dt><a href="#" class="b">大家电 </a></dt>
							<dd><a href="#">电视</a> <a href="#">空调</a> <a href="#">冰箱</a> <a href="#">洗衣机</a></dd>
						</dl>
						<dl class="shopClass_item">
							<dt><a href="#" class="b">厨房电器 </a> <a href="#" class="b">生活电器</a></dt>
							<dd><a href="#">空气净化器 </a> <a href="#">微波炉</a> <a href="#">取暖设备</a></dd>
						</dl>
						<dl class="shopClass_item">
							<dt><a href="#" class="b">食品/饮料/生鲜 </a>
								<a href="#" class="aLink">粮油</a></dt>
							<dd><a href="#">进口</a> <a href="#">方便面</a> <a href="#">零食</a> <a href="#">保健</a></dd>
						</dl>
					</div>
					<div class="shopClass_list hide">
						<div class="shopClass_cont">
							<dl class="shopList_item">
								<dt>电脑整机</dt>
								<dd>
									<a href="#">笔记本</a>
									<a href="#">超极本</a>
									<a href="#">上网本</a>
									<a href="#">平板电脑</a>
									<a href="#">台式机</a>
								</dd>
							</dl>
							<dl class="shopList_item">
								<dt>装机配件</dt>
								<dd>
									<a href="#">CPU</a>
									<a href="#">硬盘</a>
									<a href="#">SSD固态硬盘</a>
									<a href="#">内存</a>
									<a href="#">显示</a>
									<a href="#">器智能显示器</a>
									<a href="#">主板</a>
									<a href="#">显卡</a>
									<a href="#">机箱</a>
									<a href="#">电源</a>
									<a href="#">散热器</a>
									<a href="#">刻录机/光驱</a>
									<a href="#">声卡</a>
									<a href="#">拓展卡</a>
									<a href="#">服务器配件</a>
									<a href="#">DIY小附件</a>
									<a href="#">装机/配件安装</a>
								</dd>
							</dl>
							<dl class="shopList_item">
								<dt>电脑整机</dt>
								<dd>
									<a href="#">笔记本</a>
									<a href="#">超极本</a>
									<a href="#">上网本</a>
									<a href="#">平板电脑</a>
									<a href="#">台式机</a>
								</dd>
							</dl>
							<dl class="shopList_item">
								<dt>电脑整机</dt>
								<dd>
									<a href="#">笔记本</a>
									<a href="#">超极本</a>
									<a href="#">上网本</a>
									<a href="#">平板电脑</a>
									<a href="#">台式机</a>
								</dd>
							</dl>
							<dl class="shopList_item">
								<dt>电脑整机</dt>
								<dd>
									<a href="#">笔记本</a>
									<a href="#">超极本</a>
									<a href="#">上网本</a>
									<a href="#">平板电脑</a>
									<a href="#">台式机</a>
								</dd>
							</dl>
							<dl class="shopList_item">
								<dt>电脑整机</dt>
								<dd>
									<a href="#">笔记本</a>
									<a href="#">超极本</a>
									<a href="#">上网本</a>
									<a href="#">平板电脑</a>
									<a href="#">台式机</a>
								</dd>
							</dl>
							<div class="shopList_links">
								<a href="#">电脑整机频道<span></span></a>
								<a href="#">硬件/外设频道<span></span></a>
							</div>
						</div>
					</div>
				</div>
				<ul class="nav fl">
					<li><a href="#" class="active">数码城</a></li>
					<li><a href="#">天黑黑</a></li>
					<li><a href="#">团购</a></li>
					<li><a href="#">发现</a></li>
					<li><a href="#">二手特卖</a></li>
					<li><a href="#">名品会</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="banner comWidth clearfix">
		<div class="banner_bar banner_big">
			<ul class="imgBox">
				<li><a href="#"><img src="images/banner/banner01.png" alt="banner"/></a></li>
				<li><a href="#"><img src="images/banner/banner03.png" alt="banner"/></a></li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a>
				<a href="#"></a>
			</div>
		</div>
	</div>
	<?php foreach ($cates as $cate):?>
	<div class="shopTit comWidth">
		<span class="icon"></span>
		<h3><?php echo $cate['cName']?></h3>
		<a href="#" class="more">更多&gt;&gt;</a>
	</div>
	<div class="shopList comWidth clearfix">
		<div class="leftArea">
			<div class="banner_bar banner_small">
				<ul class="imgBox">
					<li><a href="#"><img src="images/banner/banner_sm01.png" alt="banner"/></a></li>
					<li><a href="#"><img src="images/banner/banner_sm02.png" alt="banner"/></a></li>
				</ul>
				<div class="imgNum">
					<a href="#" class="active"></a>
					<a href="#"></a>
				</div>
			</div>
		</div>
		<div class="rightArea">
			<div class="shopList_top clearfix">
			<?php
			     $pros=getProsByCid($cate['id']);
			     if ($pros && is_array($pros)):
			     foreach ($pros as $pro):
			     $proImg=getProImgById($pro['id']);
			?>
				<div class="shop_item">
					<div class="shop_img">
						<a href="proDetails.php?id=<?php echo $pro['id'];?>" target="_blank"><img src="image_220/<?php echo $proImg['albumPath'];?>" alt="shopImg"/></a>
					</div>
					<h3><?php echo $pro['pName'];?></h3>
					<p><?php echo $pro['iPrice'];?>元</p>
				</div>
			<?php endforeach; endif;?>
			</div>
			<div class="shopList_sm clearfix">
			<?php
    			$pros_sm=getSmallProByCid($cate['id']);
    			if ($pros_sm && is_array($pros_sm)):
    			foreach ($pros_sm as $pro_sm):
    			$proSmImg=getProImgById($pro_sm['id']);
			?>
				<div class="shopItem_sm">
					<div class="shopItem_smImg">
						<a href="proDetails.php?id=<?php echo $pro_sm['id'];?>" target="_blank"><img src="image_220/<?php echo $proSmImg['albumPath'];?>" alt="shopItem_smImg"/></a>
					</div>
					<div class="shopItem_text">
						<p><?php echo $pro_sm['pName'];?></p>
						<h3>￥<?php echo $pro_sm['iPrice']?></h3>
					</div>
				</div>
			<?php endforeach; endif;?>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	<div class="hr_25"></div>
	<div class="footer">
		<p>
			<a href="#">电商简介</a> <i>|</i>
			<a href="#">电商公告</a> <i>|</i>
			<a href="#">招纳贤士</a> <i>|</i>
			<a href="#">联系我们</a> <i>|</i>
			<span>客服热线：400-675-1234</span>
		</p>
		<p>Copyright &copy; 2006 - 2014 电商版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;
			京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
		<p class="web">
			<a href="#"><img src="images/footer_img.png"/></a>
			<a href="#"><img src="images/footer_img.png"/></a>
			<a href="#"><img src="images/footer_img.png"/></a>
			<a href="#"><img src="images/footer_img.png"/></a>
		</p>
	</div>

</body>
</html>
