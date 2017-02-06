<?php
    require_once 'include.php';
    $id=$_REQUEST['id'];
    $proInfo=getProById($id);
    $proImgs=getProImgsById($id);
    if (!($proImgs && is_array($proImgs))){
        alertMes("商品图片错误", "index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>商品介绍</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/index.css"/>
	<link rel="stylesheet" type="text/css" href="styles/detail.css"/>
	<link type="text/css" rel="stylesheet" media="all" href="styles/jquery.jqzoom.css"/>
	<script src="scripts/jquery-1.6.js" type="text/javascript"></script>
	<script src="scripts/jquery.jqzoom-core.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function() {
        	$('.jqzoom').jqzoom({
                zoomType: 'standard',
                lens:true,
                preloadImages: false,
                alwaysOn:false,
    			title:false,
    			zoomWidth:410,
    			zoomHeight:410
            });
        });
    </script>
</head>
<body class="grey">
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
					<div class="shopClass_show hide">
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
	<div class="userPosition comWidth">
		<strong><a href="#">首页</a></strong> <span>&nbsp;&gt;&nbsp;</span>
		<a href="#"><?php echo $proInfo['cName'];?></a> <span>&nbsp;&gt;&nbsp;</span>
		<em><?php echo $proInfo['pSn'];?></em>
	</div>
	<div class="description_info comWidth">
		<div class="description clearfix">
			<div class="leftArea">
				<div class="description_imgs">
					<div class="big" >
    					<a href="image_800/<?php echo $proImgs[0]['albumPath'];?>" class="jqzoom" rel='gal1' title="triumph" >
    						<img class="bigImg" src="image_350/<?php echo $proImgs['0']['albumPath'];?>" title="triumph"/>
    					</a>
					</div>
					<ul class="des_smimg clearfix" id="thumblist">
    					<?php foreach($proImgs as $key=>$proImg):?>
    					<li>
    						<a class="<?php echo $key==0?"zoomThumbActive":"";?> active" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'image_350/<?php echo $proImg['albumPath'];?>',largeimage: 'image_800/<?php echo $proImg['albumPath'];?>'}">
    							<img src="image_50/<?php echo $proImg['albumPath'];?>" alt="">
    						</a>
    					</li>
    					<?php endforeach;?>
					</ul>
				</div>
			</div>
			<div class="rightArea">
				<div class="des_content">
					<h3 class="des_content_tit"><?php echo $proInfo['pName'];?></h3>
					<div class="dl clearfix">
						<div class="dt">慕课价</div>
						<div class="dd">
							<span class="des_money"><em>¥</em><?php echo $proInfo['iPrice'];?></span>
						</div>
					</div>
					<div class="dl clearfix">
						<div class="dt">优惠</div>
						<div class="dd">
							<span class="hg">
								<i class="hg_icon">满换购</i><em>购ipad加价优惠够配件或USB充电插座</em>
							</span>
						</div>
					</div>
					<div class="des_position">
						<div class="dl clearfix">
							<div class="dt">送到</div>
							<div class="dd clearfix">
								<div class="select">
									<h3>海淀区五环内</h3>
									<span></span>
									<ul class="show_select">
										<li>122</li>
										<li>234</li>
										<li>543</li>
									</ul>
								</div>
								<span class="theGoods">有货，可当日出库</span>
							</div>
						</div>
						<div class="dl clearfix">
							<div class="dt colorSelect">选择颜色</div>
							<div class="dd clearfix">
								<div class="des_item des_item_active">白色</div>
								<div class="des_item">黑色</div>
								<div class="des_item">灰色</div>
							</div>
						</div>
						<div class="dl clearfix">
							<div class="dt des_select_more">选择规格</div>
							<div class="dd clearfix">
								<div class="des_item des_item_sm des_item_active">WIFI 16G</div>
								<div class="des_item des_item_sm">WIFI 64G</div>
								<div class="des_item des_item_sm">WIFI 32G</div>
								<div class="des_item des_item_sm">WIFI Cellular 32G</div>
								<div class="des_item des_item_sm">WIFI Cellular 64G</div>
								<div class="des_item des_item_sm">WIFI Cellular 16G</div>
							</div>
						</div>
						<div class="dl clearfix">
							<div class="dt des_num">数量</div>
							<div class="dd clearfix">
								<div class="des_number">
									<div class="reduction">-</div>
									<div class="des_input">
										<input type="text" value="1">
									</div>
									<div class="plus">+</div>
								</div>
								<span class="xg">限购<em>9</em>件</span>
							</div>
						</div>
					</div>
					<div class="des_select">
						已选择  <span>“白色|WIFI 16G”</span>
					</div>
					<div class="shop_buy">
						<a href="#" class="shopping_btn">加入购物车</a>
						<span class="line"></span>
						<a href="#" class="buy_btn">立即购买</a>
					</div>
					<div class="notes">注意：此商品可提供普通发票，不提供增值税发票。</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hr_15"></div>
	<div class="des_info comWidth clearfix">
		<div class="leftArea">
			<div class="recommend bule_color">
				<h3 class="tit">同价位</h3>
				<div class="item">
					<div class="item_cont">
						<div class="img_item">
							<a href="#"><img src="images/shop-img.jpg"/></a>
						</div>
						<p><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话 </a></p>
						<p class="money">￥699.00</p>
					</div>
				</div>
				<div class="item">
					<div class="item_cont">
						<div class="img_item">
							<a href="#"><img src="images/shop-img.jpg"/></a>
						</div>
						<p><a href="#">小米 红米 3G，粉色（1600像素2.7''LCD）</a></p>
						<p class="money">￥699.00</p>
					</div>
				</div>
			</div>
			<div class="hr_15"></div>
			<div class="recommend">
				<h3 class="tit">看了最终买</h3>
				<div class="item">
					<div class="item_cont">
						<div class="img_item">
							<a href="#"><img src="images/shop-img.jpg"/></a>
						</div>
						<p><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话 </a></p>
						<p class="money">￥699.00</p>
					</div>
				</div>
				<div class="item">
					<div class="item_cont">
						<div class="img_item">
							<a href="#"><img src="images/shop-img.jpg"/></a>
						</div>
						<p><a href="#">小米 红米 3G，粉色（1600像素2.7''LCD）</a></p>
						<p class="money">￥699.00</p>
					</div>
				</div>
			</div>
		</div>
		<div class="rightArea">
			<div class="des_infoContent">
				<ul class="des_tit">
					<li class="active"><span class="pro_intro">产品介绍</span></li>
					<li><span class="pro_descri">商品评价(4725)</span></li>
				</ul>
				<div class="ad">
					<a href="#"><img src="images/intro_01.png"/></a>
				</div>
				<div class="info_text">
					<div class="info_tit clearfix">
						<h3>强烈推荐</h3><h4>货比三家，还选</h4>
					</div>
					<p>现在就是买mini的好时候！换代清仓直降，但苹果品质不变！A5双核，内置Lightning闪电接口，正反可插，方便人性。小身材，炫丽的7.9英寸显示屏，7.2mm的厚度，薄如铅笔。女生包包随身携带更时尚！facetime视频通话，与密友24小时畅聊不断线。微信倾力打造，你的智能助理。苹果的牌子就不用我说了，1111补仓，存货不多哦！</p>
					<div class="hr_45"></div>
					<div class="info_tit">
						<h3>精美图片</h3>
					</div>
					<p>苹果iPad7.9 英寸显示屏可带来新的iPad体验，绚丽的显示屏，在每一寸画面中呈现灵动鲜活的美妙影像。苹果miniMD528CH/A采用500 万像素 iSight 摄像头，清晰记录每一次的幸福。</p>
					<div class="hr_45"></div>
					<img src="images/pad_bot.png" class="center"/>
					<div class="hr_45"></div>
				</div>
			</div>
			<div class="hr_15"></div>
			<div class="des_infoContent">
				<h3 class="shopDes_tit">商品评价</h3>
				<div class="score_box clearfix">
					<div class="score">
						<span>4.7</span><em>分</em>
					</div>
					<div class="score_speed">
						<ul class="score_speed_text">
							<li class="speed_01">非常不满意</li>
							<li class="speed_02">不满意</li>
							<li class="speed_03">一般</li>
							<li class="speed_04">满意</li>
							<li>非常满意</li>
						</ul>
						<div class="score_num">4.7</div>
						<p>共18939位网友参与评分</p>
					</div>
				</div>
				<div class="review_tab clearfix">
					<ul class="review fl">
						<li><a href="#">全部</a></li>
						<li><a href="#">满意（17490）</a></li>
						<li><a href="#">一般（549）</a></li>
						<li><a href="#">不满意（743）</a></li>
					</ul>
					<div class="review_sort fr">
						<a href="#" class="review_time">时间排序</a>
						<a href="#" class="review_reco">推荐排序<span></span></a>
					</div>
				</div>
				<div class="review_listBox">
					<div class="review_list clearfix">
						<div class="review_userHead fl">
							<div class="review_user">
								<img src="images/one.png" alt="">
								<p>61***42</p>
								<p>金色会员</p>
							</div>
						</div>
						<div class="review_cont">
							<div class="review_t clearfix">
								<div class="starsBox fl">
									<span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span>
								</div>
								<span class="starts_text fl">5分 满意</span>
							</div>
							<p>挺不错的，信赖</p>
							<p class="cd"><a href="#">踩（0）</a><a href="#">顶（0）</a></p>
							<span class="date">2014-03-07 17:41:44</span>
						</div>
					</div>
					<div class="review_list clearfix">
						<div class="review_userHead fl">
							<div class="review_user">
								<img src="images/two.png" alt="">
								<p>88***22</p>
								<p>铜色会员</p>
							</div>
						</div>
						<div class="review_cont">
							<div class="review_t clearfix">
								<div class="starsBox fl">
									<span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span>
								</div>
								<span class="starts_text fl">5分 满意</span>
							</div>
							<p>挺不错的，信赖</p>
							<p class="cd"><a href="#">踩（0）</a> <a href="#">顶（0）</a></p>
							<span class="date">2014-03-07 17:41:44</span>
						</div>
					</div>
				</div>
				<div class="hr_15"></div>
				<div class="page detail_page">
					<a href="#">&lt;上一页</a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<span class="hl">…</span>
					<a href="#">200</a>
					<a href="#">下一页&gt;</a>
					<span class="morePage">共200页，到第</span><input type="text" class="pageNum" value="1"><span class="ye">页</span>
					<input type="button" value="确定" class="page_btn">
				</div>
				<div class="hr_25"></div>
			</div>
			<div class="hr_15"></div>
			<!-- 全部咨询 -->
			<div class="consulting">
				<div class="consult_head clearfix">
					<h3 class="consult_tit fl">全部咨询(705)</h3>
					<div class="ex_consult fr">发表咨询</div>
				</div>
				<div class="tips">提示:因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复信息仅供参考！若由此给您带来不便请多多谅解，谢谢！</div>
				<div class="hr_15"></div>
				<div class="consult_box">
					<div class="review_list clearfix">
						<div class="review_userHead fl">
							<div class="review_user">
								<img src="images/huiyuan03.png" alt="">
								<p>12***20</p>
								<p>土星会员</p>
							</div>
						</div>
						<div class="review_cont">
							<h3>[商品咨询]</h3>
							<p>还能在便宜点么？</p>
							<div class="replay">商家回复：您好，现在已经是活动价格了</div>
							<span class="date">2014-03-07 17:41:44</span>
						</div>
					</div>
					<div class="review_list clearfix">
						<div class="review_userHead fl">
							<div class="review_user">
								<img src="images/huiyuan03.png" alt="">
								<p>12***20</p>
								<p>土星会员</p>
							</div>
						</div>
						<div class="review_cont">
							<h3>[商品咨询]</h3>
							<p>还能在便宜点么？</p>
							<div class="replay">商家回复：您好，现在已经是活动价格了</div>
							<span class="date">2014-03-07 17:41:44</span>
						</div>
					</div>
				</div>
				<div class="hr_15"></div>
				<div class="page detail_page">
					<a href="#">&lt;上一页</a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<span class="morePage">到第</span><input type="text" class="pageNum" value="1"><span class="ye">页</span>
					<input type="button" value="确定" class="page_btn">
				</div>
				<div class="hr_25"></div>
			</div>

		</div>
	</div>
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

