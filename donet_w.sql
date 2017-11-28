-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: donet
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `Book`
--

DROP TABLE IF EXISTS `Book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Book` (
  `name` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bookid`),
  KEY `email` (`email`),
  CONSTRAINT `book_ibfk_1` FOREIGN KEY (`email`) REFERENCES `donor` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Book`
--

LOCK TABLES `Book` WRITE;
/*!40000 ALTER TABLE `Book` DISABLE KEYS */;
/*!40000 ALTER TABLE `Book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cloth`
--

DROP TABLE IF EXISTS `Cloth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cloth` (
  `category` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `clothid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`clothid`),
  UNIQUE KEY `email` (`email`),
  CONSTRAINT `cloth_ibfk_1` FOREIGN KEY (`email`) REFERENCES `donor` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cloth`
--

LOCK TABLES `Cloth` WRITE;
/*!40000 ALTER TABLE `Cloth` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cloth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Donate`
--

DROP TABLE IF EXISTS `Donate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Donate` (
  `item` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `clothID` int(11) DEFAULT NULL,
  `bookID` int(11) DEFAULT NULL,
  KEY `email` (`email`),
  KEY `clothID` (`clothID`),
  KEY `bookID` (`bookID`),
  CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`email`) REFERENCES `Donor` (`email`),
  CONSTRAINT `donate_ibfk_2` FOREIGN KEY (`clothID`) REFERENCES `Cloth` (`clothid`),
  CONSTRAINT `donate_ibfk_3` FOREIGN KEY (`bookID`) REFERENCES `Book` (`bookid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Donate`
--

LOCK TABLES `Donate` WRITE;
/*!40000 ALTER TABLE `Donate` DISABLE KEYS */;
/*!40000 ALTER TABLE `Donate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Donor`
--

DROP TABLE IF EXISTS `Donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Donor` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`email`,`contact_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Donor`
--

LOCK TABLES `Donor` WRITE;
/*!40000 ALTER TABLE `Donor` DISABLE KEYS */;
INSERT INTO `Donor` VALUES ('testuser','peach@ujju','9999999971','add','jjj'),('testuser','peach@ujwal','9999999971','add','hhh');
/*!40000 ALTER TABLE `Donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NGO`
--

DROP TABLE IF EXISTS `NGO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NGO` (
  `name` varchar(50) NOT NULL,
  `regID` int(11) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contact_no`,`regID`),
  UNIQUE KEY `contact_no` (`contact_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NGO`
--

LOCK TABLES `NGO` WRITE;
/*!40000 ALTER TABLE `NGO` DISABLE KEYS */;
/*!40000 ALTER TABLE `NGO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Order_`
--

DROP TABLE IF EXISTS `Order_`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Order_` (
  `order_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`order_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Order_`
--

LOCK TABLES `Order_` WRITE;
/*!40000 ALTER TABLE `Order_` DISABLE KEYS */;
/*!40000 ALTER TABLE `Order_` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extra`
--

DROP TABLE IF EXISTS `extra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extra` (
  `ex` int(11) DEFAULT NULL,
  `ph_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extra`
--

LOCK TABLES `extra` WRITE;
/*!40000 ALTER TABLE `extra` DISABLE KEYS */;
INSERT INTO `extra` VALUES (1,NULL);
/*!40000 ALTER TABLE `extra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `reqID` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(45) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `regID` int(11) NOT NULL,
  PRIMARY KEY (`reqID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-25 23:02:11
