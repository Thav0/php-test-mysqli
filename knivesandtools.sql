/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80019
 Source Host           : localhost:3306
 Source Schema         : knivesandtools

 Target Server Type    : MySQL
 Target Server Version : 80019
 File Encoding         : 65001

 Date: 08/04/2020 16:30:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies`  (
  `cid` int(0) NOT NULL AUTO_INCREMENT COMMENT 'Company ID',
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Company name',
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES (1, 'Upolski');
INSERT INTO `companies` VALUES (2, 'Abingdon King Dick Ltd');
INSERT INTO `companies` VALUES (3, 'Acoustic Design Technology');
INSERT INTO `companies` VALUES (4, 'Abacus Lighting Ltd');
INSERT INTO `companies` VALUES (5, 'Frontier Pitts');
INSERT INTO `companies` VALUES (6, 'Fluid Transfer International Ltd');
INSERT INTO `companies` VALUES (7, 'Falcon Aviation');
INSERT INTO `companies` VALUES (8, 'Magnum');
INSERT INTO `companies` VALUES (9, 'MSI-Defence Systems Ltd');
INSERT INTO `companies` VALUES (10, 'Moog');
INSERT INTO `companies` VALUES (11, 'McBraida');
INSERT INTO `companies` VALUES (12, 'Murata Power Solutions (Celab) Ltd');
INSERT INTO `companies` VALUES (13, 'Rubb Buildings');
INSERT INTO `companies` VALUES (14, 'Racks Industries');
INSERT INTO `companies` VALUES (15, 'Toye, Kenning & Spencer Ltd');
INSERT INTO `companies` VALUES (16, 'TEK Military Seating');
INSERT INTO `companies` VALUES (17, 'Techni Measure');
INSERT INTO `companies` VALUES (18, 'Zircom Data Communications Ltd');
INSERT INTO `companies` VALUES (19, 'Zero Cases (UK) Ltd');
INSERT INTO `companies` VALUES (20, 'James Walker RotaBolt Ltd');

-- ----------------------------
-- Table structure for rates
-- ----------------------------
DROP TABLE IF EXISTS `rates`;
CREATE TABLE `rates`  (
  `cid` int(0) NOT NULL AUTO_INCREMENT COMMENT 'Company ID',
  `c_rate` decimal(10, 3) NOT NULL COMMENT 'Current rate',
  `l_rate` decimal(10, 3) NOT NULL COMMENT 'Last rate',
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of rates
-- ----------------------------
INSERT INTO `rates` VALUES (1, 103.526, 108.626);
INSERT INTO `rates` VALUES (2, 53.251, 54.993);
INSERT INTO `rates` VALUES (3, 101.554, 101.477);
INSERT INTO `rates` VALUES (4, 42.728, 38.503);
INSERT INTO `rates` VALUES (5, 7.730, 5.826);
INSERT INTO `rates` VALUES (6, 32.128, 24.027);
INSERT INTO `rates` VALUES (7, 127.070, 119.785);
INSERT INTO `rates` VALUES (8, 110.746, 115.353);
INSERT INTO `rates` VALUES (9, 38.609, 45.128);
INSERT INTO `rates` VALUES (10, 42.453, 49.533);
INSERT INTO `rates` VALUES (11, 9.768, 3.469);
INSERT INTO `rates` VALUES (12, 68.538, 60.939);
INSERT INTO `rates` VALUES (13, 46.478, 49.835);
INSERT INTO `rates` VALUES (14, 11.506, 10.086);
INSERT INTO `rates` VALUES (15, 164.879, 160.331);
INSERT INTO `rates` VALUES (16, 41.815, 33.867);
INSERT INTO `rates` VALUES (17, 72.344, 74.239);
INSERT INTO `rates` VALUES (18, 69.979, 77.187);
INSERT INTO `rates` VALUES (19, 129.592, 123.625);
INSERT INTO `rates` VALUES (20, 31.630, 37.860);

SET FOREIGN_KEY_CHECKS = 1;
