# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.17)
# Base de Dados: lightfinances
# Tempo de Geração: 2018-01-31 19:41:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(240) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `categoria`)
VALUES
	(1,'Nenhuma'),
	(2,'Comida'),
	(3,'Veiculo');

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela defTabs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `defTabs`;

CREATE TABLE `defTabs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `extContent` varchar(240) NOT NULL,
  `created` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `defTabs` WRITE;
/*!40000 ALTER TABLE `defTabs` DISABLE KEYS */;

INSERT INTO `defTabs` (`id`, `name`, `icon`, `extContent`, `created`)
VALUES
	(2,'Geral','cogs','geral',NULL),
	(3,'Gerenciar abas','columns','manageTabs',NULL),
	(1004,'Categorias','tags','manageCategories','31-01-2018');

/*!40000 ALTER TABLE `defTabs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela despesas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `despesas`;

CREATE TABLE `despesas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descr` varchar(2400) NOT NULL DEFAULT '',
  `categoria` int(11) DEFAULT NULL,
  `valor` varchar(120) NOT NULL DEFAULT '',
  `rep` varchar(120) DEFAULT NULL,
  `created` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `despesas` WRITE;
/*!40000 ALTER TABLE `despesas` DISABLE KEYS */;

INSERT INTO `despesas` (`id`, `descr`, `categoria`, `valor`, `rep`, `created`)
VALUES
	(1,'Gasolina',NULL,'52','Semanalmente',NULL),
	(2,'Troca de oleo',NULL,'50','Nao','31-01-2018'),
	(4,'Teste',NULL,'9','Nao','31-01-2018');

/*!40000 ALTER TABLE `despesas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela despesas_categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `despesas_categorias`;

CREATE TABLE `despesas_categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `despesa_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `despesas_categorias` WRITE;
/*!40000 ALTER TABLE `despesas_categorias` DISABLE KEYS */;

INSERT INTO `despesas_categorias` (`id`, `despesa_id`, `categoria_id`)
VALUES
	(1,1,3),
	(9,2,3),
	(10,4,1);

/*!40000 ALTER TABLE `despesas_categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `content`, `link`)
VALUES
	(2,'Despesas','despesas.php'),
	(3,'Receitas','receitas.php'),
	(4,'Definicoes','def.php');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela site_configs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_configs`;

CREATE TABLE `site_configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `registration` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `site_configs` WRITE;
/*!40000 ALTER TABLE `site_configs` DISABLE KEYS */;

INSERT INTO `site_configs` (`id`, `name`, `registration`)
VALUES
	(1,'Light Finances',1);

/*!40000 ALTER TABLE `site_configs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `login` varchar(120) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `tipo` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `nome`, `login`, `email`, `senha`, `tipo`)
VALUES
	(4,'Alan Carlos Ghizzi','admin','alan@pentagono.info','admin','1');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
