-- MySQL dump 10.13  Distrib 5.7.17, for Win32 (AMD64)
--
-- Host: localhost    Database: bdunad301127_30
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `tabla301127_30`
--

DROP TABLE IF EXISTS `tabla301127_30`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabla301127_30` (
  `sec_tercero` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doc` int(2) NOT NULL,
  `id_doc` int(14) NOT NULL,
  `nom_ter` varchar(50) NOT NULL,
  `apell_ter` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `reg_med` varchar(20) NOT NULL,
  `telefono` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `hospital` varchar(20) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`sec_tercero`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabla301127_30`
--

LOCK TABLES `tabla301127_30` WRITE;
/*!40000 ALTER TABLE `tabla301127_30` DISABLE KEYS */;
INSERT INTO `tabla301127_30` VALUES (1,1,101956895,'Juan Diego','Alfonso Ocampo','Cra 89 # 27 - 16','12',7896656,'mymail@mail.com','Bogotá','Camillero','Meisen','2018-01-10 08:29:19');
/*!40000 ALTER TABLE `tabla301127_30` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `sec_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doc` int(2) NOT NULL,
  `id_doc` int(14) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(50) NOT NULL,
  `estado_usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`sec_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,1,1018477844,'halcolo','202cb962ac59075b964b07152d234b70','1','juda0408@hotmail.com','2017-12-07 12:22:44');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-10  8:39:50
