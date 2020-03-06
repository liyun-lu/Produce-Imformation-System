/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : database

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2019-01-03 16:11:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `cid` int(20) NOT NULL AUTO_INCREMENT,
  `cno` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cremarks` text NOT NULL,
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('12', '1001', '王王', 'comcom', '小花', '12345', '四川', '香蕉');
INSERT INTO `clients` VALUES ('2', '111', 'JJ', 'vip', 'lly', '2878398', '北京市朝阳区', '猕猴桃、百香果、山竹');
INSERT INTO `clients` VALUES ('3', '1002', '小夏', 'commom', '小花', '1729929048', '广西省南宁市', '香蕉、苹果、火龙果');
INSERT INTO `clients` VALUES ('4', '2016014309', '卢丽云', 'vip', 'jj', '15801211062', '北京市昌平区南口镇南涧路29号北京化工大学昌平校区', '各种水果都来一份');
INSERT INTO `clients` VALUES ('13', '1001', '王王', 'commom', '小花', '21354', '湖南省', 'orange');
INSERT INTO `clients` VALUES ('14', '2', '阿奔', 'commom', '王王', '8345992390', '湖北武汉武汉大学', '柚子、橘子');
INSERT INTO `clients` VALUES ('15', '123456', '开开', 'commom', '佳佳', '0098676', '湖南省', '火龙果');
INSERT INTO `clients` VALUES ('5', '1001', '小小', 'commom', '大大', '6738934', '中国北京政法大学', '香蕉、火龙果、柚子');
INSERT INTO `clients` VALUES ('19', '888', '王王', 'commom', '小花', '21354', '北京大学', '苹果');
INSERT INTO `clients` VALUES ('1', '888', 'aa', 'vip', 'bb', '4567', '北京化工大学', '苹果');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `pno` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `size` int(20) NOT NULL,
  `price` float NOT NULL,
  `maxqty` int(20) NOT NULL,
  `minqty` int(20) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '苹果', '100', '6', '10', '100');
INSERT INTO `products` VALUES ('2', '橘子', '2000', '6.99', '1000', '300');
INSERT INTO `products` VALUES ('3', '猕猴桃', '200', '10', '200', '20');
INSERT INTO `products` VALUES ('4', '火龙果', '500', '7', '300', '50');
INSERT INTO `products` VALUES ('5', '葡萄', '800', '9', '300', '66');
INSERT INTO `products` VALUES ('6', '柚子', '1000', '10', '200', '50');

-- ----------------------------
-- Table structure for storehouse
-- ----------------------------
DROP TABLE IF EXISTS `storehouse`;
CREATE TABLE `storehouse` (
  `sno` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `introduction` text,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of storehouse
-- ----------------------------
INSERT INTO `storehouse` VALUES ('1111', '北京仓库', '库存大，流动快');
INSERT INTO `storehouse` VALUES ('2222', '华南仓库', '库存大');
INSERT INTO `storehouse` VALUES ('3333', '西南仓库', '');
INSERT INTO `storehouse` VALUES ('4444', '广西仓库', '水果来源地');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uno` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` varchar(20) NOT NULL,
  `uremarks` text,
  PRIMARY KEY (`uno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2016014309', '卢丽云', '2016014309', 'yes', '我是第一个管理员');
INSERT INTO `users` VALUES ('1001', '小王', '1001', 'no', '会计师分散');
INSERT INTO `users` VALUES ('123456', '开开', '123456', 'no', 'hello hello hello');
INSERT INTO `users` VALUES ('1', '云', '1', 'yes', '管理员2号');
INSERT INTO `users` VALUES ('2', 'lili', '2', 'no', '盛大开放课沙河口');
INSERT INTO `users` VALUES ('0010', '管理员1号', '123456', 'yes', '');
INSERT INTO `users` VALUES ('888', '管理员1号', '888', 'yes', '');
