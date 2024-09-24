/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 8.0.30 : Database - loan_mgt_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`loan_mgt_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `loan_mgt_app`;

/*Table structure for table `applications` */

DROP TABLE IF EXISTS `applications`;

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
  `guarantor_phone` varchar(28) DEFAULT NULL,
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
  `monthly_income` int DEFAULT NULL,
  `monthly_expenses` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `applications` */

insert  into `applications`(`id`,`loantype_id`,`user_id`,`loan_amount`,`duration`,`employer`,`repayment_term`,`purpose_of_loan`,`bank_name`,`account_name`,`account_no`,`guarantor_name`,`guarantor_phone`,`guarantor_email`,`guarantor_relationship`,`guarantor_proof_of_income`,`guarantor_proof_of_identity`,`guarantor_address`,`guarantor_proof_of_address`,`status`,`docs`,`amount_paid`,`interest_rate`,`application_id`,`account_type`,`payment_type`,`monthly_income`,`monthly_expenses`) values 
(1,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP19302',NULL,NULL,NULL,NULL),
(2,'0','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP03729',NULL,NULL,NULL,NULL),
(3,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP84629',NULL,NULL,NULL,NULL),
(4,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP87412',NULL,NULL,NULL,NULL),
(5,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP74401',NULL,NULL,NULL,NULL),
(6,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP88408',NULL,NULL,NULL,NULL),
(7,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP92424',NULL,NULL,NULL,NULL),
(8,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP83201',NULL,NULL,NULL,NULL),
(9,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'',NULL,NULL,'CENTFIN-APP75432',NULL,NULL,NULL,NULL),
(10,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP31298',NULL,NULL,NULL,NULL),
(11,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP50406',NULL,NULL,NULL,NULL),
(12,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP91401',NULL,NULL,NULL,NULL),
(13,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP37806',NULL,NULL,NULL,NULL),
(14,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP92408',NULL,NULL,NULL,NULL),
(15,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP47416',NULL,NULL,NULL,NULL),
(16,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',2,'Ferdinand Brennan',195,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'Test document.pdf',NULL,NULL,'CENTFIN-APP97406',0,2,NULL,NULL),
(17,'3','1',22,'At irure commodo sim','0','bi-weekly','Maiores a sed id ad ',1,'Claudia Bean',260,'Brooke Bryan','1','giwazebu@mailinator.com','Architecto sit elige','./docs/Test document.pdf',NULL,'Ut quas rerum deseru','./docs/Test document.pdf',NULL,'./docs/Test document.pdf',NULL,NULL,'CENTFIN-APP57339',0,2,NULL,NULL),
(18,'3','1',76,'Fugiat consequatur','0','monthly','Id accusamus hic eos',2,'Nina Perry',87,'Lucy Farmer','1','dyzo@mailinator.com','Labore quas deleniti','docs/guarantor_proof_of_addressTest_document.pdf',NULL,'Aut hic similique si','docs/guarantor_proof_of_incomeTest_document.pdf',NULL,'docs/Malik_SampsonTest_document.pdf',NULL,NULL,'CENTFIN-APP67686',0,2,NULL,NULL),
(19,'1','1',0,'','0',NULL,'',2,'Bell Nichols',823,'','0','','',NULL,NULL,'',NULL,NULL,'{\"Walker Holden\":\"Test document.pdf\",\"two\":\"Test document.pdf\"}',NULL,NULL,'CENTFIN-APP77964',0,2,NULL,NULL),
(20,'1','1',2000000,'6 months','Samson Olawale','weekly','Business',1,'Kola Musa',945567789,'Oprah Macdonald','1','mekijow@mailinator.com','Cousin','Test document.pdf',NULL,'Ademola Adetokunbo, street ','Test document.pdf',NULL,'',NULL,4.22,'CENTFIN-APP19302',NULL,NULL,NULL,NULL),
(21,'0','1',17340900,'2 weeks','Kunle Adeyemi','Monthly','Personal',2,'Olawale Okon',790229108,'Adebayo Afolabi','803123456','mekijow@mailinator.com','Cousin','Test document.pdf',NULL,'No.15 Ikotun Road, Egbeda, Lagos','Test document.pdf',NULL,'',NULL,4.19,'CENTFIN-APP03729',NULL,NULL,NULL,NULL),
(22,'1','1',17340900,'2 weeks','Kunle Adeyemi','Monthly','Personal',2,'Olawale Okon',902291086,'Adebayo Afolabi','2147483647','tolu.akinola@example.com','Cooperative','Test document.pdf',NULL,'No.15 Ikotun Road, Egbeda, Lagos','Test document.pdf',NULL,'',1102750,4.19,'CENTFIN-APP84629',NULL,NULL,NULL,NULL),
(23,'1','1',18525300,'10 weeks','Adebayo Afolabi','Weekly','Business',1,'Bukola Ajayi',747626707,'Kunle Adeyemi','823456789','kunle.adeyemi@outlook.com','Boss','Test document.pdf',NULL,'No.7 Herbert Macaulay Way, Yaba, Lagos','Test document.pdf',NULL,'',3468570,3.7,'CENTFIN-APP87412',NULL,NULL,NULL,NULL),
(24,'1','1',18525300,'10 weeks','Okoye Anderson','Monthly','Travel',2,'Femi Aluko\n',710995364,'Gbenga Ojo','801122334','gbenga.ojo@gmail.com','Cooperative','Test document.pdf',NULL,'No.6 Trans Amadi Industrial Layout, Port Harcourt, Rivers State','Test document.pdf',NULL,'',8165720,4.91,'CENTFIN-APP74401',NULL,NULL,NULL,NULL),
(25,'1','1',8904350,'14 weeks','Gbenga Ojo','bi-weekly','Business',1,' Chinedu Okeke',66693802,'Olawale Okon','802233445','olawale.okon@yahoo.com','Father','Test document.pdf',NULL,'Plot 4 Gwarimpa Estate, Abuja','Test document.pdf',NULL,'',1583970,3.48,'CENTFIN-APP88408',NULL,NULL,NULL,NULL),
(26,'1','1',15873400,'13 weeks','Musa Christopher','weekly','Medical',2,'Tolu Akinola',9881238,'Tolu Akinola','905566778','tolu.akinola@outlook.com','Mother','Test document.pdf',NULL,'No.16 Agbara Industrial Estate, Ogun State','Test document.pdf',NULL,'',6646210,2.62,'CENTFIN-APP92424',NULL,NULL,NULL,NULL),
(27,'1','1',11305600,'10 weeks','Femi Aluko','Bi-weekly',' Travel',2,' Ifeoma Obi',599661550,' Ifeoma Obi','908474656','gbenga.ojo@yahoo.com','Cooperative','Test document.pdf',NULL,'No.3 Sango Ota, Ogun State','Test document.pdf',NULL,'',5039040,2.68,'CENTFIN-APP83201',NULL,NULL,NULL,NULL),
(28,'1','1',16695600,' 20 weeks',' Chinedu Okeke','Monthly','Travel',2,'Okoye Clement',240661550,'Yemi Balogun','806677889','yemi.balogun@gmail.com',' Father','Test document.pdf',NULL,'Plot 4 Gwarimpa Estate, Abuja','Test document.pdf',NULL,'',8212750,2.56,'CENTFIN-APP75432',NULL,NULL,NULL,NULL),
(29,'1','1',7469520,'13 weeks','Amaka Eze','Monthly','Business',NULL,'Bisi Okoro',383914004,'Kehinde Williams','812233445','balogunbakare@outlook.com','Cousin','Test document.pdf',NULL,'Plot 4 Gwarimpa Estate, Abuja','Test document.pdf',NULL,NULL,4842290,4.28,'CENTFIN-APP31298',NULL,NULL,NULL,NULL),
(30,'1','1',8774240,'12 weeks','Patrick Shubomi','weekly',' Business',NULL,'Catherine Pual',50795629,'Kaseem Prince','803344556','amaka.eze@gmail.com',' Boss','Test document.pdf',NULL,'Idumota phase 3, Alimosho Lagos','Test document.pdf',NULL,NULL,8183730,4.11,'CENTFIN-APP50406',NULL,NULL,NULL,NULL),
(31,'1','1',3421550,'11 weeks','Ngozi Chukwuma','weekly','Medical',NULL,'Samuel Adebayo',140765821,'Ayo Okafor','801345567','ayo.okafor@outlook.com','Mother','Test document.pdf',NULL,'No.23 New Market Road, Onitsha, Anambra','Test document.pdf',NULL,NULL,947652,3.52,'CENTFIN-APP91401',NULL,NULL,NULL,NULL),
(32,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP37806',NULL,NULL,NULL,NULL),
(33,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP92408',NULL,NULL,NULL,NULL),
(34,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',NULL,NULL,NULL,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,NULL,NULL,NULL,'CENTFIN-APP47416',NULL,NULL,NULL,NULL),
(35,'1','1',99,'In odit dolores omni','0','weekly','Omnis aute incididun',2,'Ferdinand Brennan',195,'Oprah Macdonald','1','mekijow@mailinator.com','Possimus rerum est','Test document.pdf',NULL,'Aut qui adipisicing ','Test document.pdf',NULL,'Test document.pdf',NULL,NULL,'CENTFIN-APP97406',0,2,NULL,NULL),
(36,'2',NULL,40,NULL,'Jessica Elliott','12','Sit veritatis odit ',2,NULL,330,'Sybill Mccall','+1 (646) 732-2656','pabykak@mailinator.com','Ipsum voluptas magn','../uploads/WhatsApp_Image_2024-08-30_at_06.29.02_36713209.jpg','../uploads/0_wE3Cme0OKVmx9X6S.jpg','Qui quia aliqua Pro','../uploads/law-attorney-100682607-primary.idge_.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,510,9);

/*Table structure for table `banks` */

DROP TABLE IF EXISTS `banks`;

CREATE TABLE `banks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `banks` */

