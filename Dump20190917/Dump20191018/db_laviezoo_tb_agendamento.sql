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
-- Table structure for table `tb_agendamento`
--

DROP TABLE IF EXISTS `tb_agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_agendamento` (
  `AGENDAMENTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ANIMAL_ID` int(11) NOT NULL,
  `PERFIL_EXAME_ID` int(11) NOT NULL,
  `AGENDAMENTO_OUTROS_EXAMES` varchar(55) NOT NULL,
  `TIPO_BUSCA` varchar(45) NOT NULL,
  `DATA_COLETA` date DEFAULT NULL,
  `FAIXA_HORARIO_ID` int(11) DEFAULT NULL,
  `USUARIO_ID` varchar(45) NOT NULL,
  `AGENDAMENTO_LAUDO` varchar(145) DEFAULT NULL,
  `FLAG_ID` int(11) DEFAULT NULL,
  `ENDERECO` varchar(45) DEFAULT NULL,
  `COMPLEMENTO` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `CIDADE` varchar(45) DEFAULT NULL,
  `ESTADO` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `CELULAR` varchar(15) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AGENDAMENTO_ID`),
  UNIQUE KEY `AGENDAMENTO_ID_UNIQUE` (`AGENDAMENTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_agendamento`
--

LOCK TABLES `tb_agendamento` WRITE;
/*!40000 ALTER TABLE `tb_agendamento` DISABLE KEYS */;
INSERT INTO `tb_agendamento` VALUES (1,1,1,'','Busca Em Clinica','2019-09-24',0,'6','http://localhost/LavieZoo/uploads/Warframe0000.jpg',NULL,'','','','','','','','SOLICITADO'),(2,2,2,'','coletaEmClinica','2019-09-24',2,'12','http://localhost/LavieZoo/uploads/Warframe0000.jpg',NULL,'','','','','','','','DEMANDADO'),(3,3,7,'','Busca Em Clinica','2019-09-24',0,'12',NULL,NULL,'','','','','','','','SOLICITADO'),(4,4,9,'Nada','Busca Em Clinica','2019-09-24',0,'12',NULL,NULL,'','','','','','','','SOLICITADO');
/*!40000 ALTER TABLE `tb_agendamento` ENABLE KEYS */;
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
