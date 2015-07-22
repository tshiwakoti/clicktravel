-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: clicktravel
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `continent` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `long` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Paris','France','Europe','Paris, France\'s capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its picturesque 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as the Eiffel Tower and th',48.8567,2.3508,'2015-07-21 15:08:40','2015-07-21 15:09:11'),(2,'New York City','USA','North America','Home to the Empire State Building, Times Square, Statue of Liberty and other iconic sites, New York City is a fast-paced, globally influential center of art, culture, fashion and finance. The city’s 5 boroughs sit where the Hudson River meets the Atlantic',40.7127,-74.0059,'2015-07-21 15:09:11','2015-07-21 15:09:11'),(3,'Washington, D.C.','USA','North America','Washington, DC, the U.S. capital, is a compact city on the Potomac River, bordering the states of Maryland and Virginia. It’s defined by imposing neoclassical monuments and buildings – including the iconic ones that house the federal government’s 3 branch',38.9047,-77.0164,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(4,'Miami','USA','North America','Miami, at Florida\'s southeastern tip, is a vibrant city whose Cuban influence is reflected in the cafes and cigar shops that line Calle Ocho in Little Havana. Miami Beach, on barrier islands across the turquoise waters of Biscayne Bay, is home to glamorou',25.7753,-80.2089,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(5,'St. Louis','USA','North America','St. Louis is a city and port in the U.S. state of Missouri. The city developed along the western bank of the Mississippi River, which forms Missouri\'s border with Illinois.',38.6272,-90.1978,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(6,'Dallas','USA','North America','Dallas is a major city in Texas and is the largest urban center of the fourth most populous metropolitan area in the United States. The city proper ranks ninth in the U.S. and third in Texas after Houston and San Antonio.',32.7767,-96.797,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(7,'San Diego','USA','North America','San Diego is a city on the Pacific coast of California known for its beaches, parks and warm climate. Immense Balboa Park is the site of the world-famous San Diego Zoo, as well as numerous art galleries, artist studios, museums and gardens. A deep harbor ',32.715,-117.162,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(8,'Seattle','USA','North America','Seattle, on Puget Sound in the Pacific Northwest, is surrounded by water, mountains and evergreen forests, and encompasses thousands of acres of parkland (hence its nickname, \"Emerald City\"). It’s home to a thriving tech industry, with Microsoft and Amazo',47.6097,-122.333,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(9,'Anchorage','USA','North America','Anchorage, Alaska’s largest city, is in the south-central part of the state on the Cook Inlet. It\'s known for its cultural sites, including the Alaska Native Heritage Center, which displays traditional crafts, stages dances and presents replicas of dwelli',61.2167,-149.9,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(10,'Tokyo','Japan','Asia','Tokyo, Japan’s bustling capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers and anime shops to cherry trees and temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding forests. The Imperial Palace ',35.5833,139.683,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(11,'Kathmandu','Nepal','Asia','Kathmandu is the capital and largest municipality of Nepal. It is the only city of Nepal with the administrative status of Mahanagar, as compared to Upa-Mahanagar or Nagar.',27.7,85.3333,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(12,'Bucharest','Romania','Europe','Bucharest, in southern Romania, is the country\'s capital and commercial center. Its most iconic structure is the massive, communist-era Palatul Parlamentului government building, which has 1,100 rooms. Nearby, the historic Lipscani district is home to an ',44.4268,26.1025,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(13,'Rome','Italy','Europe','Rome, Italy’s capital, is a sprawling, cosmopolitan city with nearly 3,000 years of globally influential art, architecture and culture on display. Ancient ruins such as the Roman Forum and the Colosseum evoke the power of the former Roman Empire. Vatican ',41.9,12.5,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(14,'Cairo','Egypt','Africa','Cairo, Egypt’s sprawling capital, is set on the Nile River. At its heart is Tahrir Square and the vast Egyptian Museum, a trove of antiquities including the royal mummies and gilded King Tutankhamun artifacts. Nearby, Giza is site of the iconic pyramids a',30.05,31.2333,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(15,'Cape Town','South Africa','Africa','Cape Town is a port city on South Africa’s southwest coast, on a peninsula beneath the imposing Table Mountain. Slowly rotating cable cars climb to the mountain’s flat top, from which there are sweeping views of the city, the busy harbor and boats heading',-33.9253,18.4239,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(16,'New Delhi','India','Asia','Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard ac',28.6139,77.209,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(17,'St. Petersburg','Russia','Europe','St. Petersburg is a Russian port city on the Baltic Sea. Founded in 1703 by Peter the Great, it was the imperial capital for 2 centuries, and it remains the country’s cultural center, with venues like the hypermodern Mariinsky Theatre hosting opera and ba',59.95,30.3,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(18,'Dublin','Ireland','Europe','Dublin, capital of the Republic of Ireland, is on Ireland’s east coast at the mouth of the River Liffey. Its medieval buildings include 13th-century Dublin Castle and imposing St. Patrick’s Cathedral, founded in 1191. Temple Bar is a riverside nightlife a',53.3478,-6.2597,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(19,'Sydney','Australia','Australia','Sydney, capital of New South Wales and one of Australia\'s largest cities, is best known for its harbourfront Opera House, with a distinctive sail-like design. Massive Darling Harbour and Circular Quay are hubs of waterside life, with the towering, arched ',-33.865,151.209,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(20,'Cairns','Australia','Australia','Cairns, considered the gateway to Australia\'s Great Barrier Reef, is a city in tropical North Queensland. Once a sleepy sugar-milling town, it\'s now a destination for sailing, diving and snorkelling. Its Tjapukai Aboriginal Cultural Park tells the stories',-16.9256,145.775,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(21,'Mopti','Mali','Africa','Mopti is a town and an urban commune in the Inner Niger Delta region of Mali. The town is the capital of the Mopti Cercle and the Mopti Region.',14.4958,-4.1986,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(22,'Kigali','Rwanda','Africa','Kigali, with population of more than 1 million, is the capital and largest city of Rwanda. It is situated near the geographic centre of the nation.',-1.9439,30.0594,'2015-07-21 15:35:53','2015-07-21 15:35:53'),(23,'Khankh','Mongolia','Asia','Khankh is a sum of Khövsgöl aimag. The area is about 5,500 km². In 2000, the sum had 2140 inhabitants.',51.5117,100.654,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(24,'Tiksi','Russia','Asia','Tiksi is an urban locality and the administrative center of Bulunsky District in the Sakha Republic, Russia, located on the Arctic Ocean coast. Population: 5,063',71.6333,128.867,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(25,'Sao Paulo','Brazil','South America','Vibrant São Paulo is among the world\'s most populous cities. Brazil\'s financial center, it has abundant cultural institutions and a rich architectural tradition. Its iconic buildings range from the 1929 Edifício Martinelli skyscraper and the neo-Gothic Me',-23.55,-46.6333,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(26,'Rio de Janeiro','Brazil','South America','Rio de Janeiro is a huge seaside city in Brazil, famed for its Copacabana and Ipanema beaches, 38m Christ the Redeemer statue atop Mt. Corcovado and Sugarloaf, a granite monolith with cable cars to its summit. The city is also known for its sprawling fave',-22.9068,-43.1729,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(27,'Polar Bear Park','Canada','North America','Polar Bear Provincial Park is an isolated wilderness park in the far north of Ontario, Canada. It lies on the western shore where James Bay joins Hudson Bay.',54.7617,-83.0388,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(28,'Bogota','Colombia','South America','Bogotá is the capital of Colombia and Cundinamarca Department, with a population of 7,976,700 in 2015',4.5981,-74.0758,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(29,'Santiago','Chile','South America','Santiago, Chile’s capital and largest city, sits in a valley surrounded by the snow-capped Andes and the Chilean Coastal Range. Plaza de Armas, the grand heart of the city’s old colonial core, is home to 2 neoclassical landmarks: the early-19th-century Ro',-33.45,-70.6667,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(30,'Berlin','Germany','Europe','Berlin, Germany’s capital and cultural center, dates to the 13th century. Divided during the Cold War, today it\'s known for its art scene, nightlife and modern architecture, such as Mies van der Rohe’s landmark Neue Nationalgalerie. Reminders of the city\'',52.5167,13.3833,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(31,'Bergen','Norway','Europe','Bergen is a city on Norway’s southwestern coast surrounded by mountains and fjords, including Sognefjord, the country’s longest and deepest. The Bryggen district consists of the old wharf and its surrounding commercial buildings (a former center of the le',60.3894,5.33,'2015-07-21 15:52:36','2015-07-21 15:52:36'),(32,'Chicago','USA','North America','Chicago, on Lake Michigan in Illinois, is among the largest cities in the U.S. Famed for its bold architecture, it has a skyline bristling with skyscrapers such as the iconic John Hancock Center, sleek, 1,451-ft. Willis Tower and neo-Gothic Tribune Tower.',41.8369,-87.6847,'2015-07-21 16:26:46','2015-07-21 16:26:46');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billingaddress` varchar(255) DEFAULT NULL,
  `billingaddress2` varchar(255) DEFAULT NULL,
  `billingcity` varchar(255) DEFAULT NULL,
  `billingstate` varchar(255) DEFAULT NULL,
  `billingzipcode` varchar(255) DEFAULT NULL,
  `card` int(11) DEFAULT NULL,
  `securitycode` int(11) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `depdate` datetime DEFAULT NULL,
  `retdate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_packages1_idx` (`package_id`),
  KEY `fk_orders_users1_idx` (`user_id`),
  CONSTRAINT `fk_orders_packages1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duration` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_packages_cities_idx` (`city_id`),
  CONSTRAINT `fk_packages_cities` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,4,599,1,'2015-07-21 16:02:04','2015-07-21 16:02:04'),(2,10,1199,1,'2015-07-21 16:02:04','2015-07-21 16:02:04'),(3,4,599,2,'2015-07-21 16:02:04','2015-07-21 16:02:04'),(4,10,1199,2,'2015-07-21 16:02:04','2015-07-21 16:02:04'),(5,4,599,3,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(6,10,1199,3,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(7,4,599,4,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(8,10,1199,4,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(9,4,599,5,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(10,10,1199,5,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(11,4,599,6,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(12,10,1199,6,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(13,4,599,7,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(14,10,1199,7,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(15,4,599,8,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(16,10,1199,8,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(17,4,599,9,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(18,10,1199,9,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(19,4,599,10,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(20,10,1199,10,'2015-07-21 16:04:09','2015-07-21 16:04:09'),(21,4,599,11,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(22,10,1199,11,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(23,4,599,12,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(24,10,1199,12,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(25,4,599,13,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(26,10,1199,13,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(27,4,599,14,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(28,10,1199,14,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(29,4,599,15,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(30,10,1199,15,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(31,4,599,16,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(32,10,1199,16,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(33,4,599,17,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(34,10,1199,17,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(35,4,599,18,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(36,10,1199,18,'2015-07-21 16:05:50','2015-07-21 16:05:50'),(37,4,599,19,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(38,10,1199,19,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(39,4,599,20,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(40,10,1199,20,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(41,4,599,21,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(42,10,1199,21,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(43,4,599,22,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(44,10,1199,22,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(45,4,599,23,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(46,10,1199,23,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(47,4,599,24,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(48,10,1199,24,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(49,4,599,25,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(50,10,1199,25,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(51,4,599,26,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(52,10,1199,26,'2015-07-21 16:09:24','2015-07-21 16:09:24'),(53,4,599,27,'2015-07-21 16:13:59','2015-07-21 16:13:59'),(54,10,1199,27,'2015-07-21 16:13:59','2015-07-21 16:13:59'),(55,4,599,28,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(56,10,1199,28,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(57,4,599,29,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(58,10,1199,29,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(59,4,599,30,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(60,10,1199,30,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(61,4,599,31,'2015-07-21 16:14:44','2015-07-21 16:14:44'),(62,10,1199,31,'2015-07-21 16:15:07','2015-07-21 16:15:07'),(63,4,599,32,'2015-07-21 16:15:07','2015-07-21 16:15:07'),(64,10,1199,32,'2015-07-21 16:15:07','2015-07-21 16:15:07');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2015-07-21 18:41:07
