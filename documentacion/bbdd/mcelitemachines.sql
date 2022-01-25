
--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;

CREATE TABLE `articulos` (
  `idarticulo` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ean13` varchar(13) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '0000000000000',
  `codbar` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `tapizado` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `color` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int DEFAULT '0',
  PRIMARY KEY (`idarticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;

INSERT INTO `articulos` VALUES (1,'POLEA ENFRENTADA MAX','777777777','12','VINILICO','AZUL',0),(2,'PRENSA ATLETICA 45°','777789983','press45','Vinilico','Negro',0),(3,'DOMINADA FULL','7773636617','DOMF','-','NEGRO',0),(4,'BANCO PLANO','77774646','BP1','CUERINA','BLANCO',0);

UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `idcliente` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `razonsocial` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cuit` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicioniva` mediumint DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `provincia` mediumint DEFAULT NULL,
  `codigo_postal` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `transporte` mediumint DEFAULT NULL,
  `estado` mediumint DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;

INSERT INTO `clientes` VALUES (1,'Uriel','Swanson','Lorem Corp.','63-26621599-24',9,'434-51458','massa.quisque@yahoo.com','Ap #743-5715 Nunc Street',6,'04-831',2,0),(2,'Winifred','Carr','Semper Auctor Industries','67-20274242-65',10,'469-84963','amet@protonmail.net','2003 Fusce Av.',14,'15116',3,0),(3,'Xyla','Hahn','Eget Venenatis Limited','25-56227429-61',13,'156-52243','tempus.non@protonmail.org','Ap #173-7297 Adipiscing Street',13,'313263',1,0),(4,'Bethany','Lynn','Phasellus Elit Industries','45-75964578-39',8,'076-64558','imperdiet.non@icloud.ca','P.O. Box 795, 4382 Porttitor Av.',23,'21544',2,0),(5,'Quentin','Gilmore','Aenean Massa Foundation','35-40827658-23',9,'449-64934','faucibus@hotmail.ca','411-3609 Justo Road',15,'A8Z 4M8',1,0),(6,'Christopher','Walter','Tempor Industries','79-05868418-22',5,'840-81570','tincidunt.neque@google.net','568-7294 Velit. Road',3,'21579',1,0),(7,'Blythe','Mcfadden','Laoreet Lectus Inc.','24-94876861-27',13,'705-50851','augue@icloud.org','392-7406 Nunc Rd.',8,'3423',2,0),(8,'Rowan','Warner','Neque Pellentesque Corporation','88-35618493-31',9,'131-47013','hendrerit.neque@aol.org','P.O. Box 157, 975 Arcu. St.',9,'72632',1,0),(9,'Colin','Alvarado','At Company','17-35528156-64',11,'866-86356','est@hotmail.net','133-7440 Nonummy Av.',11,'388777',2,0),(10,'Thaddeus','Riggs','Augue Sed Molestie Foundation','46-09140857-82',5,'718-83641','arcu@outlook.com','P.O. Box 197, 8110 Dui, Ave',6,'7739',1,0),(11,'Rigel','Rich','Ipsum Non Limited','66-62609183-45',11,'885-26614','auctor.nunc@yahoo.com','Ap #604-6129 Eu Road',8,'767380',2,0),(12,'Zena','Mccoy','Amet Dapibus Foundation','18-47796553-44',9,'267-45235','tincidunt.donec.vitae@icloud.couk','245 Vel Road',19,'26138',3,0),(13,'Dieter','Houston','Hymenaeos Mauris Ut Corporation','44-85121656-87',7,'889-79876','sit.amet@yahoo.couk','4818 Pharetra St.',6,'30451',1,0),(14,'Kylee','Keith','Mollis Incorporated','48-22748142-87',9,'598-06312','vulputate.risus.a@aol.couk','Ap #260-2797 Dictum Avenue',5,'P1 7FH',3,0),(15,'Lance','Bowman','Vulputate Dui Corporation','30-77123333-45',9,'051-97816','sit.amet@google.edu','Ap #301-297 Rhoncus. Ave',1,'58622-574',1,0),(16,'Nathan','Kramer','Ante Ipsum Primis LLC','74-33487633-46',14,'502-11133','ut@yahoo.couk','548 Massa Av.',13,'6572',3,0),(17,'Anthony','Boyle','Sem Egestas Blandit LLP','68-92796694-16',6,'699-57528','risus.a@icloud.net','P.O. Box 313, 7697 Purus Avenue',16,'2634 XB',3,0),(18,'Chelsea','Bryant','Ut Sem Incorporated','77-47917593-04',11,'289-43536','nisl.sem@yahoo.org','Ap #244-4033 Varius Road',9,'37360',2,0),(19,'Jana','Higgins','Mollis Non Corporation','38-17558494-53',13,'716-58398','eros.non@google.couk','P.O. Box 918, 6366 Nec St.',8,'85413-0135',2,0),(20,'Adele','Odom','Magna LLC','08-05051134-58',4,'676-40452','commodo.auctor@icloud.couk','P.O. Box 497, 6833 A, Av.',9,'7145',2,0),(21,'Gregory','Peck','Aliquam Eu LLP','43-89455523-71',10,'231-27938','eu.tellus@aol.couk','429-4238 Morbi Road',10,'16450',1,0),(22,'Shaine','Burton','Mauris Blandit Limited','28-19610346-24',9,'528-85311','mollis@aol.com','P.O. Box 551, 9298 Molestie St.',12,'61663',2,0),(23,'Roth','Dunlap','Nonummy Ac Incorporated','53-84197861-48',8,'164-85087','pede@outlook.com','251-8769 Volutpat Rd.',9,'11029',2,0),(24,'Reed','Conrad','Egestas Lacinia Sed Associates','46-41584443-11',10,'753-69675','mus.aenean.eget@google.couk','134-1158 Vel Rd.',23,'9367',1,0),(25,'Renee','Slater','Leo Morbi Corp.','44-22935639-53',13,'903-65140','duis@hotmail.org','385-4705 Tellus. Av.',22,'3139',1,0),(26,'Dominic','Kim','Egestas A Inc.','62-57157916-82',11,'377-82904','sit.amet@hotmail.org','823-3471 Ut Rd.',16,'98-397',1,0),(27,'Jasmine','Pace','Nunc Industries','41-18020706-15',12,'714-23875','erat@outlook.couk','Ap #619-1860 Enim Avenue',8,'4597 VD',2,0),(28,'Lawrence','Mays','Sed Institute','35-83187346-27',7,'883-54331','tempor.est@protonmail.net','Ap #923-6445 Suspendisse Rd.',19,'30715',2,0),(29,'Abel','Buck','Morbi Neque Tellus LLP','18-36893169-69',5,'592-16727','turpis.nulla@outlook.ca','221-6271 Interdum Road',9,'5837',2,0),(30,'Rinah','Keith','Enim Limited','77-49741674-74',11,'357-15688','proin.vel@outlook.net','P.O. Box 639, 7532 Neque St.',10,'729456',2,0),(31,'Aristotle','Tyson','Mauris Id Sapien Incorporated','54-48631971-26',7,'626-74586','enim.nisl@hotmail.org','Ap #259-5083 Quisque Rd.',9,'989717',3,0),(32,'Calista','Albert','Turpis Nec Incorporated','26-17103643-41',6,'626-82062','magna.nec@outlook.com','Ap #676-4936 Ultrices Av.',7,'623565',2,0),(33,'Reagan','Aguilar','Neque Venenatis Institute','81-70105967-77',8,'483-37781','imperdiet.nec.leo@yahoo.ca','Ap #253-9818 Feugiat Rd.',21,'55020',2,0),(34,'Gage','Decker','Justo Nec Foundation','78-50229760-96',11,'041-41284','et.risus.quisque@protonmail.couk','P.O. Box 979, 2479 Erat Rd.',3,'7707',3,0),(35,'Natalie','Waters','Fusce PC','32-96377477-27',11,'724-28280','neque@yahoo.couk','121-7393 Vestibulum Rd.',3,'2665',2,0),(36,'Cleo','Duran','Elit Sed Corp.','38-86251022-34',11,'963-73133','luctus@icloud.couk','Ap #464-2076 Non, Avenue',22,'17557',3,0),(37,'Marshall','Stokes','Felis Nulla Tempor Foundation','31-84145519-32',2,'775-80921','nam.nulla@icloud.org','7437 Ultricies St.',6,'76837',2,0),(38,'Graham','Salas','Vitae PC','14-66640312-04',2,'142-06356','eu.eleifend@yahoo.org','881-1571 Molestie. Road',7,'36804',3,0),(39,'Steel','Hammond','Curabitur LLC','48-91666101-21',2,'071-20857','augue@icloud.net','824-7833 Varius Road',10,'37769',1,0),(40,'Lenore','Hunt','Feugiat Sed Industries','26-95118973-50',4,'496-44664','maecenas.mi@hotmail.edu','7109 Pharetra St.',14,'56302',2,0),(41,'Ferdinand','Ayala','Feugiat Sed Industries','10-56711771-45',9,'253-25973','vehicula.et@hotmail.net','9150 Dolor. Ave',22,'915173',2,0),(42,'Portia','Figueroa','Natoque Penatibus Industries','15-77785393-87',4,'547-15168','egestas@outlook.edu','605-8453 Lacus. Rd.',17,'635987',1,0),(43,'Jin','Snow','Velit Inc.','73-76257676-72',3,'295-28588','nonummy.ultricies.ornare@outlook.org','Ap #434-8048 Sed Av.',24,'4406',2,0),(44,'Kirk','Robinson','Nullam Velit PC','39-51851364-48',10,'337-36341','non@google.org','Ap #831-3000 Lorem Rd.',7,'573855',3,0),(45,'Phoebe','Orr','Turpis Associates','80-38541068-65',10,'906-17696','libero.proin@google.edu','269-5323 Pede, Road',22,'424458',2,0),(46,'Ulysses','Mathis','Tristique Neque Industries','33-25104824-75',4,'139-65850','suscipit.est.ac@hotmail.com','Ap #192-7123 Varius Av.',6,'737435',2,0),(47,'Clayton','Love','Parturient Institute','03-34233606-86',13,'513-51182','feugiat.lorem@hotmail.ca','291-6378 Et, Road',3,'B6J 6M0',1,0),(48,'Brenda','Glenn','Proin Vel Ltd','46-89238412-28',3,'419-48235','mauris@aol.net','364-2620 Vitae, Road',9,'23552',3,0),(49,'Stacey','Dudley','In Sodales Company','36-89472162-12',13,'674-51043','urna@protonmail.couk','Ap #604-9350 Vivamus Avenue',3,'8822',2,0),(50,'India','Summers','Eu Elit Nulla LLC','52-02595421-23',8,'053-32923','in.faucibus.morbi@outlook.edu','799-1932 Et St.',14,'44636-260',2,0),(51,'Caldwell','Rowe','Mi Enim Inc.','04-71384862-21',13,'744-33314','metus.urna@hotmail.org','Ap #214-4401 Sed Av.',18,'9404 LB',2,0),(52,'Ray','Kane','Feugiat Metus PC','22-10138621-51',2,'764-93735','diam.proin@protonmail.net','673-8465 Tempor St.',10,'73358',2,0),(53,'Kevin','Nicholson','Nec LLP','73-82298406-16',10,'710-44744','cubilia.curae.phasellus@aol.edu','1019 Lectus Road',10,'408676',1,0),(54,'Rowan','Jacobs','Pellentesque Habitant Corporation','66-45917154-51',6,'761-95715','sed.orci.lobortis@outlook.net','Ap #434-850 Eget Rd.',23,'49083',3,0),(55,'Otto','Bond','Velit LLP','68-85123446-43',7,'272-51687','interdum@icloud.couk','843-6640 Nisi Rd.',14,'S8 4FB',2,0),(56,'Lawrence','Green','Facilisis Suspendisse Commodo Corp.','74-61145276-33',10,'663-68371','duis.volutpat.nunc@yahoo.edu','P.O. Box 901, 5816 Vulputate Ave',1,'59488',2,0),(57,'Unity','Chen','Velit Dui Associates','36-11644043-61',13,'856-76877','duis.mi@google.couk','162-7266 Erat, Ave',2,'36543',1,0),(58,'Ashton','Dunn','Curabitur Egestas Nunc Corp.','51-66814223-48',7,'353-36933','lobortis.quis@aol.com','3508 Amet, Avenue',16,'356346',2,0),(59,'Kai','Rowe','Donec Porttitor Tellus Corporation','74-36824222-88',13,'143-37305','nunc.ac@yahoo.edu','Ap #312-6832 Quisque St.',8,'84871',3,0),(60,'Francesca','Yang','Nulla Ante Iaculis Corporation','04-12765521-89',12,'672-32148','ut.ipsum@aol.edu','225-4980 Integer Road',14,'94825',2,0),(61,'Ursa','Cohen','Eleifend Nunc Risus Consulting','45-33138162-63',6,'513-76826','sed.pede@google.ca','Ap #677-7578 Purus, Street',20,'604532',3,0),(62,'Cassandra','Hoffman','Quis Pede Suspendisse LLP','22-52096166-26',1,'122-21342','tellus@yahoo.edu','209-7980 Amet Street',20,'27899',2,0),(63,'Brady','Higgins','Tincidunt Corp.','13-42793722-38',5,'649-58786','egestas@outlook.net','961-5937 Metus. St.',12,'4452',3,0),(64,'Allegra','Velez','Nam Ltd','58-66568993-31',12,'748-64362','maecenas@yahoo.couk','Ap #900-5507 Aliquam St.',7,'359502',2,0),(65,'Jana','Stokes','Ut Quam Institute','64-13640730-94',7,'588-26631','tellus.aenean.egestas@icloud.net','4670 Odio. Street',8,'61747-8961',3,0),(66,'Gray','Livingston','Quisque Incorporated','16-45987637-17',10,'488-11605','iaculis.enim@outlook.net','Ap #637-6308 Neque. Avenue',22,'53191',2,0),(67,'Kasper','Weiss','Dolor Donec Industries','03-02645455-25',3,'378-37518','penatibus.et@google.net','Ap #992-5301 Orci St.',16,'626267',2,0),(68,'Matthew','Shaw','Libero PC','38-86352546-77',6,'396-24666','nisl.elementum@outlook.edu','895-8814 Nonummy Avenue',19,'845678',3,0),(69,'Ivor','Carver','Ut Nulla Cras Corp.','95-53311349-05',12,'813-93280','arcu@yahoo.couk','Ap #887-7078 Eleifend Street',11,'2656',2,0),(70,'Nathan','Mcdowell','Sem Egestas Company','21-16261776-28',7,'237-65239','a.malesuada@protonmail.edu','288-8012 Tellus Av.',11,'42248',3,0),(71,'Quentin','Foreman','Ut Cursus Luctus Industries','28-94215047-62',14,'352-99634','aenean@hotmail.net','Ap #863-5909 Ipsum St.',12,'234157',1,0),(72,'Andrew','Padilla','Aliquam Nec Enim Industries','74-36854132-88',5,'551-30749','nibh.phasellus.nulla@google.couk','P.O. Box 106, 2784 Magna St.',5,'44424',1,0),(73,'Dean','Small','Sodales Corporation','61-82438477-07',13,'806-27661','tempor.diam@icloud.couk','Ap #700-3010 Ipsum St.',5,'1496',1,0),(74,'Aladdin','Conway','Non Corporation','65-43592647-57',13,'522-54125','dui.nec@protonmail.net','Ap #661-1978 Consectetuer Road',8,'712372',3,0),(75,'Germane','Knapp','Nam Consequat Dolor Inc.','56-41818315-06',10,'320-64443','in@outlook.ca','498-9688 Aliquam Rd.',6,'657853',2,0),(76,'Kato','Harmon','Nulla Aliquet Proin PC','52-28728107-88',5,'688-82366','lorem@hotmail.org','P.O. Box 301, 6188 Et Avenue',4,'22377',3,0),(77,'Yoshio','Mcintyre','Dolor Fusce Feugiat Ltd','76-32725545-07',3,'775-90435','arcu@icloud.org','Ap #191-9602 Duis Rd.',5,'6958',2,0),(78,'Troy','Nielsen','Habitant Morbi Incorporated','22-55711934-85',12,'856-53688','augue.scelerisque.mollis@icloud.edu','244-7004 Laoreet Road',5,'93-582',2,0),(79,'Keely','Collins','Libero Industries','30-36366681-13',11,'628-86667','ornare@aol.net','453-6483 Semper Street',11,'22187',3,0),(80,'Keelie','Harper','Scelerisque Industries','48-85652861-63',9,'592-03651','natoque.penatibus@aol.edu','Ap #758-8244 Phasellus Avenue',2,'17548',3,0),(81,'William','Harmon','In Condimentum Ltd','53-88158299-62',6,'465-50868','magna.cras@protonmail.net','Ap #331-635 Turpis Rd.',12,'2937 JQ',1,0),(82,'Edward','Mclean','Mauris Magna Ltd','93-45167879-52',3,'637-53464','mattis@google.ca','Ap #571-5458 Gravida St.',8,'FM89 3PV',3,0),(83,'Abraham','Hubbard','Ultricies Adipiscing Consulting','74-64178325-91',12,'365-58328','sapien.cras.dolor@hotmail.org','Ap #554-8307 Non Street',4,'06035',2,0),(84,'Alan','Patton','Ut LLC','87-48175814-75',11,'534-21812','vitae@yahoo.net','389-6302 Proin St.',18,'83474',2,0),(85,'Joy','Gross','Pellentesque Ut Ltd','55-68551515-47',2,'290-81941','ultricies.sem@aol.net','365-9841 Tempus, Av.',14,'737220',2,0),(86,'Malik','Waller','Interdum Libero Dui Inc.','06-07454421-45',9,'268-83050','ornare.sagittis@hotmail.ca','Ap #277-8139 Quis Street',21,'27537',2,0),(87,'Gillian','Odom','Metus In Nec LLP','67-47772754-17',2,'381-33582','ac@aol.couk','509-4424 Magna, Av.',21,'N6A 5K3',2,0),(88,'Xyla','George','Tellus Lorem Eu Foundation','87-95226060-54',3,'153-49899','aenean@hotmail.edu','2677 Faucibus Ave',17,'526763',3,0),(89,'Clio','Wise','Odio Sagittis LLC','82-76524393-31',3,'813-79845','eu.ultrices@protonmail.ca','427-281 Massa. Rd.',3,'1241',3,0),(90,'Rana','Benjamin','Mollis Phasellus Corporation','71-42850385-24',11,'426-54815','molestie.sodales@hotmail.com','9848 Ut Street',20,'7649',2,0),(91,'Calvin','Malone','Nunc Quis LLC','19-66131426-57',8,'121-22115','nunc.ac.mattis@yahoo.net','Ap #193-9304 Nisi Av.',24,'775348',3,0),(92,'Cyrus','Ochoa','Feugiat Corporation','68-40806117-15',8,'177-63963','condimentum.donec@protonmail.ca','P.O. Box 267, 5906 Vulputate Ave',14,'5535',3,0),(93,'Berk','Mooney','Fringilla Porttitor LLP','62-84837577-72',5,'075-14621','interdum.enim@protonmail.org','3143 Consequat Avenue',15,'519556',3,0),(94,'Evan','Franklin','Aliquam Fringilla Company','68-38339523-51',1,'263-58931','neque.et@protonmail.org','793-9499 Eget St.',22,'84326-6582',2,0),(95,'Aline','Ayala','Nec Tempus Limited','21-34577202-12',11,'278-83512','sem.vitae.aliquam@yahoo.org','3951 Lobortis Rd.',5,'8553',1,0),(96,'Eve','Garcia','Molestie Dapibus Corp.','26-44186960-95',13,'335-55746','magna.sed@yahoo.org','P.O. Box 687, 8190 Tortor, Ave',12,'8632',2,0),(97,'Holmes','David','Et Magnis Dis Inc.','22-17687787-46',11,'709-11812','id@outlook.com','9699 Malesuada St.',10,'C65 8ES',3,0),(98,'Francis','Mitchell','Mauris Blandit Institute','36-78289183-09',7,'919-19662','primis.in.faucibus@yahoo.net','8638 Risus St.',14,'25467',3,0),(99,'Kuame','Stanton','Et Magnis Incorporated','51-65465414-74',10,'585-13373','tellus.non@yahoo.edu','Ap #706-2892 Lorem, Av.',8,'23-664',3,0),(100,'Leroy','Coleman','Eget Odio Aliquam Corp.','43-00177194-12',7,'542-75802','a.dui@outlook.couk','Ap #558-180 Aliquam Road',21,'08762',2,0);

UNLOCK TABLES;

--
-- Table structure for table `condicioniva`
--

DROP TABLE IF EXISTS `condicioniva`;

CREATE TABLE `condicioniva` (
  `idcondicioniva` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idcondicioniva`),
  UNIQUE KEY `idcondicioniva_UNIQUE` (`idcondicioniva`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `condicioniva`
--

LOCK TABLES `condicioniva` WRITE;

INSERT INTO `condicioniva` VALUES (1,'IVA Responsable Inscripto'),(2,'IVA Responsable no Inscripto'),(3,'IVA no Responsable'),(4,'IVA Sujeto Exento'),(5,'Consumidor Final'),(6,'Responsable Monotributo'),(7,'Sujeto no Categorizado'),(8,'Proveedor del Exterior'),(9,'Cliente del Exterior'),(10,'IVA Liberado Ley N 19.640'),(11,'IVA Responsable Inscripto  Agente de Percepc'),(12,'Peque¤o Contribuyente Eventual'),(13,'Monotributista Social'),(14,'Pequeño Contribuyente Eventual Social');

UNLOCK TABLES;

--
-- Table structure for table `detalleproduccion`
--

DROP TABLE IF EXISTS `detalleproduccion`;

CREATE TABLE `detalleproduccion` (
  `iddetalleproduccion` int NOT NULL AUTO_INCREMENT,
  `idarticulo` int DEFAULT NULL,
  `idinsumo` int DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `ordenproceso` int DEFAULT NULL,
  PRIMARY KEY (`iddetalleproduccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `detalleproduccion`
--

LOCK TABLES `detalleproduccion` WRITE;

UNLOCK TABLES;

--
-- Table structure for table `familia`
--

DROP TABLE IF EXISTS `familia`;

CREATE TABLE `familia` (
  `idfamilia` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`idfamilia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `familia`
--

LOCK TABLES `familia` WRITE;

INSERT INTO `familia` VALUES (1,'Varios'),(2,'Caños'),(3,'Pinturas');

UNLOCK TABLES;

--
-- Table structure for table `insumos`
--

DROP TABLE IF EXISTS `insumos`;

CREATE TABLE `insumos` (
  `idinsumo` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `unidadmedida` enum('KILOS','METROS','UNIDAD','LITROS') CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'METROS',
  `familia` int DEFAULT '1',
  `stock` float DEFAULT NULL,
  `stockcritico` float DEFAULT '3',
  PRIMARY KEY (`idinsumo`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Esta tabla guarda los insumos para la fabricación de las máquinas	';


--
-- Dumping data for table `insumos`
--

LOCK TABLES `insumos` WRITE;

INSERT INTO `insumos` VALUES (1,'CAÑO 80X40','METROS',2,10,3),(2,'CAÑO 50X50','METROS',2,10,3),(3,'CAÑO 45X45','METROS',2,10,3),(4,'CAÑO 40X40','METROS',2,10,3),(5,'CAÑO 35X35','METROS',2,10,3),(6,'CAÑO DIAM 1','METROS',2,10,3),(7,'CAÑO DIAM 3/4\"','METROS',2,10,3),(8,'CAÑO DIAM 32','METROS',2,10,3),(9,'CAÑO DIAM 44','METROS',2,10,3),(10,'BARRA DIAM 15','METROS',1,10,3),(11,'BARRA DIAM 20','METROS',1,10,3),(12,'BARRA DIAM 28','METROS',1,10,3),(13,'PLANCHUELA 38X3','METROS',1,10,3),(14,'PLANCHUELA 44X3','METROS',1,10,3),(15,'PLANCHUELA 50X3','METROS',1,10,3),(16,'ANGULO 25X3','METROS',1,10,3),(17,'ANGULO 50X3','METROS',1,10,3),(18,'RODAMIENTOS','UNIDAD',1,10,3),(19,'REGATONES','UNIDAD',1,10,3),(20,'LINGOTES','UNIDAD',1,10,3),(21,'CABLE','METROS',1,10,3),(22,'PRENSACABLES','UNIDAD',1,10,3),(23,'GUARDACABOS','UNIDAD',1,10,3),(24,'POLEAS PVC 90MM','UNIDAD',1,10,3),(25,'PINTURA','LITROS',1,10,3),(26,'THINNER','LITROS',1,10,3),(27,'Tuerquita de Prueba','UNIDAD',1,150,8),(28,'Prueba de Alta','UNIDAD',1,150,12);

UNLOCK TABLES;

--
-- Table structure for table `localidad`
--



--
-- Dumping data for table `localidad`
--


--
-- Table structure for table `pedidodetalle`
--



CREATE TABLE `pedidodetalle` (
  `idpedidodetalle` int NOT NULL AUTO_INCREMENT,
  `idpedido` int NOT NULL,
  `idarticulo` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio` double DEFAULT NULL,
  `observaciones` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`idpedidodetalle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `pedidodetalle`
--


--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `idpedido` int NOT NULL AUTO_INCREMENT,
  `idcliente` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `observaciones` longtext CHARACTER SET utf8 COLLATE utf8_spanish2_ci,
  `fechaentrega` date DEFAULT NULL,
  `registro` timestamp NULL DEFAULT NULL,
  `completo` int DEFAULT '0',
  `cancelado` int DEFAULT '0',
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` VALUES (1,1,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(2,0,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(3,1,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(4,90,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(5,55,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(6,106,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(7,24,'0000-00-00','kjasnkdfjnksjdnfkjasnhdklf','0000-00-00',NULL,1,0),(8,106,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(9,106,'0000-00-00','Entegar urgente','0000-00-00',NULL,1,0),(10,106,'2022-02-01','Entegar urgente','2022-03-01',NULL,1,0),(11,36,'2022-08-01','Entegar urgentegggfddg','2022-12-01',NULL,0,0),(12,92,'2022-02-01','Entegar urgente','2022-03-05',NULL,0,0),(13,22,'2022-02-01','Entegar urgente','2022-02-28',NULL,0,0),(14,21,'2022-02-01','Entegar urgente','2022-03-05',NULL,0,0);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `pedidosclientes`
--


--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;

CREATE TABLE `provincia` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `codigo31662` char(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo31662_UNIQUE` (`codigo31662`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `provincia`
--

LOCK TABLES `provincia` WRITE;

INSERT INTO `provincia` VALUES (1,'Ciudad Autónoma de Buenos Aires (CABA)','AR-C'),(2,'Buenos Aires','AR-B'),(3,'Catamarca','AR-K'),(4,'Córdoba','AR-X'),(5,'Corrientes','AR-W'),(6,'Entre Ríos','AR-E'),(7,'Jujuy','AR-Y'),(8,'Mendoza','AR-M'),(9,'La Rioja','AR-F'),(10,'Salta','AR-A'),(11,'San Juan','AR-J'),(12,'San Luis','AR-D'),(13,'Santa Fe','AR-S'),(14,'Santiago del Estero','AR-G'),(15,'Tucumán','AR-T'),(16,'Chaco','AR-H'),(17,'Chubut','AR-U'),(18,'Formosa','AR-P'),(19,'Misiones','AR-N'),(20,'Neuquén','AR-Q'),(21,'La Pampa','AR-L'),(22,'Río Negro','AR-R'),(23,'Santa Cruz','AR-Z'),(24,'Tierra del Fuego','AR-V');

UNLOCK TABLES;

--
-- Table structure for table `timestamps`
--

DROP TABLE IF EXISTS `timestamps`;

CREATE TABLE `timestamps` (
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `timestamps`
--


--
-- Table structure for table `transportes`
--


CREATE TABLE `transportes` (
  `idtransporte` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cuit` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `localidad` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `provincia` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idtransporte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Dumping data for table `transportes`
--

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '2019-01-01 00:00:00',
  `habilitado` int NOT NULL DEFAULT '1' COMMENT 'El nivel 0 es usuario comun. nO tiene acceso a la configuraci',
  `nivel` int NOT NULL DEFAULT '2',
  `area` int NOT NULL DEFAULT '1',
  `depto` int NOT NULL DEFAULT '1',
  `codarea` varchar(3) NOT NULL DEFAULT 'AAA',
  `coddepto` varchar(3) NOT NULL DEFAULT 'AAA',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'danilo','c8d547c9387ad3df71118c9c759e00d1','Danilo Leyendeker','dleyendeker@gmail.com','2019-01-01 00:00:00',1,1,1,1,'1','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mcelitem_mcelitemachines'
--

--
-- Dumping routines for database 'mcelitem_mcelitemachines'
--

--
-- Final view structure for view `pedidosclientes`
--