-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Malanay
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Current Database: `Malanay`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `Malanay` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `Malanay`;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  `strength` int(11) NOT NULL,
  `defence` int(11) NOT NULL,
  `skill` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (1,'Card A',10,10,'Recover 150 points of vitality, Attack twice',NULL,NULL),(2,'Card B',20,20,'Call a monster',NULL,NULL),(3,'Card C',30,30,'',NULL,NULL),(4,'Card D',40,40,'Investigate enemy\'s weakpoint',NULL,NULL),(5,'Card E',40,50,'',NULL,NULL),(6,'Card F',45,10,'Call a Rescue',NULL,NULL),(7,'Card G',35,20,'',NULL,NULL),(8,'Card H',25,30,'',NULL,NULL),(9,'Card I',15,40,'Enhance Strength',NULL,NULL),(10,'Card J',5,50,'Make Silence',NULL,NULL);
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deck_cards`
--

DROP TABLE IF EXISTS `deck_cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deck_cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `deck_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `strength` int(11) NOT NULL,
  `defence` int(11) NOT NULL,
  `skill` text NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deck_cards`
--

LOCK TABLES `deck_cards` WRITE;
/*!40000 ALTER TABLE `deck_cards` DISABLE KEYS */;
INSERT INTO `deck_cards` VALUES (1,1,0,'',0,0,'',1,NULL,NULL),(2,1,0,'',0,0,'',2,NULL,NULL),(3,1,0,'',0,0,'',3,NULL,NULL),(4,2,0,'',0,0,'',1,NULL,NULL),(5,2,0,'',0,0,'',2,NULL,NULL),(6,2,0,'',0,0,'',3,NULL,NULL),(7,3,0,'',0,0,'',1,NULL,NULL),(8,3,0,'',0,0,'',2,NULL,NULL),(9,3,0,'',0,0,'',3,NULL,NULL),(10,4,0,'',0,0,'',1,NULL,NULL),(11,4,0,'',0,0,'',2,NULL,NULL),(12,4,0,'',0,0,'',3,NULL,NULL),(13,5,0,'',0,0,'',1,NULL,NULL),(14,5,0,'',0,0,'',2,NULL,NULL),(15,5,0,'',0,0,'',3,NULL,NULL),(16,6,0,'',0,0,'',1,NULL,NULL),(17,6,0,'',0,0,'',2,NULL,NULL),(18,6,0,'',0,0,'',3,NULL,NULL),(19,7,0,'',0,0,'',1,NULL,NULL),(20,7,0,'',0,0,'',2,NULL,NULL),(21,7,0,'',0,0,'',3,NULL,NULL),(22,8,0,'',0,0,'',1,NULL,NULL),(23,8,0,'',0,0,'',2,NULL,NULL),(24,8,0,'',0,0,'',3,NULL,NULL),(25,9,0,'',0,0,'',1,NULL,NULL),(26,9,0,'',0,0,'',2,NULL,NULL),(27,9,0,'',0,0,'',3,NULL,NULL),(28,10,0,'',0,0,'',1,NULL,NULL),(29,10,0,'',0,0,'',2,NULL,NULL),(30,10,0,'',0,0,'',3,NULL,NULL);
/*!40000 ALTER TABLE `deck_cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `decks`
--

DROP TABLE IF EXISTS `decks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `decks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `decks`
--

LOCK TABLES `decks` WRITE;
/*!40000 ALTER TABLE `decks` DISABLE KEYS */;
INSERT INTO `decks` VALUES (1,'1',NULL,NULL),(2,'2',NULL,NULL),(3,'3',NULL,NULL),(4,'4',NULL,NULL),(5,'5',NULL,NULL),(6,'6',NULL,NULL),(7,'7',NULL,NULL),(8,'8',NULL,NULL),(9,'9',NULL,NULL),(10,'10',NULL,NULL);
/*!40000 ALTER TABLE `decks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('app','default','001_create_decks'),('app','default','002_create_cards'),('app','default','003_create_deck_cards');
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-05 21:51:37
