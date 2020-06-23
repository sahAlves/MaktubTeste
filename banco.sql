CREATE DATABASE  IF NOT EXISTS `db_maktub_seguros` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_maktub_seguros`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_maktub_seguros
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone_celular` varchar(30) NOT NULL,
  `observacao` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_faixa_etaria`
--

DROP TABLE IF EXISTS `tbl_faixa_etaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_faixa_etaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idade` varchar(5) NOT NULL,
  `preco` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_faixa_etaria`
--

LOCK TABLES `tbl_faixa_etaria` WRITE;
/*!40000 ALTER TABLE `tbl_faixa_etaria` DISABLE KEYS */;
INSERT INTO `tbl_faixa_etaria` VALUES (1,'0-18',20),(2,'19-23',30),(3,'24-28',40),(4,'29-33',50),(5,'34-38',60),(6,'39-43',70),(7,'44-48',80),(8,'49-53',90),(9,'54-58',100),(10,'59 +',110);
/*!40000 ALTER TABLE `tbl_faixa_etaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_operadora`
--

DROP TABLE IF EXISTS `tbl_operadora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_operadora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `preco_apartamento` double NOT NULL,
  `preco_enfermaria` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_operadora`
--

LOCK TABLES `tbl_operadora` WRITE;
/*!40000 ALTER TABLE `tbl_operadora` DISABLE KEYS */;
INSERT INTO `tbl_operadora` VALUES (1,'Unimed',550.9,350.8),(2,'NotreDame Intermédica',650.9,450.8),(3,'Bradesco Saúde',750.9,550.8),(4,'Amil',550.9,350.8);
/*!40000 ALTER TABLE `tbl_operadora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_simulacao`
--

DROP TABLE IF EXISTS `tbl_simulacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_simulacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `telefone_celular` varchar(30) NOT NULL,
  `operadora` varchar(200) NOT NULL,
  `modalidade` varchar(200) NOT NULL,
  `preco` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_simulacao`
--

LOCK TABLES `tbl_simulacao` WRITE;
/*!40000 ALTER TABLE `tbl_simulacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_simulacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_suporte`
--

DROP TABLE IF EXISTS `tbl_suporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_suporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(5000) NOT NULL,
  `resposta` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_suporte`
--

LOCK TABLES `tbl_suporte` WRITE;
/*!40000 ALTER TABLE `tbl_suporte` DISABLE KEYS */;
INSERT INTO `tbl_suporte` VALUES (1,'Vocês vendem seguros de veículos?','No momento só trabalhamos com seguros de saúde, mas temos como objetivo cobrir toda a área de seguros num futuro próximo.'),(2,'Quais as principais operadoras que trabalham?','Bradesco Saúde, NotreDame Intermédica, Amil, SulAmérica, Unimed, etc.'),(3,'Há quanto tempo estão no mercado de planos de saúde?','Possuímos 20 anos de tradição.');
/*!40000 ALTER TABLE `tbl_suporte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-22 22:13:02
