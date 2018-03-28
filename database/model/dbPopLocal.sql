-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: minds
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
-- Dumping data for table `association`
--

LOCK TABLES `association` WRITE;
/*!40000 ALTER TABLE `association` DISABLE KEYS */;
INSERT INTO `association` VALUES (1,'Lab Coordinator'),(2,'Postdoctoral Researcher'),(3,'PhD Student'),(4,'Masters Student'),(5,'Undergraduate Student'),(6,'Collaborator');
/*!40000 ALTER TABLE `association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `paper`
--

LOCK TABLES `paper` WRITE;
/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `paper_tag`
--

LOCK TABLES `paper_tag` WRITE;
/*!40000 ALTER TABLE `paper_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `paper_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,4,'Best Thesis Award','<p>MINDS contributor <a href=\"/team/30/Vitor_Nazário_Coelho\">Victor Nazário</a> received an award for best thesis in 2017. Victor\'s work, entitled \"Multi-objective microgrid storage planning problem using plug-in electric vehicles\", was developd during Victor\'s doctorate degree at PPGEE-UFMG and advised by Professor <a href=\"/team/1/Frederico_Gadelha_Guimarães\">Frederico Gadelha</a>.</p>  <p>Victor\'s work describes a energy storage planning problem with multiple objectives, using plug-in electrical vehicles as storage units. The problem considers several vehicles and a independent energy distribution community (microgrid), consisting in small houses in residential areas with different renewable energy sources. The objective of the work is to minimize costs and battery use, among other aspects. The author uses probabilistic forecasting models with variables such as wind and solar production, energy usage and pricing. In the study, one of the conclusions is that, minimizing costs by itself is counterproductive with regards to the system robustness, increasing risks.</p>  <p>Nazário is a Control and Automation Engineer from Federal University of Outro Preto (UFOP), where he had his first contact with optimization. He went straight for the PhD degree on Electrical Engineering at UFMG and begun connecting optimization with the electric energy grid evolution, so they turn into intelligent and uncentralized machines. He finished the PhD in two years and three months and was one of the youngest brazilian doctors to enter a post-doc program at Faperj. He co-orients post-grad students, organizes international scientific events and develops low cost embbeded prototypes with his team.</p>','images/posts/vencedores-Teses.jpg','2017-12-07 15:51:00','2017-12-07 15:51:00',1),(2,4,'Fuzzy Time Series python library published','<p>PyFTS, the fuzzy time series python library developed by fellow MINDS researcher <a href=\"/team/3/Petrônio_Cândido_de_Lima_e_Silva\">Petrônio Cândido</a> was published today on the package manager pip. The library offers many FTS capabilities and is under active development.</p>','images/posts/time-series.png','2017-12-07 15:50:00','2017-12-07 15:51:00',1),(3,4,'Post-doc at Université Paris-Est Créteil Val-de-Marne','<p>Professor <a href=\"/team/1/Frederico_Gadelha_Guimarães\">Frederico Gadelha</a>, one of MINDS founding member, was accepted for a post-doc scholarship at UPEC, in Paris. Soon he will be enjoying croissants and macarons under the Eifell tower (besides researching at a prestigious university, of course). </p>','images/posts/upec.jpg','2017-12-07 15:49:00','2017-12-07 15:51:00',1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,'Data Visualization in Many Objective Optimization Problems (MaOPs)','Data Visualization in high-dimensional spaces is a great challenge and an important tool for decision-making.  The method of Aggregation Trees was an important step in visualization in MaOPs, allowing a greater understanding of the problem. This method is based on the sequential aggregation of objectives, which is visually represented into a tree, based on a measure of conflict between pairs of (groups of) objectives. The method allows the visualization of a hierarchy for aggregation of the objectives, with possibility to create new constraints for the problem or reduce the number of objectives in a further analysis (Silva et al, 2016).','2014-12-01 00:00:00',NULL,'2018-03-28 00:00:00','2018-03-28 00:00:00',1);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project_image`
--

LOCK TABLES `project_image` WRITE;
/*!40000 ALTER TABLE `project_image` DISABLE KEYS */;
INSERT INTO `project_image` VALUES (1,'Chord Diagram for a 12 objective Optimization problem',1,'projects_images/project_1/Chord_01.png',1),(2,'Chord Diagram for a 3 objective Optimization problem',2,'projects_images/project_1/Chord_02.png',1),(3,'Angular Mapping for points in five dimensional space',3,'projects_images/project_1/nav_new_transp.png',1),(4,'Integrated Visualization Tool for a 5 objective optimization problem',4,'projects_images/project_1/M2_P05_5obj_CONE_V3.png',1),(5,'Integrated Visualization Tool for a 5 objective optimization problem',5,'projects_images/project_1/M2_P3_5obj_LWV_V2.png',1),(6,'Integrated Visualization Tool for a 10 objective optimization problem',6,'projects_images/project_1/M2_P05_10obj_LWV_V1.png',1);
/*!40000 ALTER TABLE `project_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project_tag`
--

LOCK TABLES `project_tag` WRITE;
/*!40000 ALTER TABLE `project_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project_user`
--

LOCK TABLES `project_user` WRITE;
/*!40000 ALTER TABLE `project_user` DISABLE KEYS */;
INSERT INTO `project_user` VALUES (1,1,2),(1,23,1);
/*!40000 ALTER TABLE `project_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `resource`
--

LOCK TABLES `resource` WRITE;
/*!40000 ALTER TABLE `resource` DISABLE KEYS */;
INSERT INTO `resource` VALUES (1,'AT.m','MATLAB script for the Aggregation Tree','downloads/AT.m',1,23,'2018-03-28 00:00:00','2018-03-28 00:00:00'),(2,'CAP_vis.R','R script for the Integrated Visualization Tool','downloads/CAP_vis.R',1,23,'2018-03-28 00:00:00','2018-03-28 00:00:00');
/*!40000 ALTER TABLE `resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Frederico Gadelha Guimarães',NULL,'Dr. Frederico G. Guimarães has been working with the Department of Electrical Engineering at UFMG, Brazil, since 2010. He received the B.Eng., M.Sc., and Ph.D. degrees in Electrical Engineering from Universidade Federal de Minas Gerais (UFMG), Brazil, in 2003, 2004, and 2008 respectively. He developed part of his Ph.D. as a Visiting Student at McGill University, Montreal QC, from May 2006 to May 2007. He worked with the Department of Computer Science at Universidade Federal de Ouro Preto (UFOP), Brazil, from 2008 to 2010. His main research interests are in the field of computational intelligence, time series forecasting, multi-objective optimization, evolutionary computation, and hybrid algorithms. Dr. Guimarães is a member of the IEEE Computational Intelligence Society, the SBIC (Brazilian Society of Computational Intelligence), and founding member of the INCOSE Brazilian Chapter.','frederico.g.guimaraes@gmail.com','+55 31 3409-3419','Brazil ','http://lattes.cnpq.br/2472681535872194','https://www.researchgate.net/profile/Frederico_Guimaraes3',NULL,1,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Frederico Gadelha Guimaraes.gif',1,NULL,NULL,NULL),(2,'Cristiano Leite Castro',NULL,'Cristiano Leite de Castro received a B.Sc. degree in Computer Science (2001) from Federal University of Lavras (UFLA), a M.Sc. and Ph.D degree (2004 and 2011) in Communications and Computer Engineering from Federal University of Minas Gerais (UFMG). Since 2014, he is with Electrical Engineering Department at UFMG, where he has taught and supervised students in Undergraduate, Master and Ph.D degree levels. His interest involves theoretical aspects and applications of machine learning and data science. Within these broad areas, he has been researching on the following subjects: time-series clustering and forecasting, pattern classification with unbalanced and non-stationary (concept drift) data and design of incremental machine learning algorithms.','crislcastro@ufmg.br','+55 31 3409-3423','Brazil ','http://lattes.cnpq.br/7892966809901738',NULL,'http://somos.ufmg.br/professor/cristiano-leite-de-castro',1,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Cristiano Leite Castro.jpg',1,NULL,NULL,NULL),(3,'Petrônio Cândido de Lima e Silva',NULL,NULL,'petronio.candido@gmail.com',NULL,'Brazil ','http://lattes.cnpq.br/2433080030239869',NULL,NULL,0,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Petronio Candido de Lima e Silva.jpg',1,NULL,NULL,NULL),(4,'Gustavo Linhares Vieira',NULL,NULL,'gustavolvieira@gmail.com',NULL,'Brazil ','http://lattes.cnpq.br/2966882827856012',NULL,NULL,1,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Gustavo Linhares Vieira.gif',1,NULL,NULL,NULL),(5,'Hossein Javedani Sadaei',NULL,NULL,'h.javedani@gmail.com',NULL,'Iran','http://lattes.cnpq.br/0800395600787744',NULL,NULL,0,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Hossein Javedani Sadaei.jpg',1,NULL,NULL,NULL),(6,'Maria Victoria Ramirez Martinez',NULL,NULL,'mvictoriaramirez@utp.edu.co',NULL,'Colombia',NULL,NULL,NULL,0,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Maria Victoria Ramirez.jpg',1,NULL,NULL,'Universidad Tecnologica de Pereira, Colombia'),(7,'Roozbeh Haghnazar Koochaksaraei',NULL,NULL,'roozbeh.haghnazar@gmail.com',NULL,'Iran','http://lattes.cnpq.br/5764219465558889',NULL,NULL,0,'2017-12-01 20:23:45','2017-12-01 20:23:45','images/users/Roozbeh Haghnazar Koochaksaraei.gif',1,NULL,NULL,NULL),(8,'Miri Weiss Cohen',NULL,NULL,'miri@braude.ac.il',NULL,'Israel',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Miri Weiss Cohen.jpeg',1,NULL,NULL,'Department of Software Engineering, ORT Braude College of Engineering'),(9,'David Alister Lowther',NULL,NULL,'david.lowther@mcgill.ca',NULL,'Canada',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/David Alister Lowther.jpg',1,NULL,NULL,'Department of Electrical and Computer Engineering, McGill University'),(10,'Ramón Alfonso Gallego Rendón',NULL,NULL,'ragr@utp.edu.co',NULL,'Colombia',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45',NULL,1,NULL,NULL,'Universidad Tecnologica de Pereira'),(11,'António Gaspar-Cunha',NULL,NULL,'agc@dep.uminho.pt',NULL,'Portugal',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Antonio Gaspar-Cunha.jpg',1,NULL,NULL,'Departamento de Engenharia de Polímeros, Universidade do Minho'),(12,'Marcone Jamilson Freitas Souza',NULL,NULL,'marcone@iceb.ufop.br',NULL,'Brazil',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Marcone Jamilson Freitas Souza.jpg',1,NULL,NULL,'Departamento de Computação, Universidade Federal de Ouro Preto'),(13,'Patrick Siarry',NULL,NULL,'siarry@u-pec.fr',NULL,'France',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Patrick Siarry.jpg',1,NULL,NULL,'LISSI, Université Paris-Est Créteil (UPEC)'),(14,'Sílvia Grasiella Moreira Almeida',NULL,NULL,'silvia.almeida@ifmg.edu.br',NULL,'Brazil',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Silvia Grasiella Moreira Almeida.gif',1,NULL,NULL,'Instituto Federal Minas Gerais – Campus Ouro Preto'),(15,'Agnaldo José da Rocha Reis',NULL,NULL,'agnreis@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/0080159809125998',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Agnaldo Jose da Rocha Reis.gif',1,NULL,NULL,'Escola de Minas, Universidade Federal de Ouro Preto'),(16,'Rodrigo César Pedrosa Silva',NULL,NULL,'rcpsilva@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/1368091094952755',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Rodrigo Cesar Pedrosa Silva.gif',1,NULL,NULL,NULL),(17,'Reza Javanmard Alitappeh',NULL,NULL,'rezajavanmard@ufmg.br',NULL,'Iran','http://lattes.cnpq.br/2364052834901045',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Reza Javanmard Alitappeh.jpg',1,NULL,NULL,NULL),(18,'Rúbia Reis Guerra',NULL,NULL,'rubiareisg@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/7107958466448878',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Rubia Reis Guerra.jpg',1,NULL,NULL,NULL),(19,'Igor Ferreira de Andrade',NULL,NULL,'igor_ftn@hotmail.com',NULL,'Brazil','http://lattes.cnpq.br/1372320504248915',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Igor Ferreira de Andrade.gif',1,NULL,NULL,NULL),(20,'Marcos Antonio Alves',NULL,NULL,'m.voicer@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/4636940519958225',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Marcos Antonio Alves.jpg',1,NULL,NULL,NULL),(21,'Tamires Martins Rezende',NULL,NULL,'inc.tamires@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/7705199625744561',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Tamires Martins Rezende.jpeg',1,NULL,NULL,NULL),(22,'Carlos Alberto Severiano Junior',NULL,NULL,'carlossjr@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/8804024128339716',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Carlos Alberto Severiano Junior.jpg',1,NULL,NULL,NULL),(23,'Ivan Reinaldo Meneghini',NULL,NULL,'irmeneghini@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/1255184237843830',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Ivan Reinaldo Meneghini.jpg',1,NULL,NULL,NULL),(24,'Luciano Perdigão Cota',NULL,NULL,'lucianoufop@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/8381522986161301',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Luciano Perdigao Cota.jpg',1,NULL,NULL,NULL),(25,'Pedro Leal Pazzini da Silva',NULL,NULL,'pedropazzini@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/0692962673609711',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Pedro Leal Pazzini da Silva.jpg',1,NULL,NULL,NULL),(26,'Kossar Jeddi Saravi',NULL,NULL,'witkjs@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/5059340090465930',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Kossar Jeddi Saravi.jpg',1,NULL,NULL,NULL),(27,'João Batista Queiroz Zuliani',NULL,NULL,'\njoaoz@ymail.com',NULL,'Brazil','http://lattes.cnpq.br/1981957756218506',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Joao Batista Queiroz Zuliani.gif',1,NULL,NULL,NULL),(28,'Cidiney José da Silva',NULL,NULL,'cidiney@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/3174768940368325',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Cidiney Jose da Silva.gif',1,NULL,NULL,NULL),(29,'André Siqueira Ruela',NULL,NULL,'andrebardo@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/1323670896484540',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Andre Siqueira Ruela.jpg',1,NULL,NULL,NULL),(30,'Vitor Nazário Coelho',NULL,NULL,'vncoelho@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/8931047228585695',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Vitor Nazario Coelho.gif',1,NULL,NULL,NULL),(31,'Fernando Bernardes de Oliveira',NULL,NULL,'fboliveira25@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/9843467186933551',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Fernando Bernardes de Oliveira.gif',1,NULL,NULL,NULL),(32,'Fernando Cortez Sica',NULL,NULL,'sica@iceb.ufop.br',NULL,'Brazil','http://lattes.cnpq.br/4355515204008219',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Fernando Cortez Sica.jpg',1,NULL,NULL,NULL),(33,'Shakoor Muhammad',NULL,NULL,'shakoormath@gmail.com',NULL,NULL,NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45',NULL,1,NULL,NULL,NULL),(34,'Frederico Augusto de Cezar Almeida Gonçalves',NULL,NULL,'zepfred@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/5153981776563691',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45',NULL,1,NULL,NULL,NULL),(35,'Ricardo Sérgio Prado',NULL,NULL,'ricardo.prado@ifmg.edu.br',NULL,'Brazil','http://lattes.cnpq.br/2464812325462351',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45',NULL,1,NULL,NULL,NULL),(36,'Alan Robert Resende de Freitas',NULL,NULL,'alandefreitas@gmail.com',NULL,'Brazil','http://lattes.cnpq.br/8363796105361376',NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Alan Robert Resende de Freitas.gif',1,NULL,NULL,NULL),(38,'Rasul Enayatifar',NULL,NULL,'r.enayatifar@gmail.com',NULL,NULL,NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45','images/users/Rasul Enayatifar.jpg',1,NULL,NULL,NULL),(39,'Marcus Vinícius de Freitas Diadelmo',NULL,NULL,'marcusdiadelmo@gmail.com ',NULL,'Brazil',NULL,NULL,NULL,0,'2017-12-12 20:23:45','2017-12-12 20:23:45',NULL,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_association`
--

LOCK TABLES `user_association` WRITE;
/*!40000 ALTER TABLE `user_association` DISABLE KEYS */;
INSERT INTO `user_association` VALUES (1,1,1,'2014-01-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(2,2,1,'2014-01-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(3,3,3,'2015-07-01 20:23:45',NULL,0,'Um modelo preditivo nebuloso-estocástico',1,NULL,NULL,NULL),(4,4,4,'2016-07-01 20:23:45',NULL,0,'Planejamento de viagens com algoritmos de busca em grafos em tempo real',1,NULL,NULL,NULL),(5,5,2,'2017-11-01 20:23:45',NULL,0,'A Continuously Adaptive Forex Auto Trading Robot Based on Combination of Scalable Fuzzy Time Series and Machine Learning Algorithms',1,NULL,NULL,NULL),(6,6,3,'2016-01-01 20:23:45','2016-12-01 20:23:45',1,NULL,NULL,NULL,NULL,NULL),(7,6,6,'2016-12-02 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(8,7,2,'2013-06-01 20:23:45','2017-06-23 20:23:45',0,'Qualitative analysis in many-objective optimization with visualization methods',1,NULL,NULL,NULL),(9,8,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(10,9,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(11,10,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(12,11,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(13,12,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(14,13,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(15,14,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(16,15,6,'2014-06-01 20:23:45',NULL,0,NULL,NULL,NULL,NULL,NULL),(17,16,2,'2017-12-01 20:23:45',NULL,0,'Algoritmos de aprendizado incremental em séries temporais',1,NULL,NULL,NULL),(18,17,2,'2017-09-01 20:23:45',NULL,0,'Multi-Objective Search Algorithm for Multi-Agent Path Planning Problem',1,NULL,NULL,NULL),(19,18,5,'2017-08-01 20:23:45',NULL,0,'Algoritmos de aprendizado de máquina no contexto de big data',1,NULL,NULL,NULL),(20,19,5,'2018-03-01 20:23:45',NULL,0,'Estudo e desenvolvimento de algoritmos genéticos para problemas de otimização robusta em engenharia elétrica',1,NULL,NULL,NULL),(21,20,4,'2016-03-01 20:23:45',NULL,0,'Estudo sobre métodos de tomada de decisão com incertezas',1,NULL,NULL,NULL),(22,21,3,'2017-08-01 20:23:45',NULL,0,'Desenvolvimento de um Sistema de Reconhecimento Automático para a Língua Brasileira de Sinais Utilizando Técnicas de Inteligência e Visão Computacional',1,NULL,NULL,NULL),(23,22,3,'2017-05-01 20:23:45',NULL,0,'Predição integrada espaço-temporal de múltiplas séries temporais de energia solar. ',1,NULL,NULL,NULL),(24,23,3,'2014-08-01 20:23:45',NULL,0,'Algoritmo Coevolucionário Competitivo Aplicado ao Problema de Otimização Multiobjetivo Robusta',1,NULL,NULL,NULL),(25,24,3,'2014-07-01 20:23:45',NULL,0,'Abordagens Exatas e Heurísticas para o Problema de Sequenciamento em Máquinas Paralelas Não Relacionadas com Tempos de Preparação',1,NULL,NULL,NULL),(26,25,4,'2015-03-01 20:23:45','2016-12-23 20:23:45',0,'Agrupamento de Séries Temporais de Consumo de Carga',2,NULL,1,NULL),(27,26,3,'2013-09-13 20:23:45','2017-09-13 20:23:45',0,'New Approaches for Multi-agent Multi-objective Path Planning and Exploration',1,NULL,NULL,NULL),(28,27,3,'2012-02-03 20:23:45','2016-02-03 20:23:45',0,'Uma Metodologia Multiobjetivo para Otimização Topológica',1,NULL,8,NULL),(29,28,3,'2012-06-03 20:23:45','2016-06-03 20:23:45',0,'Um Método Híbrido para Predição de Séries Temporais no Contexto de Smart Grids',1,NULL,NULL,NULL),(30,29,3,'2012-12-22 20:23:45','2016-12-22 20:23:45',0,'Geração Procedural de Conteúdo em Jogos MMO-RPG via Busca Evolucionária',NULL,NULL,NULL,NULL),(31,30,3,'2016-04-25 20:23:45','2016-04-25 20:23:45',0,'Multi-objective Microgrid Storage Planning Problem Using Plug-in Electric Vehicles',1,NULL,NULL,NULL),(32,31,3,'2011-12-09 20:23:45','2015-12-09 20:23:45',0,'Cooperative Coevolutionary Models for the Multi-Depot Vehicle Routing Problem',1,NULL,NULL,NULL),(33,32,3,'2011-09-04 20:23:45','2015-09-04 20:23:45',0,'Uma Arquitetura Híbrida para Sistemas Cognitivos e sua Aplicação em Prognóstico de Falhas em Transformadores de Potência',1,NULL,NULL,'Ricardo Oliveira Duarte'),(34,33,3,'2011-07-16 20:23:45','2015-07-16 20:23:45',0,'An infeasibility certificate for nonlinear programming based on Pareto criticality condition',NULL,'Ricardo Hiroshi Caldeira Takahashi',1,NULL),(35,14,3,'2010-09-11 20:23:45','2014-09-11 20:23:45',0,'Extração de Características em Reconhecimento de Parâmetros Fonológicos da Língua Brasileira de Sinais Utilizando Sensores RGB-D',1,NULL,NULL,'Jaime Arturo Ramírez'),(36,34,3,'2010-08-22 20:23:45','2014-08-22 20:23:45',0,'Otimização de consultas com muitas junções utilizando sistemas multiagente evolucionários',1,NULL,12,NULL),(37,35,3,'2009-12-03 20:23:45','2013-12-03 20:23:45',0,'Restauração de Sistemas de Distribuição de Energia Elétrica Utilizando Evolução Diferencial com Árvores de Ancestralidade',1,NULL,NULL,NULL),(38,36,3,'2009-11-27 20:23:45','2013-11-27 20:23:45',0,'Redução de Dimensionalidade em Problemas com Muitos Objetivos: Uma Aplicação em Composição Algorítmica',1,NULL,NULL,NULL),(39,38,2,'2014-03-01 20:23:45','2016-03-01 20:23:45',0,'A GPU Framework for Multi-Objective Evolutionary Algorithms',1,NULL,NULL,NULL),(40,15,2,'2014-05-01 20:23:45','2015-05-01 20:23:45',0,'Previsão de Carga Elétrica a Curto Prazo em um Ambiente de Redes Elétricas Inteligentes',1,NULL,NULL,NULL),(41,5,2,'2014-09-01 20:23:45','2015-05-01 20:23:45',0,'Short term load forecasting model based on refined multivariate high-order fuzzy time series and evolutionary algorithms on smart grid platform by applying GPU programming',1,NULL,NULL,NULL),(42,5,2,'2015-06-01 20:23:45','2015-11-01 20:23:45',0,' Fault prediction of telecommunication network elements on the top of big data platform',1,NULL,NULL,NULL),(43,5,2,'2015-11-01 20:23:45','2017-07-01 20:23:45',0,'Fault prediction of telecommunication network elements on the top of big data platform',1,NULL,NULL,NULL),(44,39,4,'2014-07-01 20:23:45','2016-06-01 20:23:45',0,'Aprendizado Incremental com Memória Parcial via Grafo de Gabriel',2,NULL,NULL,NULL),(45,21,4,'2015-03-01 20:23:45','2016-12-01 20:23:45',0,'Aplicação de Técnicas de Inteligência Computacional para Análise da Expressão Facial em Reconhecimento de Sinais de Libras',2,NULL,14,NULL);
/*!40000 ALTER TABLE `user_association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_paper`
--

LOCK TABLES `user_paper` WRITE;
/*!40000 ALTER TABLE `user_paper` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_post`
--

LOCK TABLES `user_post` WRITE;
/*!40000 ALTER TABLE `user_post` DISABLE KEYS */;
INSERT INTO `user_post` VALUES (1,1),(3,2),(1,3);
/*!40000 ALTER TABLE `user_post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-28 15:54:29
