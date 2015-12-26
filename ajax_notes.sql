-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: myownapi
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'first note','this is the sample description.','2015-12-25 05:15:12','2015-12-25 05:15:12'),(36,'hello','hello world','2015-12-26 05:05:27','2015-12-26 05:07:34'),(37,'insert title here','updated description','2015-12-26 05:09:16','2015-12-26 05:09:35');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'hello world','2015-12-23 00:02:32'),(2,'I am happy!','2015-12-23 00:02:43'),(3,'So nice to hear that!','2015-12-23 00:02:58'),(4,'This is a new post','2015-12-23 00:07:44'),(5,'hi','2015-12-23 00:13:29'),(6,'use get to display infomation','2015-12-23 00:13:49'),(7,'hi','2015-12-23 00:15:31'),(8,'can post method display data?','2015-12-23 00:16:18'),(9,'look','2015-12-23 00:22:04'),(10,'look','2015-12-23 00:22:06'),(11,'what\'s your name','2015-12-23 00:22:25'),(12,'test','2015-12-23 00:22:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` text,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` VALUES (1,'Learn the rules like a pro, so you can break them like an artist.','Pablo Picasso'),(2,'Java is to JavaScript what Car is to Carpet. ','Chris Heilmann'),(3,'If debugging is the process of removing software bugs, then programming must be the process of putting them in.','Edsger Dijkstra'),(4,'Any fool can write code that a computer can understand. Good programmers write code that humans can understand. ','Martin Fowler'),(5,'Computers are good at following instructions, but not at reading your mind.','Donald Knuth'),(6,'Measuring programming progress by lines of code is like measuring aircraft building progress by weight.','Bill Gates'),(7,'There are only two kinds of languages: the ones people complain about and the ones nobody uses','Bjarne Stroustrup'),(8,'It\'s all talk until the code runs.','Ward Cunningham'),(9,'A clever person solves a problem. A wise person avoids it.','Albert Einstein'),(10,'Being a good software engineer is 3% talent, 97% not being distracted by the internet.','Unknown'),(11,'I am X9','Xinyang'),(12,'It\'s annoying.','Xialuo'),(14,'I am Xx9','Xinyang'),(16,'don\'t repeat','Xinyang'),(17,'don\'t repeat','Xinyang'),(18,'123','Xinyang'),(19,'this works.not repeated.','Xialuo'),(20,'Hello World','Xinyang'),(21,'',''),(22,'I\'m the best!','Ronaldo');
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-26  5:22:55
