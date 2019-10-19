-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_laviezoo
-- ------------------------------------------------------
-- Server version	5.7.27-log

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
-- Table structure for table `tb_animal`
--

DROP TABLE IF EXISTS `tb_animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_animal` (
  `ANIMAL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ANIMAL_NOME` varchar(55) NOT NULL,
  `ANIMAL_IDADE` int(5) NOT NULL,
  `ANIMAL_RACA` varchar(45) NOT NULL,
  `ANIMAL_ESPECIE` varchar(45) NOT NULL,
  `ANIMAL_PROPRIETARIO` varchar(45) NOT NULL,
  PRIMARY KEY (`ANIMAL_ID`),
  UNIQUE KEY `ANIMAL_ID_UNIQUE` (`ANIMAL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_animal`
--

LOCK TABLES `tb_animal` WRITE;
/*!40000 ALTER TABLE `tb_animal` DISABLE KEYS */;
INSERT INTO `tb_animal` VALUES (1,'Pericles',10,'HUSKY SIBERIANO','Cachorro','Pedro Galocha'),(2,'bills',131651,'deus da destruição','Gato','zen-oh'),(3,'madoka',2,'madoka','Cachorro','madoka'),(4,'Pedro',11,'asa','Cachorro','Calorr');
/*!40000 ALTER TABLE `tb_animal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-18 21:45:39
