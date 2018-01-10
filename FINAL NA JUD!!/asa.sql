/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.21-MariaDB : Database - asa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`asa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `asa`;

/*Table structure for table `appointments` */

DROP TABLE IF EXISTS `appointments`;

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headerid` int(11) DEFAULT NULL,
  `appointid` int(11) DEFAULT NULL,
  `purpose` varchar(150) DEFAULT NULL,
  `appdate` date DEFAULT NULL,
  `apptime` time DEFAULT NULL,
  `appremarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `appointments` */

insert  into `appointments`(`id`,`headerid`,`appointid`,`purpose`,`appdate`,`apptime`,`appremarks`) values 
(33,1,2,'test','2018-02-02','03:20:00',NULL),
(35,3,2,'testing for edit command','2018-03-08','10:00:00',NULL),
(37,3,2,'Meet up','2018-01-09','10:30:00',NULL),
(41,5,2,'testing purpose','2018-01-15','02:45:00',NULL);

/*Table structure for table `useradmin` */

DROP TABLE IF EXISTS `useradmin`;

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fname` varchar(150) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `useradmin` */

insert  into `useradmin`(`id`,`username`,`password`,`fname`,`admin`) values 
(1,'admin','123','Administrator',1),
(2,'dhabz','1','Dunjie T. Cabrera',0),
(3,'ethan','2','Ethan Dave Toledo',1),
(5,'dboi05','admin','Dhabz Cabrera',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
