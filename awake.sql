-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: awake
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.40-MariaDB

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
-- Table structure for table `alarma`
--

DROP TABLE IF EXISTS `alarma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alarma` (
  `idAlarma` int(6) NOT NULL AUTO_INCREMENT,
  `idComunidad` int(6) NOT NULL,
  `fechaAlarma` datetime NOT NULL,
  `tiempoAlarma` int(6) DEFAULT NULL,
  `estadoAlarma` int(6) NOT NULL DEFAULT '0',
  `idUsuario` int(6) DEFAULT NULL,
  PRIMARY KEY (`idAlarma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alarma`
--

LOCK TABLES `alarma` WRITE;
/*!40000 ALTER TABLE `alarma` DISABLE KEYS */;
/*!40000 ALTER TABLE `alarma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificacion`
--

DROP TABLE IF EXISTS `calificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calificacion` (
  `idCalificacion` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idTipoCalificacion` int(11) NOT NULL,
  `idUsuarioCalificador` int(11) DEFAULT NULL,
  `comentarioCalificacion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci,
  `fechaCalificacion` date NOT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCalificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=16384;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificacion`
--

LOCK TABLES `calificacion` WRITE;
/*!40000 ALTER TABLE `calificacion` DISABLE KEYS */;
INSERT INTO `calificacion` VALUES (1,11,1,NULL,NULL,'2019-04-09',6),(2,11,1,NULL,NULL,'2019-04-09',7),(3,11,2,NULL,NULL,'2019-04-09',5),(4,11,3,1,'Esto es una prueba','2019-04-09',3),(5,11,4,NULL,NULL,'2019-04-09',2),(6,11,4,NULL,NULL,'2019-04-09',3),(7,11,2,NULL,NULL,'2019-04-09',0),(8,11,1,NULL,NULL,'2019-04-09',1),(9,11,2,NULL,NULL,'2019-04-09',2),(10,11,1,NULL,NULL,'2019-04-09',4),(11,11,3,1,'Esto es una prueba','2019-04-09',7),(12,11,4,NULL,NULL,'2019-04-09',10),(13,11,1,NULL,NULL,'2019-04-09',6),(14,11,1,NULL,NULL,'2019-04-09',7),(15,11,2,NULL,NULL,'2019-04-09',5),(16,11,3,1,'Esto es una prueba','2019-04-09',3),(17,11,4,NULL,NULL,'2019-04-09',2),(18,11,4,NULL,NULL,'2019-04-09',3),(19,11,2,NULL,NULL,'2019-04-09',0),(20,11,1,NULL,NULL,'2019-04-09',1),(21,11,2,NULL,NULL,'2019-04-09',2),(22,11,1,NULL,NULL,'2019-04-09',4),(23,11,3,1,'Esto es una prueba','2019-04-09',7),(24,11,4,NULL,NULL,'2019-04-09',10),(25,11,3,1,'Esto es una prueba','2019-04-09',10);
/*!40000 ALTER TABLE `calificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comuna`
--

DROP TABLE IF EXISTS `comuna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comuna` (
  `idComuna` int(11) NOT NULL AUTO_INCREMENT,
  `nombreComuna` varchar(64) NOT NULL,
  `idProvincia` int(11) NOT NULL,
  PRIMARY KEY (`idComuna`)
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=23;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comuna`
--

LOCK TABLES `comuna` WRITE;
/*!40000 ALTER TABLE `comuna` DISABLE KEYS */;
INSERT INTO `comuna` VALUES (1,'Arica',1),(2,'Camarones',1),(3,'General Lagos',2),(4,'Putre',2),(5,'Alto Hospicio',3),(6,'Iquique',3),(7,'Cami?a',4),(8,'Colchane',4),(9,'Huara',4),(10,'Pica',4),(11,'Pozo Almonte',4),(12,'Antofagasta',5),(13,'Mejillones',5),(14,'Sierra Gorda',5),(15,'Taltal',5),(16,'Calama',6),(17,'Ollague',6),(18,'San Pedro de Atacama',6),(19,'Mar?a Elena',7),(20,'Tocopilla',7),(21,'Cha?aral',8),(22,'Diego de Almagro',8),(23,'Caldera',9),(24,'Copiap?',9),(25,'Tierra Amarilla',9),(26,'Alto del Carmen',10),(27,'Freirina',10),(28,'Huasco',10),(29,'Vallenar',10),(30,'Canela',11),(31,'Illapel',11),(32,'Los Vilos',11),(33,'Salamanca',11),(34,'Andacollo',12),(35,'Coquimbo',12),(36,'La Higuera',12),(37,'La Serena',12),(38,'Paihuaco',12),(39,'Vicu?a',12),(40,'Combarbal?',13),(41,'Monte Patria',13),(42,'Ovalle',13),(43,'Punitaqui',13),(44,'R?o Hurtado',13),(45,'Isla de Pascua',14),(46,'Calle Larga',15),(47,'Los Andes',15),(48,'Rinconada',15),(49,'San Esteban',15),(50,'La Ligua',16),(51,'Papudo',16),(52,'Petorca',16),(53,'Zapallar',16),(54,'Hijuelas',17),(55,'La Calera',17),(56,'La Cruz',17),(57,'Limache',17),(58,'Nogales',17),(59,'Olmu?',17),(60,'Quillota',17),(61,'Algarrobo',18),(62,'Cartagena',18),(63,'El Quisco',18),(64,'El Tabo',18),(65,'San Antonio',18),(66,'Santo Domingo',18),(67,'Catemu',19),(68,'Llaillay',19),(69,'Panquehue',19),(70,'Putaendo',19),(71,'San Felipe',19),(72,'Santa Mar?a',19),(73,'Casablanca',20),(74,'Conc?n',20),(75,'Juan Fern?ndez',20),(76,'Puchuncav?',20),(77,'Quilpu?',20),(78,'Quintero',20),(79,'Valpara?so',20),(80,'Villa Alemana',20),(81,'Vi?a del Mar',20),(82,'Colina',21),(83,'Lampa',21),(84,'Tiltil',21),(85,'Pirque',22),(86,'Puente Alto',22),(87,'San Jos? de Maipo',22),(88,'Buin',23),(89,'Calera de Tango',23),(90,'Paine',23),(91,'San Bernardo',23),(92,'Alhu?',24),(93,'Curacav?',24),(94,'Mar?a Pinto',24),(95,'Melipilla',24),(96,'San Pedro',24),(97,'Cerrillos',25),(98,'Cerro Navia',25),(99,'Conchal?',25),(100,'El Bosque',25),(101,'Estaci?n Central',25),(102,'Huechuraba',25),(103,'Independencia',25),(104,'La Cisterna',25),(105,'La Granja',25),(106,'La Florida',25),(107,'La Pintana',25),(108,'La Reina',25),(109,'Las Condes',25),(110,'Lo Barnechea',25),(111,'Lo Espejo',25),(112,'Lo Prado',25),(113,'Macul',25),(114,'Maip?',25),(115,'?u?oa',25),(116,'Pedro Aguirre Cerda',25),(117,'Pe?alol?n',25),(118,'Providencia',25),(119,'Pudahuel',25),(120,'Quilicura',25),(121,'Quinta Normal',25),(122,'Recoleta',25),(123,'Renca',25),(124,'San Miguel',25),(125,'San Joaqu?n',25),(126,'San Ram?n',25),(127,'Santiago',25),(128,'Vitacura',25),(129,'El Monte',26),(130,'Isla de Maipo',26),(131,'Padre Hurtado',26),(132,'Pe?aflor',26),(133,'Talagante',26),(134,'Codegua',27),(135,'Co?nco',27),(136,'Coltauco',27),(137,'Do?ihue',27),(138,'Graneros',27),(139,'Las Cabras',27),(140,'Machal?',27),(141,'Malloa',27),(142,'Mostazal',27),(143,'Olivar',27),(144,'Peumo',27),(145,'Pichidegua',27),(146,'Quinta de Tilcoco',27),(147,'Rancagua',27),(148,'Rengo',27),(149,'Requ?noa',27),(150,'San Vicente de Tagua Tagua',27),(151,'La Estrella',28),(152,'Litueche',28),(153,'Marchihue',28),(154,'Navidad',28),(155,'Peredones',28),(156,'Pichilemu',28),(157,'Ch?pica',29),(158,'Chimbarongo',29),(159,'Lolol',29),(160,'Nancagua',29),(161,'Palmilla',29),(162,'Peralillo',29),(163,'Placilla',29),(164,'Pumanque',29),(165,'San Fernando',29),(166,'Santa Cruz',29),(167,'Cauquenes',30),(168,'Chanco',30),(169,'Pelluhue',30),(170,'Curic?',31),(171,'Huala??',31),(172,'Licant?n',31),(173,'Molina',31),(174,'Rauco',31),(175,'Romeral',31),(176,'Sagrada Familia',31),(177,'Teno',31),(178,'Vichuqu?n',31),(179,'Colb?n',32),(180,'Linares',32),(181,'Longav?',32),(182,'Parral',32),(183,'Retiro',32),(184,'San Javier',32),(185,'Villa Alegre',32),(186,'Yerbas Buenas',32),(187,'Constituci?n',33),(188,'Curepto',33),(189,'Empedrado',33),(190,'Maule',33),(191,'Pelarco',33),(192,'Pencahue',33),(193,'R?o Claro',33),(194,'San Clemente',33),(195,'San Rafael',33),(196,'Talca',33),(197,'Arauco',34),(198,'Ca?ete',34),(199,'Contulmo',34),(200,'Curanilahue',34),(201,'Lebu',34),(202,'Los ?lamos',34),(203,'Tir?a',34),(204,'Alto Biob?o',35),(205,'Antuco',35),(206,'Cabrero',35),(207,'Laja',35),(208,'Los ?ngeles',35),(209,'Mulch?n',35),(210,'Nacimiento',35),(211,'Negrete',35),(212,'Quilaco',35),(213,'Quilleco',35),(214,'San Rosendo',35),(215,'Santa B?rbara',35),(216,'Tucapel',35),(217,'Yumbel',35),(218,'Chiguayante',36),(219,'Concepci?n',36),(220,'Coronel',36),(221,'Florida',36),(222,'Hualp?n',36),(223,'Hualqui',36),(224,'Lota',36),(225,'Penco',36),(226,'San Pedro de La Paz',36),(227,'Santa Juana',36),(228,'Talcahuano',36),(229,'Tom?',36),(230,'Bulnes',37),(231,'Chill?n',37),(232,'Chill?n Viejo',37),(233,'Cobquecura',37),(234,'Coelemu',37),(235,'Coihueco',37),(236,'El Carmen',37),(237,'Ninhue',37),(238,'?iquen',37),(239,'Pemuco',37),(240,'Pinto',37),(241,'Portezuelo',37),(242,'Quill?n',37),(243,'Quirihue',37),(244,'R?nquil',37),(245,'San Carlos',37),(246,'San Fabi?n',37),(247,'San Ignacio',37),(248,'San Nicol?s',37),(249,'Treguaco',37),(250,'Yungay',37),(251,'Carahue',38),(252,'Cholchol',38),(253,'Cunco',38),(254,'Curarrehue',38),(255,'Freire',38),(256,'Galvarino',38),(257,'Gorbea',38),(258,'Lautaro',38),(259,'Loncoche',38),(260,'Melipeuco',38),(261,'Nueva Imperial',38),(262,'Padre Las Casas',38),(263,'Perquenco',38),(264,'Pitrufqu?n',38),(265,'Puc?n',38),(266,'Saavedra',38),(267,'Temuco',38),(268,'Teodoro Schmidt',38),(269,'Tolt?n',38),(270,'Vilc?n',38),(271,'Villarrica',38),(272,'Angol',39),(273,'Collipulli',39),(274,'Curacaut?n',39),(275,'Ercilla',39),(276,'Lonquimay',39),(277,'Los Sauces',39),(278,'Lumaco',39),(279,'Pur?n',39),(280,'Renaico',39),(281,'Traigu?n',39),(282,'Victoria',39),(283,'Corral',40),(284,'Lanco',40),(285,'Los Lagos',40),(286,'M?fil',40),(287,'Mariquina',40),(288,'Paillaco',40),(289,'Panguipulli',40),(290,'Valdivia',40),(291,'Futrono',41),(292,'La Uni?n',41),(293,'Lago Ranco',41),(294,'R?o Bueno',41),(295,'Ancud',42),(296,'Castro',42),(297,'Chonchi',42),(298,'Curaco de V?lez',42),(299,'Dalcahue',42),(300,'Puqueld?n',42),(301,'Queil?n',42),(302,'Quemchi',42),(303,'Quell?n',42),(304,'Quinchao',42),(305,'Calbuco',43),(306,'Cocham?',43),(307,'Fresia',43),(308,'Frutillar',43),(309,'Llanquihue',43),(310,'Los Muermos',43),(311,'Maull?n',43),(312,'Puerto Montt',43),(313,'Puerto Varas',43),(314,'Osorno',44),(315,'Puero Octay',44),(316,'Purranque',44),(317,'Puyehue',44),(318,'R?o Negro',44),(319,'San Juan de la Costa',44),(320,'San Pablo',44),(321,'Chait?n',45),(322,'Futaleuf?',45),(323,'Hualaihu?',45),(324,'Palena',45),(325,'Ais?n',46),(326,'Cisnes',46),(327,'Guaitecas',46),(328,'Cochrane',47),(329,'O\'higgins',47),(330,'Tortel',47),(331,'Coihaique',48),(332,'Lago Verde',48),(333,'Chile Chico',49),(334,'R@f0o Ib@f1@f2ez',49),(335,'Ant@f3rtica',50),(336,'Cabo de Hornos',50),(337,'Laguna Blanca',51),(338,'Punta Arenas',51),(339,'R@f4o Verde',51),(340,'San Gregorio',51),(341,'Porvenir',52),(342,'Primavera',52),(343,'Timaukel',52),(344,'Natales',53),(345,'Torres del Paine',53);
/*!40000 ALTER TABLE `comuna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunicaciones`
--

DROP TABLE IF EXISTS `comunicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunicaciones` (
  `idComunicacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcionComunicacion` text NOT NULL,
  `idEdificio` int(11) NOT NULL,
  `fechaEnviado` varchar(20) NOT NULL,
  PRIMARY KEY (`idComunicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicaciones`
--

LOCK TABLES `comunicaciones` WRITE;
/*!40000 ALTER TABLE `comunicaciones` DISABLE KEYS */;
INSERT INTO `comunicaciones` VALUES (2,'kdmsakldmsalkdmskladmklsadmlksadmsa',0,'04/26/2019 10:10pm'),(4,'xczxcxzc',1,'04/26/2019 10:26pm');
/*!40000 ALTER TABLE `comunicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunidad`
--

DROP TABLE IF EXISTS `comunidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunidad` (
  `idComunidad` int(6) NOT NULL AUTO_INCREMENT,
  `idAdmin` int(6) NOT NULL,
  `nombreComunidad` varchar(30) NOT NULL,
  `direccionComunidad` varchar(30) NOT NULL,
  `idRegion` int(20) NOT NULL,
  `idComuna` int(20) NOT NULL,
  PRIMARY KEY (`idComunidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunidad`
--

LOCK TABLES `comunidad` WRITE;
/*!40000 ALTER TABLE `comunidad` DISABLE KEYS */;
INSERT INTO `comunidad` VALUES (1,2,'Wait for it ...','Legendary 90',11,13),(2,21,'Comunidad prueba 1','ssss923',8,134);
/*!40000 ALTER TABLE `comunidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `idEdificio` int(11) NOT NULL,
  `idDueno` int(11) DEFAULT NULL,
  `numeroDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idDepartamento`),
  KEY `departamento_ibfk_1` (`idEdificio`),
  KEY `departamento_ibfk_2` (`idDueno`),
  CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`idEdificio`) REFERENCES `edificio` (`idEdificio`),
  CONSTRAINT `departamento_ibfk_2` FOREIGN KEY (`idDueno`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2048;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (3,1,1,101),(4,1,1,102),(5,1,1,103),(6,3,NULL,11),(7,3,NULL,12),(8,3,NULL,13),(9,3,NULL,14),(10,3,NULL,15);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edificio`
--

DROP TABLE IF EXISTS `edificio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edificio` (
  `idEdificio` int(6) NOT NULL AUTO_INCREMENT,
  `idComunidad` int(6) NOT NULL,
  `direccionEdificio` varchar(200) NOT NULL,
  `numeroPisos` int(6) NOT NULL,
  `nombreEdificio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idEdificio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=5461;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edificio`
--

LOCK TABLES `edificio` WRITE;
/*!40000 ALTER TABLE `edificio` DISABLE KEYS */;
INSERT INTO `edificio` VALUES (1,1,'Ted Mosby 1',0,'San pepe grillo'),(2,1,'asdsad',0,NULL),(3,1,'prueba edificio 1',900,NULL),(4,2,'Asad92',50,NULL);
/*!40000 ALTER TABLE `edificio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastocomun`
--

DROP TABLE IF EXISTS `gastocomun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gastocomun` (
  `idGasto` int(11) NOT NULL AUTO_INCREMENT,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `imgGasto` varchar(200) NOT NULL,
  PRIMARY KEY (`idGasto`),
  KEY `idDepartamento` (`idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastocomun`
--

LOCK TABLES `gastocomun` WRITE;
/*!40000 ALTER TABLE `gastocomun` DISABLE KEYS */;
INSERT INTO `gastocomun` VALUES (2,'2019-06-07','2019-06-08','2019-06-06',0,30,'assets/img/gastocomun/2019-06-06.jpg'),(3,'2019-06-04','2019-06-08','2019-06-30',5,8888,'assets/img/gastocomun/52019-06-30.jpg');
/*!40000 ALTER TABLE `gastocomun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `idMensaje` int(11) NOT NULL AUTO_INCREMENT,
  `idRemitente` int(11) NOT NULL,
  `idDestinatario` int(11) NOT NULL,
  `asunto` varchar(10) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`idMensaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `porcalificaciones`
--

DROP TABLE IF EXISTS `porcalificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `porcalificaciones` (
  `idPorc` int(11) NOT NULL AUTO_INCREMENT,
  `idEdificio` int(11) NOT NULL,
  `porcAlarmas` int(11) DEFAULT '25',
  `porcTareas` int(11) DEFAULT '25',
  `porcUsuarios` int(11) DEFAULT '25',
  `porcRecorrido` int(11) DEFAULT '25',
  PRIMARY KEY (`idPorc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `porcalificaciones`
--

LOCK TABLES `porcalificaciones` WRITE;
/*!40000 ALTER TABLE `porcalificaciones` DISABLE KEYS */;
INSERT INTO `porcalificaciones` VALUES (1,1,15,15,60,10),(2,2,25,25,25,25),(3,3,25,25,25,25),(4,4,25,25,25,25);
/*!40000 ALTER TABLE `porcalificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincia` (
  `idProvincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProvincia` varchar(64) NOT NULL,
  `idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idProvincia`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=23;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincia`
--

LOCK TABLES `provincia` WRITE;
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
INSERT INTO `provincia` VALUES (1,'Arica',1),(2,'Parinacota',1),(3,'Iquique',2),(4,'El Tamarugal',2),(5,'Antofagasta',3),(6,'El Loa',3),(7,'Tocopilla',3),(8,'Cha?aral',4),(9,'Copiap?',4),(10,'Huasco',4),(11,'Choapa',5),(12,'Elqui',5),(13,'Limar?',5),(14,'Isla de Pascua',6),(15,'Los Andes',6),(16,'Petorca',6),(17,'Quillota',6),(18,'San Antonio',6),(19,'San Felipe de Aconcagua',6),(20,'Valparaiso',6),(21,'Chacabuco',7),(22,'Cordillera',7),(23,'Maipo',7),(24,'Melipilla',7),(25,'Santiago',7),(26,'Talagante',7),(27,'Cachapoal',8),(28,'Cardenal Caro',8),(29,'Colchagua',8),(30,'Cauquenes',9),(31,'Curic?',9),(32,'Linares',9),(33,'Talca',9),(34,'Arauco',10),(35,'Bio B?o',10),(36,'Concepci?n',10),(37,'?uble',10),(38,'Caut?n',11),(39,'Malleco',11),(40,'Valdivia',12),(41,'Ranco',12),(42,'Chilo?',13),(43,'Llanquihue',13),(44,'Osorno',13),(45,'Palena',13),(46,'Ais?n',14),(47,'Capit?n Prat',14),(48,'Coihaique',14),(49,'General Carrera',14),(50,'Ant?rtica Chilena',15),(51,'Magallanes',15),(52,'Tierra del Fuego',15),(53,'?ltima Esperanza',15);
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRegion` varchar(64) NOT NULL,
  `region_ordinal` varchar(4) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=30;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Arica y Parinacota','XV'),(2,'Tarapac?','I'),(3,'Antofagasta','II'),(4,'Atacama','III'),(5,'Coquimbo','IV'),(6,'Valparaiso','V'),(7,'Metropolitana de Santiago','RM'),(8,'Libertador General Bernardo O\'Higgins','VI'),(9,'Maule','VII'),(10,'Biob@f0o','VIII'),(11,'La Araucan@f1a','IX'),(12,'Los R@f2os','XIV'),(13,'Los Lagos','X'),(14,'Ais@f3n del General Carlos Ib@f4@f5ez del Campo','XI'),(15,'Magallanes y de la Ant@f6rtica Chilena','XII');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarea`
--

DROP TABLE IF EXISTS `tarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarea` (
  `idTarea` int(6) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(6) DEFAULT NULL,
  `idEdificio` int(6) NOT NULL,
  `descripcionTarea` varchar(200) NOT NULL,
  `fechaTarea` datetime NOT NULL,
  `estadoTarea` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTarea`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarea`
--

LOCK TABLES `tarea` WRITE;
/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
INSERT INTO `tarea` VALUES (1,NULL,1,'Se vayan a la mierda','2019-06-05 08:30:00',0);
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocalificacion`
--

DROP TABLE IF EXISTS `tipocalificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipocalificacion` (
  `idTIpoCalificacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcionCalificacion` varchar(20) NOT NULL,
  PRIMARY KEY (`idTIpoCalificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=4096;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocalificacion`
--

LOCK TABLES `tipocalificacion` WRITE;
/*!40000 ALTER TABLE `tipocalificacion` DISABLE KEYS */;
INSERT INTO `tipocalificacion` VALUES (1,'Alarmas'),(2,'Tareas'),(3,'Usuarios'),(4,'Recorrido');
/*!40000 ALTER TABLE `tipocalificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2730;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` VALUES (0,'Dios'),(1,'Administrador'),(2,'Conserje'),(3,'Due?o'),(4,'Arrendatario'),(5,'Familiar');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_comunicaciones`
--

DROP TABLE IF EXISTS `user_comunicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_comunicaciones` (
  `idUser_comunicaciones` int(11) NOT NULL AUTO_INCREMENT,
  `idComunicacion` int(11) NOT NULL,
  `idEdificio` int(11) NOT NULL,
  PRIMARY KEY (`idUser_comunicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_comunicaciones`
--

LOCK TABLES `user_comunicaciones` WRITE;
/*!40000 ALTER TABLE `user_comunicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_comunicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `password` varchar(15) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `idEdificio` int(10) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `idComuna` int(10) DEFAULT NULL,
  `idRegion` int(10) DEFAULT NULL,
  `Nacionalidad` varchar(30) DEFAULT NULL,
  `fotoPerfil` varchar(200) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `ultimaConexion` varchar(30) DEFAULT NULL,
  `idTipo` int(4) NOT NULL DEFAULT '1',
  `telefonoUsuario` varchar(60) DEFAULT NULL,
  `estadoUsuario` int(2) NOT NULL DEFAULT '0',
  `descripcionUsuario` varchar(200) DEFAULT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2340;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Raul Strappa','18935801-6','941512','raul.strappa94@gmail.com',NULL,'Santa Rita 699',109,7,'Chilena/o','assets/img/perfil/18935801-6.jpg','1994-12-15','06/06/2019 11:02am',0,'+56966576370',1,NULL,NULL),(2,'Belen Campos','17798854-5','160291','bp.campos10@gmail.com',13,'Francisco Bilbao 1861',118,7,'Chilena/o','assets/img/perfil/17798854-5.jpg','1991-02-16','06/06/2019 10:51am',1,'+56975860021',1,NULL,NULL),(11,'Kilian Jones','8612090-9','941512','ki.jones@gmail.com',1,'Manquehue 12',11,10,'Neverlandiano','assets/img/perfil/8612090-9.png','2019-04-16','04/06/2019 12:33am',2,'+56977638173',1,'Pirata',NULL),(15,'Prueba Imagen','6376008-0','941512','raul.strappa94@gmail.com',NULL,'Manquehue 12',1,1,'Chilena/o','assets/img/perfil/6376008-0.jpg','2019-12-25','04/13/2019 1:26pm',4,'+56977638173',1,'Quiero ser el mejor conserje de todo el mundo ',NULL),(18,'Prueba de otra cosa','18232232-6','123123','ki.jones@gmail.com',NULL,'Manquehue 12',1,1,'Chilena/o','assets/img/perfil/18232232-6.jpg','2020-01-02','04/18/2019 12:33pm',4,'+56977638173',1,'123',NULL),(19,'Prueba','17798854-5','asdsad','asdsad@asdsa.com',NULL,'sadsa',139,8,'Prueba','assets/img/perfil/17798854-5.jpg','2017-09-27',NULL,4,'23132',1,'asdasd',NULL),(20,'assadad','17798854-5','','asdsad',NULL,'',NULL,0,'Chilena/o','assets/img/perfil/17798854-5.jpg','0000-00-00',NULL,4,'',1,'',NULL),(21,'raul','18232232-6','','raul.strappa94@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,0,NULL,5),(22,'raul tipo','18935801-6','','asdasd@asdasd.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,NULL,0,NULL,9),(23,'asñldksañld','18232232-6','Rs941512','adasd@xn--eqwsdas-mjb.com',NULL,'asdasdasd',3,1,'Chilena/o','assets/img/perfil/18232232-6.jpg','2020-02-29',NULL,4,'232323213',1,'asdsad',NULL),(24,'Sujeto de prueba','18232232-6','Rs941512','sujeto.prueba@gmail.com',NULL,'manquehue 1',23,4,'Chilena/o','assets/img/perfil/18232232-6.jpg','2013-02-04',NULL,4,'88738273',1,'assdsad',NULL),(25,'asdasd','18935801-6','oBFpPRK','asdasd@asdasd.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-06 14:55:13
