-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: insurancecie
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carQuotes`
--

DROP TABLE IF EXISTS `carQuotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carQuotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` int(10) unsigned NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOBMonth` int(2) unsigned NOT NULL,
  `DOBDay` int(2) unsigned NOT NULL,
  `DOBYear` int(4) unsigned NOT NULL,
  `claimsLast5Years` int(11) unsigned NOT NULL,
  `driverClass` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driverLicenseYear` int(4) unsigned NOT NULL,
  `vehicleYear` int(4) unsigned NOT NULL,
  `vehicleMake` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicleDailyKms` int(10) unsigned NOT NULL,
  `userSessId` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `homeQuotes`
--

DROP TABLE IF EXISTS `homeQuotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homeQuotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOBMonth` int(2) NOT NULL,
  `DOBDay` int(2) NOT NULL,
  `DOBYear` int(4) NOT NULL,
  `homeType` enum('homeowner','condo','tenant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `constructionYear` int(4) NOT NULL,
  `claimsLast5Years` int(4) NOT NULL,
  `userSessId` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-04 19:02:38
