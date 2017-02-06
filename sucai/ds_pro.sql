/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : shopds

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-12-15 18:27:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ds_pro
-- ----------------------------
DROP TABLE IF EXISTS `ds_pro`;
CREATE TABLE `ds_pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pSn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pNum` int(10) unsigned DEFAULT '1',
  `mPrice` decimal(10,2) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `pDesc` text CHARACTER SET utf8,
  `pubTime` int(10) unsigned NOT NULL,
  `isShow` tinyint(1) DEFAULT '1',
  `isHot` tinyint(1) DEFAULT '0',
  `cId` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pName` (`pName`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ds_pro
-- ----------------------------
INSERT INTO `ds_pro` VALUES ('3', 'Apple iPhone 6s (A1700) 16G 玫瑰金色 移动联通电信4G手机', '1856584', '440', '4799.00', '3799.00', 'Apple iPhone 6s (A1700) 16G 玫瑰金色 移动联通电信4G手机，分辨率：1334*750，后置摄像头：1200万像素，前置摄像头：500万像素，指纹识别，金属机身，拍照', '1481616071', '1', '0', '2');
INSERT INTO `ds_pro` VALUES ('4', '2016 小米5s  全网通 标准版 3GB内存 32GB ROM 白色 移动联通电信4G手机', '2402692', '555', '1599.00', '1499.00', '小米小米5,3GB内存 32GB ROM 白色 移动联通电信4G手机,商品毛重：360.00g<span id=\"__kindeditor_bookmark_start_4__\">,热点：以旧换新，骁龙芯片，双卡,电池容量：3000mAh-3999mAh,机身内存：32GB,机身颜色：白色,像素：1600万以上</span>', '1481696136', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('5', 'OPPO R9s 全网通4G+64G 双卡双待手机 黑色', '3953254', '654', '2799.00', '2699.00', '<div class=\"sku-name\">\r\n	&nbsp;OPPO R9s 全网通4G+64G 双卡双待手机 黑色,前后1600万像素，3010mAh大电池，0.3mm微缝天线，信号更强外观更优美！选择下方购买方式的【移动】【电信】【联通】优惠购，套餐有优惠，还有话费返还！\r\n</div>', '1481696677', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('6', 'Apple iPhone 7 (A1660) 128G 亮黑色 移动联通电信4G手机', '3133829', '54354', '5899.00', '5799.00', '4.7 英寸（对角线）显示屏，1334 x 750 分辨率 <br />\r\n3D Touch<br />\r\n1200 万像素摄像头<br />\r\n配备嵌入式 M10 运动协处理器的 A10 Fusion 芯片<br />\r\n4K 视频拍摄 (30 fps) 以及慢动作视频拍摄 (120 fps, 1080p)<br />\r\n配备 Retina 闪光灯的 700 万像素 FaceTime HD 摄像头<br />\r\n内置于主屏幕按钮的 Touch ID 指纹识别传感器<br />\r\n具备 MIMO 技术的 802.11a/b/g/n/ac 无线网络 &nbsp; &nbsp; &nbsp;', '1481774088', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('7', 'Apple iPhone 5s (A1530) 16GB 金色 移动联通4G手机', '1057746', '4565', '1899.00', '1799.00', '4 英寸（对角线）Retina 显示屏，1136 x 640 分辨率 <br />\r\n配备 True Tone 闪光灯的 800 万像素 摄像头 <br />\r\n配备 M7 运动协处理器的 A7 芯片 <br />\r\n1080p HD 视频拍摄 (30 fps) 以及慢动作视频拍摄 (120 fps)<br />\r\nFaceTime  HD 摄像头 <br />\r\nTouch  ID 指纹识别传感器 <br />\r\n4G  LTE和 802.11n 无线网络 &nbsp; &nbsp; &nbsp;', '1481774312', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('8', '小米 红米Note4 高配全网通版 3GB+64GB 金色 移动联通电信4G手机 双卡双待', '3110721', '6767', '1199.00', '1099.00', '<p>\r\n	高配全网通版 3GB+64GB 金色 移动联通电信4G手机 双卡双待\r\n</p>\r\n<p>\r\n	<li>\r\n		商品毛重：350.00g\r\n	</li>\r\n	<li>\r\n		商品产地：中国大陆\r\n	</li>\r\n	<li>\r\n		系统：安卓（Android）\r\n	</li>\r\n	<li>\r\n		运行内存：3GB\r\n	</li>\r\n	<li>\r\n		热点：以旧换新，双卡双待，老人手机，快速充电，指纹识别，VoLTE，金属机身，拍照神器，女性手机，儿童手机\r\n	</li>\r\n	<li>\r\n		像素：1000-1600万\r\n	</li>\r\n	<li>\r\n		电池容量：4000mAh-5999mAh\r\n	</li>\r\n	<li>\r\n		机身内存：64GB\r\n	</li>\r\n	<li>\r\n		机身颜色：金色\r\n	</li>\r\n</p>', '1481787326', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('9', '魅族 魅蓝note3 手机 银白 全网通(3G RAM+32G ROM)标配', '10296114595', '456565', '1049.00', '949.00', '<li>\r\n	商品毛重：0.6kg\r\n</li>\r\n<li>\r\n	系统：安卓（Android）\r\n</li>\r\n<li>\r\n	运行内存：其他\r\n</li>\r\n<li>\r\n	热点：快速充电，指纹识别，金属机身，拍照神器\r\n</li>\r\n<li>\r\n	购买方式：其他\r\n</li>\r\n<li>\r\n	像素：1000-1600万\r\n</li>\r\n<li>\r\n	电池容量：4000mAh-5999mAh\r\n</li>\r\n<li>\r\n	机身内存：支持内存卡\r\n</li>\r\n<li>\r\n	机身颜色：银色\r\n</li>', '1481787572', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('10', '华为 Mate 9 Pro 4GB+64GB版 琥珀金 移动联通电信4G手机 双卡双待', '3749089', '654', '4699.00', '4599.00', '<li>\r\n	商品毛重：0.55kg\r\n</li>\r\n<li>\r\n	商品产地：中国大陆\r\n</li>\r\n<li>\r\n	系统：安卓（Android）\r\n</li>\r\n<li>\r\n	运行内存：4GB\r\n</li>\r\n<li>\r\n	电池容量：4000mAh-5999mAh\r\n</li>\r\n<li>\r\n	像素：1600万以上\r\n</li>\r\n<li>\r\n	机身内存：64GB\r\n</li>\r\n<li>\r\n	热点：双卡双待，指纹识别，拍照\r\n</li>', '1481787793', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('11', 'vivo X7 全网通 4GB+64GB 移动联通电信4G手机 双卡双待 金色', '10429992152', '4544', '2498.00', '2398.00', '<li>\r\n	商品毛重：0.58kg\r\n</li>\r\n<li>\r\n	系统：安卓（Android）\r\n</li>\r\n<li>\r\n	运行内存：4GB\r\n</li>\r\n<li>\r\n	热点：骁龙芯片，双卡双待，指纹识别，拍照神器\r\n</li>\r\n<li>\r\n	购买方式：其他\r\n</li>\r\n<li>\r\n	像素：1000-1600万\r\n</li>\r\n<li>\r\n	电池容量：3000mAh-3999mAh\r\n</li>\r\n<li>\r\n	机身内存：64GB\r\n</li>\r\n<li>\r\n	机身颜色：金色\r\n</li>', '1481788719', '1', '0', '1');
INSERT INTO `ds_pro` VALUES ('12', '华日家居 胡桃楸木 现代中式 实木双人床 大床 婚床家具实木床 排骨架 1.5米床', '10817444013', '4554', '1990.00', '1890.00', '<li>\r\n	商品毛重：4.0kg\r\n</li>\r\n<li>\r\n	货号：1.8箱体DS0760010，1.8排骨DS0760020，1.5箱体DS0762010，1.8排骨\r\n</li>\r\n<li>\r\n	适用床垫尺寸：其它\r\n</li>\r\n<li>\r\n	床架结构：排骨架高箱\r\n</li>\r\n<li>\r\n	风格：中式\r\n</li>\r\n<li>\r\n	发货地：其它\r\n</li>\r\n<li>\r\n	家装风格：中式现代\r\n</li>\r\n<li>\r\n	实木材质：其它\r\n</li>\r\n<li>\r\n	分类：全实木\r\n</li>', '1481788923', '1', '0', '2');
INSERT INTO `ds_pro` VALUES ('13', '艾薇（AVIVI）单人床单40支纯棉斜纹加大床单1米/1.2米 裸婚时代 152*210cm', '752740', '765', '69.00', '60.00', '<li>\r\n	商品毛重：360.00g\r\n</li>\r\n<li>\r\n	商品产地：中国大陆\r\n</li>\r\n<li>\r\n	面料支数：40支\r\n</li>\r\n<li>\r\n	适用床尺寸：1.2米床\r\n</li>\r\n<li>\r\n	风格：条纹格子\r\n</li>\r\n<li>\r\n	分类：床单\r\n</li>', '1481790077', '1', '0', '2');
INSERT INTO `ds_pro` VALUES ('14', '家逸 时尚简约创意圆凳 非塑料坐凳 实木凳子 餐椅 弯曲木凳', '2941304', '4556', '79.00', '69.00', '<li>\r\n	商品毛重：2.72kg\r\n</li>\r\n<li>\r\n	商品产地：山东\r\n</li>\r\n<li>\r\n	货号：RF-634\r\n</li>\r\n<li>\r\n	材质：实木\r\n</li>\r\n<li>\r\n	风格：现代简约\r\n</li>\r\n<li>\r\n	分类：休闲办公椅\r\n</li>\r\n<li>\r\n	适用场景：客厅，办公室，卧室，书房，庭院/阳台\r\n</li>\r\n<li>\r\n	功能特点：其它\r\n</li>', '1481790323', '1', '0', '2');
INSERT INTO `ds_pro` VALUES ('15', '梓晨 简约现代客厅茶几地毯丝毛绒卧室床边满铺地毯 雅致浅驼(厚度4.5cm) 80CMx160CM', '1116102268', '4566', '66.00', '60.00', '<li>\r\n	商品毛重：8.0kg\r\n</li>\r\n<li>\r\n	货号：超柔\r\n</li>\r\n<li>\r\n	适用场景：客厅\r\n</li>\r\n<li>\r\n	分类：地毯\r\n</li>\r\n<li>\r\n	风格：简约时尚\r\n</li>', '1481790531', '1', '0', '2');
SET FOREIGN_KEY_CHECKS=1;
