/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : shopds

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-12-15 18:30:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ds_album
-- ----------------------------
DROP TABLE IF EXISTS `ds_album`;
CREATE TABLE `ds_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pId` int(10) unsigned NOT NULL,
  `albumPath` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ds_album
-- ----------------------------
INSERT INTO `ds_album` VALUES ('1', '3', 'ef8d1257387eaeb7519a5769d2209dc8.jpg');
INSERT INTO `ds_album` VALUES ('2', '3', '474cfc5dd87fc12b0747b993a450d8e4.jpg');
INSERT INTO `ds_album` VALUES ('3', '4', '92866ca1ffc96b2d2df5cb012efe066f.jpg');
INSERT INTO `ds_album` VALUES ('4', '4', 'c4d5bf195c7b6747bbb0e6cc597d94a0.jpg');
INSERT INTO `ds_album` VALUES ('5', '5', '107d79c36555444407c1ee6480cc244c.jpg');
INSERT INTO `ds_album` VALUES ('6', '5', '8272f8b4315d7e3a7d0d2378913ded28.jpg');
INSERT INTO `ds_album` VALUES ('9', '3', '0322f84089be342a313f9ca44cac66c5.jpg');
INSERT INTO `ds_album` VALUES ('10', '6', '29f5ebb28875410f80cd93d5d46ccc73.jpg');
INSERT INTO `ds_album` VALUES ('11', '6', '8bfe82e86805a6f584b88a9223da0c2e.jpg');
INSERT INTO `ds_album` VALUES ('12', '6', '223142e7eda4a68c90de55bceedbea9a.jpg');
INSERT INTO `ds_album` VALUES ('13', '6', 'ae9408a412cdc39f9e526257d5e21fa5.jpg');
INSERT INTO `ds_album` VALUES ('14', '7', '3477b7a64554a2a6ed0391c2e9c8fca6.jpg');
INSERT INTO `ds_album` VALUES ('15', '7', 'db9f4dc2101bf36380d3cad534ee0a78.jpg');
INSERT INTO `ds_album` VALUES ('16', '7', 'e5eda16b1ad2dcfb28a61bbe06848390.jpg');
INSERT INTO `ds_album` VALUES ('17', '7', 'a947015ca0534a90c74b7b5f8a54df83.jpg');
INSERT INTO `ds_album` VALUES ('18', '8', 'da7b4f69f410233cd153facdf6522765.jpg');
INSERT INTO `ds_album` VALUES ('19', '8', '4b8ea31c8cc4cccbd31815cd53a9e2c5.jpg');
INSERT INTO `ds_album` VALUES ('20', '8', '096f64aa3e5f49ec03e20fe0b1428f26.jpg');
INSERT INTO `ds_album` VALUES ('21', '8', '01901b4ada47347c7c6e389bf7237a66.jpg');
INSERT INTO `ds_album` VALUES ('22', '9', 'b24c3fc4d36659d00cb5503377d4dc75.jpg');
INSERT INTO `ds_album` VALUES ('23', '9', 'b12e0afc5d3bfd8bf9db2916af62b428.jpg');
INSERT INTO `ds_album` VALUES ('24', '9', '40d7b9a2d468cbf721bb7f16e4ec004e.jpg');
INSERT INTO `ds_album` VALUES ('25', '9', '76018d4514d50e4fd2d6677e9a80890e.jpg');
INSERT INTO `ds_album` VALUES ('26', '10', '7f5e3aa299fd265753fc01ecaf27e5f2.jpg');
INSERT INTO `ds_album` VALUES ('27', '10', '832e5ca40ba253da0640f3ea6568e9e8.jpg');
INSERT INTO `ds_album` VALUES ('28', '10', '67f7eecfaced5a402614b77c8c52608a.jpg');
INSERT INTO `ds_album` VALUES ('29', '10', '6708ed8ed374e42e60cb65c6ae165615.jpg');
INSERT INTO `ds_album` VALUES ('30', '11', '840731f1e7837bd45357f5c7f23d8170.png');
INSERT INTO `ds_album` VALUES ('31', '11', 'f84fc8bb94d23b5141ea2e7dbb3e606b.jpg');
INSERT INTO `ds_album` VALUES ('32', '11', 'aa95a7de8d9f3efc1837f2fd3898043e.jpg');
INSERT INTO `ds_album` VALUES ('33', '11', 'ea75b2ec91a22bb16b5268ea9a60160d.jpg');
INSERT INTO `ds_album` VALUES ('34', '12', '957044747a21baa18314c0ae1d27f357.jpg');
INSERT INTO `ds_album` VALUES ('35', '12', '55a6cb9ab3a5711d2385a2ec1f9e957f.jpg');
INSERT INTO `ds_album` VALUES ('36', '12', '03f3a1ef38c68a3b071c405f02d0593e.jpg');
INSERT INTO `ds_album` VALUES ('37', '12', '90f890fbcdf4ec7fba40b2e934368ebb.jpg');
INSERT INTO `ds_album` VALUES ('38', '13', '4dae40ea376b78db6b5df645f7c51fc1.jpg');
INSERT INTO `ds_album` VALUES ('39', '13', '9b56f241e52ee0b447237c1c5de0fc10.jpg');
INSERT INTO `ds_album` VALUES ('40', '13', '8bd57f290f1a02701d70b3744a546449.jpg');
INSERT INTO `ds_album` VALUES ('41', '13', '971aeed7b77c44fda4d0c141678b28ee.jpg');
INSERT INTO `ds_album` VALUES ('42', '14', 'e0cc6a2c336c40cfd1784962e8f2f144.jpg');
INSERT INTO `ds_album` VALUES ('43', '14', 'cf5fa194c1c403fd5455ab24e715d1e1.jpg');
INSERT INTO `ds_album` VALUES ('44', '14', 'dedc3dc56f5e6e35cdb659e98ea6a57d.jpg');
INSERT INTO `ds_album` VALUES ('45', '14', '9019e51319ed903e4261ce1db006f481.jpg');
INSERT INTO `ds_album` VALUES ('46', '15', '3e4e472a3a801d3feefaaadc74df1407.jpg');
INSERT INTO `ds_album` VALUES ('47', '15', '15efb7edb4817a0a7f54d40327b81a10.jpg');
INSERT INTO `ds_album` VALUES ('48', '15', 'ad78b89a56e8af4bb29202c5367a30f5.jpg');
INSERT INTO `ds_album` VALUES ('49', '15', '4b9c854b45ae071fde9627344a9a4f8b.jpg');
SET FOREIGN_KEY_CHECKS=1;
