DROP TABLE IF EXISTS `visitor`;
CREATE TABLE `visitor` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `location` varchar(30) NOT NULL,
  `external_id` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `timestamp` INT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11001 DEFAULT CHARSET=latin1;

LOCK TABLES `visitor` WRITE;
INSERT INTO `visitor` (`location`,`external_id`,`fullname`,`company`,`email`) VALUES ('sc-akl','feliz-1203155601','Feliz Karnadi','Ingram Micro NZ', 'feliz.karnadi@ingrammicro.com', '1556068678');
INSERT INTO `visitor` (`location`,`external_id`,`fullname`,`company`,`email`) VALUES ('sc-akl','grant-1203155602','Grant Du Preez','Ingram Micro NZ', 'grant.dupreez@ingrammicro.com', '1556068678');
UNLOCK TABLES;
