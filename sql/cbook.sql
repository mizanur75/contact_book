-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema mizan
--

CREATE DATABASE IF NOT EXISTS mizan;
USE mizan;

--
-- Definition of table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`,`name`) VALUES 
 (1,'Friend'),
 (2,'Family'),
 (3,'Relative'),
 (4,'Classmate'),
 (5,'Roommate');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


--
-- Definition of table `contact_book`
--

DROP TABLE IF EXISTS `contact_book`;
CREATE TABLE `contact_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text,
  `added_on` datetime DEFAULT NULL,
  `category_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_book`
--

/*!40000 ALTER TABLE `contact_book` DISABLE KEYS */;
INSERT INTO `contact_book` (`id`,`user_id`,`name`,`phone`,`email`,`address`,`added_on`,`category_id`) VALUES 
 (1,101,'Mizanur','01710472020','mizan@mail.com','Dhaka','2017-10-12 12:30:56',2),
 (2,102,'Tanha Rahman','01716031535','tanha@mail.com','Dhaka','2017-10-12 12:30:56',2),
 (3,1,'Hasan','01795869956','hasan@gmail.com','Chittagong','2017-12-20 15:40:49',3);
/*!40000 ALTER TABLE `contact_book` ENABLE KEYS */;


--
-- Definition of table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` int(10) DEFAULT NULL,
  `designation_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` text,
  `present_address` text,
  `permanent_address` text,
  `join_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`id`,`code`,`designation_id`,`name`,`phone`,`email`,`present_address`,`permanent_address`,`join_date`) VALUES 
 (1,101,1,'Mizanur Rahman','mizanurrahman615@gma','Dhaka','Rangpur','01710472020','03-11-2017');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;


--
-- Definition of table `employee_designation`
--

DROP TABLE IF EXISTS `employee_designation`;
CREATE TABLE `employee_designation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_designation`
--

/*!40000 ALTER TABLE `employee_designation` DISABLE KEYS */;
INSERT INTO `employee_designation` (`id`,`designation`) VALUES 
 (1,'Manager'),
 (2,'Assistant_Manager'),
 (3,'Superviser');
/*!40000 ALTER TABLE `employee_designation` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`,`username`,`password`,`full_name`) VALUES 
 (1,'admin','admin','Mizanur Rahman'),
 (2,'demo','demo','Mizanur Rahman');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
