-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: brief_mvc
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `departements`
--

DROP TABLE IF EXISTS `departements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departements` (
  `id_departement` int NOT NULL AUTO_INCREMENT,
  `nom_departement` varchar(50) DEFAULT NULL,
  `id_region` int DEFAULT NULL,
  PRIMARY KEY (`id_departement`),
  UNIQUE KEY `nom_departement` (`nom_departement`),
  KEY `FK_REGION_DEPARTEMENT` (`id_region`),
  CONSTRAINT `FK_REGION_DEPARTEMENT` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departements`
--

LOCK TABLES `departements` WRITE;
/*!40000 ALTER TABLE `departements` DISABLE KEYS */;
INSERT INTO `departements` VALUES (1,'Rufisque',1),(2,'Dakar',1),(3,'Pikine',1),(4,'Guediawaye',1),(5,'Bambey',2),(6,' Diourbel ',2),(7,'Mbacké',2),(8,'Fatick',3),(9,'Foundiougne',3),(10,'Gossas',3),(11,'Kaolack ',4),(12,'Guinguinéo ',4),(13,'Nioro du Rip',4),(14,'Kolda',5),(15,'Vélingara',5),(16,'Médina Yoro Foulah',5),(17,'Louga',6),(18,'Kébémer',6),(19,' Linguère',6),(20,'Kanel',7),(21,' Matam',7),(22,'Ranérou',7),(23,'Dagana ',8),(24,'Podor ',8),(25,'Saint-Louis',8),(26,'Bakel ',9),(27,'Koumpentoum ',9),(28,'Tambacounda ',9),(29,'Goudiry',9),(30,'M\'bour ',10),(31,'Thiès ',10),(32,'Tivaouane',10),(33,'Bignogna',11),(34,' Oussouye ',11),(35,'Ziguinchor',11),(36,'Birkilane ',12),(37,'Kaffrine ',12),(38,'Malem-Hodar ',12),(39,'Kédougou ',13),(40,'Salemata ',13),(41,'Saraya',13),(42,'Bounkiling',14),(43,'Goudomp ',14),(44,'Sédhiou',14);
/*!40000 ALTER TABLE `departements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispositifs_de_formations`
--

DROP TABLE IF EXISTS `dispositifs_de_formations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispositifs_de_formations` (
  `id_dispositif` int NOT NULL AUTO_INCREMENT,
  `libelle_dispositif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dispositif`),
  UNIQUE KEY `libelle_dispositif` (`libelle_dispositif`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositifs_de_formations`
--

LOCK TABLES `dispositifs_de_formations` WRITE;
/*!40000 ALTER TABLE `dispositifs_de_formations` DISABLE KEYS */;
INSERT INTO `dispositifs_de_formations` VALUES (1,'0-15'),(2,'16-30'),(3,'31-45'),(4,'46-60'),(5,'61-plus');
/*!40000 ALTER TABLE `dispositifs_de_formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domaines` (
  `id_domaine` int NOT NULL AUTO_INCREMENT,
  `libelle_domaine` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_domaine`),
  UNIQUE KEY `libelle_domaine` (`libelle_domaine`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

LOCK TABLES `domaines` WRITE;
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES (2,'Agroalimentaire'),(3,'Banque / Assurance'),(4,'Bois / Papier / Carton / Imprimerie'),(5,'BTP / Matériaux de construction'),(6,'Chimie / Parachimie'),(7,'Commerce / Négoce / Distribution'),(8,'Édition / Communication / Multimédia'),(9,'Électronique / Électricité'),(1,'Ventes');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entreprises` (
  `id_entreprise` int NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(30) DEFAULT NULL,
  `coordonnees` varchar(255) DEFAULT NULL,
  `ninea` varchar(100) DEFAULT NULL,
  `rccm` varchar(50) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `page_web` varchar(100) DEFAULT NULL,
  `nombre_employe` int DEFAULT '1',
  `organigramme` tinyint(1) DEFAULT '0',
  `cotisations_sociales` tinyint(1) DEFAULT '0',
  `contrat` tinyint(1) DEFAULT '0',
  `id_repondant` int DEFAULT NULL,
  `id_domaine` int DEFAULT NULL,
  `id_dispositif` int DEFAULT NULL,
  `id_regime` int DEFAULT NULL,
  `id_quartier` int DEFAULT NULL,
  `id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_entreprise`),
  UNIQUE KEY `ninea` (`ninea`),
  UNIQUE KEY `rccm` (`rccm`),
  KEY `FK_UTILISATEUR_ENTREPRISE` (`id_utilisateur`),
  KEY `FK_DISPOSITIF_ENTREPRISE` (`id_dispositif`),
  KEY `FK_DOMAINE_ENTREPRISE` (`id_domaine`),
  KEY `FK_QUARTIER_ENTREPRISE` (`id_quartier`),
  KEY `FK_REGIME_ENTREPRISE` (`id_regime`),
  KEY `FK_REPONDANT_ENTREPRISE` (`id_repondant`),
  CONSTRAINT `FK_DISPOSITIF_ENTREPRISE` FOREIGN KEY (`id_dispositif`) REFERENCES `dispositifs_de_formations` (`id_dispositif`),
  CONSTRAINT `FK_DOMAINE_ENTREPRISE` FOREIGN KEY (`id_domaine`) REFERENCES `domaines` (`id_domaine`),
  CONSTRAINT `FK_QUARTIER_ENTREPRISE` FOREIGN KEY (`id_quartier`) REFERENCES `quartiers` (`id_quartier`),
  CONSTRAINT `FK_REGIME_ENTREPRISE` FOREIGN KEY (`id_regime`) REFERENCES `regimes` (`id_regime`),
  CONSTRAINT `FK_REPONDANT_ENTREPRISE` FOREIGN KEY (`id_repondant`) REFERENCES `repondants` (`id_repondant`),
  CONSTRAINT `FK_UTILISATEUR_ENTREPRISE` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entreprises`
--

LOCK TABLES `entreprises` WRITE;
/*!40000 ALTER TABLE `entreprises` DISABLE KEYS */;
INSERT INTO `entreprises` VALUES (1,'chez rokhaya','twewet','oieeoidfkcsck','WEPOWEOWEWEP','2022-03-07','FFGFGFGFG',1,0,1,1,2,4,3,1,1,1),(2,'ndeye awa','coordonnees','ninea','rccm','2020-02-12','hhtps://papi.sn',24,0,0,1,3,3,3,5,2,1),(6,'chez thierno','coordonnees','ninea_updated','rccm_updated','1998-01-18','page_web',41,1,1,1,4,8,3,2,2,1),(7,'Epsilon ','fann','EpSILON31','EP!LDLX','2020-11-02','epsilon.com',2,1,1,1,4,5,4,5,1,1),(8,'Honorable','keur Daouda Sarr','powepewowp21das','2222awpwopwsad','2021-11-29','sfs.com',23,1,0,1,4,6,5,5,2,1),(12,'Papi','sdjsd','+1 (762) 293-5619','Elit reprehenderit','2003-12-09','Enim et consectetur ',86,0,1,0,4,6,3,5,2,NULL),(14,'anta mbaye','dlfkaospdfk','+1 (301) 133-1399','Omnis quidem non dol','1982-05-12','Numquam fuga Omnis ',99,1,0,0,3,5,4,5,1,NULL),(16,'rokhaya',NULL,'+1 (889) 866-1419','Consequuntur dolor q','2012-12-21','Obcaecati voluptas f',100,1,1,1,1,6,4,4,2,NULL),(17,'Eligend',NULL,'+1 (516) 864-4505','Aliquid esse ration','1975-01-31','Ea sunt odit incidi',71,0,1,1,1,7,2,3,1,NULL),(18,'Nulla est et omnis o','valite','+1 (608) 321-1544','Perferendis nesciunt','2011-12-31','Aperiam nihil harum ',73,0,0,0,4,7,4,1,1,NULL),(19,'Animi est illum v','Cum id ','+1 (518) 514-5333','Dolore quia minima e','1995-04-22','Mollitia proident c',74,0,0,1,4,5,2,3,1,NULL),(20,'Anim veniam fuga E','Voluptate veritatis ','+1 (745) 811-1029','In et dolor et sunt','2002-07-01','Enim et fuga Cillum',35,1,0,0,6,2,1,2,2,NULL),(21,'Aperiam distinctio ','Adipisicing dolore m','+1 (277) 545-2305','Consequuntur aut vel','1991-07-23','Irure excepturi simi',79,0,0,1,6,2,1,3,2,NULL),(22,'Recusandae Dolorem ','Nemo dignissimos rat','+1 (487) 822-4366','Sunt ullam quaerat s','2004-10-30','Impedit magnam cons',5,1,0,0,5,3,2,2,1,NULL),(23,'Distinctio Quia adi','Incididunt mollit su','+1 (952) 932-2285','Accusantium ut qui b','1985-10-09','Culpa molestias qui ',92,0,1,1,6,5,1,2,2,NULL),(26,'Voluptatem Odit pos','Dolorum vel officia ','+1 (431) 565-9815','Praesentium quia sed','1982-01-23','Quia est quisquam vo',43,0,1,1,6,2,2,1,1,NULL),(27,'Molestiae quidem eli','Voluptatibus totam a','+1 (367) 999-7183','Repudiandae amet co','1992-04-06','Vero blanditiis ut e',71,0,0,0,4,6,4,3,2,NULL),(29,'Sit vel est non eu','Dolorem ipsum conseq','+1 (681) 981-3871','Quidem animi eos de','1970-07-10','Natus ullamco aut co',9,1,0,1,5,3,3,5,2,NULL),(30,'Doloribus velit nesc','Nihil ducimus volup','+1 (511) 856-9586','Excepturi expedita q','2015-04-03','Libero accusantium d',33,1,0,1,3,6,4,4,2,NULL),(31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'Rerum fugit consect','Nemo veniam eiusmod','+1 (544) 201-7443','Nemo voluptates adip','2021-03-13','Nisi aute aliqua Es',67,0,1,0,4,8,3,2,1,NULL),(34,'Labore fugiat conseq','Velit dolorem sit s','+1 (798) 547-2329','Pariatur Impedit u','1985-08-31','Tempor mollit fugiat',45,0,0,0,3,7,1,3,1,NULL),(35,'Lorem rerum cupidata','Fugiat sit ad nesc','+1 (451) 711-2159','Fuga Incidunt nisi','2017-12-16','Est consequat Sit ',9,0,1,1,1,5,5,2,2,NULL),(36,'Laborum Dolor liber','Doloribus eos blandi','+1 (163) 607-5964','Consectetur assumend','1991-03-07','Facilis consequat U',52,0,0,0,6,3,5,5,1,NULL),(37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL),(39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL),(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL),(41,'Doloremque soluta ea','Fugiat quo ut ipsa ','+1 (138) 184-7937','Quod exercitation de','2007-04-12','Quia libero quibusda',19,1,1,1,4,4,2,2,2,NULL),(42,'Asperiores quo tempo','Incidunt do quis ne','+1 (137) 419-9687','Voluptate voluptate ','2016-06-23','Accusantium sapiente',98,1,1,0,1,3,3,4,1,NULL),(43,'Sit qui pariatur Ad','Aperiam facere enim ','+1 (852) 982-8933','Incidunt consequat','1975-08-09','Et eveniet adipisci',32,0,0,1,1,9,1,1,1,NULL),(44,'Qui omnis consectetu','Omnis minim rem esse','+1 (304) 726-9588','Minus quasi rem quis','1994-11-06','Est ullamco aliquam ',70,0,1,1,4,4,3,3,1,NULL),(45,'Asperiores quis assu','Et doloremque et qui','+1 (449) 589-9982','Qui praesentium quia','1972-09-30','Expedita excepteur i',5,0,0,1,5,9,3,2,2,NULL),(46,'Nobis fugiat sunt ','Esse commodo nemo d','+1 (802) 448-6758','Aut sit adipisicing ','2015-03-13','Sunt quae quo iusto ',51,0,1,1,1,8,1,1,2,NULL),(47,'Officia iusto exerci','Sed suscipit porro i','+1 (628) 319-4935','Dolores molestias de','1996-12-04','Ut vel minus et volu',72,1,1,1,3,5,4,4,2,NULL),(48,'Perspiciatis amet ','Nihil placeat et su','+1 (328) 982-2744','Elit esse aliquam o','1979-10-20','Omnis aliqua Earum ',7,0,0,1,3,4,2,3,2,NULL),(49,'Consequatur laboris ','Voluptatem aut minus','+1 (747) 451-7488','Voluptatem corporis ','2006-12-24','Ducimus illo repreh',43,1,0,0,4,8,3,3,2,NULL),(50,'Nisi ad pariatur Un','Enim nemo animi mag','+1 (987) 142-6546','Dolores quis ut moll','1981-09-16','Rerum ipsa molestia',1,1,1,0,2,9,4,1,2,NULL),(54,'Duis saepe illum ul','Culpa culpa id sit ','+1 (142) 891-8663','Non culpa et ullam ','1974-08-04','Molestias ut magni m',74,1,0,0,3,3,2,2,2,NULL),(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL),(57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),(58,'Proident mollitia m','Do exercitation aute','+1 (772) 831-1714','Id et odit necessit','1993-02-28','Sed ad praesentium e',1,1,1,0,4,7,1,3,2,NULL),(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(63,'Minima delectus inv','Mollitia optio expe','+1 (838) 113-9266','In voluptates libero','1990-04-19','Qui consectetur dol',68,1,0,1,5,3,3,2,2,NULL),(64,'Cupiditate proident','Consequatur Praesen','+1 (243) 807-8215','Incidunt et impedit','1989-01-26','Culpa quia rem numq',2,0,1,1,4,3,2,1,1,NULL),(65,'Excepteur rem sunt ','Fuga Nisi harum aut','+1 (711) 396-9069','Doloremque aliquam q','2006-03-21','Aspernatur obcaecati',68,1,1,0,6,7,4,5,1,NULL),(66,'Similique aut assume','Quia do eos volupta','+1 (147) 501-8851','In aut corrupti vol','2004-05-31','Aliquid sed eum opti',90,0,1,1,3,3,3,2,2,NULL),(67,'Dolorum qui velit a','Sed laboriosam sint','+1 (864) 385-3145','Odit eiusmod volupta','2018-04-17','Nam eu fuga Ut aute',5,0,0,1,5,9,4,1,2,NULL),(68,'Accusantium ut non e','Quisquam voluptates ','+1 (974) 256-1472','Neque expedita ut su','1995-04-30','Qui dolores fuga Re',43,0,1,0,1,3,5,2,1,NULL),(70,'Fugiat esse neque a','Aliqua Est ullamco ','+1 (765) 918-5671','Quo voluptate repreh','1970-08-01','Nobis dolores aliqua',9,1,0,0,4,5,5,3,1,NULL),(71,'Irure rerum est repe','Inventore culpa aut','+1 (241) 333-9992','Lorem quia totam in ','1989-06-14','Officia nulla labori',91,1,1,1,6,7,4,3,2,NULL),(72,'Provident eos quia ','Delectus blanditiis','+1 (264) 545-5619','Et et impedit est a','1990-08-12','Accusamus corrupti ',41,1,0,0,6,5,3,2,1,NULL),(73,'Et inventore volupta','Quia aspernatur iust','+1 (605) 512-9712','Est dignissimos veli','2009-07-22','Excepturi est hic pe',33,1,1,0,1,3,5,5,2,NULL),(78,'Pariatur Adipisci t','Minus libero porro v','+1 (283) 527-6898','Est non in sed in co','2002-04-27','Sunt voluptatem Re',40,0,1,0,1,9,4,5,2,NULL),(81,'Deserunt qui dolore ','Tempora mollitia qui','+1 (346) 274-9257','Nesciunt temporibus','2017-06-20','Molestiae et aut ver',62,1,0,0,4,6,3,5,2,NULL),(84,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(85,'Amet sunt mollit qu','Voluptates omnis ame','+1 (164) 187-9862','Aliquip quasi neque ','1981-11-14','Nisi consectetur qui',85,1,0,1,6,7,1,5,2,NULL),(89,'Eu qui harum ipsum u','Consequatur Omnis s','+1 (892) 821-8673','Ad dolorem et duis c','2007-12-03','Cum commodo aliqua ',33,0,1,0,3,7,3,1,2,NULL),(94,'Iure facere natus qu','Id earum aperiam aut','+1 (921) 964-2496','Enim ipsum minim lor','1985-06-23','Mollitia necessitati',88,1,0,1,4,3,5,5,2,NULL),(96,'Reiciendis unde blan','Recusandae Quibusda','+1 (366) 208-9603','Eum quaerat voluptas','2019-03-28','Nisi aut voluptatem ',15,1,0,0,3,5,2,2,1,NULL),(97,'Omnis doloribus volu','Sint illum ut a la','+1 (169) 302-4987','Eaque esse soluta a','1994-12-11','Non dolores dolor qu',97,1,1,1,3,7,5,5,1,NULL),(100,'Neque voluptas eum e','Quis placeat nostru','+1 (698) 713-2404','Adipisci mollitia se','1980-06-24','Voluptas vitae eveni',42,1,1,1,1,9,5,4,2,NULL),(115,'Eos est enim eiusmod','Culpa sit dolorem ','+1 (569) 836-8688','Ad sunt minima temp','1975-07-13','Blanditiis eum neces',47,1,0,1,1,4,4,1,1,NULL),(116,'Quibusdam officia la','Perferendis molestia','+1 (384) 736-2843','Vel eos ad praesenti','2008-09-18','Mollitia nostrum sun',69,0,0,0,4,5,5,4,2,NULL),(119,'Eu cumque ut culpa ','Duis consequatur Te','+1 (814) 972-9823','Modi sed nesciunt v','1984-07-06','Sunt deserunt asper',60,0,0,1,2,2,5,5,1,NULL),(120,'Dolore deserunt ipsa','Commodo enim occaeca','+1 (864) 314-6698','Exercitationem ea re','1999-03-02','Lorem totam aut cupi',77,1,0,0,6,4,4,1,1,NULL),(123,'Aute occaecat reicie','Consequatur Nostrum','+1 (501) 398-4812','Iure cum odio repreh','1973-08-15','Minim voluptates min',63,0,1,1,5,8,4,5,1,NULL),(126,'Et repellendus Vero','Deserunt sunt excep','+1 (263) 101-7947','Voluptate et proiden','2007-12-10','Aut et ea officia au',38,1,0,0,3,1,3,4,2,NULL),(127,'EMMA','Non quis nesciunt e','+1 (393) 722-3425','Autem ex numquam arc','2013-10-16','Amet est fuga Magn',14,0,0,1,4,8,2,3,2,NULL),(131,'Neque fugit perfere','Nisi quo dolorum eu ','+1 (841) 597-8255','In quia earum blandi','1990-03-09','Ad dolore consequatu',39,1,0,0,5,2,3,4,1,NULL),(132,'Sonhibu','Exercitation ullam p','+1 (545) 597-9149','Nemo fugiat nisi se','2009-09-24','Ea et maiores aliqui',5,0,1,1,4,1,5,2,2,NULL),(135,'Saliou','Explicabo Hic cumqu','+1 (685) 165-6969','Asperiores anim arch','1976-11-08','Obcaecati sed iusto ',67,1,0,0,2,6,1,5,2,NULL),(140,'Adipisicing','Non est','+1786787','Architect','2007-02-19','Quas dolo',56,1,0,0,5,4,4,1,2,NULL),(142,'Enim aliquid','Beatae','+1679106','Maxime','1986-07-15','sed duis',39,0,1,0,1,4,3,3,1,NULL),(144,'Id deserunt fugiat ','Provident perferend','+1 (152) 363-9566','Aut maiores accusant','2000-11-08','Suscipit asperiores ',52,1,1,1,2,7,2,5,1,NULL),(145,'Velit a sed et dict','Labore eum quia ipsa','+1 (542) 618-2616','Voluptatum dolore ea','2004-08-25','Porro impedit ex qu',10,1,1,1,2,6,3,4,1,NULL),(146,'TRES BIEN','Quas Nam velit cupi','+1 (221) 987-2808','Consequuntur volupta','1979-08-21','Pariatur Tempora vo',96,0,0,0,1,9,3,1,2,NULL),(148,'VOILA','Aut laboris incidunt','+1 (646) 396-7953','Aut ut quo qui cumqu','1985-12-13','Consequuntur amet e',32,1,0,1,2,1,2,2,2,NULL);
/*!40000 ALTER TABLE `entreprises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fonctions`
--

DROP TABLE IF EXISTS `fonctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fonctions` (
  `id_fonction` int NOT NULL AUTO_INCREMENT,
  `libelle_fonction` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_fonction`),
  UNIQUE KEY `libelle_fonction` (`libelle_fonction`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonctions`
--

LOCK TABLES `fonctions` WRITE;
/*!40000 ALTER TABLE `fonctions` DISABLE KEYS */;
INSERT INTO `fonctions` VALUES (10,'Community Manager'),(6,'Developpeur Web'),(5,'Directeur General'),(13,'Directeur Systeme d\'information'),(11,'Photographe'),(7,'Referent digital'),(4,'Responsable administratif'),(1,'Responsable comptable'),(9,'Responsable Ressources Humaines'),(8,'Secretaire'),(12,'Talend Developer');
/*!40000 ALTER TABLE `fonctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quartiers`
--

DROP TABLE IF EXISTS `quartiers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quartiers` (
  `id_quartier` int NOT NULL AUTO_INCREMENT,
  `nom_quartier` varchar(30) DEFAULT NULL,
  `id_departement` int DEFAULT NULL,
  PRIMARY KEY (`id_quartier`),
  UNIQUE KEY `nom_quartier` (`nom_quartier`),
  KEY `FK_DEPARTEMENT_QUARTIER` (`id_departement`),
  CONSTRAINT `FK_DEPARTEMENT_QUARTIER` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id_departement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quartiers`
--

LOCK TABLES `quartiers` WRITE;
/*!40000 ALTER TABLE `quartiers` DISABLE KEYS */;
INSERT INTO `quartiers` VALUES (1,'Arafat',1),(2,'Diorga Cherif',1);
/*!40000 ALTER TABLE `quartiers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regimes`
--

DROP TABLE IF EXISTS `regimes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regimes` (
  `id_regime` int NOT NULL AUTO_INCREMENT,
  `libelle_regime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_regime`),
  UNIQUE KEY `libelle_regime` (`libelle_regime`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regimes`
--

LOCK TABLES `regimes` WRITE;
/*!40000 ALTER TABLE `regimes` DISABLE KEYS */;
INSERT INTO `regimes` VALUES (4,'GIE'),(2,'SA'),(1,'SARL'),(5,'SAS'),(3,'SUARL');
/*!40000 ALTER TABLE `regimes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regions` (
  `id_region` int NOT NULL AUTO_INCREMENT,
  `nom_region` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_region`),
  UNIQUE KEY `nom_region` (`nom_region`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Dakar'),(2,'Diourbel'),(3,'Fatick'),(12,'Kaffrine'),(4,'Kaolack'),(13,'Kédougou'),(5,'Kolda'),(6,'Louga'),(7,'Matam'),(8,'Saint-Louis'),(14,'Sédhiou'),(9,'Tambacounda'),(10,'Thiès'),(11,'Ziguinchor');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repondants`
--

DROP TABLE IF EXISTS `repondants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `repondants` (
  `id_repondant` int NOT NULL AUTO_INCREMENT,
  `prenom_repondant` varchar(100) DEFAULT NULL,
  `nom_repondant` varchar(50) DEFAULT NULL,
  `telephone_repondant` varchar(15) DEFAULT NULL,
  `courriel` varchar(100) DEFAULT NULL,
  `id_fonction` int DEFAULT NULL,
  PRIMARY KEY (`id_repondant`),
  UNIQUE KEY `telephone_repondant` (`telephone_repondant`),
  UNIQUE KEY `courriel` (`courriel`),
  KEY `FK_FONCTION_REPONDANT` (`id_fonction`),
  CONSTRAINT `FK_FONCTION_REPONDANT` FOREIGN KEY (`id_fonction`) REFERENCES `fonctions` (`id_fonction`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repondants`
--

LOCK TABLES `repondants` WRITE;
/*!40000 ALTER TABLE `repondants` DISABLE KEYS */;
INSERT INTO `repondants` VALUES (1,'Mame Thierno','Cisse','773102535','mt@gmail.com',4),(2,'Babacar','THIAM','775126432','bt@gmail.com',1),(3,'Djibril','NDIAYE',NULL,'ndiayedjibril@gmail.com',5),(4,'Papa Ibrahima','NDIAYE',NULL,'papaibr@gmail.com',6),(5,'Cheikh','SOW',NULL,'csow@gmail.com',6),(6,'Dame','LEYE',NULL,'dale@gmail.com',6);
/*!40000 ALTER TABLE `repondants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','root@yd.com','passer'),(2,'root','root@d.com','passer'),(3,'khoya_admin','rokhaya@gmail.com','ppasser'),(4,'rokhaya','root@euh.com','passer'),(5,'rokhaya','root@euh.com','passer');
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

-- Dump completed on 2022-04-07 23:34:36
