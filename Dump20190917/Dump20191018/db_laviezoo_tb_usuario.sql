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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (1,1,0,'pedro.galocha@cscall.com.br','NjMxNTQy','VET_PRO'),(2,0,1,'pedrogalocha@uol.com.br','NjMxNTQy','CLI_PRO'),(6,6,0,'pedrogalocha@hotmail.com','NjMxNTQy','VET_PRO'),(7,7,0,'pedrogalocha@globo.com','NjMxNTQy','VET_PRO'),(12,0,17,'pedrogalocha@hotmail.com.br','NjMxNTQy','CLI_PRO'),(15,9,0,'new@new.com.br','NjMxNTQy','VET_FREE'),(16,10,0,'lol@lol.com.br','NjMxNTQy','ADMIN'),(17,11,0,'op@op.com.br','NjMxNTQy','VET_FREE'),(18,12,0,'vc@vc.com.br','NjMxNTQy','VET_FREE'),(19,0,0,'vetadmin','dmV0QGFkbWluMjAxOQ==','ADMIN');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
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
