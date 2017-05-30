/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : trang_shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-30 16:37:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmnd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `mid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` int(1) DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoigian` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mathang_mid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for comment_prod
-- ----------------------------
DROP TABLE IF EXISTS `comment_prod`;
CREATE TABLE `comment_prod` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoigian` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment_prod
-- ----------------------------

-- ----------------------------
-- Table structure for comment_sale
-- ----------------------------
DROP TABLE IF EXISTS `comment_sale`;
CREATE TABLE `comment_sale` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nid` int(100) DEFAULT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoigian` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment_sale
-- ----------------------------

-- ----------------------------
-- Table structure for giohang
-- ----------------------------
DROP TABLE IF EXISTS `giohang`;
CREATE TABLE `giohang` (
  `mahoadon` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT NULL,
  `mid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(5) DEFAULT NULL,
  `tinhtrang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaygiao` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmnd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tennguoimua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_thanhtoan` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_uid` int(20) DEFAULT NULL,
  PRIMARY KEY (`mahoadon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of giohang
-- ----------------------------

-- ----------------------------
-- Table structure for kho
-- ----------------------------
DROP TABLE IF EXISTS `kho`;
CREATE TABLE `kho` (
  `mid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongcon` int(10) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of kho
-- ----------------------------

-- ----------------------------
-- Table structure for mathang
-- ----------------------------
DROP TABLE IF EXISTS `mathang`;
CREATE TABLE `mathang` (
  `mid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenmh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongia` decimal(10,0) DEFAULT NULL,
  `hot` int(1) DEFAULT NULL,
  `bestbuy` int(1) DEFAULT NULL,
  `techspec_mid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kho_mid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giahang_account_uid` int(20) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of mathang
-- ----------------------------
INSERT INTO `mathang` VALUES ('SP001', 'aa', 'San pham 1', 'library/images/phones/SP001.jpeg', '123456', null, null, null, null, null);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci,
  `time` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for rating
-- ----------------------------
DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
  `mid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(10) DEFAULT NULL,
  `mathang_mid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of rating
-- ----------------------------

-- ----------------------------
-- Table structure for techspec
-- ----------------------------
DROP TABLE IF EXISTS `techspec`;
CREATE TABLE `techspec` (
  `mid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Network` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dimensionsweight` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Language` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Typeofscreen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Displaysize` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ringingtone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Messages` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Connect` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Camera` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Contacts` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Memory` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Memorycard` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Downloadmusic` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vibrate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GPRS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HSCSD` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EDGE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `3G` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WLAN` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Clock` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Alarms` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FM` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Games` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Browser` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Java` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Film` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Recording` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Listenomusic` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Watchingmovies` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Callrecording` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Speakerphone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Typeofbattery` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Standbytime` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Talktime` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Video` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of techspec
-- ----------------------------
