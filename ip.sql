-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: ip
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` text NOT NULL,
  `isactive` tinyint(4) NOT NULL,
  `cname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `website` text NOT NULL,
  `cperson` text NOT NULL,
  `mobile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'C0001',1,'MArkh Jamandreeeee','qwq','121','BC','qwqw','qwqw','2332'),(2,'C0002',1,'RGMC','','','Handumanan','','',''),(3,'C0003',1,'Maria Clara','','','Bacolod','','',''),(4,'C0004',1,'Juan dela Cruz','','','La Castellana','','','');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients2`
--

DROP TABLE IF EXISTS `clients2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` text NOT NULL,
  `isactive` tinyint(4) NOT NULL,
  `cname` text NOT NULL,
  `posid` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `website` text NOT NULL,
  `cperson` text NOT NULL,
  `mobile` text NOT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients2`
--

LOCK TABLES `clients2` WRITE;
/*!40000 ALTER TABLE `clients2` DISABLE KEYS */;
INSERT INTO `clients2` VALUES (1,'',1,'Juan dela Cruz',1,'','','Bacolod','','','','Regular'),(2,'',1,'Maria Reyes',6,'','','Bacolod','','','','Walk-in');
/*!40000 ALTER TABLE `clients2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payroll`
--

DROP TABLE IF EXISTS `payroll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payroll` (
  `empid` varchar(5) NOT NULL,
  `empname` varchar(35) NOT NULL,
  `emptype` varchar(11) NOT NULL,
  `rateperday` float(8,2) NOT NULL,
  `numdayswork` float(6,2) NOT NULL,
  `cola` float(8,2) NOT NULL,
  `overtimehrs` float(7,2) NOT NULL,
  `gross` float(10,2) NOT NULL,
  `tax` float(8,2) NOT NULL,
  `philhealth` float(7,2) NOT NULL,
  `sss` float(7,2) NOT NULL,
  `cshadvance` float(8,2) NOT NULL,
  `totalded` float(10,2) NOT NULL,
  `netsalary` float(10,2) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payroll`
--

LOCK TABLES `payroll` WRITE;
/*!40000 ALTER TABLE `payroll` DISABLE KEYS */;
INSERT INTO `payroll` VALUES ('Z2201','Juan de la Cruz','Temporary',500.00,13.00,100.00,2.00,6762.50,100.00,135.25,80.00,120.00,435.25,6327.25,1),('E2202','John Doe','Regular',300.00,12.00,0.00,60.00,6525.00,0.00,130.50,0.00,0.00,130.50,6394.50,2),('R2203','Alexander Kramer','Temporary',700.00,13.00,0.00,0.00,9100.00,100.00,182.00,0.00,0.00,282.00,8818.00,3),('S2204','Jose Reyes','Regular',500.00,12.00,0.00,0.00,6000.00,0.00,120.00,0.00,0.00,120.00,5880.00,4);
/*!40000 ALTER TABLE `payroll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posdesc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (1,'Clerk'),(2,'Manager'),(3,'Sales Representative'),(4,'Supervisor'),(5,'CEO'),(6,'Foreman');
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` text DEFAULT NULL,
  `productname` text DEFAULT NULL,
  `abbriviation` text DEFAULT NULL,
  `productprice` decimal(10,2) DEFAULT NULL,
  `productcategory` text DEFAULT NULL,
  `productbrand` text DEFAULT NULL,
  `productqty` int(11) DEFAULT NULL,
  `productallowtrans` tinyint(1) DEFAULT NULL,
  `productlicenseduedate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (64,'P101','Amoxicillin Tablets','AMOX-001',10.99,'Antibiotics','ABC Pharmaceuticals',200,1,'2022-04-02'),(65,'P102','Paracetamol Tablets','PARA-002',5.50,'Analgesics','XYZ Pharma',300,1,'2024-05-15'),(66,'P103','Ibuprofen Capsules','IBU-003',8.75,'Analgesics','MediHealth Inc.',150,1,'2024-06-02'),(67,'P104','Antipyretic Syrup','ANTIPY-004',12.99,'Antipyretics','HealthPlus',100,1,'0000-00-00'),(68,'P105','Hand Sanitizer','SAN-005',3.99,'Antiseptics','CleanHands Ltd.',500,1,'0000-00-00'),(69,'P106','Antacid Tablets','ANTAC-006',6.25,'Antacids','GastroCare',401,NULL,NULL),(70,'P107','Loratadine Tablets','LORA-007',15.99,'Antihistamines','AllergyRelief',200,1,'2024-06-05'),(71,'P108','Ondansetron Tablets','ONDA-008',20.50,'Antiemetics','NauseaStop',300,1,'2024-05-30'),(72,'P109','Loperamide Capsules','LOPE-009',7.25,'Antidiarrheals','DiaStop',250,1,'2024-06-10'),(73,'P110','Clotrimazole Cream','CLOTRI-0101',10.00,'Antifungals','FungiFree',150,NULL,NULL),(89,'P0011','Amoxicillin Tablets','AMOX-001',10.99,'Antibiotics','ABC Pharmaceuticals',200,1,'0000-00-00'),(90,'P0012','Amoxicillin Tablets','AMOX-001',10.99,'Antibiotics','ABC Pharmaceuticals',200,1,'0000-00-00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-24  0:12:07
