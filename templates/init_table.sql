DROP TABLE IF EXISTS `visitor`;
CREATE TABLE `visitor` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `location` varchar(30) NOT NULL,
  `external_id` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `company` varchar(100),
  `role` varchar(100),
  `phone` varchar(100),
  `email` varchar(100),
  `timestamp` INT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11001 DEFAULT CHARSET=latin1;

LOCK TABLES `visitor` WRITE;
INSERT INTO `visitor` (`location`,`external_id`,`fullname`,`company`,`role`,`phone`,`email`,`timestamp`) VALUES ('sc-test','feliz-1203155601','Feliz Karnadi','Ingram Micro', 'Solution Architect', '021-12345678', 'feliz@email.com', '1556068678');
INSERT INTO `visitor` (`location`,`external_id`,`fullname`,`company`,`role`,`phone`,`email`,`timestamp`) VALUES ('sc-test','grant-1203155602','Grant Du Preez','Ingram Micro', 'BDM', '021-12345678', 'grant@email.com', '1556068678');
UNLOCK TABLES;
