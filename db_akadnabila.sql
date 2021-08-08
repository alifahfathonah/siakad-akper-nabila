/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.18-MariaDB : Database - db_siakadnabila
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

insert  into `auth_groups`(`id`,`name`,`description`) values (4,'Admin','Site Administrator'),(5,'Mahasiswa','Mhs User'),(6,'Dosen','Dsn User');

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

insert  into `auth_groups_users`(`group_id`,`user_id`) values (4,11),(5,12);

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
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8;

/*Data for the table `auth_logins` */

insert  into `auth_logins`(`id`,`ip_address`,`email`,`user_id`,`date`,`success`) values (1,'::1','dauspratama56@gmail.com',1,'2021-05-06 00:27:46',1),(2,'::1','daus',NULL,'2021-05-06 01:17:52',0),(3,'::1','daus',NULL,'2021-05-06 01:21:42',0),(4,'::1','dauspratama56@gmail.com',2,'2021-05-06 01:45:16',1),(5,'::1','dauspratama56@gmail.com',2,'2021-05-06 01:45:40',1),(6,'::1','dauspratama56@gmail.com',2,'2021-05-18 21:54:14',1),(7,'::1','dauspratama56@gmail.com',2,'2021-05-19 01:47:55',1),(8,'::1','dauspratama56@gmail.com',2,'2021-05-19 02:46:51',1),(9,'::1','dauspratama56@gmail.com',2,'2021-05-19 02:58:13',1),(10,'::1','dauspratama56@gmail.com',2,'2021-05-19 10:09:58',1),(11,'::1','dauspratama56@gmail.com',2,'2021-05-19 10:15:13',1),(12,'::1','dauspratama56@gmail.com',2,'2021-05-19 10:36:25',1),(13,'::1','dauspratama56@gmail.com',2,'2021-05-21 11:37:52',1),(14,'::1','dausdd',NULL,'2021-05-21 11:44:35',0),(15,'::1','febririna123@gmail.com',3,'2021-05-21 11:54:38',1),(16,'::1','ridwannabila123@gmail.com',4,'2021-05-21 11:56:19',1),(17,'::1','febririna123@gmail.com',3,'2021-05-21 11:57:12',1),(18,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:07:17',1),(19,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:19:31',1),(20,'::1','febririna123@gmail.com',3,'2021-05-21 12:20:13',1),(21,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:25:52',1),(22,'::1','febririna123@gmail.com',3,'2021-05-21 12:29:17',1),(23,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:29:26',1),(24,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:31:02',1),(25,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:40:21',1),(26,'::1','febririna123@gmail.com',3,'2021-05-21 12:41:10',1),(27,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:41:20',1),(28,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:42:23',1),(29,'::1','dauspratama56@gmail.com',2,'2021-05-21 12:54:12',1),(30,'::1','ridwannabila123@gmail.com',4,'2021-05-21 12:54:24',1),(31,'::1','dauspratama56@gmail.com',2,'2021-05-21 13:23:46',1),(32,'::1','dauspratama56@gmail.com',2,'2021-05-21 13:24:33',1),(33,'::1','ridwannabila123@gmail.com',4,'2021-05-21 13:25:27',1),(34,'::1','dauspratama56@gmail.com',2,'2021-05-24 01:14:50',1),(35,'::1','ridwannabila123@gmail.com',4,'2021-05-24 01:16:05',1),(36,'::1','dauspratama56@gmail.com',2,'2021-05-24 01:28:38',1),(37,'::1','febririna123@gmail.com',3,'2021-05-24 01:41:21',1),(38,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:00:06',1),(39,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:00:53',1),(40,'::1','febririna123@gmail.com',3,'2021-05-24 02:01:22',1),(41,'::1','febririna123@gmail.com',3,'2021-05-24 02:03:02',1),(42,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:15:45',1),(43,'::1','febririna123@gmail.com',3,'2021-05-24 02:16:00',1),(44,'::1','febririna123@gmail.com',3,'2021-05-24 02:16:41',1),(45,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:16:56',1),(46,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:30:05',1),(47,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:32:09',1),(48,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:35:59',1),(49,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:45:55',1),(50,'::1','febririna123@gmail.com',3,'2021-05-24 02:46:26',1),(51,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:46:38',1),(52,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:47:51',1),(53,'::1','febririna123@gmail.com',3,'2021-05-24 02:48:04',1),(54,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:48:29',1),(55,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:48:40',1),(56,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:49:02',1),(57,'::1','dauspratama56@gmail.com',2,'2021-05-24 02:51:38',1),(58,'::1','ridwannabila123@gmail.com',4,'2021-05-24 02:52:59',1),(59,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:03:03',1),(60,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:03:18',1),(61,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:09:01',1),(62,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:10:17',1),(63,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:33:38',1),(64,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:44:20',1),(65,'::1','dauspratama56@gmail.com',2,'2021-05-24 10:45:13',1),(66,'::1','ridwannabila123@gmail.com',4,'2021-05-24 10:59:26',1),(67,'::1','febririna123@gmail.com',3,'2021-05-24 11:00:00',1),(68,'::1','dauspratama56@gmail.com',2,'2021-05-24 11:00:23',1),(69,'::1','ridwan',NULL,'2021-05-24 11:05:18',0),(70,'::1','ridwannabila123@gmail.com',4,'2021-05-24 11:05:29',1),(71,'::1','febririna123@gmail.com',3,'2021-05-24 11:43:21',1),(72,'::1','ridwannabila123@gmail.com',4,'2021-05-24 11:50:04',1),(73,'::1','ridwannabila123@gmail.com',4,'2021-05-24 11:55:48',1),(74,'::1','adil123@gmail.com',5,'2021-05-24 11:56:51',1),(75,'::1','adil123@gmail.com',5,'2021-05-24 12:05:13',1),(76,'::1','ridwannabila123@gmail.com',4,'2021-05-24 12:05:28',1),(77,'::1','ridwannabila123@gmail.com',4,'2021-05-26 03:12:40',1),(78,'::1','dauspratama56@gmail.com',2,'2021-05-26 03:13:08',1),(79,'::1','ridwannabila123@gmail.com',4,'2021-05-26 03:13:45',1),(80,'::1','febririna123@gmail.com',3,'2021-05-26 03:14:08',1),(81,'::1','febririna123@gmail.com',3,'2021-05-26 21:56:17',1),(82,'::1','dauspratama56@gmail.com',2,'2021-05-26 22:14:20',1),(83,'::1','ridwannabila123@gmail.com',4,'2021-05-26 23:06:05',1),(84,'::1','dauspratama56@gmail.com',2,'2021-05-26 23:58:26',1),(85,'::1','dauspratama56@gmail.com',2,'2021-05-27 02:09:25',1),(86,'::1','ridwannabila123@gmail.com',4,'2021-05-27 02:29:35',1),(87,'::1','rina',NULL,'2021-05-27 02:40:11',0),(88,'::1','febririna123@gmail.com',3,'2021-05-27 02:40:20',1),(89,'::1','dauspratama56@gmail.com',2,'2021-05-27 03:07:04',1),(90,'::1','dauspratama56@gmail.com',2,'2021-05-27 21:26:49',1),(91,'::1','febririna123@gmail.com',3,'2021-05-27 21:51:25',1),(92,'::1','dauspratama56@gmail.com',2,'2021-05-27 21:55:29',1),(93,'::1','ridwannabila123@gmail.com',4,'2021-05-27 21:56:45',1),(94,'::1','febririna123@gmail.com',3,'2021-05-27 21:57:08',1),(95,'::1','ridwannabila123@gmail.com',4,'2021-05-27 21:58:49',1),(96,'::1','febririna123@gmail.com',3,'2021-05-27 22:00:35',1),(97,'::1','dauspratama56@gmail.com',2,'2021-05-27 22:28:03',1),(98,'::1','dauspratama56@gmail.com',2,'2021-05-27 22:46:21',1),(99,'::1','dauspratama56@gmail.com',2,'2021-05-27 22:57:09',1),(100,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:24:36',1),(101,'::1','febririna123@gmail.com',3,'2021-05-27 23:25:03',1),(102,'::1','ridwannabila123@gmail.com',4,'2021-05-27 23:25:17',1),(103,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:30:49',1),(104,'::1','ridwan',NULL,'2021-05-27 23:38:29',0),(105,'::1','ridwannabila123@gmail.com',4,'2021-05-27 23:38:40',1),(106,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:43:27',1),(107,'::1','febririna123@gmail.com',3,'2021-05-27 23:45:19',1),(108,'::1','dauspratama56@gmail.com',2,'2021-05-27 23:47:48',1),(109,'::1','dauspratama56@gmail.com',2,'2021-05-28 09:32:21',1),(110,'::1','dauspratama56@gmail.com',2,'2021-05-28 09:35:27',1),(111,'::1','dauspratama56@gmail.com',2,'2021-05-28 22:34:25',1),(112,'::1','adil123@gmail.com',5,'2021-05-28 22:34:49',1),(113,'::1','febririna123@gmail.com',3,'2021-05-28 22:35:06',1),(114,'::1','adil123@gmail.com',5,'2021-05-28 22:35:47',1),(115,'::1','febririna123@gmail.com',3,'2021-05-28 22:38:05',1),(116,'::1','dauspratama56@gmail.com',2,'2021-05-28 22:40:57',1),(117,'::1','dauspratama56@gmail.com',2,'2021-06-03 11:10:13',1),(118,'::1','adil123@gmail.com',5,'2021-06-03 11:14:30',1),(119,'::1','febririna123@gmail.com',3,'2021-06-03 11:14:46',1),(120,'::1','dauspratama56@gmail.com',2,'2021-06-03 11:15:13',1),(121,'::1','febririna123@gmail.com',3,'2021-06-03 13:02:32',1),(122,'::1','dauspratama56@gmail.com',2,'2021-06-03 13:10:35',1),(123,'::1','adil123@gmail.com',5,'2021-06-03 13:10:58',1),(124,'::1','dauspratama56@gmail.com',2,'2021-06-05 10:52:08',1),(125,'::1','dauspratama56@gmail.com',2,'2021-06-05 11:17:30',1),(126,'::1','dauspratama56@gmail.com',2,'2021-06-08 09:08:32',1),(127,'::1','dauspratama56@gmail.com',2,'2021-06-10 22:25:07',1),(128,'::1','dauspratama56@gmail.com',2,'2021-06-18 09:53:42',1),(129,'::1','dauspratama56@gmail.com',2,'2021-06-20 01:54:47',1),(130,'::1','dauspratama56@gmail.com',2,'2021-06-20 11:14:44',1),(131,'::1','dauspratama56@gmail.com',2,'2021-06-21 02:13:22',1),(132,'::1','dauspratama56@gmail.com',2,'2021-06-21 08:34:08',1),(133,'::1','dauspratama56@gmail.com',2,'2021-06-22 01:19:48',1),(134,'::1','dauspratama56@gmail.com',2,'2021-06-22 09:02:42',1),(135,'::1','daus',NULL,'2021-06-23 08:46:04',0),(136,'::1','daus',NULL,'2021-06-23 08:46:53',0),(137,'::1','daus',NULL,'2021-06-23 08:50:22',0),(138,'::1','daus',NULL,'2021-06-23 08:50:29',0),(139,'::1','daus',NULL,'2021-06-23 08:50:36',0),(140,'::1','daus',NULL,'2021-06-23 08:50:44',0),(141,'::1','daus',NULL,'2021-06-23 08:50:49',0),(142,'::1','dauspratama56@gmail.com',NULL,'2021-06-23 08:51:24',0),(143,'::1','dauspratama56@gmail.com',2,'2021-06-23 08:54:53',1),(144,'::1','dauspratama56@gmail.com',2,'2021-06-23 10:30:08',1),(145,'::1','dauspratama56@gmail.com',2,'2021-06-24 00:04:41',1),(146,'::1','dauspratama56@gmail.com',2,'2021-06-24 10:24:42',1),(147,'::1','dauspratama56@gmail.com',2,'2021-06-25 02:28:11',1),(148,'::1','dauspratama56@gmail.com',2,'2021-06-27 12:40:52',1),(149,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:00:34',1),(150,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:06:01',1),(151,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:27:45',1),(152,'::1','Rikaaulia@gmail.com',6,'2021-06-28 10:38:43',1),(153,'::1','dauspratama56@gmail.com',2,'2021-06-28 10:38:59',1),(154,'::1','Rikaaulia@gmail.com',6,'2021-06-28 11:03:48',1),(155,'::1','dauspratama56@gmail.com',2,'2021-06-28 11:04:38',1),(156,'::1','dauspratama56@gmail.com',2,'2021-06-28 21:14:49',1),(157,'::1','dauspratama56@gmail.com',2,'2021-06-29 01:32:34',1),(158,'::1','dauspratama56@gmail.com',2,'2021-06-29 10:28:17',1),(159,'::1','ridwan',NULL,'2021-06-29 11:35:48',0),(160,'::1','ridwan',NULL,'2021-06-29 11:36:01',0),(161,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:36:33',1),(162,'::1','rina',NULL,'2021-06-29 11:37:01',0),(163,'::1','rina',NULL,'2021-06-29 11:37:22',0),(164,'::1','dauspratama56@gmail.com',2,'2021-06-29 11:37:30',1),(165,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:44:54',1),(166,'::1','dauspratama56@gmail.com',2,'2021-06-29 11:45:47',1),(167,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:47:10',1),(168,'::1','Rikaaulia@gmail.com',6,'2021-06-29 11:47:27',1),(169,'::1','rina',NULL,'2021-06-29 11:47:55',0),(170,'::1','febririna123@gmail.com',3,'2021-06-29 11:48:05',1),(171,'::1','kocok',NULL,'2021-06-29 11:48:29',0),(172,'::1','dauspratama56@gmail.com',2,'2021-06-29 11:48:35',1),(173,'::1','Rikaaulia@gmail.com',6,'2021-06-29 12:14:29',1),(174,'::1','dauspratama56@gmail.com',2,'2021-06-29 12:24:18',1),(175,'::1','dauspratama56@gmail.com',2,'2021-06-29 21:09:31',1),(176,'::1','dauspratama56@gmail.com',2,'2021-06-30 22:44:24',1),(177,'::1','dauspratama56@gmail.com',2,'2021-07-01 10:22:15',1),(178,'::1','dauspratama56@gmail.com',2,'2021-07-02 09:55:28',1),(179,'::1','dauspratama56@gmail.com',2,'2021-07-03 00:18:54',1),(180,'::1','dauspratama56@gmail.com',2,'2021-07-03 03:39:41',1),(181,'::1','dauspratama56@gmail.com',2,'2021-07-03 08:24:16',1),(182,'::1','Rikaaulia@gmail.com',6,'2021-07-03 08:25:04',1),(183,'::1','dauspratama56@gmail.com',2,'2021-07-03 10:27:54',1),(184,'::1','dauspratama56@gmail.com',2,'2021-07-04 08:49:36',1),(185,'::1','daus',NULL,'2021-07-04 11:56:26',0),(186,'::1','dauspratama56@gmail.com',11,'2021-07-04 11:57:17',1),(187,'::1','10101',NULL,'2021-07-04 12:06:21',0),(188,'::1','dauspratama56@gmail.com',11,'2021-07-04 12:06:33',1),(189,'::1','10101',NULL,'2021-07-04 12:07:06',0),(190,'::1','dauspratama56@gmail.com',11,'2021-07-04 12:07:16',1),(191,'::1','dauspratama56@gmail.com',11,'2021-07-04 23:55:28',1),(192,'::1','mahasiswa1@gmail.com',12,'2021-07-05 00:15:37',1),(193,'::1','dauspratama56@gmail.com',11,'2021-07-05 00:39:59',1);

