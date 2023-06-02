-- MySQL dump 10.13  Distrib 8.0.32, for Linux (aarch64)
--
-- Host: localhost    Database: fabi
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Agent`
--

DROP TABLE IF EXISTS `Agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Agent` (
  `matriculeAg` varchar(25) NOT NULL,
  `nomAg` varchar(50) NOT NULL,
  `prenomAg` varchar(30) NOT NULL,
  PRIMARY KEY (`matriculeAg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Agent`
--

LOCK TABLES `Agent` WRITE;
/*!40000 ALTER TABLE `Agent` DISABLE KEYS */;
/*!40000 ALTER TABLE `Agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CompteAgent`
--

DROP TABLE IF EXISTS `CompteAgent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CompteAgent` (
  `matricule` varchar(25) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `typeCompte` tinyint NOT NULL,
  PRIMARY KEY (`matricule`),
  CONSTRAINT `FK_ENSEIGNANT_USER` FOREIGN KEY (`matricule`) REFERENCES `Agent` (`matriculeAg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CompteAgent`
--

LOCK TABLES `CompteAgent` WRITE;
/*!40000 ALTER TABLE `CompteAgent` DISABLE KEYS */;
/*!40000 ALTER TABLE `CompteAgent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CompteEtudiant`
--

DROP TABLE IF EXISTS `CompteEtudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CompteEtudiant` (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `matricule` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricule` (`matricule`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CompteEtudiant`
--

LOCK TABLES `CompteEtudiant` WRITE;
/*!40000 ALTER TABLE `CompteEtudiant` DISABLE KEYS */;
INSERT INTO `CompteEtudiant` VALUES (132,62331,'derkariom54565654@gmail.com','kadux5456');
/*!40000 ALTER TABLE `CompteEtudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Etudiant`
--

DROP TABLE IF EXISTS `Etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Etudiant` (
  `matriculeEt` int NOT NULL,
  `nomEt` varchar(50) NOT NULL,
  `prenomEt` varchar(30) NOT NULL,
  `sectionEt` varchar(40) NOT NULL,
  `nomSemestreI` varchar(2) NOT NULL,
  `nomSemestreP` varchar(2) NOT NULL,
  `delegue` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`matriculeEt`),
  KEY `FK_SECTION_ETUDIANT` (`sectionEt`),
  KEY `FK_SEMESTREI_ETUDIANT` (`nomSemestreI`),
  KEY `FK_SEMESTREP_ETUDIANT` (`nomSemestreP`),
  CONSTRAINT `FK_SECTION_ETUDIANT` FOREIGN KEY (`sectionEt`) REFERENCES `Section` (`nomSect`),
  CONSTRAINT `FK_SEMESTREI_ETUDIANT` FOREIGN KEY (`nomSemestreI`) REFERENCES `Semestre` (`nomSemestre`),
  CONSTRAINT `FK_SEMESTREP_ETUDIANT` FOREIGN KEY (`nomSemestreP`) REFERENCES `Semestre` (`nomSemestre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Etudiant`
--

LOCK TABLES `Etudiant` WRITE;
/*!40000 ALTER TABLE `Etudiant` DISABLE KEYS */;
INSERT INTO `Etudiant` VALUES (6000,'Anas','Aboubacar','Informatique','S3','S4',0),(60507,'Illa Yacouba','Moubarak','MI','S1','S2',0),(62006,'Hamidou','Ridouane','MI','S1','S2',0),(62331,'Bachir','Abdoul Kader','MI','S1','S2',10),(62364,'Abdoul Rachid','Hachimou','MI','S1','S2',1),(66158,'Yanoussa Dille','Oumarou','MI','S1','S2',0),(66219,'Issoufou Dodo','Alazi','MI','S1','S2',0),(620006,'Masta','Ridmasta','Informatique','S5','S6',0);
/*!40000 ALTER TABLE `Etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Section`
--

DROP TABLE IF EXISTS `Section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Section` (
  `nomSect` varchar(40) NOT NULL,
  `annee` year NOT NULL,
  PRIMARY KEY (`nomSect`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Section`
--

LOCK TABLES `Section` WRITE;
/*!40000 ALTER TABLE `Section` DISABLE KEYS */;
INSERT INTO `Section` VALUES ('Informatique',2023),('MI',2023);
/*!40000 ALTER TABLE `Section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Semestre`
--

DROP TABLE IF EXISTS `Semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Semestre` (
  `nomSemestre` char(2) NOT NULL,
  `nomSect` varchar(40) NOT NULL,
  PRIMARY KEY (`nomSemestre`,`nomSect`),
  KEY `FK_SECTION_SEMESTRE` (`nomSect`),
  CONSTRAINT `FK_SECTION_SEMESTRE` FOREIGN KEY (`nomSect`) REFERENCES `Section` (`nomSect`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Semestre`
--

LOCK TABLES `Semestre` WRITE;
/*!40000 ALTER TABLE `Semestre` DISABLE KEYS */;
INSERT INTO `Semestre` VALUES ('S3','Informatique'),('S4','Informatique'),('S5','Informatique'),('S6','Informatique'),('S1','MI'),('S2','MI');
/*!40000 ALTER TABLE `Semestre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-02  9:58:34