insert  into `banks`(`id`,`name`) values 
(1,'eco bank'),
(2,'fidelity bank');

/*Table structure for table `gender` */

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `gender` */

insert  into `gender`(`id`,`name`) values 
(1,'male'),
(2,'female'),
(3,'choose not say');

/*Table structure for table `loantypes` */

DROP TABLE IF EXISTS `loantypes`;

CREATE TABLE `loantypes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `loantypes` */

insert  into `loantypes`(`id`,`name`) values 
(1,'payday'),
(2,'salary loan'),
(3,'business loan');

/*Table structure for table `staffs` */

DROP TABLE IF EXISTS `staffs`;

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

/*Data for the table `staffs` */

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `status` */

insert  into `status`(`id`,`name`) values 
(1,'approved'),
(2,'declined'),
(3,'pending');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`) values 
(1,'admin');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `middlename` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `phone` varchar(28) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `profession` varchar(128) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `proof_of_address` varchar(512) DEFAULT NULL,
  `proof_of_identity` varchar(512) DEFAULT NULL,
  `proof_of_emp` varchar(512) DEFAULT NULL,
  `proof_of_income` varchar(512) DEFAULT NULL,
  `nok_firstname` varchar(32) DEFAULT NULL,
  `nok_surname` varchar(32) DEFAULT NULL,
  `nok_address` varchar(128) DEFAULT NULL,
  `nok_phone` varchar(28) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nok_email` varchar(128) DEFAULT NULL,
  `photo` varchar(512) DEFAULT NULL,
  `bvn` int DEFAULT NULL,
  `nin` int DEFAULT NULL,
  `gender` int DEFAULT NULL,
  `emp_status` varchar(128) DEFAULT NULL,
  `income_type` varchar(128) DEFAULT NULL,
  `emp_type` varchar(128) DEFAULT NULL,
  `emp_name` varchar(128) DEFAULT NULL,
  `monthly_income` decimal(19,2) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `lga` varchar(128) DEFAULT NULL,
  `nok_relationship` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`firstname`,`middlename`,`lastname`,`phone`,`email`,`password`,`address`,`profession`,`dob`,`proof_of_address`,`proof_of_identity`,`proof_of_emp`,`proof_of_income`,`nok_firstname`,`nok_surname`,`nok_address`,`nok_phone`,`nok_email`,`photo`,`bvn`,`nin`,`gender`,`emp_status`,`income_type`,`emp_type`,`emp_name`,`monthly_income`,`state`,`lga`,`nok_relationship`) values 
(2,NULL,'Kirk','Lavinia','Lacota','124','nefibun@mailinator.com','Quia alias qui volup','Magna quod ad cumque',NULL,'1990-11-11',NULL,'../uploads/AdobeStock_54132491.jpeg',NULL,NULL,'Germane','Kirestin','Aut eum duis enim no','845','86','../uploads/user11.jpg',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mother'),
(3,NULL,'Sybill','Maryam','Michelle','+1 (864) 101-9676','cyfofa@mailinator.com','Soluta ut sint ex et','Voluptas rerum eius ',NULL,'1996-09-05',NULL,'../uploads/user12.jpg',NULL,NULL,'Hedley','Perry','Incidunt dolore aut','+1 (475) 176-3021','736','../uploads/user12.jpg',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Father');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
