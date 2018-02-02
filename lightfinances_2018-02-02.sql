# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.17)
# Base de Dados: lightfinances
# Tempo de Geração: 2018-02-02 19:53:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela despesas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `despesas`;

CREATE TABLE `despesas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descr` varchar(2400) NOT NULL DEFAULT '',
  `valor` varchar(120) NOT NULL DEFAULT '',
  `rep` varchar(120) DEFAULT NULL,
  `created` varchar(120) DEFAULT NULL,
  `modified` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `despesas` WRITE;
/*!40000 ALTER TABLE `despesas` DISABLE KEYS */;

INSERT INTO `despesas` (`id`, `descr`, `valor`, `rep`, `created`, `modified`)
VALUES
	(2,'Troca de oleo','50','Nao','31-01-2018',NULL),
	(4,'Teste','9','Nao','31-01-2018',NULL),
	(5,'Compras','111','Nao','02-02-2018',NULL);

/*!40000 ALTER TABLE `despesas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
