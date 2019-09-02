CREATE DATABASE  IF NOT EXISTS `db_laviezoo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_laviezoo`;
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
-- Table structure for table `tb_clinica`
--

DROP TABLE IF EXISTS `tb_clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_clinica` (
  `CLINICA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLINICA_NOME_FANTASIA` varchar(45) NOT NULL,
  `CLINICA_CNPJ` varchar(14) NOT NULL,
  `CLINICA_RESPONSAVEL_NOME` varchar(45) NOT NULL,
  `CLINICA_RESPONSAVEL_DATA_DE_NASCIMENTO` date NOT NULL,
  `CLINICA_RESPONSAVEL_CPF` varchar(11) NOT NULL,
  `CLINICA_RESPONSAVEL_SEXO` varchar(45) NOT NULL,
  `CLINICA_CONVENIADO` varchar(10) NOT NULL,
  `CLINICA_ENDEREÇO` varchar(50) NOT NULL,
  `CLINICA_COMPLEMENTO` varchar(50) DEFAULT NULL,
  `CLINICA_BAIRRO` varchar(50) NOT NULL,
  `CLINICA_ESTADO` varchar(45) NOT NULL,
  `CLINICA_CIDADE` varchar(50) NOT NULL,
  `CLINICA_CEP` varchar(50) NOT NULL,
  `CLINICA_CELULAR` varchar(50) NOT NULL,
  PRIMARY KEY (`CLINICA_ID`),
  UNIQUE KEY `CLINICA_ID_UNIQUE` (`CLINICA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_clinica`
--

LOCK TABLES `tb_clinica` WRITE;
/*!40000 ALTER TABLE `tb_clinica` DISABLE KEYS */;
INSERT INTO `tb_clinica` VALUES (1,'Clinica SÃO BENTO','72367171000164','Pedro Galocha','1993-06-14','41803259850','Masculino','SIM','Rua Embirucu, 123','cASA','JARDIM PLANALTO','SP','Mogi das Cruzes','08760-040','11994179336');
/*!40000 ALTER TABLE `tb_clinica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-02  6:54:38
