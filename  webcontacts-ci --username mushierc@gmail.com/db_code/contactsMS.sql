/*
SQLyog Community v11.31 (64 bit)
MySQL - 5.6.12-log : Database - contacts_ms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`contacts_ms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `contacts_ms`;

/*Table structure for table `group_contacts` */

DROP TABLE IF EXISTS `group_contacts`;

CREATE TABLE `group_contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `group_contacts` */

insert  into `group_contacts`(`id`,`group_name`,`phone`) values (3,'Home','+254719534522'),(4,'Home','+254751195848'),(5,'Work','+254719534522');

/*Table structure for table `info_contacts` */

DROP TABLE IF EXISTS `info_contacts`;

CREATE TABLE `info_contacts` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) DEFAULT NULL,
  `sname` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `info_contacts` */

insert  into `info_contacts`(`contact_id`,`fname`,`sname`,`email`,`phone`) values (1,'Peter','Mategwa','pmade@gmail.com','+254719534522'),(2,'Cyrus','Mushira','mushierc@gmail.com','+254751195848');

/*Table structure for table `info_group` */

DROP TABLE IF EXISTS `info_group`;

CREATE TABLE `info_group` (
  `group_id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(5) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `info_group` */

insert  into `info_group`(`group_id`,`status`,`name`,`description`) values (2,'EM','Home','This is for Home contacts'),(3,'EM','Work','This include work contacts');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
