CREATE DATABASE  IF NOT EXISTS `ihm` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ihm`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ihm
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `job` varchar(128) DEFAULT NULL,
  `caminho_imagem` varchar(256) DEFAULT NULL,
  `text` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,'Maria Fernandes','Coordenadora Administrativa na Vale S. A.','img/comment/comment03.jpg','O SPARC me ajudou a simplificar a minha rotina e a aumentar a minha produtividade. A geração de relatórios personalizados é muito útil para acompanhar a utilização dos espaços e identificar oportunidades de melhoria.'),(2,'Pedro Santos','Diretor de TI na Ambev','img/comment/comment02.jpg','A flexibilidade do SPARC é um dos seus maiores diferenciais. Conseguimos personalizar a plataforma de acordo com as nossas necessidades específicas e integrá-la com outros sistemas da empresa sem dificuldades. Além disso, a segurança dos dados é uma preocupação constante e a plataforma atende a todos os nossos requisitos.'),(3,'Ana Silva','Gerente de Projetos na Stone Pagamentos','img/comment/comment01.jpg','O SPARC revolucionou a forma como gerenciamos nossas salas de reunião. Conseguimos otimizar a utilização dos espaços e reduzir significativamente os conflitos de agendamento. A interface é intuitiva e a equipe de suporte sempre está pronta para ajudar.');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-30 12:07:17
