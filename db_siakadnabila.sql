/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.19-MariaDB : Database - db_siakadnabila
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_siakadnabila` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_siakadnabila`;

/*Table structure for table `auth_activation_attempts` */

DROP TABLE IF EXISTS `auth_activation_attempts`;

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_activation_attempts` */

/*Table structure for table `auth_groups` */

DROP TABLE IF EXISTS `auth_groups`;

CREATE TABLE `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups` */

insert  into `auth_groups`(`id`,`name`,`description`) values 
(4,'Admin','Site Administrator'),
(5,'Mahasiswa','Mhs User'),
(6,'Dosen','Dsn User');

/*Table structure for table `auth_groups_permissions` */

DROP TABLE IF EXISTS `auth_groups_permissions`;

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_permissions` */

/*Table structure for table `auth_groups_users` */

DROP TABLE IF EXISTS `auth_groups_users`;

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_users` */

insert  into `auth_groups_users`(`group_id`,`user_id`) values 
(4,11),
(5,12),
(5,28),
(6,29),
(6,31);

/*Table structure for table `auth_logins` */

DROP TABLE IF EXISTS `auth_logins`;

CREATE TABLE `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8;

/*Data for the table `auth_logins` */

insert  into `auth_logins`(`id`,`ip_address`,`email`,`user_id`,`date`,`success`) values 
(1,'::1','dauspratama56@gmail.com',1,'2021-05-06 00:27:46',1),
(2,'::1','daus',NULL,'2021-05-06 01:17:52',0),
(3,'::1','daus',NULL,'2021-05-06 01:21:42',0),
(4,'::1','dauspratama56@gmail.com',2,'2021-05-06 01:45:16',1),
(5,'::1','dauspratama56@gmail.com',2,'2021-05-06 01:45:40',1),
(6,'::1','dauspratama56@gmail.com',2,'2021-05-18 21:54:14',1),
(7,'::1','dauspratama56@gmail.com',2,'2021-05-19 01:47:55',1),
(8,'::1','dauspratama56@gmail.com',2,'2021-05-19 02:46:51',1),
(9,'::1','dauspratama56@gmail.com',2,'2021-05-19 02:58:13',1),
(10,'::1','dauspratama56@gmail.com',2,'2021-05-19 10:09:58',1),
(11,'::1','dauspratama56@gmail.com',2,'2021-05-19 10:15:13',1),
(12,'::1','dauspratama56@gmail.com',2,'2021-05-19 10:36:25',1),
(13,'::1','dauspratama56@gmail.com',2,'2021-05-21 11:37:52',1),
(14,'::1','dausdd',NULL,'2021-05-21 11:44:35',0),
(15,'::1','febririna123@gmail.com',3,'2021-05-21 11:54:38',1),
(16,'::1','ridwannabila123@gmail.com',4,'2021-05-21 11:56:19',1),
(17,'::1','febririna123@gmail.com',3,'2021-05-21 11:57:12',1),
(18,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:07:17',1),
(19,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:19:31',1),
(20,'::1','febririna123@gmail.com',3,'2021-05-21 12:20:13',1),
(21,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:25:52',1),
(22,'::1','febririna123@gmail.com',3,'2021-05-21 12:29:17',1),
(23,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:29:26',1),
(24,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:31:02',1),
(25,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:40:21',1),
(26,'::1','febririna123@gmail.com',3,'2021-05-21 12:41:10',1),
(27,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:41:20',1),
(28,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:42:23',1),
(29,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:54:12',1),
(30,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:54:24',1),
(31,'::1','dauspratama56@gmail.com',2,'2021-05-21 13:23:46',1),
(32,'::1','dauspratama56@gmail.com',2,'2021-05-21 13:24:33',1),
(33,'::1','ridwannabila123@gmail.com',4,'2021-05-21 13:25:27',1),
(34,'::1','dauspratama56@gmail.com',2,'2021-05-24 01:14:50',1),
(35,'::1','ridwannabila123@gmail.com',4,'2021-05-24 01:16:05',1),
(36,'::1','dauspratama56@gmail.com',2,'2021-05-24 01:28:38',1),
(37,'::1','febririna123@gmail.com',3,'2021-05-24 01:41:21',1),
(38,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:00:06',1),
(39,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:00:53',1),
(40,'::1','febririna123@gmail.com',3,'2021-05-24 02:01:22',1),
(41,'::1','febririna123@gmail.com',3,'2021-05-24 02:03:02',1),
(42,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:15:45',1),
(43,'::1','febririna123@gmail.com',3,'2021-05-24 02:16:00',1),
(44,'::1','febririna123@gmail.com',3,'2021-05-24 02:16:41',1),
(45,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:16:56',1),
(46,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:30:05',1),
(47,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:32:09',1),
(48,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:35:59',1),
(49,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:45:55',1),
(50,'::1','febririna123@gmail.com',3,'2021-05-24 02:46:26',1),
(51,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:46:38',1),
(52,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:47:51',1),
(53,'::1','febririna123@gmail.com',3,'2021-05-24 02:48:04',1),
(54,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:48:29',1),
(55,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:48:40',1),
(56,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:49:02',1),
(57,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:51:38',1),
(58,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:52:59',1),
(59,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:03:03',1),
(60,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:03:18',1),
(61,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:09:01',1),
(62,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:10:17',1),
(63,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:33:38',1),
(64,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:44:20',1),
(65,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:45:13',1),
(66,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:59:26',1),
(67,'::1','febririna123@gmail.com',3,'2021-05-24 11:00:00',1),
(68,'::1','dauspratama56@gmail.com',2,'2021-05-24 11:00:23',1),
(69,'::1','ridwan',NULL,'2021-05-24 11:05:18',0),
(70,'::1','ridwannabila123@gmail.com',4,'2021-05-24 11:05:29',1),
(71,'::1','febririna123@gmail.com',3,'2021-05-24 11:43:21',1),
(72,'::1','ridwannabila123@gmail.com',4,'2021-05-24 11:50:04',1),
(73,'::1','ridwannabila123@gmail.com',4,'2021-05-24 11:55:48',1),
(74,'::1','adil123@gmail.com',5,'2021-05-24 11:56:51',1),
(75,'::1','adil123@gmail.com',5,'2021-05-24 12:05:13',1),
(76,'::1','ridwannabila123@gmail.com',4,'2021-05-24 12:05:28',1),
(77,'::1','ridwannabila123@gmail.com',4,'2021-05-26 03:12:40',1),
(78,'::1','dauspratama56@gmail.com',2,'2021-05-26 03:13:08',1),
(79,'::1','ridwannabila123@gmail.com',4,'2021-05-26 03:13:45',1),
(80,'::1','febririna123@gmail.com',3,'2021-05-26 03:14:08',1),
(81,'::1','febririna123@gmail.com',3,'2021-05-26 21:56:17',1),
(82,'::1','dauspratama56@gmail.com',2,'2021-05-26 22:14:20',1),
(83,'::1','ridwannabila123@gmail.com',4,'2021-05-26 23:06:05',1),
(84,'::1','dauspratama56@gmail.com',2,'2021-05-26 23:58:26',1),
(85,'::1','dauspratama56@gmail.com',2,'2021-05-27 02:09:25',1),
(86,'::1','ridwannabila123@gmail.com',4,'2021-05-27 02:29:35',1),
(87,'::1','rina',NULL,'2021-05-27 02:40:11',0),
(88,'::1','febririna123@gmail.com',3,'2021-05-27 02:40:20',1),
(89,'::1','dauspratama56@gmail.com',2,'2021-05-27 03:07:04',1),
(90,'::1','dauspratama56@gmail.com',2,'2021-05-27 21:26:49',1),
(91,'::1','febririna123@gmail.com',3,'2021-05-27 21:51:25',1),
(92,'::1','dauspratama56@gmail.com',2,'2021-05-27 21:55:29',1),
(93,'::1','ridwannabila123@gmail.com',4,'2021-05-27 21:56:45',1),
(94,'::1','febririna123@gmail.com',3,'2021-05-27 21:57:08',1),
(95,'::1','ridwannabila123@gmail.com',4,'2021-05-27 21:58:49',1),
(96,'::1','febririna123@gmail.com',3,'2021-05-27 22:00:35',1),
(97,'::1','dauspratama56@gmail.com',2,'2021-05-27 22:28:03',1),
(98,'::1','dauspratama56@gmail.com',2,'2021-05-27 22:46:21',1),
(99,'::1','dauspratama56@gmail.com',2,'2021-05-27 22:57:09',1),
(100,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:24:36',1),
(101,'::1','febririna123@gmail.com',3,'2021-05-27 23:25:03',1),
(102,'::1','ridwannabila123@gmail.com',4,'2021-05-27 23:25:17',1),
(103,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:30:49',1),
(104,'::1','ridwan',NULL,'2021-05-27 23:38:29',0),
(105,'::1','ridwannabila123@gmail.com',4,'2021-05-27 23:38:40',1),
(106,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:43:27',1),
(107,'::1','febririna123@gmail.com',3,'2021-05-27 23:45:19',1),
(108,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:47:48',1),
(109,'::1','dauspratama56@gmail.com',2,'2021-05-28 09:32:21',1),
(110,'::1','dauspratama56@gmail.com',2,'2021-05-28 09:35:27',1),
(111,'::1','dauspratama56@gmail.com',2,'2021-05-28 22:34:25',1),
(112,'::1','adil123@gmail.com',5,'2021-05-28 22:34:49',1),
(113,'::1','febririna123@gmail.com',3,'2021-05-28 22:35:06',1),
(114,'::1','adil123@gmail.com',5,'2021-05-28 22:35:47',1),
(115,'::1','febririna123@gmail.com',3,'2021-05-28 22:38:05',1),
(116,'::1','dauspratama56@gmail.com',2,'2021-05-28 22:40:57',1),
(117,'::1','dauspratama56@gmail.com',2,'2021-06-03 11:10:13',1),
(118,'::1','adil123@gmail.com',5,'2021-06-03 11:14:30',1),
(119,'::1','febririna123@gmail.com',3,'2021-06-03 11:14:46',1),
(120,'::1','dauspratama56@gmail.com',2,'2021-06-03 11:15:13',1),
(121,'::1','febririna123@gmail.com',3,'2021-06-03 13:02:32',1),
(122,'::1','dauspratama56@gmail.com',2,'2021-06-03 13:10:35',1),
(123,'::1','adil123@gmail.com',5,'2021-06-03 13:10:58',1),
(124,'::1','dauspratama56@gmail.com',2,'2021-06-05 10:52:08',1),
(125,'::1','dauspratama56@gmail.com',2,'2021-06-05 11:17:30',1),
(126,'::1','dauspratama56@gmail.com',2,'2021-06-08 09:08:32',1),
(127,'::1','dauspratama56@gmail.com',2,'2021-06-10 22:25:07',1),
(128,'::1','dauspratama56@gmail.com',2,'2021-06-18 09:53:42',1),
(129,'::1','dauspratama56@gmail.com',2,'2021-06-20 01:54:47',1),
(130,'::1','dauspratama56@gmail.com',2,'2021-06-20 11:14:44',1),
(131,'::1','dauspratama56@gmail.com',2,'2021-06-21 02:13:22',1),
(132,'::1','dauspratama56@gmail.com',2,'2021-06-21 08:34:08',1),
(133,'::1','dauspratama56@gmail.com',2,'2021-06-22 01:19:48',1),
(134,'::1','dauspratama56@gmail.com',2,'2021-06-22 09:02:42',1),
(135,'::1','daus',NULL,'2021-06-23 08:46:04',0),
(136,'::1','daus',NULL,'2021-06-23 08:46:53',0),
(137,'::1','daus',NULL,'2021-06-23 08:50:22',0),
(138,'::1','daus',NULL,'2021-06-23 08:50:29',0),
(139,'::1','daus',NULL,'2021-06-23 08:50:36',0),
(140,'::1','daus',NULL,'2021-06-23 08:50:44',0),
(141,'::1','daus',NULL,'2021-06-23 08:50:49',0),
(142,'::1','dauspratama56@gmail.com',NULL,'2021-06-23 08:51:24',0),
(143,'::1','dauspratama56@gmail.com',2,'2021-06-23 08:54:53',1),
(144,'::1','dauspratama56@gmail.com',2,'2021-06-23 10:30:08',1),
(145,'::1','dauspratama56@gmail.com',2,'2021-06-24 00:04:41',1),
(146,'::1','dauspratama56@gmail.com',2,'2021-06-24 10:24:42',1),
(147,'::1','dauspratama56@gmail.com',2,'2021-06-25 02:28:11',1),
(148,'::1','dauspratama56@gmail.com',2,'2021-06-27 12:40:52',1),
(149,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:00:34',1),
(150,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:06:01',1),
(151,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:27:45',1),
(152,'::1','Rikaaulia@gmail.com',6,'2021-06-28 10:38:43',1),
(153,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:38:59',1),
(154,'::1','Rikaaulia@gmail.com',6,'2021-06-28 11:03:48',1),
(155,'::1','dauspratama56@gmail.com',2,'2021-06-28 11:04:38',1),
(156,'::1','dauspratama56@gmail.com',2,'2021-06-28 21:14:49',1),
(157,'::1','dauspratama56@gmail.com',2,'2021-06-29 01:32:34',1),
(158,'::1','dauspratama56@gmail.com',2,'2021-06-29 10:28:17',1),
(159,'::1','ridwan',NULL,'2021-06-29 11:35:48',0),
(160,'::1','ridwan',NULL,'2021-06-29 11:36:01',0),
(161,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:36:33',1),
(162,'::1','rina',NULL,'2021-06-29 11:37:01',0),
(163,'::1','rina',NULL,'2021-06-29 11:37:22',0),
(164,'::1','dauspratama56@gmail.com',2,'2021-06-29 11:37:30',1),
(165,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:44:54',1),
(166,'::1','dauspratama56@gmail.com',2,'2021-06-29 11:45:47',1),
(167,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:47:10',1),
(168,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:47:27',1),
(169,'::1','rina',NULL,'2021-06-29 11:47:55',0),
(170,'::1','febririna123@gmail.com',3,'2021-06-29 11:48:05',1),
(171,'::1','kocok',NULL,'2021-06-29 11:48:29',0),
(172,'::1','dauspratama56@gmail.com',2,'2021-06-29 11:48:35',1),
(173,'::1','Rikaaulia@gmail.com',6,'2021-06-29 12:14:29',1),
(174,'::1','dauspratama56@gmail.com',2,'2021-06-29 12:24:18',1),
(175,'::1','dauspratama56@gmail.com',2,'2021-06-29 21:09:31',1),
(176,'::1','dauspratama56@gmail.com',2,'2021-06-30 22:44:24',1),
(177,'::1','dauspratama56@gmail.com',2,'2021-07-01 10:22:15',1),
(178,'::1','dauspratama56@gmail.com',2,'2021-07-02 09:55:28',1),
(179,'::1','dauspratama56@gmail.com',2,'2021-07-03 00:18:54',1),
(180,'::1','dauspratama56@gmail.com',2,'2021-07-03 03:39:41',1),
(181,'::1','dauspratama56@gmail.com',2,'2021-07-03 08:24:16',1),
(182,'::1','Rikaaulia@gmail.com',6,'2021-07-03 08:25:04',1),
(183,'::1','dauspratama56@gmail.com',2,'2021-07-03 10:27:54',1),
(184,'::1','dauspratama56@gmail.com',2,'2021-07-04 08:49:36',1),
(185,'::1','daus',NULL,'2021-07-04 11:56:26',0),
(186,'::1','dauspratama56@gmail.com',11,'2021-07-04 11:57:17',1),
(187,'::1','10101',NULL,'2021-07-04 12:06:21',0),
(188,'::1','dauspratama56@gmail.com',11,'2021-07-04 12:06:33',1),
(189,'::1','10101',NULL,'2021-07-04 12:07:06',0),
(190,'::1','dauspratama56@gmail.com',11,'2021-07-04 12:07:16',1),
(191,'::1','dauspratama56@gmail.com',11,'2021-07-04 23:55:28',1),
(192,'::1','mahasiswa1@gmail.com',12,'2021-07-05 00:15:37',1),
(193,'::1','dauspratama56@gmail.com',11,'2021-07-05 00:39:59',1),
(194,'::1','10101',NULL,'2021-07-05 09:48:23',0),
(195,'::1','10101',NULL,'2021-07-05 09:48:40',0),
(196,'::1','10101',NULL,'2021-07-05 09:48:47',0),
(197,'::1','10101',NULL,'2021-07-05 09:48:59',0),
(198,'::1','dauspratama56@gmail.com',11,'2021-07-05 09:49:10',1),
(199,'::1','1800001',NULL,'2021-07-05 11:01:48',0),
(200,'::1','1800001',NULL,'2021-07-05 11:01:58',0),
(201,'::1','dauspratama56@gmail.com',11,'2021-07-05 11:02:15',1),
(202,'::1','a@mail.com',27,'2021-07-05 11:04:49',1),
(203,'::1','dauspratama56@gmail.com',11,'2021-07-05 21:45:20',1),
(204,'::1','1800001',NULL,'2021-07-05 21:46:10',0),
(205,'::1','1800001',NULL,'2021-07-05 21:46:30',0),
(206,'::1','1800001',NULL,'2021-07-05 21:46:45',0),
(207,'::1','dauspratama56@gmail.com',11,'2021-07-05 21:46:59',1),
(208,'::1','mahasiswa21@gmail.com',28,'2021-07-05 21:50:17',1),
(209,'::1','dauspratama56@gmail.com',11,'2021-07-05 22:40:17',1),
(210,'::1','dosen1@gmail.com',29,'2021-07-05 22:50:35',1),
(211,'::1','dauspratama56@gmail.com',11,'2021-07-05 23:12:33',1),
(212,'::1','dauspratama56@gmail.com',11,'2021-07-06 08:49:15',1),
(213,'::1','mahasiswa21@gmail.com',28,'2021-07-06 10:07:16',1),
(214,'::1','dosen1@gmail.com',29,'2021-07-06 10:34:47',1),
(215,'::1','10101',NULL,'2021-07-06 10:40:51',0),
(216,'::1','mahasiswa21@gmail.com',28,'2021-07-06 10:40:58',1),
(217,'::1','dauspratama56@gmail.com',11,'2021-07-06 10:42:35',1),
(218,'::1','dosen1@gmail.com',29,'2021-07-06 12:14:38',1),
(219,'::1','mahasiswa21@gmail.com',28,'2021-07-06 12:14:54',1),
(220,'::1','dauspratama56@gmail.com',11,'2021-07-06 22:28:17',1),
(221,'::1','mahasiswa21@gmail.com',28,'2021-07-07 02:04:22',1),
(222,'::1','dauspratama56@gmail.com',11,'2021-07-07 10:17:58',1),
(223,'::1','dauspratama56@gmail.com',11,'2021-07-07 11:01:56',1),
(224,'::1','mahasiswa21@gmail.com',28,'2021-07-07 12:03:32',1),
(225,'::1','mahasiswa21@gmail.com',28,'2021-07-07 12:48:05',1),
(226,'::1','mahasiswa21@gmail.com',28,'2021-07-07 12:48:20',1),
(227,'::1','dauspratama56@gmail.com',11,'2021-07-07 13:13:48',1),
(228,'::1','mahasiswa21@gmail.com',28,'2021-07-07 13:23:33',1),
(229,'::1','20202',NULL,'2021-07-07 13:33:53',0),
(230,'::1','20202',NULL,'2021-07-07 13:34:03',0),
(231,'::1','dosen1@gmail.com',29,'2021-07-07 13:34:24',1),
(232,'::1','mahasiswa21@gmail.com',28,'2021-07-08 09:58:40',1),
(233,'::1','dauspratama56@gmail.com',11,'2021-07-08 10:02:44',1),
(234,'::1','mahasiswa21@gmail.com',28,'2021-07-08 10:53:31',1),
(235,'::1','20202',NULL,'2021-07-08 11:00:39',0),
(236,'::1','dosen1@gmail.com',29,'2021-07-08 11:00:53',1),
(237,'::1','dauspratama56@gmail.com',11,'2021-07-08 11:02:52',1),
(238,'::1','dauspratama56@gmail.com',11,'2021-07-08 22:16:13',1),
(239,'::1','dauspratama56@gmail.com',11,'2021-07-09 01:59:30',1),
(240,'::1','mahasiswa21@gmail.com',28,'2021-07-09 02:06:54',1),
(241,'::1','mahasiswa21@gmail.com',28,'2021-07-10 00:54:57',1),
(242,'::1','dauspratama56@gmail.com',11,'2021-07-10 01:07:26',1),
(243,'::1','mahasiswa21@gmail.com',28,'2021-07-10 07:06:19',1),
(244,'::1','mahasiswa21@gmail.com',28,'2021-07-10 07:06:22',1),
(245,'::1','dosen1@gmail.com',29,'2021-07-10 07:18:44',1),
(246,'::1','mahasiswa21@gmail.com',28,'2021-07-10 07:38:43',1),
(247,'::1','dauspratama56@gmail.com',11,'2021-07-10 07:50:32',1),
(248,'::1','mahasiswa21@gmail.com',28,'2021-07-10 07:51:08',1),
(249,'::1','dosen1@gmail.com',29,'2021-07-10 07:55:23',1),
(250,'::1','mahasiswa21@gmail.com',28,'2021-07-10 09:18:34',1),
(251,'::1','mahasiswa21@gmail.com',28,'2021-07-10 09:24:36',1),
(252,'::1','dauspratama56@gmail.com',11,'2021-07-10 11:11:04',1),
(253,'::1','20202',NULL,'2021-07-10 11:14:40',0),
(254,'::1','dosen1@gmail.com',29,'2021-07-10 11:14:47',1),
(255,'::1','dosen1@gmail.com',29,'2021-07-11 02:00:14',1),
(256,'::1','dauspratama56@gmail.com',11,'2021-07-11 03:35:20',1),
(257,'::1','dosen1@gmail.com',29,'2021-07-11 03:38:26',1),
(258,'::1','mahasiswa21@gmail.com',28,'2021-07-11 04:20:05',1),
(259,'::1','dosen1@gmail.com',29,'2021-07-11 04:52:38',1),
(260,'::1','mahasiswa21@gmail.com',28,'2021-07-11 04:56:33',1),
(261,'::1','dauspratama56@gmail.com',11,'2021-07-11 05:15:10',1),
(262,'::1','mahasiswa21@gmail.com',28,'2021-07-11 05:16:26',1),
(263,'::1','dosen1@gmail.com',29,'2021-07-11 08:27:57',1),
(264,'::1','dosen2@gmail.com',31,'2021-07-11 09:31:58',1),
(265,'::1','dauspratama56@gmail.com',11,'2021-07-11 09:32:29',1),
(266,'::1','dosen1@gmail.com',29,'2021-07-11 09:35:20',1),
(267,'::1','dosen2@gmail.com',31,'2021-07-11 09:35:35',1),
(268,'::1','mahasiswa21@gmail.com',28,'2021-07-11 10:17:23',1),
(269,'::1','admin',NULL,'2021-07-11 10:42:16',0),
(270,'::1','dauspratama56@gmail.com',11,'2021-07-11 10:42:23',1),
(271,'::1','mahasiswa21@gmail.com',28,'2021-07-11 11:09:05',1),
(272,'::1','dauspratama56@gmail.com',11,'2021-07-11 11:14:28',1),
(273,'::1','dauspratama56@gmail.com',11,'2021-07-12 00:32:22',1),
(274,'::1','mahasiswa21@gmail.com',28,'2021-07-12 00:33:42',1),
(275,'::1','dosen1@gmail.com',29,'2021-07-12 00:34:39',1),
(276,'::1','mahasiswa21@gmail.com',28,'2021-07-12 00:36:36',1),
(277,'::1','dosen1@gmail.com',29,'2021-07-12 00:42:46',1),
(278,'::1','mahasiswa21@gmail.com',28,'2021-07-12 00:47:35',1),
(279,'::1','dosen1@gmail.com',29,'2021-07-12 01:27:38',1),
(280,'::1','mahasiswa1@gmail.com',12,'2021-07-12 01:37:48',1),
(281,'::1','mahasiswa1@gmail.com',12,'2021-07-12 07:10:15',1),
(282,'::1','dauspratama56@gmail.com',11,'2021-07-12 07:10:52',1),
(283,'::1','mahasiswa1@gmail.com',12,'2021-07-12 07:13:23',1),
(284,'::1','dauspratama56@gmail.com',11,'2021-07-12 07:19:36',1),
(285,'::1','mahasiswa21@gmail.com',28,'2021-07-12 09:11:22',1),
(286,'::1','mahasiswa1@gmail.com',12,'2021-07-12 11:43:18',1),
(287,'::1','mahasiswa21@gmail.com',28,'2021-07-12 11:43:47',1),
(288,'::1','20201',NULL,'2021-07-12 11:52:16',0),
(289,'::1','20201',NULL,'2021-07-12 11:52:24',0),
(290,'::1','dosen1@gmail.com',29,'2021-07-12 11:52:35',1),
(291,'::1','20201',NULL,'2021-07-12 17:49:38',0),
(292,'::1','20201',NULL,'2021-07-12 17:49:50',0),
(293,'::1','dosen1@gmail.com',29,'2021-07-12 17:50:03',1),
(294,'::1','mahasiswa1@gmail.com',12,'2021-07-12 18:00:11',1),
(295,'::1','dosen1@gmail.com',29,'2021-07-12 18:00:44',1),
(296,'::1','mahasiswa21@gmail.com',28,'2021-07-12 19:18:14',1),
(297,'::1','1800001',NULL,'2021-07-12 19:18:30',0),
(298,'::1','mahasiswa1@gmail.com',12,'2021-07-12 19:18:37',1),
(299,'::1','dosen1@gmail.com',29,'2021-07-12 19:19:04',1);

/*Table structure for table `auth_permissions` */

DROP TABLE IF EXISTS `auth_permissions`;

CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `auth_permissions` */

insert  into `auth_permissions`(`id`,`name`,`description`) values 
(1,'manage-users','Manage All User'),
(2,'manage-profile','Manage user\'s profile');

/*Table structure for table `auth_reset_attempts` */

DROP TABLE IF EXISTS `auth_reset_attempts`;

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_reset_attempts` */

/*Table structure for table `auth_tokens` */

DROP TABLE IF EXISTS `auth_tokens`;

CREATE TABLE `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_tokens` */

/*Table structure for table `auth_users_permissions` */

DROP TABLE IF EXISTS `auth_users_permissions`;

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_users_permissions` */

/*Table structure for table `tb_detailkrs` */

DROP TABLE IF EXISTS `tb_detailkrs`;

CREATE TABLE `tb_detailkrs` (
  `nimkrs` char(30) DEFAULT NULL,
  `semester` char(20) DEFAULT NULL,
  KEY `nimkrs` (`nimkrs`),
  CONSTRAINT `tb_detailkrs_ibfk_1` FOREIGN KEY (`nimkrs`) REFERENCES `tb_mahasiswa` (`nim`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detailkrs` */

insert  into `tb_detailkrs`(`nimkrs`,`semester`) values 
('1800002','Semester 1'),
('1800001','Semester 1');

/*Table structure for table `tb_dosen` */

DROP TABLE IF EXISTS `tb_dosen`;

CREATE TABLE `tb_dosen` (
  `nidn` char(30) NOT NULL,
  `namadosen` varchar(30) DEFAULT NULL,
  `nipdosen` varchar(12) DEFAULT NULL,
  `gelardosen` char(12) DEFAULT NULL,
  `jabatanakademikdosen` char(30) DEFAULT NULL,
  `pendidikandosen` char(2) DEFAULT NULL,
  `statusdosen` char(12) DEFAULT NULL,
  `nohpdosen` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`nidn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_dosen` */

insert  into `tb_dosen`(`nidn`,`namadosen`,`nipdosen`,`gelardosen`,`jabatanakademikdosen`,`pendidikandosen`,`statusdosen`,`nohpdosen`) values 
('20201','Maharani','-','M.Keb','Asisten Ahli','s3','Aktif','082389360130'),
('20202','Suci Juliani','-','M.Keb, Biome','Lektor','s2','Aktif','08238989009'),
('20203','Yulia Gazella','-','S.Keb Ns.','Asisten Ahli','s1','Tidak Aktif','081266434311');

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `kodejadwal` char(30) NOT NULL,
  `hari` char(10) DEFAULT NULL,
  `jam` char(30) DEFAULT NULL,
  `idruanganjadwal` char(30) DEFAULT NULL,
  PRIMARY KEY (`kodejadwal`),
  KEY `nidnjadwal` (`jam`),
  KEY `kodematkuljadwal` (`hari`),
  KEY `idruangan` (`idruanganjadwal`),
  CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`idruanganjadwal`) REFERENCES `tb_ruangan` (`idruangan`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jadwal` */

insert  into `tb_jadwal`(`kodejadwal`,`hari`,`jam`,`idruanganjadwal`) values 
('JD001','Selasa','07.30 - 09.05','R03'),
('JD002','Rabu','08.00 - 09.15','R03'),
('JD009','Jum\'at','11.30 - 13.15','R01');

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `idkelas` char(5) NOT NULL,
  `namakelas` char(5) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kelas` */

/*Table structure for table `tb_krs` */

DROP TABLE IF EXISTS `tb_krs`;

CREATE TABLE `tb_krs` (
  `kodematkulkrs` char(7) DEFAULT NULL,
  `nidnkrs` char(30) DEFAULT NULL,
  `kodejadwalkrs` char(30) DEFAULT NULL,
  KEY `nidnkrs` (`nidnkrs`),
  KEY `kodematkulkrs` (`kodematkulkrs`),
  KEY `kodejadwal` (`kodejadwalkrs`),
  CONSTRAINT `tb_krs_ibfk_1` FOREIGN KEY (`nidnkrs`) REFERENCES `tb_dosen` (`nidn`) ON UPDATE CASCADE,
  CONSTRAINT `tb_krs_ibfk_2` FOREIGN KEY (`kodematkulkrs`) REFERENCES `tb_matakuliah` (`kodematkul`) ON UPDATE CASCADE,
  CONSTRAINT `tb_krs_ibfk_3` FOREIGN KEY (`kodejadwalkrs`) REFERENCES `tb_jadwal` (`kodejadwal`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_krs` */

insert  into `tb_krs`(`kodematkulkrs`,`nidnkrs`,`kodejadwalkrs`) values 
('MKS1001','20201','JD001'),
('MKS1002','20202','JD001'),
('MKS1003','20201','JD001'),
('MKS1004','20201','JD002'),
('MKS1005','20203','JD009'),
('MKS2001','20201','JD001'),
('MKS2002','20203','JD009'),
('MKS2003','20202','JD009'),
('MKS2004','20201','JD009'),
('MKS2005','20201','JD002'),
('MKS3001','20201','JD001'),
('MKS3002','20202','JD002'),
('MKS3003','20201','JD002'),
('MKS3004','20201','JD001'),
('MKS3005','20203','JD002'),
('MKS4001','20203','JD009'),
('MKS4003','20203','JD001'),
('MKS4002','20203','JD002'),
('MKS4004','20203','JD009'),
('MKS4005','20203','JD009'),
('MKS5001','20202','JD001'),
('MKS5002','20202','JD001'),
('MKS5003','20202','JD009'),
('MKS5004','20202','JD002'),
('MKS5005','20202','JD009'),
('MKS6001','20201','JD001'),
('MKS6002','20201','JD002'),
('MKS6003','20201','JD009'),
('MKS6004','20201','JD009');

/*Table structure for table `tb_mahasiswa` */

DROP TABLE IF EXISTS `tb_mahasiswa`;

CREATE TABLE `tb_mahasiswa` (
  `nim` char(30) NOT NULL,
  `nama` char(30) DEFAULT NULL,
  `tmplahir` char(30) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jenkel` char(20) DEFAULT NULL,
  `prodi` char(15) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `status` char(12) DEFAULT NULL,
  `alamat` char(50) DEFAULT NULL,
  `thnmasuk` varchar(5) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `pemakademik` char(30) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `prodi` (`prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_mahasiswa` */

insert  into `tb_mahasiswa`(`nim`,`nama`,`tmplahir`,`tgllahir`,`jenkel`,`prodi`,`nohp`,`email`,`status`,`alamat`,`thnmasuk`,`nik`,`pemakademik`) values 
('1700001','Indah Dwi Fitriani','Padang','2021-07-06','','Keperawatan','081266404004','indahdwi90@gmail.com','Aktif','Padang','2017','1303044409980001','Imam Gunawan'),
('1700002','Novita Sari Sukma','Pasaman','2021-07-24','Perempuan','Keperawatan','081266404004','novitasarisukma@gmai','Aktif','Pasaman','2017','1303030202024442','Tifta Brilian'),
('1700003','Intan Dwi Fitriani','Padang','2021-07-15','Perempuan','Keperawatan','081266404004','intandwi@gmail.com','Tidak Aktif','Padang Timur','2017','1303030202024442','Tifta Brilian'),
('1700004','Maharani','Sijunjung','2021-07-23','Perempuan','Keperawatan','081266404004','maharani@gmail.com','Tidak Aktif','Sijunjung','2017','1303030202024442','Eka Iswandy'),
('1700005','Yulia Gazella','Sijunjung','2021-07-02','Perempuan','Keperawatan','081266404004','yuliagazella@gmail.c','Aktif','Sijunjung','2017','1303030202024442','Eka Iswandy'),
('1700006','Lani Permata Sari','Pariaman','2021-07-16','Perempuan','Keperawatan','081266404004','lanipermata@gmail.co','Aktif','Priaman','2017','1303030202024442','Tifta Brilian'),
('1720002','Rahmat Nur','Piaman','2021-07-05','Laki-laki','Keperawatan','0831','','Aktif','-','2017','08123',''),
('1800001','Adil Pratama','Payakumbuah','2021-07-05','Laki-laki','Keperawatan','081266404004','adilpratama56@gmail.','Aktif','Payakumbuah Selatan','2018','1303030202024442','Imam Gunawan'),
('1800002','Yasir Arafat','Jambi','2021-07-06','Laki-laki','Keperawatan','081290900909','yasirarapat56@gmail.','Aktif','Jambi Timur','2018','1303030202024442','Eka Iswandy'),
('1800003','Rahman Deswanda','Padang','2021-07-01','Laki-laki','Keperawatan','081266404004','rahmandeswanda@gmail','Aktif','Padang Barat','2018','1303030202024442','Tifta Brilian'),
('1900001','Melisa Aprilia','Padang Panjang','2021-07-01','Perempuan','Keperawatan','082321213434','melisaaprilia@gmail.','Aktif','Padang Panjang','2019','1303030202024442','Imam Gunawan'),
('1900002','Yana Riza','Sijunjung','2021-07-02','Perempuan','Keperawatan','081266404004','yanariza@gmaul.com','Aktif','Sijunjung','2019','1301034808980003','Tifta Brilian'),
('1910001','Intan Herma Putri','Pesisir Selatan','2021-07-01','Perempuan','Keperawatan','081266404004','intanherma@gmail.com','Aktif','Pesisir Selatan','2019','1303030202024442','Imam Gunawan'),
('2000001','sdf','jji','2021-07-30','Perempuan','Keperawatan','3','','Aktif','sdasa','101','',''),
('2000002','Nadia Ningsih Joani','Sijunjung','2021-07-15','Perempuan','Keperawatan','082388966772','nadia@gmail.com','Aktif','SIjunjung','2020','1303032203990011','Suci Juliani');

/*Table structure for table `tb_matakuliah` */

DROP TABLE IF EXISTS `tb_matakuliah`;

CREATE TABLE `tb_matakuliah` (
  `kodematkul` char(7) NOT NULL,
  `namamatkul` char(30) DEFAULT NULL,
  `smt` char(20) DEFAULT NULL,
  `sksteori` int(11) DEFAULT NULL,
  `skspraktek` int(11) DEFAULT NULL,
  `skslapangan` int(11) DEFAULT NULL,
  `totalsks` int(11) DEFAULT NULL,
  PRIMARY KEY (`kodematkul`),
  KEY `smt` (`smt`),
  CONSTRAINT `tb_matakuliah_ibfk_1` FOREIGN KEY (`smt`) REFERENCES `tb_prodi` (`semester`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_matakuliah` */

insert  into `tb_matakuliah`(`kodematkul`,`namamatkul`,`smt`,`sksteori`,`skspraktek`,`skslapangan`,`totalsks`) values 
('MKS1001','Agama Islam','Semester 1',2,0,0,2),
('MKS1002','Pancasila','Semester 1',2,0,0,2),
('MKS1003','Kebugaran Jasmani','Semester 1',2,1,1,4),
('MKS1004','Kewarganegaraan','Semester 1',2,0,0,2),
('MKS1005','Kesenian Terapan','Semester 1',0,4,0,4),
('MKS2001','PPKN','Semester 2',2,0,0,2),
('MKS2002','Budaya Alam Minangkabau','Semester 2',2,0,0,2),
('MKS2003','Seni Budaya','Semester 2',2,2,0,4),
('MKS2004','Komunikasi','Semester 2',1,1,0,2),
('MKS2005','Jasmani Kesehatan','Semester 2',0,2,0,2),
('MKS3001','Dokumentasi Keperawatan','Semester 3',2,2,0,4),
('MKS3002','Service Excelent','Semester 3',2,0,0,2),
('MKS3003','Nursing English 1','Semester 3',2,2,0,4),
('MKS3004','Pengantar Komputer','Semester 3',2,2,0,4),
('MKS3005','Promosi Kesehatan','Semester 3',1,1,0,2),
('MKS4001','Keperawatan Anak','Semester 4',2,2,0,4),
('MKS4002','Manajemen Keperawatan','Semester 4',1,1,0,2),
('MKS4003','Aplikasi Komputer & Analisa da','Semester 4',2,2,0,4),
('MKS4004','Nursing English 2','Semester 4',2,2,0,4),
('MKS4005','Keperawatan Medical Bedah','Semester 4',2,2,0,4),
('MKS5001','Keperawatan Jiwa','Semester 5',2,2,2,6),
('MKS5002','Praktek Klinik Keperawatan','Semester 5',0,0,4,4),
('MKS5003','Kewirausahaan','Semester 5',2,0,0,2),
('MKS5004','Riset Keperawatan','Semester 5',1,1,0,2),
('MKS5005','Praktek Home Care','Semester 5',0,0,4,4),
('MKS6001','Karya Tulis Ilmiah','Semester 6',0,0,4,4),
('MKS6002','Keperawatan Keluarga','Semester 6',2,1,0,3),
('MKS6003','Praktek Home Care 2','Semester 6',0,0,4,4),
('MKS6004','Keperawatan Gawat Darurat','Semester 6',1,0,3,4);

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `nimnilai` varchar(12) DEFAULT NULL,
  `kodematkulnilai` char(7) DEFAULT NULL,
  `nidnnilai` char(30) DEFAULT NULL,
  `semesternilai` char(5) DEFAULT NULL,
  `nilaiangka` int(11) DEFAULT NULL,
  `nilaihuruf` char(1) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  KEY `nimnilai` (`nimnilai`),
  KEY `nidnnilai` (`nidnnilai`),
  KEY `kodematkulnilai` (`kodematkulnilai`),
  KEY `semesternilai` (`semesternilai`),
  CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`nimnilai`) REFERENCES `tb_mahasiswa` (`nim`) ON UPDATE CASCADE,
  CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`nidnnilai`) REFERENCES `tb_dosen` (`nidn`) ON UPDATE CASCADE,
  CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`kodematkulnilai`) REFERENCES `tb_matakuliah` (`kodematkul`) ON UPDATE CASCADE,
  CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`semesternilai`) REFERENCES `tb_semester` (`semestertahun`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_nilai` */

/*Table structure for table `tb_prodi` */

DROP TABLE IF EXISTS `tb_prodi`;

CREATE TABLE `tb_prodi` (
  `semester` char(20) NOT NULL,
  `namaprodi` char(15) DEFAULT NULL,
  `jenjang` char(15) DEFAULT NULL,
  PRIMARY KEY (`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_prodi` */

insert  into `tb_prodi`(`semester`,`namaprodi`,`jenjang`) values 
('Semester 1','Keperawatan','Diploma III'),
('Semester 2','Keperawatan','Diploma III'),
('Semester 3','Keperawatan','Diploma III'),
('Semester 4','Keperawatan','Diploma III'),
('Semester 5','Keperawatan','Diploma III'),
('Semester 6','Keperawatan','Diploma III');

/*Table structure for table `tb_ruangan` */

DROP TABLE IF EXISTS `tb_ruangan`;

CREATE TABLE `tb_ruangan` (
  `idruangan` char(10) NOT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `jenisruangan` char(20) DEFAULT NULL,
  PRIMARY KEY (`idruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_ruangan` */

insert  into `tb_ruangan`(`idruangan`,`kapasitas`,`jenisruangan`) values 
('R01',30,'Labor'),
('R02',30,'Lokal 1'),
('R03',50,'Lokal C');

/*Table structure for table `tb_semester` */

DROP TABLE IF EXISTS `tb_semester`;

CREATE TABLE `tb_semester` (
  `semestertahun` char(5) NOT NULL,
  `semester` char(10) DEFAULT NULL,
  PRIMARY KEY (`semestertahun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_semester` */

insert  into `tb_semester`(`semestertahun`,`semester`) values 
('20191','Ganjil'),
('20201','Ganjil'),
('20202','Genap');

/*Table structure for table `tb_tendik` */

DROP TABLE IF EXISTS `tb_tendik`;

CREATE TABLE `tb_tendik` (
  `nitk` char(30) NOT NULL,
  `namatendik` varchar(25) DEFAULT NULL,
  `niptendik` varchar(12) DEFAULT NULL,
  `nohptendik` varchar(12) DEFAULT NULL,
  `pendidikantendik` char(2) DEFAULT NULL,
  `jabatantendik` char(25) DEFAULT NULL,
  `statustendik` char(12) DEFAULT NULL,
  PRIMARY KEY (`nitk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_tendik` */

insert  into `tb_tendik`(`nitk`,`namatendik`,`niptendik`,`nohptendik`,`pendidikantendik`,`jabatantendik`,`statustendik`) values 
('10101','Firdaus','-','082312122121','d3','Staf IT','Aktif'),
('10102','Maharani','-','082312122121','s1','Staf Pustaka','Aktif'),
('10103','Adil Pratama','-','082312122121','s1','Staf TU','Aktif'),
('10104','Edi Candra','-','082312122121','d3','Security','Aktif'),
('10105','Sri Wahyuni','-','082312122121','d3','Cleaning Services','Aktif');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `username` char(30) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`user_image`,`password_hash`,`reset_hash`,`reset_at`,`reset_expires`,`activate_hash`,`status`,`status_message`,`active`,`force_pass_reset`,`created_at`,`updated_at`,`deleted_at`) values 
(11,'dauspratama56@gmail.com','10101','default.svg','$2y$10$XNGmECisfQjUngEhe9t4M.OMj4V8FIjFSbbRsFvujvgGCHfb6/YVW',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-04 11:57:01','2021-07-04 11:57:01',NULL),
(12,'mahasiswa1@gmail.com','1800001','default.svg','$2y$10$ZLWhh/l6frcSemxdWKjlze1FySoE9h4V.dHR6SdYXQlJ67dT5NKZW',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-05 00:14:42','2021-07-05 00:14:42',NULL),
(28,'mahasiswa21@gmail.com','1800002','default.svg','$2y$10$PHvnZSIQVJbkvT.iB526QutZYjOX.BDVQdvo.EwYYsV4gpSKgQZT.',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-05 21:48:47','2021-07-05 21:48:47',NULL),
(29,'dosen1@gmail.com','20201','default.svg','$2y$10$vodAKiMt0/pPlg8rg5ZL7eULWKKp6VQr5rgs3u6./2zXZ3RX5apF.',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-05 22:46:52','2021-07-05 22:46:52',NULL),
(31,'dosen2@gmail.com','20202','default.svg','$2y$10$4G5voOLJna8Rey0nzBckA.ookR0OQfEU01VzbXqajHCsOzOYo27JG',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-11 03:36:06','2021-07-11 03:36:06',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