/*Table structure for table `auth_permissions` */

DROP TABLE IF EXISTS `auth_permissions`;

CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `auth_permissions` */

insert  into `auth_permissions`(`id`,`name`,`description`) values (1,'manage-users','Manage All User'),(2,'manage-profile','Manage user\'s profile');

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

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `kodejadwal` char(7) NOT NULL,
  `hari` char(10) DEFAULT NULL,
  `jam` char(30) DEFAULT NULL,
  `idruangan` char(5) DEFAULT NULL,
  PRIMARY KEY (`kodejadwal`),
  KEY `nidnjadwal` (`jam`),
  KEY `kodematkuljadwal` (`hari`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jadwal` */

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
  `nimkrs` varchar(12) DEFAULT NULL,
  `namakelaskrs` char(5) DEFAULT NULL,
  `matkulkrs` char(7) DEFAULT NULL,
  `skskrs` int(11) DEFAULT NULL,
  `semesterkrs` int(11) DEFAULT NULL,
  KEY `nimkrs` (`nimkrs`),
  KEY `matkulkrs` (`matkulkrs`),
  KEY `namakelaskrs` (`namakelaskrs`),
  CONSTRAINT `tb_krs_ibfk_1` FOREIGN KEY (`nimkrs`) REFERENCES `tb_mahasiswa` (`nim`) ON UPDATE CASCADE,
  CONSTRAINT `tb_krs_ibfk_2` FOREIGN KEY (`matkulkrs`) REFERENCES `tb_matakuliah` (`kodematkul`) ON UPDATE CASCADE,
  CONSTRAINT `tb_krs_ibfk_3` FOREIGN KEY (`namakelaskrs`) REFERENCES `tb_kelas` (`idkelas`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_krs` */

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
  `iduser` int(11) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `prodi` (`prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_mahasiswa` */

insert  into `tb_mahasiswa`(`nim`,`nama`,`tmplahir`,`tgllahir`,`jenkel`,`prodi`,`nohp`,`email`,`status`,`alamat`,`thnmasuk`,`nik`,`pemakademik`,`iduser`) values ('1700001','Indah Dwi Fitriani','Padang','2021-07-06','','Keperawatan','081266404004','indahdwi90@gmail.com','Aktif','Padang','2017','1303044409980001','Imam Gunawan',NULL),('1700002','Novita Sari Sukma','Pasaman','2021-07-24','Perempuan','Keperawatan','081266404004','novitasarisukma@gmai','Aktif','Pasaman','2017','1303030202024442','Tifta Brilian',NULL),('1700003','Intan Dwi Fitriani','Padang','2021-07-15','Perempuan','Keperawatan','081266404004','intandwi@gmail.com','Tidak Aktif','Padang Timur','2017','1303030202024442','Tifta Brilian',NULL),('1700004','Maharani','Sijunjung','2021-07-23','Perempuan','Keperawatan','081266404004','maharani@gmail.com','Tidak Aktif','Sijunjung','2017','1303030202024442','Eka Iswandy',NULL),('1700005','Yulia Gazella','Sijunjung','2021-07-02','Perempuan','Keperawatan','081266404004','yuliagazella@gmail.c','Aktif','Sijunjung','2017','1303030202024442','Eka Iswandy',NULL),('1700006','Lani Permata Sari','Pariaman','2021-07-16','Perempuan','Keperawatan','081266404004','lanipermata@gmail.co','Aktif','Priaman','2017','1303030202024442','Tifta Brilian',NULL),('1800001','Adil Pratama','Payakumbuah','2021-07-05','Laki-laki','Keperawatan','081266404004','adilpratama56@gmail.','Aktif','Payakumbuah Selatan','2018','1303030202024442','Imam Gunawan',NULL),('1800002','Yasir Arafat','Jambi','2021-07-06','Laki-laki','Keperawatan','081290900909','yasirarapat56@gmail.','Aktif','Jambi Timur','2018','1303030202024442','Eka Iswandy',NULL),('1800003','Rahman Deswanda','Padang','2021-07-01','Laki-laki','Keperawatan','081266404004','rahmandeswanda@gmail','Aktif','Padang Barat','2018','1303030202024442','Tifta Brilian',NULL),('1900001','Melisa Aprilia','Padang Panjang','2021-07-01','Perempuan','Keperawatan','082321213434','melisaaprilia@gmail.','Aktif','Padang Panjang','2019','1303030202024442','Imam Gunawan',NULL),('1900002','Yana Riza','Sijunjung','2021-07-02','Perempuan','Keperawatan','081266404004','yanariza@gmaul.com','Aktif','Sijunjung','2019','1301034808980003','Tifta Brilian',NULL),('1910001','Intan Herma Putri','Pesisir Selatan','2021-07-01','Perempuan','Keperawatan','081266404004','intanherma@gmail.com','Aktif','Pesisir Selatan','2019','1303030202024442','Imam Gunawan',NULL);

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
  KEY `smt` (`smt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_matakuliah` */

insert  into `tb_matakuliah`(`kodematkul`,`namamatkul`,`smt`,`sksteori`,`skspraktek`,`skslapangan`,`totalsks`) values ('MKS1001','Agama Islam','Semester 1',2,0,0,2),('MKS1002','Pancasila','Semester 1',2,0,0,2),('MKS1003','Kebugaran Jasmani','Semester 1',2,1,1,4),('MKS1004','Kewarganegaraan','Semester 1',2,0,0,2),('MKS1005','Keperawatan Dasar','Semester 1',3,2,0,5),('MKS1006','Psikologi','Semester 1',2,0,0,2),('MKS2001','Bahasa Indonesia','Semester 2',2,0,0,2),('MKS2002','Etika Keperawatan','Semester 2',2,2,0,4),('MKS2003','Gizi dan Diet','Semester 2',1,1,0,2),('MKS2004','Komunikasi','Semester 2',1,1,0,2),('MKS2006','Patofisiologi','Semester 2',1,1,0,2),('MKS3001','Dokumentasi Keperawatan','Semester 3',2,2,0,4),('MKS3002','Service Excelent','Semester 3',2,0,0,2),('MKS3003','Nursing English 1','Semester 3',2,2,0,4),('MKS3004','Pengantar Komputer','Semester 3',2,2,0,4),('MKS3005','Promosi Kesehatan','Semester 3',1,1,0,2),('MKS4001','Keperawatan Anak','Semester 4',2,2,0,4),('MKS4002','Manajemen Keperawatan','Semester 4',1,1,0,2),('MKS4003','Aplikasi Komputer & Analisa da','Semester 4',2,2,0,4),('MKS4004','Nursing English 2','Semester 4',2,2,0,4),('MKS4005','Keperawatan Medical Bedah','Semester 4',2,2,0,4),('MKS5001','Keperawatan Jiwa','Semester 5',2,2,2,6),('MKS5002','Praktek Klinik Keperawatan','Semester 5',0,0,4,4),('MKS5003','Kewirausahaan','Semester 5',2,0,0,2),('MKS5004','Riset Keperawatan','Semester 5',1,1,0,2),('MKS5005','Praktek Home Care','Semester 5',0,0,4,4),('MKS6001','Karya Tulis Ilmiah','Semester 6',0,0,4,4),('MKS6002','Keperawatan Keluarga','Semester 6',2,1,0,3),('MKS6003','Praktek Home Care 2','Semester 6',0,0,4,4),('MKS6004','Keperawatan Gawat Darurat','Semester 6',1,0,3,4);

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `nimnilai` varchar(12) DEFAULT NULL,
  `kodematkulnilai` char(7) DEFAULT NULL,
  `nidnnilai` char(30) DEFAULT NULL,
  `semesternilai` char(5) DEFAULT NULL,
  `nilaiangka` int(11) DEFAULT NULL,
  `nilaihuruf` char(1) DEFAULT NULL,
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

insert  into `tb_prodi`(`semester`,`namaprodi`,`jenjang`) values ('Semester 1','Keperawatan','Diploma III'),('Semester 2','Keperawatan','Diploma III'),('Semester 3','Keperawatan','Diploma III'),('Semester 4','Keperawatan','Diploma III'),('Semester 5','Keperawatan','Diploma III'),('Semester 6','Keperawatan','Diploma III');

/*Table structure for table `tb_ruangan` */

DROP TABLE IF EXISTS `tb_ruangan`;

CREATE TABLE `tb_ruangan` (
  `idruangan` char(5) NOT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `jenisruangan` char(20) DEFAULT NULL,
  PRIMARY KEY (`idruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_ruangan` */

insert  into `tb_ruangan`(`idruangan`,`kapasitas`,`jenisruangan`) values ('2',50,'Lab. Keperawatan'),('3',20,'Lab. Komputer'),('A0010',30,'Lokal A1');

/*Table structure for table `tb_semester` */

DROP TABLE IF EXISTS `tb_semester`;

CREATE TABLE `tb_semester` (
  `semestertahun` char(5) NOT NULL,
  `semester` char(10) DEFAULT NULL,
  PRIMARY KEY (`semestertahun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_semester` */

insert  into `tb_semester`(`semestertahun`,`semester`) values ('20191','Ganjil'),('20202','Genap');

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

insert  into `tb_tendik`(`nitk`,`namatendik`,`niptendik`,`nohptendik`,`pendidikantendik`,`jabatantendik`,`statustendik`) values ('10101','Firdaus','-','082312122121','d3','Staf IT','Aktif'),('10102','Maharani','-','082312122121','s1','Staf Pustaka','Aktif'),('10103','Adil Pratama','-','082312122121','s1','Staf TU','Aktif'),('10104','Edi Candra','-','082312122121','d3','Security','Aktif'),('10105','Sri Wahyuni','-','082312122121','d3','Cleaning Services','Aktif');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`user_image`,`password_hash`,`reset_hash`,`reset_at`,`reset_expires`,`activate_hash`,`status`,`status_message`,`active`,`force_pass_reset`,`created_at`,`updated_at`,`deleted_at`) values (11,'dauspratama56@gmail.com','10101','default.svg','$2y$10$XNGmECisfQjUngEhe9t4M.OMj4V8FIjFSbbRsFvujvgGCHfb6/YVW',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-04 11:57:01','2021-07-04 11:57:01',NULL),(12,'mahasiswa1@gmail.com','1800001','default.svg','$2y$10$ZLWhh/l6frcSemxdWKjlze1FySoE9h4V.dHR6SdYXQlJ67dT5NKZW',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-07-05 00:14:42','2021-07-05 00:14:42',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
