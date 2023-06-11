CREATE DATABASE  IF NOT EXISTS `nivel_7` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `nivel_7`;
-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: nivel_7
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

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
-- Table structure for table `01_select_frutas`
--

DROP TABLE IF EXISTS `01_select_frutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `01_select_frutas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `estoque` decimal(5,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `01_select_frutas`
--

LOCK TABLES `01_select_frutas` WRITE;
/*!40000 ALTER TABLE `01_select_frutas` DISABLE KEYS */;
INSERT INTO `01_select_frutas` VALUES (1,'Abacate',8.36,3.200),(2,'Abacaxi',6.26,4.100),(3,'Acerola',21.46,1.850),(4,'Amora',24.97,0.900),(5,'Banana',5.77,6.200),(6,'Caju',27.57,3.600),(7,'Cenoura',5.75,5.200),(8,'Coco',12.00,1.450),(9,'Couve',11.77,3.000),(10,'Espinafre',20.08,1.300),(11,'Framboesa',26.42,30.000),(12,'Gengibre',20.45,2.300),(13,'Goiaba',7.66,4.000),(14,'Hortelã',35.97,1.250),(15,'Laranja',12.29,15.000),(16,'Limão',11.00,12.000),(17,'Mamão',8.43,2.000),(18,'Manga',7.33,3.800),(19,'Maracujá',9.66,7.500),(20,'Maçã',12.40,3.300),(21,'Melancia',10.38,5.700),(22,'Melão',7.46,2.400),(23,'Morango',30.36,20.500),(24,'Pêssego',12.48,3.450),(25,'Tamarindo',22.90,1.200),(26,'Umbu',23.72,0.500),(27,'Uva',16.28,13.000);
/*!40000 ALTER TABLE `01_select_frutas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `02_select_pesos`
--

DROP TABLE IF EXISTS `02_select_pesos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `02_select_pesos` (
  `id` int(11) NOT NULL,
  `valor` decimal(4,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `02_select_pesos`
--

LOCK TABLES `02_select_pesos` WRITE;
/*!40000 ALTER TABLE `02_select_pesos` DISABLE KEYS */;
INSERT INTO `02_select_pesos` VALUES (1,0.050),(2,0.100),(3,0.150),(4,0.200),(5,0.250),(6,0.300),(7,0.350),(8,0.400),(9,0.450),(10,0.500);
/*!40000 ALTER TABLE `02_select_pesos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `03_select_liquidos`
--

DROP TABLE IF EXISTS `03_select_liquidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `03_select_liquidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `estoque` decimal(5,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `03_select_liquidos`
--

LOCK TABLES `03_select_liquidos` WRITE;
/*!40000 ALTER TABLE `03_select_liquidos` DISABLE KEYS */;
INSERT INTO `03_select_liquidos` VALUES (1,'Natural',0.00,0.000),(2,'Aguá',4.00,0.000),(3,'Leite',5.60,40.000),(4,'Laranja',6.29,35.000),(5,'Aguá de Coco',12.00,30.500);
/*!40000 ALTER TABLE `03_select_liquidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `04_select_sucos`
--

DROP TABLE IF EXISTS `04_select_sucos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `04_select_sucos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trading_name` varchar(100) NOT NULL,
  `ingredientes` varchar(100) NOT NULL,
  `id_fk_fruta_1` int(11) NOT NULL,
  `id_fk_peso_1` int(11) NOT NULL,
  `id_fk_fruta_2` int(11) DEFAULT NULL,
  `id_fk_peso_2` int(11) DEFAULT NULL,
  `id_fk_fruta_3` int(11) DEFAULT NULL,
  `id_fk_peso_3` int(11) DEFAULT NULL,
  `id_fk_fruta_4` int(11) DEFAULT NULL,
  `id_fk_peso_4` int(11) DEFAULT NULL,
  `id_fk_fruta_5` int(11) DEFAULT NULL,
  `id_fk_peso_5` int(11) DEFAULT NULL,
  `id_fk_liquido` int(11) NOT NULL,
  `id_fk_peso_liquido` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `04_select_sucos`
--

LOCK TABLES `04_select_sucos` WRITE;
/*!40000 ALTER TABLE `04_select_sucos` DISABLE KEYS */;
INSERT INTO `04_select_sucos` VALUES (1,'Abacate com Leite','Abacate com Leite',1,5,0,0,0,0,0,0,0,0,3,5),(2,'Maracujá com Leite','Maracujá com Leite',19,4,0,0,0,0,0,0,0,0,3,6),(3,'Melancia Natural','Melancia Natural',21,5,0,0,0,0,0,0,0,0,1,5);
/*!40000 ALTER TABLE `04_select_sucos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `05_select_preferencias`
--

DROP TABLE IF EXISTS `05_select_preferencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `05_select_preferencias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `05_select_preferencias`
--

LOCK TABLES `05_select_preferencias` WRITE;
/*!40000 ALTER TABLE `05_select_preferencias` DISABLE KEYS */;
INSERT INTO `05_select_preferencias` VALUES (1,'Açucar e Gelo'),(2,'Sem Açucar / Sem Gelo'),(3,'Só Gelo / sem Açucar'),(4,'Sem Gelo / Com Açucar');
/*!40000 ALTER TABLE `05_select_preferencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `06_select_acrescimos`
--

DROP TABLE IF EXISTS `06_select_acrescimos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `06_select_acrescimos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `estoque` decimal(5,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `06_select_acrescimos`
--

LOCK TABLES `06_select_acrescimos` WRITE;
/*!40000 ALTER TABLE `06_select_acrescimos` DISABLE KEYS */;
INSERT INTO `06_select_acrescimos` VALUES (1,'Amendoim','1.10',20.000),(2,'Aveia','2.15',4.000),(3,'Açai','3.20',30.000),(4,'Chantilly','3.80',2.000),(5,'Chocolate','2.70',5.700),(6,'Gengibre','1.60',2.000),(7,'Granola','2.30',3.000),(8,'Leite Condensado','3.50',2.000),(9,'Leite em pó','2.90',1.800),(10,'Mel','2.40',3.200),(11,'Xarope de Guaraná','3.00',2.000),(12,'Outra Fruta','3.00',99.000);
/*!40000 ALTER TABLE `06_select_acrescimos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `07_select_vendas`
--

DROP TABLE IF EXISTS `07_select_vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `07_select_vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venda` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` varchar(45) NOT NULL,
  `id_suco` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `liquido` varchar(45) NOT NULL,
  `preferencia` varchar(45) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `acrescimo` varchar(45) NOT NULL,
  `valor_acrescimo` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `07_select_vendas`
--

LOCK TABLES `07_select_vendas` WRITE;
/*!40000 ALTER TABLE `07_select_vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `07_select_vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `08_select_admins`
--

DROP TABLE IF EXISTS `08_select_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `08_select_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `senha` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `08_select_admins`
--

LOCK TABLES `08_select_admins` WRITE;
/*!40000 ALTER TABLE `08_select_admins` DISABLE KEYS */;
INSERT INTO `08_select_admins` VALUES (1,'Raphael',123);
/*!40000 ALTER TABLE `08_select_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `09_pre_venda_suco`
--

DROP TABLE IF EXISTS `09_pre_venda_suco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `09_pre_venda_suco` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `id_fk_peso_liquido` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `09_pre_venda_suco`
--

LOCK TABLES `09_pre_venda_suco` WRITE;
/*!40000 ALTER TABLE `09_pre_venda_suco` DISABLE KEYS */;
/*!40000 ALTER TABLE `09_pre_venda_suco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `10_pre_venda_liquido`
--

DROP TABLE IF EXISTS `10_pre_venda_liquido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `10_pre_venda_liquido` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `id_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `10_pre_venda_liquido`
--

LOCK TABLES `10_pre_venda_liquido` WRITE;
/*!40000 ALTER TABLE `10_pre_venda_liquido` DISABLE KEYS */;
/*!40000 ALTER TABLE `10_pre_venda_liquido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `11_pre_venda_preferencia`
--

DROP TABLE IF EXISTS `11_pre_venda_preferencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `11_pre_venda_preferencia` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `11_pre_venda_preferencia`
--

LOCK TABLES `11_pre_venda_preferencia` WRITE;
/*!40000 ALTER TABLE `11_pre_venda_preferencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `11_pre_venda_preferencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `12_pre_venda_acrescimo`
--

DROP TABLE IF EXISTS `12_pre_venda_acrescimo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `12_pre_venda_acrescimo` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `estoque` varchar(45) NOT NULL,
  `id_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `12_pre_venda_acrescimo`
--

LOCK TABLES `12_pre_venda_acrescimo` WRITE;
/*!40000 ALTER TABLE `12_pre_venda_acrescimo` DISABLE KEYS */;
/*!40000 ALTER TABLE `12_pre_venda_acrescimo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `13_pre_venda`
--

DROP TABLE IF EXISTS `13_pre_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `13_pre_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fk` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `liquido` varchar(45) NOT NULL,
  `preferencia` varchar(100) NOT NULL,
  `acrescimo` varchar(45) NOT NULL,
  `valor_acrescimo` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `13_pre_venda`
--

LOCK TABLES `13_pre_venda` WRITE;
/*!40000 ALTER TABLE `13_pre_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `13_pre_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `14_pre_ingrediente_fruta`
--

DROP TABLE IF EXISTS `14_pre_ingrediente_fruta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `14_pre_ingrediente_fruta` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `14_pre_ingrediente_fruta`
--

LOCK TABLES `14_pre_ingrediente_fruta` WRITE;
/*!40000 ALTER TABLE `14_pre_ingrediente_fruta` DISABLE KEYS */;
/*!40000 ALTER TABLE `14_pre_ingrediente_fruta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `15_pre_ingrediente_peso`
--

DROP TABLE IF EXISTS `15_pre_ingrediente_peso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `15_pre_ingrediente_peso` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `valor` decimal(4,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `15_pre_ingrediente_peso`
--

LOCK TABLES `15_pre_ingrediente_peso` WRITE;
/*!40000 ALTER TABLE `15_pre_ingrediente_peso` DISABLE KEYS */;
/*!40000 ALTER TABLE `15_pre_ingrediente_peso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `16_pre_ingrediente_liquido`
--

DROP TABLE IF EXISTS `16_pre_ingrediente_liquido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `16_pre_ingrediente_liquido` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `16_pre_ingrediente_liquido`
--

LOCK TABLES `16_pre_ingrediente_liquido` WRITE;
/*!40000 ALTER TABLE `16_pre_ingrediente_liquido` DISABLE KEYS */;
/*!40000 ALTER TABLE `16_pre_ingrediente_liquido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `17_pre_ingredientes`
--

DROP TABLE IF EXISTS `17_pre_ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `17_pre_ingredientes` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` decimal(4,2) NOT NULL,
  `id_fk_peso` int(11) NOT NULL,
  `peso` decimal(4,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `17_pre_ingredientes`
--

LOCK TABLES `17_pre_ingredientes` WRITE;
/*!40000 ALTER TABLE `17_pre_ingredientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `17_pre_ingredientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-10 23:49:49
