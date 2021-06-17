/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.1.19-MariaDB : Database - job_portal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`job_portal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `job_portal`;

/*Table structure for table `app_reg` */

DROP TABLE IF EXISTS `app_reg`;

CREATE TABLE `app_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appl_code` int(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `f_name` varchar(200) DEFAULT NULL,
  `m_name` varchar(200) DEFAULT NULL,
  `l_name` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` smallint(6) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `ph_ch` smallint(6) DEFAULT NULL,
  `inst` int(11) DEFAULT NULL,
  `qual` int(11) DEFAULT NULL,
  `pass_yr` varchar(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `app_reg` */

insert  into `app_reg`(`id`,`appl_code`,`password`,`f_name`,`m_name`,`l_name`,`email_id`,`contact_no`,`dob`,`gender`,`category`,`ph_ch`,`inst`,`qual`,`pass_yr`,`created_by`,`created_on`,`modified_by`,`modified_on`,`record_status`) values 
(18,1623783018,'5f4dcc3b5aa765d61d8327deb882cf99','Sarat','Kumar','Basa','sarat.basa@gmail.com',2147483647,'2021-06-16',1,5,2,391702,48455785,'2014-15',NULL,'2021-06-16 00:20:18',NULL,'0000-00-00 00:00:00',1);

/*Table structure for table `appl_skill` */

DROP TABLE IF EXISTS `appl_skill`;

CREATE TABLE `appl_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appl_code` int(11) DEFAULT NULL,
  `skill_code` bigint(20) DEFAULT NULL,
  `recoard_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `appl_skill` */

/*Table structure for table `comp_reg` */

DROP TABLE IF EXISTS `comp_reg`;

CREATE TABLE `comp_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_code` int(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `sector` int(11) DEFAULT NULL,
  `document_type` int(11) DEFAULT NULL,
  `document_no` varchar(150) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `comp_reg` */

/*Table structure for table `gen_code_desc` */

DROP TABLE IF EXISTS `gen_code_desc`;

CREATE TABLE `gen_code_desc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `gen_code_desc` */

insert  into `gen_code_desc`(`id`,`group_name`,`description`,`created_by`,`created_on`,`updated_by`,`updated_on`,`record_status`) values 
(1,'GENDER','Male',NULL,'2021-06-11 16:26:44',NULL,'0000-00-00 00:00:00',1),
(2,'GENDER','Female',NULL,'2021-06-11 16:26:29',NULL,'0000-00-00 00:00:00',1),
(3,'GENDER','Other',NULL,'2021-06-11 16:26:26',NULL,'0000-00-00 00:00:00',1),
(4,'CATEGORY','General',NULL,'2021-06-11 16:27:03',NULL,'0000-00-00 00:00:00',1),
(5,'CATEGORY','OBC',NULL,'2021-06-11 16:27:10',NULL,'0000-00-00 00:00:00',1),
(6,'CATEGORY','ST',NULL,'2021-06-11 16:27:14',NULL,'0000-00-00 00:00:00',1),
(7,'CATEGORY','SC',NULL,'2021-06-11 16:27:32',NULL,'0000-00-00 00:00:00',1),
(8,'DOCUMENT','PAN',NULL,'2021-06-11 16:29:01',NULL,'0000-00-00 00:00:00',1),
(9,'DOCUMENT','VOTER ID',NULL,'2021-06-11 16:28:58',NULL,'0000-00-00 00:00:00',1),
(10,'DOCUMENT','GSTN',NULL,'2021-06-11 16:28:23',NULL,'0000-00-00 00:00:00',1),
(11,'DOCUMENT','AADHAAR',NULL,'2021-06-11 16:28:53',NULL,'0000-00-00 00:00:00',1),
(12,'SECTOR','Chemical',NULL,'2021-06-12 12:51:06',NULL,'0000-00-00 00:00:00',1),
(13,'SECTOR','Mining',NULL,'2021-06-12 12:51:25',NULL,'0000-00-00 00:00:00',1),
(14,'SECTOR','Automobile',NULL,'2021-06-12 12:47:26',NULL,'0000-00-00 00:00:00',1),
(15,'SECTOR','Aviation',NULL,'2021-06-12 12:47:26',NULL,'0000-00-00 00:00:00',1),
(16,'SECTOR','It & Bpm',NULL,'2021-06-12 12:47:26',NULL,'0000-00-00 00:00:00',1);

/*Table structure for table `institute_master` */

DROP TABLE IF EXISTS `institute_master`;

CREATE TABLE `institute_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inst_code` int(11) DEFAULT NULL,
  `inst_name` varchar(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `institute_master` */

insert  into `institute_master`(`id`,`inst_code`,`inst_name`,`created_by`,`created_on`,`modified_by`,`modified_on`,`record_status`) values 
(1,391702,'Centurion',NULL,'2021-06-12 12:13:55',NULL,'0000-00-00 00:00:00',1),
(2,658050,'ITER',NULL,'2021-06-12 12:14:34',NULL,'0000-00-00 00:00:00',1),
(3,552145,'KIIT',NULL,'2021-06-12 12:14:42',NULL,'0000-00-00 00:00:00',1),
(4,536686,'Gandhi',NULL,'2021-06-12 12:14:50',NULL,'0000-00-00 00:00:00',1),
(5,472309,'CV Raman',NULL,'2021-06-12 12:14:58',NULL,'0000-00-00 00:00:00',1),
(6,496801,'Polytech',NULL,'2021-06-12 12:15:00',NULL,'0000-00-00 00:00:00',1),
(7,512389,'GEC',NULL,'2021-06-12 12:15:17',NULL,'0000-00-00 00:00:00',1),
(8,516856,'Kalinga',NULL,'2021-06-12 12:15:29',NULL,'0000-00-00 00:00:00',1),
(9,456883,'Silicon',NULL,'2021-06-12 12:15:50',NULL,'0000-00-00 00:00:00',1),
(10,722663,'Bhubaneswar Engg.',NULL,'2021-06-12 12:16:01',NULL,'0000-00-00 00:00:00',1);

/*Table structure for table `job_applied` */

DROP TABLE IF EXISTS `job_applied`;

CREATE TABLE `job_applied` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` int(11) DEFAULT NULL,
  `appl_code` int(11) DEFAULT NULL,
  `apply_status` smallint(6) DEFAULT NULL,
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `job_applied` */

/*Table structure for table `job_post` */

DROP TABLE IF EXISTS `job_post`;

CREATE TABLE `job_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` int(11) DEFAULT NULL,
  `job_name` varchar(200) DEFAULT NULL,
  `job_type` smallint(6) DEFAULT NULL,
  `vacanices` smallint(6) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `qualification` int(11) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `deadline_date` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `skils` varchar(200) DEFAULT NULL,
  `min_exp` int(11) DEFAULT NULL,
  `max_exp` int(11) DEFAULT NULL,
  `job_profile` text,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `job_post` */

/*Table structure for table `qualification_master` */

DROP TABLE IF EXISTS `qualification_master`;

CREATE TABLE `qualification_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qual_code` int(11) DEFAULT NULL,
  `qual_name` varchar(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `qualification_master` */

insert  into `qualification_master`(`id`,`qual_code`,`qual_name`,`created_by`,`created_on`,`modified_by`,`modified_on`,`record_status`) values 
(4,45645488,'HSC(10TH)',NULL,'2021-06-12 12:29:56',NULL,'0000-00-00 00:00:00',1),
(5,12315478,'ITI',NULL,'2021-06-12 12:30:00',NULL,'0000-00-00 00:00:00',1),
(6,2147483647,'Diploma',NULL,'2021-06-12 12:30:03',NULL,'0000-00-00 00:00:00',1),
(7,48455785,'Graduate(TECH)',NULL,'2021-06-12 12:30:08',NULL,'0000-00-00 00:00:00',1),
(8,121222878,'Graduate(NON-TECH)',NULL,'2021-06-12 12:30:11',NULL,'0000-00-00 00:00:00',1),
(9,74444585,'MBA',NULL,'2021-06-12 12:30:16',NULL,'0000-00-00 00:00:00',1),
(10,545481,'PHD',NULL,'2021-06-12 12:30:19',NULL,'0000-00-00 00:00:00',1);

/*Table structure for table `skill_master` */

DROP TABLE IF EXISTS `skill_master`;

CREATE TABLE `skill_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_code` bigint(20) DEFAULT NULL,
  `skill_name` varchar(100) DEFAULT NULL,
  `record_status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `skill_master` */

insert  into `skill_master`(`id`,`skill_code`,`skill_name`,`record_status`) values 
(1,123454561,'PHP',1),
(2,46566465,'JS',1),
(3,48798181,'SQL',1),
(4,1984519815,'Jquery',1),
(5,48451245,'Angular',1),
(6,8844658,'React',1),
(7,8743454823,'HTML',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
