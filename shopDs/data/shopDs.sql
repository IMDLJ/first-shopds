-- 修改数据库编码的命令
ALTER DATABASE shopDs CHARACTER
SET utf8;

CREATE DATABASE
IF NOT EXISTS `shopDs`;

USE `shopDs`;

-- 管理员表
DROP TABLE IF EXISTS `ds_admin`;

CREATE TABLE `ds_admin` (
	`id` TINYINT UNSIGNED auto_increment KEY,
	`username` VARCHAR (20) NOT NULL UNIQUE,
	`password` CHAR (32) NOT NULL,
	`email` VARCHAR (50) NOT NULL
);

-- 分类表
DROP TABLE IF EXISTS `ds_cate`;

CREATE TABLE `ds_cate` (
	`id` SMALLINT UNSIGNED auto_increment KEY,
	`cName` VARCHAR (50) UNIQUE
);

-- 商品表
DROP TABLE IF EXISTS `ds_pro`;

CREATE TABLE `ds_pro` (
	`id` INT UNSIGNED auto_increment KEY,
	`pName` VARCHAR (50) NOT NULL UNIQUE,
	`pSn` VARCHAR (50) NOT NULL,
	`pNum` INT UNSIGNED DEFAULT 1,
	`mPrice` DECIMAL (10, 2) NOT NULL,
	`iPrice` DECIMAL (10, 2) NOT NULL,
	`pDesc` text,
	-- `pImg` VARCHAR (50) NOT NULL,
	`pubTime` INT UNSIGNED NOT NULL,
	`isShow` TINYINT (1) DEFAULT 1,
	`isHot` TINYINT (1) DEFAULT 0,
	`cId` SMALLINT UNSIGNED NOT NULL
);

-- 用户表
DROP TABLE IF EXISTS `ds_user`;

CREATE TABLE `ds_user` (
	`id` INT UNSIGNED auto_increment KEY,
	`username` VARCHAR (20) NOT NULL UNIQUE,
	`password` CHAR (32) NOT NULL,
	`sex` enum ('男', '女', '保密') NOT NULL DEFAULT '保密',
	`face` VARCHAR (50) NOT NULL,
	`regTime` INT UNSIGNED NOT NULL
) ENGINE = INNODB DEFAULT charset = utf8;

-- 增加两个字段activeFlag
ALTER TABLE ds_user ADD activeFlag TINYINT(1) DEFAULT 0;
ALTER TABLE ds_user ADD email VARCHAR(50) NOT NULL;

-- 相册表
DROP TABLE IF EXISTS `ds_album`;

CREATE TABLE `ds_album` (
	`id` INT UNSIGNED auto_increment KEY,
	`pId` INT UNSIGNED NOT NULL,
	`albumPath` VARCHAR (50) NOT NULL
);

