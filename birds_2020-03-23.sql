# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: birds
# Generation Time: 2020-03-23 13:44:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table birds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `birds`;

CREATE TABLE `birds` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `species` varchar(20) NOT NULL DEFAULT '',
  `color` varchar(20) DEFAULT 'brown',
  `frequency` enum('All the fucking time','Common','Rare','Saw it in my dreams') DEFAULT NULL,
  `shit` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `birds` WRITE;
/*!40000 ALTER TABLE `birds` DISABLE KEYS */;

INSERT INTO `birds` (`id`, `species`, `color`, `frequency`, `shit`)
VALUES
	(1,'Seagull','White','Common','yes'),
	(2,'Pigeon','Grey','All the fucking time','yes'),
	(3,'Emu','Blue','Saw it in my dreams','no');

/*!40000 ALTER TABLE `birds` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
