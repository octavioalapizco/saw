/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-05-23 21:10:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `eventos_programados`
-- ----------------------------
DROP TABLE IF EXISTS `eventos_programados`;
CREATE TABLE `eventos_programados` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `dispositivoId` int(11) NOT NULL,
  `tipo` enum('ON','OFF') NOT NULL DEFAULT 'OFF',
  `nombre` char(255) NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `estado` enum('ESPERANDO','ACTIVO','CANCELADO','COMPLETO','INDEFINIDO') NOT NULL DEFAULT 'INDEFINIDO',
  UNIQUE KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eventos_programados
-- ----------------------------
INSERT INTO `eventos_programados` VALUES ('1', '1', 'ON', 'encender', '2012-05-22 11:10:00', '2012-05-22 11:15:00', 'INDEFINIDO');
INSERT INTO `eventos_programados` VALUES ('2', '1', 'OFF', 'apagar', '2012-05-22 11:15:00', '2012-05-22 11:20:00', 'INDEFINIDO');
INSERT INTO `eventos_programados` VALUES ('3', '1', 'ON', 'encender', '2012-05-22 11:20:00', '2012-05-22 15:40:00', 'INDEFINIDO');
INSERT INTO `eventos_programados` VALUES ('4', '1', 'ON', '', '2012-05-22 15:40:00', '2012-05-22 17:40:00', 'CANCELADO');
INSERT INTO `eventos_programados` VALUES ('5', '2', 'ON', '', '2012-05-22 01:00:00', '2012-05-22 23:59:59', 'CANCELADO');
