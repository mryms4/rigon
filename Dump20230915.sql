-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `note` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note`
--

LOCK TABLES `note` WRITE;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
INSERT INTO `note` VALUES (42,'یادداشت دوم ','توضیحات یادداشت دوم','2023-09-07 07:51:13'),(44,'یادداشت اول','یادداشت اول','2023-09-12 13:39:33'),(45,'do project','I should make ','2023-09-12 14:58:24');
/*!40000 ALTER TABLE `note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `signup` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signup`
--

LOCK TABLES `signup` WRITE;
/*!40000 ALTER TABLE `signup` DISABLE KEYS */;
INSERT INTO `signup` VALUES (1,'9uj','klm','9482095948','hi','97U8 H','2023-09-14 08:18:12'),(2,'maryam','','','','maryam','2023-09-14 08:35:54'),(3,'adkcjjcdij','klm','9482095948','hi','','2023-09-14 09:27:59'),(4,'adkcjjcdij','','','','','2023-09-14 09:28:07'),(5,'','','','','','2023-09-14 09:34:32'),(6,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 09:35:03'),(7,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 09:36:06'),(8,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 09:36:06'),(9,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 09:38:17'),(10,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 09:38:17'),(11,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 13:17:50'),(12,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 13:17:50'),(13,'adkcjjcdij','klm','9482095948','wefg','325','2023-09-14 13:20:32'),(14,'9uj','klm','9482095948','hi','','2023-09-14 13:20:52'),(15,'','','','','','2023-09-14 13:20:56'),(16,'','','','','','2023-09-14 15:57:27'),(17,'adkcjjcdij','klm','9482095948','wefg','utc','2023-09-14 16:13:25'),(18,'','','','','','2023-09-14 16:20:20'),(19,'','','','','','2023-09-14 16:21:53'),(20,'adkcjjcdij','klm','9482095948','hi','rzr45yh','2023-09-14 16:22:03'),(21,'9uj','klm','9482095948','hi','6uij  ','2023-09-14 17:33:21'),(22,'adkcjjcdij','klm','9482095948','hi','era','2023-09-14 17:33:52'),(23,'9uj','klm','9482095948','hi','ery','2023-09-14 17:34:25'),(24,'9uj','klm','9482095948','hi','ery','2023-09-14 17:34:53'),(25,'maryam','klm','9482095948','hi','maryam','2023-09-14 17:35:22'),(26,'maryam','maryam','9482095948','hi','maryamm','2023-09-14 17:35:55'),(27,'adkcjjcdij','maryam','9482095948','wefg','6hu','2023-09-14 17:45:51'),(28,'adkcjjcdij','maryam','9482095948','hi','wdecf','2023-09-14 17:46:47'),(29,'9uj','klm','9482095948','wefg','8yub','2023-09-14 18:13:21'),(30,'adkcjjcdij','maryam','9482095948','hi','324ty','2023-09-14 18:14:28'),(31,'adkcjjcdij','klm','9482095948','hi','jfx','2023-09-14 18:26:11'),(32,'adkcjjcdij','klm','9482095948','hi','jfx','2023-09-14 18:26:30'),(33,'adkcjjcdij','klm','9482095948','hi','jfx','2023-09-14 18:26:45'),(34,'9uj','klm','9482095948','hi','hiop','2023-09-14 19:03:33'),(35,'adkcjjcdij','maryam','9482095948','hi','54yhz4awe','2023-09-14 19:03:43'),(36,'adkcjjcdij','maryam','9482095948','hi','sdhgfr','2023-09-15 07:04:33'),(37,'maryam','maryam','9482095948','hi','wef','2023-09-15 07:14:22'),(38,'adkcjjcdij','klm','gf53','wefg','regf','2023-09-15 07:14:52'),(39,'dgr','drfg','dg','drfgh','rsg','2023-09-15 07:29:22'),(40,'adkcjjcdij','klm','9482095948','wefg','3t4f','2023-09-15 07:30:44'),(41,'maryam','yuk','     uytik','hi','wfrd','2023-09-15 07:31:16'),(42,'9uj','klm','  uytik','hi','3wed','2023-09-15 07:33:43'),(43,'9uj','klm','9482095948','hi','3ed','2023-09-15 07:33:50'),(44,'adkcjjcdij','maryam','9482095948','hi','5rty','2023-09-15 07:35:05'),(45,'9uj','klm','9482095948','hi','bbbb','2023-09-15 07:35:55'),(46,'adkcjjcdij','klm','    uytik','hi','eyt','2023-09-15 07:38:03'),(47,'adkcjjcdij','klm','gf53','hi','yb','2023-09-15 08:39:02'),(48,'adkcjjcdij','klm','9482095948','hi','0im','2023-09-15 15:58:09');
/*!40000 ALTER TABLE `signup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-15 19:29:28
