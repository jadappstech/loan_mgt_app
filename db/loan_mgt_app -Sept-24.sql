-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: loan_mgt_app
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `applications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `loantype_id` varchar(32) DEFAULT NULL,
  `user_id` varchar(24) DEFAULT NULL,
  `loan_amount` float DEFAULT NULL,
  `duration` varchar(32) DEFAULT NULL,
  `employer` varchar(256) DEFAULT NULL,
  `repayment_term` varchar(45) DEFAULT NULL,
  `purpose_of_loan` varchar(128) DEFAULT NULL,
  `bank_name` int DEFAULT NULL,
  `account_name` varchar(64) DEFAULT NULL,
  `account_no` int DEFAULT NULL,
  `guarantor_name` varchar(64) DEFAULT NULL,
  `guarantor_phone` int DEFAULT NULL,
  `guarantor_email` varchar(64) DEFAULT NULL,
  `guarantor_relationship` varchar(32) DEFAULT NULL,
  `guarantor_proof_of_income` varchar(512) DEFAULT NULL,
  `guarantor_proof_of_identity` varchar(512) DEFAULT NULL,
  `guarantor_address` varchar(256) DEFAULT NULL,
  `guarantor_proof_of_address` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `docs` text,
  `amount_paid` float DEFAULT NULL,
  `interest_rate` float DEFAULT NULL,
  `application_id` varchar(45) DEFAULT NULL,
  `account_type` int DEFAULT NULL,
  `payment_type` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (1,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP19302',NULL,NULL),(2,'0','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP03729',NULL,NULL),(3,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP84629',NULL,NULL),(4,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP87412',NULL,NULL),(5,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP74401',NULL,NULL),(6,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP88408',NULL,NULL),(7,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP92424',NULL,NULL),(8,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP83201',NULL,NULL),(9,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP75432',NULL,NULL),(10,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP31298',NULL,NULL),(11,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP50406',NULL,NULL),(12,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP91401',NULL,NULL),(13,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP37806',NULL,NULL),(14,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP92408',NULL,NULL),(15,NULL,'1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP47416',NULL,NULL),(16,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',2,'Ferdinand Brennan',195,'Oprah Macdonald',1,'mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'Test document.pdf',NULL,NULL,'CENTFIN-APP97406',0,2),(17,'3','1',22,'At irure commodo sim','0','bi-weekly','Maiores a sed id ad ',1,'Claudia Bean',260,'Brooke Bryan',1,'giwazebu@mailinator.com','Architecto sit elige','./docs/Test document.pdf',NULL,'Ut quas rerum deseru','./docs/Test document.pdf',NULL,'./docs/Test document.pdf',NULL,NULL,'CENTFIN-APP57339',0,2),(18,'3','1',76,'Fugiat consequatur','0','monthly','Id accusamus hic eos',2,'Nina Perry',87,'Lucy Farmer',1,'dyzo@mailinator.com','Labore quas deleniti','docs/guarantor_proof_of_addressTest_document.pdf',NULL,'Aut hic similique si','docs/guarantor_proof_of_incomeTest_document.pdf',NULL,'docs/Malik_SampsonTest_document.pdf',NULL,NULL,'CENTFIN-APP67686',0,2),(19,NULL,'1',0,'','0',NULL,'',2,'Bell Nichols',823,'',0,'','',NULL,NULL,'',NULL,NULL,'{\"Walker Holden\":\"Test document.pdf\",\"two\":\"Test document.pdf\"}',NULL,NULL,'CENTFIN-APP77964',0,2);
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banks`
--

LOCK TABLES `banks` WRITE;
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` VALUES (1,'eco bank'),(2,'fidelity bank');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES (1,'male'),(2,'female'),(3,'choose not say');
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loantypes`
--

DROP TABLE IF EXISTS `loantypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loantypes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loantypes`
--

LOCK TABLES `loantypes` WRITE;
/*!40000 ALTER TABLE `loantypes` DISABLE KEYS */;
INSERT INTO `loantypes` VALUES (1,'payday'),(2,'salary loan'),(3,'business loan');
/*!40000 ALTER TABLE `loantypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staffs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `middlename` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(64) NOT NULL,
  `role` varchar(32) NOT NULL,
  `dept` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `gender` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffs`
--

LOCK TABLES `staffs` WRITE;
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'approved'),(2,'declined'),(3,'pending');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `middlename` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `dob` date NOT NULL,
  `proof_of_address` varchar(512) NOT NULL,
  `proof_of_identity` varchar(512) NOT NULL,
  `proof_of_emp` varchar(512) NOT NULL,
  `proof_of_income` varchar(512) NOT NULL,
  `nok_firstname` varchar(32) NOT NULL,
  `nok_surname` varchar(32) NOT NULL,
  `nok_address` varchar(128) NOT NULL,
  `nok_phone` varchar(14) NOT NULL,
  `nok_email` varchar(128) NOT NULL,
  `photo` varchar(512) NOT NULL,
  `bvn` int NOT NULL,
  `nin` int NOT NULL,
  `gender` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'james','James','Obi','Wazobia','+2349012345678','jamesobi@example.com','password','21, Sahuka Kahuta, Lugbe, FCT Abuja','carpenter','2000-08-11','docs/proof_of_address','docs/proof_of_identity','docs/proof_of_emp','docs/proof_of_income','Kelvin','Little','22, Apo Resettlement, Garki, Abuja','+2349012345678','kelvin@example.com','photos/photo1.jpg',1234567890,1234567891,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-24  9:45:08
