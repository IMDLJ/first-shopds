/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : shopds

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-12-15 18:28:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ds_cate
-- ----------------------------
DROP TABLE IF EXISTS `ds_cate`;
CREATE TABLE `ds_cate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cName` (`cName`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_cate
-- ----------------------------
INSERT INTO `ds_cate` VALUES ('1', '家用电脑');
INSERT INTO `ds_cate` VALUES ('2', '精品家具');
SET FOREIGN_KEY_CHECKS=1;
