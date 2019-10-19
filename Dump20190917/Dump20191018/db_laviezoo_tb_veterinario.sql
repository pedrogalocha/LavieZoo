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
-- Table structure for table `tb_veterinario`
--

DROP TABLE IF EXISTS `tb_veterinario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_veterinario` (
  `VETERINARIO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VETERINARIO_NOME` varchar(65) NOT NULL,
  `VETERINARIO_CRMV` varchar(10) NOT NULL,
  `VETERINARIO_DATA_NASC` date NOT NULL,
  `VETERINARIO_SEXO` varchar(25) DEFAULT NULL,
  `VETERINARIO_ESPECIALIDADE` varchar(40) NOT NULL,
  `VETERINARIO_CPF` varchar(15) NOT NULL,
  `VETERINARIO_CONVENIADO` varchar(10) NOT NULL,
  `VETERINARIO_ID_CLINICA` int(11) DEFAULT NULL,
  `VETERINARIO_CELULAR` varchar(45) NOT NULL,
  `VETERINARIO_FIXO` varchar(45) DEFAULT NULL,
  `VETERINARIO_ENDERECO` varchar(45) NOT NULL,
  `VETERINARIO_COMPLEMENTO` varchar(45) NOT NULL,
  `VETERINARIO_BAIRRO` varchar(45) NOT NULL,
  `VETERINARIO_CIDADE` varchar(45) NOT NULL,
  `VETERINARIO_ESTADO` varchar(45) NOT NULL,
  `VETERINARIO_CEP` varchar(45) NOT NULL,
  PRIMARY KEY (`VETERINARIO_ID`),
  UNIQUE KEY `tb_id_veterinario_UNIQUE` (`VETERINARIO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_veterinario`
--

LOCK TABLES `tb_veterinario` WRITE;
/*!40000 ALTER TABLE `tb_veterinario` DISABLE KEYS */;
INSERT INTO `tb_veterinario` VALUES (1,'Pedro Galocha','12312312','1993-06-11','Masculino','Cacique','41803259850','SIM',0,'11964924233',NULL,'','','','','',''),(3,'Cachorro Loco','123131412','1993-06-14','Masculino','Cacique','12345678923','Não',0,'11964924233',NULL,'','','','','',''),(6,'Maguila o Gorila','5165156165','1993-06-14','Masculino','Matador','51516165166','Não',0,'(11) 96949-4949','(23) 2626-2626','Rua Embirucu','Jardim Planalto','Jardim Planalto','Mogi das Cruzes','SP ','08760040'),(7,'Pedro Galocha','4516165561','1993-06-14','Masculino','Cacique','41803259563','SIM',0,'(11) 96492-4233','(11) 6588-4874','Rua Embirucu','Jardim Planalto','Jardim Planalto','Mogi das Cruzes','SP ','08760040'),(8,'Lulu Viana','56541651','1993-06-14','Masculino','NADA','16519619819','Não',17,'(11) 91981-9819','(81) 5151-5156','Rua Caetano de Campos','576','Mogi Moderno','Mogi das Cruzes','SP ','08717630'),(9,'LAURINDO','515161616','1963-03-15','Masculino','NADAA','98419419191','Não',0,'(11) 61619-1919','(13) 2619-1981','Rua Caetano de Campos','576','Mogi Moderno','Mogi das Cruzes','SP ','08717630'),(10,'DAMIAN','45165161','1963-05-14','NaoBinario','Nada','11231616516','Não',0,'(13) 21651-6165','(15) 1616-5165','Rua Sampaio de Barros','74','Nova Piraju','São Paulo','SP ','04625070'),(11,'ANDROMEDA','2312313','1993-06-14','Masculino','ASASA','51695198198','Não',0,'(12) 15616-9516','(15) 6165-1651','Rua Embirucu','Jardim Planalto','Jardim Planalto','Mogi das Cruzes','SP ','08760040'),(12,'DJALMA SANTOS','21312124','1993-06-14','Masculino','NADA','65156161981','Não',0,'(12) 31231-5616','(65) 1651-5616','Rua Embirucu','Jardim Planalto','Jardim Planalto','Mogi das Cruzes','SP ','08760040');
/*!40000 ALTER TABLE `tb_veterinario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-18 21:45:40
