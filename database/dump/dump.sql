CREATE DATABASE  IF NOT EXISTS `laravel-php` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravel-php`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel-php
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `admin_mails`
--

DROP TABLE IF EXISTS `admin_mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_mails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_mails`
--

LOCK TABLES `admin_mails` WRITE;
/*!40000 ALTER TABLE `admin_mails` DISABLE KEYS */;
INSERT INTO `admin_mails` VALUES (4,'anisov.project@gmail.com','2018-04-19 20:54:56','2018-04-19 20:54:56');
/*!40000 ALTER TABLE `admin_mails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'Action','Occaecati a eius quod ea qui. Similique sit praesentium eveniet sit maiores et. Iure ratione quia et quis molestiae voluptas. Fugit tempora id saepe dolor et temporibus excepturi laboriosam.','2018-04-17 09:13:59','2018-04-20 12:32:42','leonor_jacobi_iv'),(4,'RPG','Impedit rerum officiis pariatur expedita fugiat atque. Cum iusto qui laudantium sint sed nobis voluptate. Magni et sit consequatur quis ut.','2018-04-17 09:13:59','2018-04-20 12:12:17','berry_effertz'),(5,'Квесты','Esse reprehenderit enim et illo suscipit consequatur. Quam eum minima tempore quos. Fugit quos error aliquam occaecati necessitatibus ut sit qui. Repudiandae qui unde nostrum eos rem quae dolorem.','2018-04-17 09:13:59','2018-04-20 12:13:08','darwin_cartwright'),(6,'Онлайн игры','Libero hic ut in odio. Ducimus qui natus maxime aliquam. Rerum id molestias quis est voluptate provident. Aut ullam accusamus nihil est.','2018-04-17 09:13:59','2018-04-20 12:13:31','sylvan_simonis'),(7,'Стратегии','Pariatur non voluptatum facere aliquid. Rerum dicta quasi magni sed sunt sint. Sed ipsa veniam eligendi fugiat est repellendus nemo.','2018-04-17 09:13:59','2018-04-20 12:13:39','monroe_bashirian'),(8,'horror','Placeat corporis sed eligendi commodi vel mollitia. Optio iusto aut facilis dolores est. Aliquam suscipit dignissimos facere deserunt itaque.','2018-04-17 09:13:59','2018-04-20 12:13:57','dr_roberta_rolfson_iii'),(9,'Приключения','Doloremque debitis et explicabo iure ex. Consequatur est qui est magni porro consequatur. Velit praesentium molestiae possimus et asperiores.','2018-04-17 09:13:59','2018-04-20 12:14:21','dr_bailey_lubowitz'),(11,'Аркада','Id impedit mollitia sunt eos non minima ipsa. Eos sed sed impedit quo. Eveniet ipsam est suscipit nihil enim quia odio. Nostrum excepturi et accusamus quo quae expedita voluptas.','2018-04-17 09:13:59','2018-04-20 12:14:53','lilla_schinner');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flat_pages`
--

DROP TABLE IF EXISTS `flat_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flat_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flat_pages`
--

LOCK TABLES `flat_pages` WRITE;
/*!40000 ALTER TABLE `flat_pages` DISABLE KEYS */;
INSERT INTO `flat_pages` VALUES (1,'about','О компании','main.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatatrtertertertertLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat',NULL,NULL);
/*!40000 ALTER TABLE `flat_pages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (10,'2014_10_12_000000_create_users_table',1),(11,'2014_10_12_100000_create_password_resets_table',1),(12,'2018_04_16_010110_create_categories_table',1),(13,'2018_04_16_010130_create_products_table',1),(14,'2018_04_16_010838_create_orders_table',1),(15,'2018_04_16_160528_create_news_table',1),(16,'2018_04_16_160723_create_flat_pages_table',1),(17,'2018_04_17_100823_add_slug_to_products',1),(18,'2018_04_17_100842_add_slug_to_categories',1),(19,'2018_04_17_120457_add_slug_to_news',1),(21,'2018_04_18_003913_add_admin_to_users',2),(22,'2018_04_19_224945_create_admin_mails_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `shortDesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Krystel Roob','main.jpg','2013-09-20','Id vel velit cupiditate odio. Eos laudantium ut modi eos aut officia.','Error eaque ea et dolor doloribus. Sed neque adipisci autem in optio autem excepturi. Ex corporis quia ex.','2018-04-17 09:13:59','2018-04-17 09:13:59','krystel_roob'),(2,'Judson Howell','main.jpg','1986-09-27','Assumenda est numquam sit repellat excepturi minus iusto. Et reiciendis quisquam quae in vitae reprehenderit esse. Natus maiores est voluptatum.','Omnis nihil asperiores et velit est et. Nam quo enim earum voluptate.','2018-04-17 09:13:59','2018-04-17 09:13:59','judson_howell'),(3,'Sylvester Bednar','main.jpg','1976-12-24','Nihil molestiae magnam eos eos. Facilis dignissimos eos nihil qui quas fugit nihil. Dolores soluta quo molestias est. Minus pariatur pariatur quaerat quia eaque non accusantium.','Occaecati voluptas labore voluptates omnis et optio. Sed consectetur neque consequatur aliquid adipisci aut. Deleniti officia quibusdam nihil aut et nulla ea.','2018-04-17 09:13:59','2018-04-17 09:13:59','sylvester_bednar'),(4,'Erica Frami','main.jpg','1984-02-26','In autem voluptatem doloribus atque aliquid. Sit est quo culpa odio distinctio ab dolore. Nam minima magni praesentium suscipit rerum explicabo. Aut molestiae autem deleniti id.','Soluta impedit quisquam esse modi omnis repudiandae quos. Ipsam aliquid beatae ullam. Libero dolor pariatur qui atque laboriosam vel possimus delectus. Quisquam debitis ut qui consequuntur.','2018-04-17 09:13:59','2018-04-17 09:13:59','erica_frami'),(5,'Loren Rath','main.jpg','2002-01-05','Modi autem tempora enim aliquid. Vitae repellendus cupiditate eligendi vel. Sed fugit molestiae omnis soluta.','Illum error exercitationem qui aspernatur quas maxime dolorem nobis. Neque soluta earum quis maxime.','2018-04-17 09:13:59','2018-04-17 09:13:59','loren_rath'),(6,'Mr. Lourdes Buckridge','main.jpg','1986-06-24','At quis vel recusandae voluptas in facilis ut optio. Eius beatae minus aliquam inventore.','Est minus repudiandae quam molestiae eveniet expedita qui. Asperiores vel et modi aut repellendus sequi. Possimus odio officia nihil quis.','2018-04-17 09:13:59','2018-04-17 09:13:59','mr_lourdes_buckridge'),(7,'Ladarius Maggio','main.jpg','2004-07-17','Voluptatem laboriosam minima deserunt nihil. Ut odio quis nihil molestiae. Odit quae voluptates voluptas odit culpa ut.','Et delectus omnis et eaque et ab et. Odio consequatur perspiciatis rerum libero sunt laborum. Dolores eius aut ab quibusdam dolorem explicabo. Ex sed laboriosam sint.','2018-04-17 09:13:59','2018-04-17 09:13:59','ladarius_maggio'),(8,'Roger Senger','main.jpg','2011-08-19','Rem dolores eligendi ratione qui qui explicabo. Animi nisi aut sapiente rerum a quidem quis. Quod saepe cupiditate saepe qui fuga in. Culpa eum quasi sint perspiciatis libero quaerat labore.','Voluptatum dolor nihil provident qui deleniti vel quasi exercitationem. Dignissimos officia ut et. Voluptatem ad asperiores qui repudiandae et officiis ut.','2018-04-17 09:13:59','2018-04-17 09:13:59','roger_senger'),(9,'Mrs. Brooklyn Gerlach DDS','main.jpg','1995-05-07','Quia vel aliquid sed nihil voluptates. Quis fugit sed aut officia consequatur maiores architecto. Vel nobis sit consequatur inventore maiores eum.','Perferendis quo aperiam consectetur dolores aut. Voluptates aspernatur vel aut cumque perspiciatis. Laborum ea enim neque corrupti quasi.','2018-04-17 09:13:59','2018-04-17 09:13:59','mrs_brooklyn_gerlach_dds'),(10,'Alessia McDermott','main.jpg','1994-08-01','Aut dolor dolore porro tenetur dignissimos. Quae laboriosam et quisquam magni deleniti quo quisquam. Necessitatibus unde natus in mollitia.','Rerum praesentium beatae deleniti ut. Tenetur ea ea dolores quisquam sit. Et error et dignissimos in aut cumque. Non ad eveniet similique sunt sit neque consequuntur suscipit.','2018-04-17 09:13:59','2018-04-17 09:13:59','alessia_mcdermott');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_product_id_foreign` (`product_id`),
  CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,3,'2018-04-19 17:09:18','2018-04-19 17:09:18'),(47,1,3,'2018-04-20 19:13:32','2018-04-20 19:13:32'),(48,1,8,'2018-04-20 19:13:32','2018-04-20 19:13:32');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (3,'The Witcher 3: Wild Hunt','473','main.jpg','Est tempora cupiditate eos commodi. Velit recusandae facere minima doloribus et voluptas. Officiis autem omnis odio laboriosam. Earum consequatur ullam accusantium in rerum.',4,'2018-04-17 09:13:59','2018-04-20 12:30:31','prof_omer_von'),(4,'Overwatch','391','7643.jpg','Voluptatem id maxime dolor quia ut ut. Sapiente et accusamus quis nisi. Ad rerum voluptatem enim quos facilis rerum quibusdam. Excepturi eum ut omnis sit inventore.',5,'2018-04-17 09:13:59','2018-04-20 12:31:37','miss_camilla_senger_dds'),(5,'Deus Ex: Mankind Divided','765','1159.jpg','Quibusdam sit sed nisi molestiae veniam. Culpa enim blanditiis tempora aperiam qui molestias veniam nam. Qui ut dignissimos porro non saepe blanditiis incidunt.',6,'2018-04-17 09:13:59','2018-04-20 12:31:48','dr_kayleigh_turcotte_ii'),(6,'World of WarCraft','391','2450.jpg','Et consequatur aut corporis quia minima quo eius quia. Alias qui aspernatur est consequatur qui repudiandae eos. Enim mollitia non harum in.',7,'2018-04-17 09:13:59','2018-04-20 12:31:58','shayna_murazik'),(7,'Call of Duty: Black ops II','505','8326.jpg','Quaerat nam optio incidunt consequatur aliquid voluptas delectus. Illo atque incidunt voluptas fugit eos enim est. Nihil aliquid minus quod explicabo sunt.',8,'2018-04-17 09:13:59','2018-04-20 12:32:16','dr_mallory_goldner_sr'),(8,'Batman','686','9819.jpg','Laudantium autem et fuga et quia cumque. Rem enim ipsam numquam eos enim. Qui quia hic sed voluptas tenetur suscipit corporis.',9,'2018-04-17 09:13:59','2018-04-20 12:32:29','calista_berge'),(10,'dishonored 2','645','1908.jpg','Ipsam sit numquam enim aut rem voluptas nobis omnis. Ex ut animi qui reprehenderit voluptatem rerum quidem. Quis ut quaerat et dicta corrupti illo. Quia pariatur eos eligendi et.',11,'2018-04-17 09:13:59','2018-04-20 12:34:27','lexus_nienow_iv'),(15,'dishonored 1','654','6512bd43d9caa6e02c990b0a82652dca.jpg','Quibusdam sit sed nisi molestiae veniam. Culpa enim blanditiis tempora aperiam qui molestias veniam nam. Qui ut dignissimos porro non saepe blanditiis incidunt',3,'2018-04-20 12:36:26','2018-04-20 12:37:00','dishonored_1');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'default','default@default.ru','','BGbg16ufuK84AJ7iK6Dm7C6fZKK03pxzURyd7pFyQZuYNCZ80JAdVEXk9nr3','2018-04-17 13:47:26','2018-04-17 13:47:26',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'laravel-php'
--

--
-- Dumping routines for database 'laravel-php'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-21  1:15:04
