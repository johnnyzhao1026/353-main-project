-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: mnc353_2
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `GroupAge`
--

DROP TABLE IF EXISTS `GroupAge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GroupAge` (
  `ageGroup` int NOT NULL,
  `min` int DEFAULT NULL,
  `max` int DEFAULT NULL,
  PRIMARY KEY (`ageGroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GroupAge`
--

LOCK TABLES `GroupAge` WRITE;
/*!40000 ALTER TABLE `GroupAge` DISABLE KEYS */;
INSERT INTO `GroupAge` VALUES (1,80,1000),(2,70,79),(3,60,69),(4,50,59),(5,40,49),(6,30,39),(7,18,29),(8,12,17),(9,5,11),(10,0,4);
/*!40000 ALTER TABLE `GroupAge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `InfectedHistory`
--

DROP TABLE IF EXISTS `InfectedHistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `InfectedHistory` (
  `mediCardNum` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `passportNum` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `infectedTimes` int DEFAULT '0',
  `dateOfInfection` date DEFAULT NULL,
  UNIQUE KEY `Infected_record` (`mediCardNum`,`passportNum`,`infectedTimes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `InfectedHistory`
--

LOCK TABLES `InfectedHistory` WRITE;
/*!40000 ALTER TABLE `InfectedHistory` DISABLE KEYS */;
INSERT INTO `InfectedHistory` VALUES ('11234792','Chou782',0,'0000-00-00'),('14456732','G5U7V5W',1,'2021-01-03'),('99824568','I8F5N6S',1,'2020-09-09'),('13456789','Jordan123',0,'0000-00-00'),(NULL,'Junlin890',1,'2020-03-16'),(NULL,'Junlin890',2,'2020-11-15'),(NULL,'Junlin890',3,'2021-03-09'),(NULL,'KING123',1,'2020-04-01'),('14566432','Mingke345',1,'2020-06-15'),('14566432','Mingke345',2,'2020-12-01');
/*!40000 ALTER TABLE `InfectedHistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Person`
--

DROP TABLE IF EXISTS `Person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Person` (
  `firstName` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `middleInitial` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `age` int NOT NULL,
  `ageGroup` int NOT NULL,
  `phoneNumber` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalCode` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citizenship` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passportNum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mediCardNum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `issuedDateMediCard` date DEFAULT NULL,
  `expDateMediCard` date DEFAULT NULL,
  `isRegistered` int DEFAULT NULL,
  UNIQUE KEY `Person_record` (`firstName`,`lastName`,`dateOfBirth`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Person`
--

LOCK TABLES `Person` WRITE;
/*!40000 ALTER TABLE `Person` DISABLE KEYS */;
INSERT INTO `Person` VALUES ('Chou','Jay','C','1980-02-13',22,5,'560991346','1608 Lincoln Ave','Chou@gmail.com','Montreal','Quebec','H3H2L8','Canadian','Chou782','11234792','2021-07-15','2021-10-13',1),('Da','Li','N','1998-11-06',10,9,'4389346789','183 Mackay','123213@qq.com','Montreal','Quebec','123123','Canada','I8F5N6S','99824568','2012-08-22','2027-06-12',1),('fnlmao','lnJack','mi02','1998-03-20',23,7,'514-321-1818','333 bellesoleil','frank@163.com','montreal','Quebec','H5F9C9','Canada','passportNum1','medi-teenager1998','2019-10-07','2025-10-25',1),('Ju','Wer','N','1998-11-06',3,10,'4380894356','1833 Ottawa','123213@qq.com','Shanghai','Shanghai','221343','China','G5U7V5W','14456732','2019-12-01','2027-06-12',1),('Junlin','Zhuo','Z','1999-07-17',22,7,'5143452892','1645 De maisonneuve','Junlin@gmail.com','Montreal','Quebec','H3G0G5','Chinese','Junlin890','NULL','0000-00-00','0000-00-00',0),('LeBron','Jamas','R','1984-12-30',37,6,'5146709913','1205 Mackay','Jamas@gmail.com','Akron','Ohio','H3G0C5','American','KING123','NULL','0000-00-00','0000-00-00',0),('Michael','Jordan','J','1963-02-17',58,4,'5147826645','2117 Rue Tupper','Jordan@gmail.com','Brooklyn','New York','H6G0C2','American','Jordan123','13456789','2021-09-11','2022-09-01',1),('Mingke','Jiang','M','1999-02-17',22,7,'5143567892','1182 Rue Crecent','Mingke@gmail.com','Montreal','Quebec','H3G0G2','Chinese','Mingke345','14566432','2021-06-15','2022-06-01',1),('Ruiyi','Xing','W','1988-10-15',15,8,'4387189922','1833 Bishop','cao88@163.com','Guangzhou','Guangdong','32190123','China','I8TY6D','88726459','2013-07-10','2027-06-12',1),('Shan','Wang','N','1998-11-06',23,7,'43867747765','1833 Bishop','123213@qq.com','Shanghai','Shanghai','20335','China','UHS912','22998753','2015-10-10','2027-06-12',1),('Zehui','Cao','N','1998-11-06',30,5,'4381298732','68 Saint-Cathrine','123213@qq.com','Shanghai','Shanghai','901823','China','L0B6B0','22315678','2005-10-10','2027-06-12',1);
/*!40000 ALTER TABLE `Person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PublicHealthWorker`
--

DROP TABLE IF EXISTS `PublicHealthWorker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PublicHealthWorker` (
  `jobTitle` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startWorkDate` date DEFAULT NULL,
  `endWorkDate` date DEFAULT NULL,
  `jobID` int NOT NULL,
  `facilityID` int DEFAULT NULL,
  `mediCardNumber` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`jobID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PublicHealthWorker`
--

LOCK TABLES `PublicHealthWorker` WRITE;
/*!40000 ALTER TABLE `PublicHealthWorker` DISABLE KEYS */;
INSERT INTO `PublicHealthWorker` VALUES ('security','2020-03-20','2021-01-11',10022,2,'14456732'),('nurse','2020-05-01',NULL,10030,3,'13456789'),('regular employee','2020-09-15',NULL,10031,7,'13456789'),('manager','2020-06-03','2021-01-10',10032,2,'11234792'),('security','2021-01-20',NULL,10040,2,'11234792'),('security','2021-01-11',NULL,10041,2,'14456732'),('nurse','2021-02-20','2021-09-28',10049,3,'14566432'),('nurse','2021-03-19',NULL,10056,5,'88726459'),('secretary','2021-08-25',NULL,10058,3,'14566432'),('security','2021-08-01',NULL,10061,9,'22998753'),('nurse','2021-08-07','2021-08-14',10064,4,'22998753'),('manager','2021-08-20',NULL,10082,4,'22998753');
/*!40000 ALTER TABLE `PublicHealthWorker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VaccinatedHistory`
--

DROP TABLE IF EXISTS `VaccinatedHistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VaccinatedHistory` (
  `mediCardNum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passportNum` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateOfVaccinated` date DEFAULT NULL,
  `doseNum` int DEFAULT NULL,
  `lotNum` int DEFAULT NULL,
  `vaccinatedType` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `givenByJobID` int DEFAULT NULL,
  UNIQUE KEY `vaccinate_record` (`mediCardNum`,`passportNum`,`doseNum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VaccinatedHistory`
--

LOCK TABLES `VaccinatedHistory` WRITE;
/*!40000 ALTER TABLE `VaccinatedHistory` DISABLE KEYS */;
INSERT INTO `VaccinatedHistory` VALUES ('11234792','Chou782','2020-05-08',1,1,'Moderna',10030),('14456732','G5U7V5W','2021-05-20',1,3,'AstraZeneca',10064),('14456732','G5U7V5W','2021-07-05',2,7,'Moderna',10064),('14456732','G5U7V5W','2021-08-15',3,2,'Pifizer',10064),('88726459','I8TY6D','2021-02-22',1,5,'Pfizer',10030),('88726459','I8TY6D','2021-07-05',2,3,'Moderna',10064),('88726459','I8TY6D','2021-09-05',3,3,'Johnson & Johnson',10064),('13456789','Jordan123','0000-00-00',0,4,'NULL',10030),(NULL,'Junlin890','2021-09-26',1,1,'Johnson & Johnson',10056),(NULL,'Junlin890','2021-10-26',2,1,'AstraZeneca',10056),('22315678','L0B6B0','2021-01-08',1,2,'AstraZeneca',10049),('14566432','Mingke345','2020-12-28',1,4,'Moderna',10030),('medi-teenager1998','passportNum1',NULL,0,NULL,NULL,NULL),('22998753','UHS912','2021-05-18',1,2,'Pfizer',10056),('22998753','UHS912','2021-07-18',2,1,'Moderna',10056);
/*!40000 ALTER TABLE `VaccinatedHistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vaccination`
--

DROP TABLE IF EXISTS `Vaccination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vaccination` (
  `typeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approvedDate` date DEFAULT NULL,
  `status` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateOfSuspension` date DEFAULT NULL,
  PRIMARY KEY (`typeName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vaccination`
--

LOCK TABLES `Vaccination` WRITE;
/*!40000 ALTER TABLE `Vaccination` DISABLE KEYS */;
INSERT INTO `Vaccination` VALUES ('AstraZeneca','2021-01-18','SAFE',NULL),('BioNTech',NULL,'SUSPENDED','2020-06-15'),('Gameleya',NULL,'SUSPENDED','2021-03-07'),('Johnson & Johnson','2021-05-27','SAFE',NULL),('Moderna','2020-11-05','SAFE',NULL),('Novavax',NULL,'SUSPENDED','2021-04-16'),('Pfizer','2020-08-25','SAFE',NULL),('Sinopharm',NULL,'SUSPENDED','2020-05-04'),('Sinovac',NULL,'SUSPENDED','2020-11-11'),('Sputnik V',NULL,'SUSPENDED','2021-02-26');
/*!40000 ALTER TABLE `Vaccination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VaccinationFacility`
--

DROP TABLE IF EXISTS `VaccinationFacility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VaccinationFacility` (
  `facilityID` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNum` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `faclityType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capacity` int DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Montreal',
  `province` char(255) COLLATE utf8_unicode_ci DEFAULT 'Quebec',
  `country` char(255) COLLATE utf8_unicode_ci DEFAULT 'Canada',
  PRIMARY KEY (`facilityID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VaccinationFacility`
--

LOCK TABLES `VaccinationFacility` WRITE;
/*!40000 ALTER TABLE `VaccinationFacility` DISABLE KEYS */;
INSERT INTO `VaccinationFacility` VALUES (1,'Pharmaprix','2740 Notre-Dame','5149373924','Pharmaprix.ca','pharmacy',200,'Montreal','Quebec','Canada'),(2,'Concordia','201 Chester Le Blvd, Scarborough, ON M1W 2K7','151457122006','concorMedi.ca','hospital',450,'Montreal','Quebec','Canada'),(3,'Warden','3430 Finch Av E, Scarborough, ON M1W 2R5','13523409873','Warden.ca','hospital',250,'Duncan','Columbia','Canada'),(4,'Chartwell','2301 Brimley Rd, Scarborough, ON M1S 5B8','4164303905','fcr.ca','pharmacy',50,'Montreal','Quebec','Canada'),(5,'Samosa','5210 Finch Ave E Unit 9, Scarborough, ON M1S 4Z7','4163220955','Samosa.ca','hospital',400,'Duncan','Columbia','Canada'),(6,'Markham','5975-6025 Steeles Ave E, Scarborough, ON M1V 5P6','20330495831','mark.ca','pharmacy',20,'Montreal','Quebec','Canada'),(7,'Glen','230 Concession 7 Townsend, Claremont, ON L1Y 1A2','20492749563','glen.com','pharmacy',40,'Vancouver','Columbia','Canada'),(8,'Walmart','188 Ottawa','90019232332','owad.ca','hospital',220,'HangZhou','ZheJiang','China'),(9,'Provigo','1288 St Antoine O','34413453343','Provigo.ca','pharmacy',597,'Montreal','Quebec','Canada'),(10,'Merbont','1788 Rue David','12342143432','Merbont.ca','hospital',123,'HangZhou','ZheJiang','China');
/*!40000 ALTER TABLE `VaccinationFacility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dbtest`
--

DROP TABLE IF EXISTS `dbtest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbtest` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbtest`
--

LOCK TABLES `dbtest` WRITE;
/*!40000 ALTER TABLE `dbtest` DISABLE KEYS */;
INSERT INTO `dbtest` VALUES ('001','pz',15);
/*!40000 ALTER TABLE `dbtest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'mnc353_2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-14 11:02:32
