-- MariaDB dump 10.19  Distrib 10.5.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: Projet_Erebor
-- ------------------------------------------------------
-- Server version	10.5.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acces`
--

DROP TABLE IF EXISTS `acces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acces` (
  `idUser` int(11) NOT NULL,
  `idEspace` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`idUser`,`idEspace`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acces`
--

LOCK TABLES `acces` WRITE;
/*!40000 ALTER TABLE `acces` DISABLE KEYS */;
INSERT INTO `acces` VALUES (1,1,'Gestionnaire'),(1,2,'Gestionnaire'),(1,3,'Gestionnaire'),(1,4,'Gestionnaire'),(1,10,'Gestionnaire'),(1,32,'Gestionnaire'),(2,1,'Lecture'),(3,1,'Ecriture'),(8,1,'Lecture'),(8,8,'Lecture'),(8,16,'Lecture'),(9,1,'Lecture'),(9,9,'Lecture'),(10,2,'Lecture'),(10,5,'Lecture'),(10,6,'Gestionnaire'),(10,13,'Gestionnaire'),(11,1,'Lecture'),(11,3,'Lecture'),(11,10,'Gestionnaire'),(11,14,'Lecture'),(11,15,'Gestionnaire'),(11,25,'Lecture'),(12,1,'Lecture'),(12,5,'Gestionnaire'),(12,8,'Gestionnaire'),(12,11,'Lecture'),(12,12,'Gestionnaire'),(12,16,'Lecture'),(12,17,'Gestionnaire'),(13,9,'Lecture'),(14,1,'Lecture'),(14,2,'Lecture'),(14,4,'Gestionnaire'),(14,5,'Lecture'),(15,4,'Lecture'),(15,10,'Lecture'),(15,11,'Gestionnaire'),(16,2,'Lecture'),(16,7,'Gestionnaire'),(16,13,'Lecture'),(17,2,'Gestionnaire'),(17,12,'Gestionnaire'),(17,15,'Lecture'),(18,8,'Lecture'),(18,17,'Lecture'),(19,13,'Lecture'),(20,2,'Lecture'),(20,6,'Lecture'),(20,10,'Gestionnaire'),(20,11,'Lecture'),(20,12,'Lecture'),(20,13,'Lecture'),(20,14,'Gestionnaire'),(21,4,'Gestionnaire'),(21,6,'Gestionnaire'),(21,10,'Gestionnaire'),(22,5,'Gestionnaire'),(22,7,'Gestionnaire'),(22,11,'Gestionnaire'),(22,16,'Gestionnaire'),(22,18,'Gestionnaire'),(25,15,'Gestionnaire'),(26,6,'Gestionnaire'),(27,4,'Gestionnaire'),(27,13,'Lecture'),(28,2,'Gestionnaire'),(28,12,'Lecture'),(29,12,'Lecture'),(30,2,'Gestionnaire'),(30,6,'Lecture'),(30,12,'Lecture'),(31,4,'Gestionnaire'),(31,7,'Lecture'),(31,10,'Gestionnaire'),(31,13,'Gestionnaire'),(31,17,'Lecture'),(32,10,'Gestionnaire'),(32,14,'Lecture'),(33,2,'Gestionnaire'),(33,5,'Gestionnaire'),(33,7,'Lecture'),(33,9,'Lecture'),(33,11,'Gestionnaire'),(33,12,'Gestionnaire'),(34,9,'Gestionnaire'),(34,14,'Gestionnaire'),(35,6,'Gestionnaire'),(35,9,'Gestionnaire'),(35,17,'Lecture'),(36,6,'Lecture'),(36,8,'Lecture'),(37,13,'Lecture'),(38,1,'Lecture'),(39,9,'Gestionnaire'),(39,16,'Lecture'),(39,17,'Gestionnaire'),(39,18,'Lecture'),(40,1,'Lecture'),(40,5,'Lecture'),(40,12,'Gestionnaire'),(41,12,'Gestionnaire'),(41,14,'Gestionnaire'),(42,12,'Lecture'),(42,13,'Lecture'),(44,2,'Gestionnaire'),(44,9,'Gestionnaire'),(44,13,'Gestionnaire'),(44,14,'Gestionnaire'),(44,15,'Gestionnaire'),(45,4,'Gestionnaire'),(45,13,'Gestionnaire'),(45,15,'Lecture'),(46,2,'Gestionnaire'),(46,4,'Gestionnaire'),(46,5,'Gestionnaire'),(46,13,'Gestionnaire'),(46,14,'Lecture'),(46,15,'Lecture'),(46,16,'Gestionnaire'),(47,2,'Gestionnaire'),(47,9,'Gestionnaire'),(47,15,'Gestionnaire'),(48,7,'Lecture'),(48,15,'Gestionnaire'),(49,3,'Gestionnaire'),(49,12,'Gestionnaire'),(50,16,'Gestionnaire'),(50,17,'Gestionnaire'),(51,12,'Lecture'),(51,17,'Gestionnaire'),(52,4,'Gestionnaire'),(52,6,'Gestionnaire'),(52,8,'Gestionnaire'),(52,12,'Lecture'),(53,4,'Lecture'),(53,11,'Lecture'),(54,3,'Lecture'),(54,9,'Lecture'),(54,12,'Lecture'),(54,13,'Lecture'),(54,17,'Lecture'),(55,10,'Gestionnaire'),(56,1,'Gestionnaire'),(57,4,'Gestionnaire'),(57,5,'Gestionnaire'),(57,6,'Lecture'),(57,7,'Gestionnaire'),(57,13,'Lecture'),(58,9,'Gestionnaire');
/*!40000 ALTER TABLE `acces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demande_espace`
--

DROP TABLE IF EXISTS `demande_espace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demande_espace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demandeur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `quotaMax` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demande_espace`
--

LOCK TABLES `demande_espace` WRITE;
/*!40000 ALTER TABLE `demande_espace` DISABLE KEYS */;
/*!40000 ALTER TABLE `demande_espace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demande_modif_espace`
--

DROP TABLE IF EXISTS `demande_modif_espace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demande_modif_espace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demandeur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `quotaMax` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Anciennom` varchar(50) NOT NULL,
  `AncienquotaMax` float NOT NULL,
  `idEspace` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demande_modif_espace`
--

LOCK TABLES `demande_modif_espace` WRITE;
/*!40000 ALTER TABLE `demande_modif_espace` DISABLE KEYS */;
/*!40000 ALTER TABLE `demande_modif_espace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `espace`
--

DROP TABLE IF EXISTS `espace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `espace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `quota` float NOT NULL,
  `quotaMax` float NOT NULL,
  `nbFiles` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `espace`
--

LOCK TABLES `espace` WRITE;
/*!40000 ALTER TABLE `espace` DISABLE KEYS */;
INSERT INTO `espace` VALUES (1,'Data',0,1000,2),(2,'Trash',0,1000,0),(3,'Game',0,500000,0),(4,'Dwarf',3000,3000,7),(5,'Smaug',100,500,0),(6,'Mon espace cloud',0,100000,0),(7,'Alexandre',0,10,0),(8,'Images',0,1000,0),(9,'Musiques',0,100000,0),(10,'Trésor',0,999,0),(11,'DossierPaginate',0,11,0),(12,'CeluiDeTrop',0,69001,0),(13,'Thierry',0,566,0),(14,'Gaston',0,789,0),(15,'Math',0,1000,0),(16,'SLAM',0,11,0),(17,'Singe',0,10,0),(32,'AjoutDeDossier',0,10000,0);
/*!40000 ALTER TABLE `espace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fichier`
--

DROP TABLE IF EXISTS `fichier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fichier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `taille` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `idEspace` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fichier`
--

LOCK TABLES `fichier` WRITE;
/*!40000 ALTER TABLE `fichier` DISABLE KEYS */;
INSERT INTO `fichier` VALUES (1,'Test.test',100,'2022-12-18 00:00:00',1),(2,'Nain.pdf',100,'2022-12-18 00:00:00',4),(3,'Elf.pdf',100,'2022-12-18 00:00:00',4),(4,'Homme.pdf',100,'2022-12-18 00:00:00',4),(5,'Hobbit.pdf',100,'2022-12-18 00:00:00',4),(6,'Orc.pdf',100,'2022-12-18 00:00:00',4),(7,'Dragon.pdf',300,'2022-12-18 00:00:00',4),(8,'Nazgul.pdf',150,'2022-12-18 00:00:00',4),(10,'gastonlepompier',29424,'2023-01-13 14:46:33',12),(14,'gastonlepompier',0.029424,'2023-01-13 15:29:18',12),(15,'gastonlepompier',0.029424,'2023-01-13 15:30:45',29),(16,'dump-visite-202212211703.sql',0.005377,'2023-01-13 15:58:49',26),(17,'dump-visite-202212211703.sql',0.005377,'2023-01-13 15:59:35',25),(18,'dump-Erebor-202212161252.sql',0.005509,'2023-01-13 16:01:26',22),(19,'dump-visite-202212211703.sql',0.005377,'2023-01-13 16:02:52',21),(20,'mariadb-java-client-3.1.0(1).jar',0.636446,'2023-01-13 16:11:17',11),(26,'acces.sql',0.014624,'2023-01-16 15:52:31',1),(27,'casernes.sql',0.001137,'2023-01-16 16:31:00',1),(28,'acces.sql',0.014624,'2023-01-17 15:39:18',30),(29,'user-plus.svg',0.000414,'2023-01-17 16:17:55',31),(30,'rendezvous(1).sql',0.014796,'2023-01-17 16:18:20',31),(31,'user-plus.svg',0.000414,'2023-01-18 10:57:20',2),(32,'rendezvous(1).sql',0.014796,'2023-01-18 11:16:06',1),(33,'user.sql',0.032759,'2023-01-18 15:51:53',1),(34,'rendezvous(1).sql',0.014796,'2023-01-18 15:55:18',1),(36,'medicament.sql',0.014832,'2023-01-19 13:40:04',1),(37,'examslam.jar',0.014071,'2023-01-19 13:40:43',1),(38,'ExamJava_HUBERT.7z',0.01412,'2023-01-19 13:41:38',1);
/*!40000 ALTER TABLE `fichier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historique`
--

DROP TABLE IF EXISTS `historique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `info` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historique`
--

LOCK TABLES `historique` WRITE;
/*!40000 ALTER TABLE `historique` DISABLE KEYS */;
INSERT INTO `historique` VALUES (1,'EDIT QUOTA','2023-01-12 14:27:37','10');
/*!40000 ALTER TABLE `historique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_01_11_150418_create_permission_tables',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(1,'App\\Models\\User',2),(1,'App\\Models\\User',3),(2,'App\\Models\\User',8),(2,'App\\Models\\User',9),(2,'App\\Models\\User',10),(2,'App\\Models\\User',11),(2,'App\\Models\\User',12),(2,'App\\Models\\User',13),(2,'App\\Models\\User',14),(2,'App\\Models\\User',15),(2,'App\\Models\\User',16),(2,'App\\Models\\User',17),(2,'App\\Models\\User',18),(2,'App\\Models\\User',19),(2,'App\\Models\\User',20),(2,'App\\Models\\User',21),(2,'App\\Models\\User',22),(2,'App\\Models\\User',23),(2,'App\\Models\\User',24),(2,'App\\Models\\User',25),(2,'App\\Models\\User',26),(2,'App\\Models\\User',27),(2,'App\\Models\\User',28),(2,'App\\Models\\User',29),(2,'App\\Models\\User',30),(2,'App\\Models\\User',31),(2,'App\\Models\\User',32),(2,'App\\Models\\User',33),(2,'App\\Models\\User',34),(2,'App\\Models\\User',35),(2,'App\\Models\\User',36),(2,'App\\Models\\User',37),(2,'App\\Models\\User',38),(2,'App\\Models\\User',39),(2,'App\\Models\\User',40),(2,'App\\Models\\User',41),(2,'App\\Models\\User',42),(2,'App\\Models\\User',43),(2,'App\\Models\\User',44),(2,'App\\Models\\User',45),(2,'App\\Models\\User',46),(2,'App\\Models\\User',47),(2,'App\\Models\\User',48),(2,'App\\Models\\User',49),(2,'App\\Models\\User',50),(2,'App\\Models\\User',51),(2,'App\\Models\\User',52),(2,'App\\Models\\User',53),(2,'App\\Models\\User',54),(2,'App\\Models\\User',55),(2,'App\\Models\\User',56),(2,'App\\Models\\User',57),(2,'App\\Models\\User',58),(2,'App\\Models\\User',59);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2023-01-11 14:37:28','2023-01-11 14:37:28'),(2,'user','web','2023-01-11 14:38:08','2023-01-11 14:38:08');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Thorin','Thorin@gmail.com',NULL,'$2y$10$LAzfee82nvyh2yuifqynhOHJ1I8k76oqEwX7EauIPTxlkw53lTcLi',NULL,'2023-01-09 14:36:43','2023-01-09 14:36:43'),(2,'Bilbon','bilbon@gmail.com',NULL,'$2y$10$Im84wSg8k0TfeQ5JtvssduYcvtfTe/NTW3BWAs4KZYtCVUMgcnkfq',NULL,'2023-01-09 14:37:39','2023-01-09 14:37:39'),(3,'Fili','Fili@gmail.com',NULL,'$2y$10$phSptbteHyfLuir7WQPHzucNNDJdNy0AGoKrF843RjyXpvRMG4.Vi',NULL,'2023-01-09 14:40:28','2023-01-09 14:40:28'),(8,'unUser','user@gmail.com',NULL,'$2y$10$EEFetYBI7r3ZJ312q7KwTOg1GIUAaKd9Zp.C3vEsG.pzlNSwYdKrW',NULL,'2023-01-11 14:46:00','2023-01-11 14:46:00'),(9,'Gaston','gaston@gmail.com',NULL,'$2y$10$b1jshPUBekmsszopTYZQjuGLB8/2O7Bxh69SN1iXRlvvZjFdLpcfm',NULL,'2023-01-16 11:48:49','2023-01-16 11:48:49'),(10,'Thierry','thierry@gmail.com',NULL,'$2y$10$CayNcYyW/HkuDDZrM/DjduGTQ3JUNvE1qxUkcGCNnY.t8ar5n/18C',NULL,'2023-01-16 11:49:12','2023-01-16 11:49:12'),(11,'Alexandre','alexandre@gmail.com',NULL,'$2y$10$YEHiStSwrsgjxsUWf8UWxukZSxm.KFsHByRduFMvNrtNN7RoiPZyq',NULL,'2023-01-16 11:49:29','2023-01-16 11:49:29'),(12,'Nathan','nathan@gmail.com',NULL,'$2y$10$9pHS2Uti/PTk4CH2GXmZ8.qEVWnkkcAaOIrCf79/5BmZe/BGGEmRW',NULL,'2023-01-16 11:50:15','2023-01-16 11:50:15'),(13,'Ophelie','ophelie@gmail.com',NULL,'$2y$10$dyQt8mXUJQeD4TW3UnwutOOi5dZly/9pmvJCg85.urKFHQsAfkYeS',NULL,'2023-01-16 11:50:34','2023-01-16 11:50:34'),(14,'Malik','malik@gmail.com',NULL,'$2y$10$mGLdk3EsclDZQ2BWd3oqy.l/smg1kPJ0fGKlWAsxQPotL1AYwk8Be',NULL,'2023-01-16 11:50:56','2023-01-16 11:50:56'),(15,'Guillaume','guillaume@gmail.com',NULL,'$2y$10$.Vy9cR3d9XQiPk8Dz6Ab3OMv2WWLWfFKiXrQ0Ob/A8jkWf9yzUs7u',NULL,'2023-01-16 11:55:21','2023-01-16 11:55:21'),(16,'Théotime','théotime@gmail.com',NULL,'$2y$10$Ru5GHWifGUxTS2oIRb/uNuOQG6PPqryfw2l6i4KsKtqywvYWNerSu',NULL,'2023-01-16 11:55:38','2023-01-16 11:55:38'),(17,'Antoine','antoine@gmail.com',NULL,'$2y$10$DBlvrAerm3y71Forjl8To.0.THwiOcz2TtEHblf9O8rVC5R7HjxO6',NULL,'2023-01-16 11:57:28','2023-01-16 11:57:28'),(18,'Emilien','emilien@gmail.com',NULL,'$2y$10$/GOqkIdzD8VeK4b2OyJF7.bmmHWYWCXDK6WDaJEfKGbxS7i1qx16u',NULL,'2023-01-16 11:57:48','2023-01-16 11:57:48'),(19,'Dorian','dorian@gmail.com',NULL,'$2y$10$YJVq6D0IF7zOtqKwyTfBq.MJ4.NYmkPR4PnbyydbN8mbN.msQJxS6',NULL,'2023-01-16 11:58:01','2023-01-16 11:58:01'),(20,'Hugo','hugo@gmail.com',NULL,'$2y$10$t9Rw8utZzMD7D7NByh8WjOFyY7iutcoI2fmjtCFHmRg/aQvCb4f1a',NULL,'2023-01-16 11:58:11','2023-01-16 11:58:11'),(21,'Bob','bob@gmail.com',NULL,'$2y$10$sg0U11OdjOOlwW25aPUNeecF0H/ky1jvGjyFhKgz516.mgk7S7OHO',NULL,'2023-01-16 11:58:18','2023-01-16 11:58:18'),(22,'Sophie','sophie@gmail.com',NULL,'$2y$10$eXXk4HDu.Y.fG1owZ9UsHeTcFcU6MfrQazu5yrqeb7xNCAyKZuppC',NULL,'2023-01-16 11:58:38','2023-01-16 11:58:38'),(23,'Lilian','lilian@gmail.com',NULL,'$2y$10$uAqF62s94E3nwPshmMFUwOQsL6ksTfo4h3IBffhSmeZ7RwAYY89J6',NULL,'2023-01-16 11:58:49','2023-01-16 11:58:49'),(24,'Maxime','maxime@gmail.com',NULL,'$2y$10$Om1cQLeeKt6a7eUcZivzKOxDGw/LgqWbNWGd4.QgIRpCcswfQtBbG',NULL,'2023-01-16 11:59:02','2023-01-16 11:59:02'),(25,'Pierre','pierre@gmail.com',NULL,'$2y$10$7GSrZct9xnp/FaGZhg174.5t/.xQXfEy/SqsYbnloeQyiXDzN331G',NULL,'2023-01-16 11:59:11','2023-01-16 11:59:11'),(26,'Paul','paul@gmail.com',NULL,'$2y$10$MljzenRnG858vgnaGNiYveRB50.Kha078CKpKYVxKPR.nM0HXtK5.',NULL,'2023-01-16 11:59:20','2023-01-16 11:59:20'),(27,'Kian','kian@gmail.com',NULL,'$2y$10$bBCsvllOS0WQZp4TRO3deuV3kzxTrD4KUsCYnM504zDqrKg4zl6.S',NULL,'2023-01-16 11:59:32','2023-01-16 11:59:32'),(28,'Corentin','corentin@gmail.com',NULL,'$2y$10$k1O8zgmHEiPufcyr8hVkuO.6bm7rGTUPqNACRzdm.8cHj6VQouCxu',NULL,'2023-01-16 11:59:45','2023-01-16 11:59:45'),(29,'Anthon','anthon@gmail.com',NULL,'$2y$10$FgBBOGy1nW3o6AVlSW/LheIo6wOtBKLWeTJk..Z75kmewhBxNN4BC',NULL,'2023-01-16 12:00:21','2023-01-16 12:00:21'),(30,'Charles','charles@gmail.com',NULL,'$2y$10$3jFQiT1GWx3lVedETArBNe0WWA1aMzxAdx10.hGlVetsZ44qGOi3C',NULL,'2023-01-16 12:00:31','2023-01-16 12:00:31'),(31,'Elena','elena@gmail.com',NULL,'$2y$10$4eF2Ei/ivW2EkwoCZ1.7CebfOeZEbcD/A6dbuFhDpU95DbxiMehey',NULL,'2023-01-16 12:00:40','2023-01-16 12:00:40'),(32,'Annissa','annissa@gmail.com',NULL,'$2y$10$q6rE4ioOwGxvL2c.HSO0q.32pWqORrg1zjuqToldbnR5t0ZtMRv8C',NULL,'2023-01-16 12:00:56','2023-01-16 12:00:56'),(33,'Gabriel','gabriel@gmail.com',NULL,'$2y$10$Qdskpt2.Q2pjVad8j6FGu.BdKm3NOvseAKMW3RRSPTgHowIPYwrUe',NULL,'2023-01-16 12:01:15','2023-01-16 12:01:15'),(34,'Charlie','charlie@gmail.com',NULL,'$2y$10$1uu94/WfJeWnjCClOuIbPOULttwhGVTv65En7OuWYSX1JxH4im0xy',NULL,'2023-01-16 12:03:32','2023-01-16 12:03:32'),(35,'Louis','louis@gmail.com',NULL,'$2y$10$PmvmwhIvlKJkAf4XnY/iHeSKOzic7dvYOCaoM66nUdXwPgpVzSuZG',NULL,'2023-01-16 12:03:40','2023-01-16 12:03:40'),(36,'Adrien','adrien@gmail.com',NULL,'$2y$10$KNpWVS6oXxP/JRxiojkXHeyIgyhHe//rTGS8FPJePjGPxXt1kXs7q',NULL,'2023-01-16 12:03:54','2023-01-16 12:03:54'),(37,'Mathis','mathis@gmail.com',NULL,'$2y$10$XnvmeNg/xwsZupr5uLer4.lHxtsCmiZ64uazbKPnsnXMWxwICeq/e',NULL,'2023-01-16 12:07:34','2023-01-16 12:07:34'),(38,'Tom','tom@gmail.com',NULL,'$2y$10$Ts8l9KvDQWreyRl13ALL..v6QROm5Rx6SRBRW7vxQr9XsbZAVKqmK',NULL,'2023-01-16 12:07:54','2023-01-16 12:07:54'),(39,'Charlotte','charlotte@gmail.com',NULL,'$2y$10$/.RLX53Ki1MbRHK7WCRMOOffcGm4a7hKbCaAAnTRzw0TVY2U2iqea',NULL,'2023-01-16 12:08:10','2023-01-16 12:08:10'),(40,'Paola','paola@gmail.com',NULL,'$2y$10$AVWqoHmSQcQnjlrZBQU//OHcgAIz7dhBg7XQbmL7KhHdXG3.nlOFy',NULL,'2023-01-16 12:08:31','2023-01-16 12:08:31'),(41,'Capucine','capucine@gmail.com',NULL,'$2y$10$JgtpdmbtNvw3glUPh9y52.LgSx51dhN9hSlha6ugHZ8iq4hxhrYOm',NULL,'2023-01-16 12:08:42','2023-01-16 12:08:42'),(42,'Julie','julie@gmail.com',NULL,'$2y$10$2zNKC0f6sKjbNYaO2kzwuu5vyaJySG1p03FMNgr9qYtJ7A20Yu82q',NULL,'2023-01-16 12:08:52','2023-01-16 12:08:52'),(43,'Lila','lila@gmail.com',NULL,'$2y$10$cBj96umvQJ2Fuicfe3B.NuZaTokp3On0EjttKIwxgwaB/yrBBGQMO',NULL,'2023-01-16 12:09:14','2023-01-16 12:09:14'),(44,'Edith','edith@gmail.com',NULL,'$2y$10$iFi5qrHa9y/HZaNFkQ8AseeYESL0gqCwH.l1fyIkoqKC9Y02R95.O',NULL,'2023-01-16 12:10:20','2023-01-16 12:10:20'),(45,'Félicie','félicie@gmail.com',NULL,'$2y$10$uSnT71Hhm/CC2rWfG2MFau4NJUotvEfSizcKZmazytUxhLGV3yOV.',NULL,'2023-01-16 12:10:38','2023-01-16 12:10:38'),(46,'Sacha','sacha@gmail.com',NULL,'$2y$10$oC9bQXgTUbUr299GnA5imu5t8xER4wxyZZrfRJ27HcgCwHWekOmp6',NULL,'2023-01-16 12:10:51','2023-01-16 12:10:51'),(47,'Yoshini','yoshini@gmail.com',NULL,'$2y$10$YK.iSq8WUhK5R0IiIa70M.J5KftyxKTqFRxEMlix7tDpOKZw7iTTC',NULL,'2023-01-16 12:11:39','2023-01-16 12:11:39'),(48,'Lina','lina@gmail.com',NULL,'$2y$10$kDDLkk2Xmbul/qlvOGiqbeDSnOjQG3d1J6FDY3irrkeHsiTP3DPsi',NULL,'2023-01-16 12:12:27','2023-01-16 12:12:27'),(49,'Germain','germain@gmail.com',NULL,'$2y$10$qtSlKTtFK6Nt9PIJ3ejjW.L0Q1..UVzhCAHNP0UqJnRuGBvcH2t5e',NULL,'2023-01-16 12:12:38','2023-01-16 12:12:38'),(50,'Zian','zian@gmail.com',NULL,'$2y$10$a9kOpsENgdi0ex.QbxWWROGU0SirM7FprqUa/b5AhMTkMV7Vh724a',NULL,'2023-01-16 12:12:49','2023-01-16 12:12:49'),(51,'Satan','satan@gmail.com',NULL,'$2y$10$EAXyYJmWauJAyy5wqi2IIOrX191e3DxTb5osOgC2.a6V7GV3nNeHq',NULL,'2023-01-16 12:13:13','2023-01-16 12:13:13'),(52,'Mathieu','mathieu@gmail.com',NULL,'$2y$10$sAmvRu222B30si5y0aYpKu0IznqAdZ3zq5Xpnu1Hx4.xykhMvaY2i',NULL,'2023-01-16 12:13:41','2023-01-16 12:13:41'),(53,'Vanessa','vanessa@gmail.com',NULL,'$2y$10$X1l0pZnkxYEtcZmhGo.A4.9KdhF01sWA9vRuc6rocCZW56/q52CJm',NULL,'2023-01-16 12:13:50','2023-01-16 12:13:50'),(54,'Jules','jules@gmail.com',NULL,'$2y$10$DPr8hRjscveluhF4VESXOul9jFGZAchchhQYefLeA4PZ4QVud/rry',NULL,'2023-01-16 12:14:19','2023-01-16 12:14:19'),(55,'Leanne','leanne@gmail.com',NULL,'$2y$10$WJLxI9xTBr04D.v5wjycReNY7irGNHzV4/hP5HEV4uJpF2nBUr8vK',NULL,'2023-01-16 12:14:30','2023-01-16 12:14:30'),(56,'Chloe','chloe@gmail.com',NULL,'$2y$10$9xEoxwMQgY7.jf1TLPol.OUMdQH0rU3Cn/Az3j8GMNVgxdnSZrTgC',NULL,'2023-01-16 12:14:37','2023-01-16 12:14:37'),(57,'Baptiste','baptiste@gmail.com',NULL,'$2y$10$l8pfz0IFda8lrFDpb36NceQpLAB8vdN2/289UTH4yAapLgb1hixiq',NULL,'2023-01-16 12:14:51','2023-01-16 12:14:51'),(58,'Léa','léa@gmail.com',NULL,'$2y$10$Lrl93866Ae7GBmfsm6IRp.t1cCuEJM5Epl8EZJOjTcty7iXkT/WLa',NULL,'2023-01-16 12:14:58','2023-01-16 12:14:58'),(59,'Marina','marina@gmail.com',NULL,'$2y$10$h8lgp4WQCqrH26Ofbe8lle3o25b5PY8kGdptzbLX7keoIU2u7gYTq',NULL,'2023-01-16 12:15:08','2023-01-16 12:15:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'Projet_Erebor'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-19 16:13:20
