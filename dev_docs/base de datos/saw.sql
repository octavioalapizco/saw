/*
SQLyog Enterprise - MySQL GUI v6.05
Host - 5.5.8-log : Database - saw
*********************************************************************
Server version : 5.5.8-log
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `cms_pagina` */

CREATE TABLE `cms_pagina` (
  `id` int(11) NOT NULL,
  `titulo` char(50) NOT NULL,
  `contenido` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cms_pagina` */

/*Table structure for table `cms_paginas` */

CREATE TABLE `cms_paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_menu` char(255) DEFAULT NULL,
  `contenido` blob NOT NULL,
  `orden` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `cms_paginas` */

insert  into `cms_paginas`(`id`,`texto_menu`,`contenido`,`orden`) values (1,'Home','<p>\r\n	<span style=\\\"font-size:48px;\\\"><span style=\\\"color: rgb(0, 0, 0);\\\">Bienvenido</span></span></p>\r\n',1);
insert  into `cms_paginas`(`id`,`texto_menu`,`contenido`,`orden`) values (2,'Docs','<p>\r\n	<span style=\\\"font-size:48px;\\\"><span style=\\\"color:#00ff00;\\\"><span style=\\\"background-color: rgb(0, 128, 0); \\\">D</span></span>oc<span style=\\\"color:#2f4f4f;\\\"><span style=\\\"background-color: rgb(238, 130, 238); \\\">umen</span></span>tacion de mazatleca</span>......</p>\r\n',2);
insert  into `cms_paginas`(`id`,`texto_menu`,`contenido`,`orden`) values (3,'Download','',3);
insert  into `cms_paginas`(`id`,`texto_menu`,`contenido`,`orden`) values (4,'Contacto','',4);
insert  into `cms_paginas`(`id`,`texto_menu`,`contenido`,`orden`) values (5,'About','<p>\r\n	<span style=\\\"font-size:48px;\\\">Informaci&oacute;n de la comunidad activa de mazatleca</span></p>\r\n',5);
insert  into `cms_paginas`(`id`,`texto_menu`,`contenido`,`orden`) values (6,'Editor','<p>\r\n	<a href=\\\"http://mazatleca/menu/index.html\\\">iniciar aplicacion</a></p>\r\n',2147483647);

/*Table structure for table `config` */

CREATE TABLE `config` (
  `idConfig` tinyint(11) NOT NULL AUTO_INCREMENT,
  `tiempo_entre_peticiones` int(11) DEFAULT NULL,
  `fecha_actual` date DEFAULT NULL,
  PRIMARY KEY (`idConfig`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `config` */

insert  into `config`(`idConfig`,`tiempo_entre_peticiones`,`fecha_actual`) values (1,2000,'2012-07-04');

/*Table structure for table `dispositivos` */

CREATE TABLE `dispositivos` (
  `idDispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL COMMENT 'cuando el campo sea nula se muestra la descripcion del tipo de dispositivo concetenado con "_"+idDispositivo',
  `tipo` enum('CERRADURA','CANDADO','AA') DEFAULT 'AA',
  `estado` enum('ON','OFF') NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `eventoCancelado` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `idPrimario` (`idDispositivo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `dispositivos` */

insert  into `dispositivos`(`idDispositivo`,`nombre`,`tipo`,`estado`,`fechaInicio`,`fechaFin`,`eventoCancelado`) values (1,'Aula 1','AA','OFF','0000-00-00 00:00:00','0000-00-00 00:00:00',0);
insert  into `dispositivos`(`idDispositivo`,`nombre`,`tipo`,`estado`,`fechaInicio`,`fechaFin`,`eventoCancelado`) values (2,'Aula 2','AA','OFF','0000-00-00 00:00:00','0000-00-00 00:00:00',0);
insert  into `dispositivos`(`idDispositivo`,`nombre`,`tipo`,`estado`,`fechaInicio`,`fechaFin`,`eventoCancelado`) values (3,'Aula 3','AA','ON','0000-00-00 00:00:00','0000-00-00 00:00:00',0);
insert  into `dispositivos`(`idDispositivo`,`nombre`,`tipo`,`estado`,`fechaInicio`,`fechaFin`,`eventoCancelado`) values (4,'Aula 4','AA','OFF','0000-00-00 00:00:00','0000-00-00 00:00:00',1);

/*Table structure for table `login` */

CREATE TABLE `login` (
  `login` varchar(16) NOT NULL DEFAULT '',
  `pass` varchar(16) DEFAULT NULL,
  `role` enum('CONTROLADOR','SUPER') DEFAULT 'CONTROLADOR',
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `login` */

insert  into `login`(`login`,`pass`,`role`,`nombre`) values ('admin@saw.com','1234','SUPER','SUPER');

/*Table structure for table `programacion_del_dia` */

CREATE TABLE `programacion_del_dia` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `dispositivoId` int(11) NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `estado` enum('ENCENDIDO','APAGADO') NOT NULL DEFAULT 'APAGADO',
  `cancelado` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `programacion_del_dia` */

insert  into `programacion_del_dia`(`idEvento`,`dispositivoId`,`fechaInicio`,`fechaFin`,`estado`,`cancelado`) values (1,1,'2012-07-04 00:45:00','2012-07-04 01:00:00','APAGADO',0);
insert  into `programacion_del_dia`(`idEvento`,`dispositivoId`,`fechaInicio`,`fechaFin`,`estado`,`cancelado`) values (2,1,'2012-07-04 01:00:00','2012-07-04 01:30:00','APAGADO',0);
insert  into `programacion_del_dia`(`idEvento`,`dispositivoId`,`fechaInicio`,`fechaFin`,`estado`,`cancelado`) values (3,3,'2012-07-04 13:00:00','2012-07-04 13:30:00','ENCENDIDO',0);

/*Table structure for table `programacion_semanal` */

CREATE TABLE `programacion_semanal` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `dispositivoId` int(11) NOT NULL,
  `dia` enum('LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO') NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `cancelado` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `programacion_semanal` */

insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (1,1,'LUNES','2012-07-04 11:10:00','2012-07-04 11:15:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (2,1,'MARTES','2012-05-22 11:15:00','2012-05-22 11:20:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (3,1,'MIERCOLES','2012-07-04 00:45:00','2012-07-04 01:00:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (4,1,'JUEVES','2012-05-22 15:40:00','2012-05-22 17:40:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (5,2,'VIERNES','2012-05-22 01:00:00','2012-05-22 23:59:59',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (6,1,'SABADO','2012-05-22 01:00:00','2012-05-22 23:59:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (7,4,'LUNES','2012-07-04 00:00:00','2012-07-04 01:00:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (8,1,'LUNES','2012-07-04 01:15:00','2012-07-04 01:30:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (9,1,'LUNES','2012-07-04 02:00:00','2012-07-04 02:15:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (10,1,'MIERCOLES','2012-07-04 01:00:00','2012-07-04 01:30:00',0);
insert  into `programacion_semanal`(`idEvento`,`dispositivoId`,`dia`,`fechaInicio`,`fechaFin`,`cancelado`) values (11,3,'MIERCOLES','2012-07-04 13:00:00','2012-07-04 13:30:00',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
