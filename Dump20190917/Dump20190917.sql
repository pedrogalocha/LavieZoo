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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_clinica`
--

LOCK TABLES `tb_clinica` WRITE;
/*!40000 ALTER TABLE `tb_clinica` DISABLE KEYS */;
INSERT INTO `tb_clinica` VALUES (1,'Clinica SÃO BENTO','72367171000164','Pedro Galocha','1993-06-14','41803259850','Masculino','SIM','Rua Embirucu, 123','cASA','JARDIM PLANALTO','SP','Mogi das Cruzes','08760-040','11994179336');
/*!40000 ALTER TABLE `tb_clinica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_flag_iteracao`
--

DROP TABLE IF EXISTS `tb_flag_iteracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_flag_iteracao` (
  `ID_FLAG_ITERACAO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` varchar(45) DEFAULT NULL,
  `DT_ITERACAO` datetime(2) DEFAULT NULL,
  `DS_ITERACAO` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_FLAG_ITERACAO`),
  UNIQUE KEY `id_flag_iteracao_UNIQUE` (`ID_FLAG_ITERACAO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_flag_iteracao`
--

LOCK TABLES `tb_flag_iteracao` WRITE;
/*!40000 ALTER TABLE `tb_flag_iteracao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_flag_iteracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_nivel_acesso`
--

DROP TABLE IF EXISTS `tb_nivel_acesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_nivel_acesso` (
  `ID_NIVEL_ACESSO` int(11) NOT NULL AUTO_INCREMENT,
  `DS_NIVEL_ACESSO` varchar(45) NOT NULL,
  `ID_FLAG_ITERACAO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_NIVEL_ACESSO`),
  UNIQUE KEY `ID_NIVEL_ACESSO_UNIQUE` (`ID_NIVEL_ACESSO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_nivel_acesso`
--

LOCK TABLES `tb_nivel_acesso` WRITE;
/*!40000 ALTER TABLE `tb_nivel_acesso` DISABLE KEYS */;
INSERT INTO `tb_nivel_acesso` VALUES (1,'VET_FREE',NULL),(2,'CLI_FREE',NULL),(3,'VET_PRO',NULL),(4,'CLI_PRO',NULL);
/*!40000 ALTER TABLE `tb_nivel_acesso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuario` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `VETERINARIO_ID` int(11) DEFAULT NULL,
  `CLINICA_ID` int(11) DEFAULT NULL,
  `USUARIO_EMAIL` varchar(45) DEFAULT NULL,
  `USUARIO_SENHA` varchar(45) DEFAULT NULL,
  `USUARIO_NIVEL_ACESSO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  UNIQUE KEY `ID_USUARIO_UNIQUE` (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (1,1,0,'pedro.galocha@cscall.com.br','123','VET_FREE'),(2,0,1,'pedrogalocha@uol.com.br','NjMxNTQy','CLI_FREE'),(6,6,0,'pedrogalocha@hotmail.com','NjMxNTQy','VET_PRO');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

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
  PRIMARY KEY (`VETERINARIO_ID`),
  UNIQUE KEY `tb_id_veterinario_UNIQUE` (`VETERINARIO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_veterinario`
--

LOCK TABLES `tb_veterinario` WRITE;
/*!40000 ALTER TABLE `tb_veterinario` DISABLE KEYS */;
INSERT INTO `tb_veterinario` VALUES (1,'Pedro Galocha','12312312','1993-06-11','Masculino','Cacique','41803259850','SIM',NULL,'11964924233',NULL),(3,'Cachorro Loco','123131412','1993-06-14','Masculino','Cacique','12345678923','Não',NULL,'11964924233',NULL),(6,'Maguila o Gorila','5165156165','1993-06-14','Masculino','Matador','51516165166','Não',0,'(11) 96949-4949','(23) 2626-2626');
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

-- Dump completed on 2019-09-17 22:42:10
