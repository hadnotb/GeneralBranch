-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Current Database: `blog`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `blog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog`;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `idArticle` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `libArticle` varchar(128) NOT NULL,
  `dateArticle` datetime NOT NULL,
  `dateModif` datetime NOT NULL,
  `texteArticle` mediumtext NOT NULL,
  `idUser` int(3) unsigned NOT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `fk_User` (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Democratie a bout de souffle','2021-03-11 10:54:09','2012-04-13 10:54:09','Economieafrrfr ',1),(2,'Paris relayer en d3','2012-06-12 10:54:09','2012-05-13 10:54:09','ergjrejgrej',2),(3,'Un singe marche sur pluton','2012-06-13 10:54:09','2012-06-13 10:54:09','jgtrigj',3),(4,'Brigitte atteint limortalité','2012-06-14 10:54:09','2012-07-13 10:54:09','ghrtjgiertjgt',5),(5,'Mediter est bon pour le moral','2012-06-15 10:54:09','2012-08-13 10:54:09','tgjgtjgtjgtjt',5);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commentaire` (
  `idComment` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `contentComment` mediumtext NOT NULL,
  `idUser` int(3) unsigned NOT NULL,
  `idArticle` int(3) unsigned NOT NULL,
  `dateComment` datetime DEFAULT NULL,
  PRIMARY KEY (`idComment`),
  KEY `fk_User` (`idUser`),
  KEY `fk_Article` (`idArticle`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaire`
--

LOCK TABLES `commentaire` WRITE;
/*!40000 ALTER TABLE `commentaire` DISABLE KEYS */;
INSERT INTO `commentaire` VALUES (1,'fdsqgfg fqdgdf',1,1,'2012-07-13 10:54:09'),(2,'fdsqgfg fqdgdf',1,1,'2012-06-13 10:54:09'),(3,'fdsqgfg fqdgdf',2,2,'2012-05-13 10:54:09');
/*!40000 ALTER TABLE `commentaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theme`
--

DROP TABLE IF EXISTS `theme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theme` (
  `idTheme` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `libTheme` varchar(128) NOT NULL,
  PRIMARY KEY (`idTheme`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theme`
--

LOCK TABLES `theme` WRITE;
/*!40000 ALTER TABLE `theme` DISABLE KEYS */;
INSERT INTO `theme` VALUES (1,'Economie'),(2,'Sport'),(3,'Tech'),(4,'Société'),(5,'Santé');
/*!40000 ALTER TABLE `theme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themearticle`
--

DROP TABLE IF EXISTS `themearticle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `themearticle` (
  `idArticle` int(3) unsigned NOT NULL,
  `idTheme` varchar(128) NOT NULL,
  UNIQUE KEY `idArticle` (`idArticle`,`idTheme`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themearticle`
--

LOCK TABLES `themearticle` WRITE;
/*!40000 ALTER TABLE `themearticle` DISABLE KEYS */;
INSERT INTO `themearticle` VALUES (1,'1'),(1,'4'),(2,'2'),(3,'3'),(4,'4'),(4,'5'),(5,'4'),(5,'5');
/*!40000 ALTER TABLE `themearticle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `idUser` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(128) NOT NULL,
  `prenomUser` varchar(128) NOT NULL,
  `mdpUser` varchar(128) NOT NULL,
  `mailUser` varchar(128) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Dupont','Ginette','12a','azki@dilo.com'),(2,'Ponti','Albert','23b','bilu@pala.com'),(3,'Abini','Roger','34c','poulou@tat.com'),(4,'Bongiurno','Justine','45d','cricri@jino.com'),(5,'Druquer','Micheline','56e','artiulino@datarita.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-12 14:57:27
