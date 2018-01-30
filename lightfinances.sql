-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 28-Jan-2018 às 18:59
-- Versão do servidor: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lightfinances`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `defTabs`
--

CREATE TABLE IF NOT EXISTS `defTabs` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `hasForm` int(11) NOT NULL,
  `formAction` varchar(120) NOT NULL,
  `formMethod` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `defTabs`
--

INSERT INTO `defTabs` (`id`, `name`, `icon`, `content`, `hasForm`, `formAction`, `formMethod`) VALUES
(1, 'Site Name', 'cog', '', 1, '/actions/adminFunc.php', 'post'),
(2, 'Geral2', 'leaf', 'Lorem ipsum dolor 231si13od tem312 incididunt ut labore et dolore magna aliqua. Ut e2123123nim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL,
  `content` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `content`, `link`) VALUES
(2, 'Despesas', 'despesas.php'),
(3, 'Receitas', 'receitas.php'),
(4, 'Definicoes', 'def.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_configs`
--

CREATE TABLE IF NOT EXISTS `site_configs` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `registration` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `site_configs`
--

INSERT INTO `site_configs` (`id`, `name`, `registration`) VALUES
(1, 'Light Finances', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `login` varchar(120) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `tipo` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `login`, `email`, `senha`, `tipo`) VALUES
(1, 'Alan Carlos Ghizzi', 'admin', 'alan@pentagono.info', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `defTabs`
--
ALTER TABLE `defTabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_configs`
--
ALTER TABLE `site_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `defTabs`
--
ALTER TABLE `defTabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
