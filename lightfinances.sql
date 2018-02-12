-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12-Fev-2018 às 16:13
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoria` varchar(240) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(116, 'Nenhuma'),
(122, 'Comida'),
(123, 'Veiculo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriasR`
--

CREATE TABLE `categoriasR` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoria` varchar(240) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoriasR`
--

INSERT INTO `categoriasR` (`id`, `categoria`) VALUES
(2, 'Salario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `defTabs`
--

CREATE TABLE `defTabs` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `extContent` varchar(240) NOT NULL,
  `created` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `defTabs`
--

INSERT INTO `defTabs` (`id`, `name`, `icon`, `extContent`, `created`) VALUES
(2, 'Geral', 'cog', 'geral/index', NULL),
(3, 'Gerenciar abas', 'columns', 'tabs/index', NULL),
(1004, 'Categorias', 'tags', 'categorias/index', '31-01-2018'),
(1005, 'Usuarios', 'users', 'users/index', '01-02-2018'),
(1006, 'Navbar', 'sitemap', 'navbar/index', '01-02-2018'),
(1007, 'Icones', 'font-awesome', 'icons/index', '01-02-2018'),
(1009, 'Arquivos', 'folder', 'files/index', '02-02-2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE `despesas` (
  `id` int(11) UNSIGNED NOT NULL,
  `descr` varchar(2400) NOT NULL DEFAULT '',
  `valor` varchar(120) NOT NULL DEFAULT '',
  `rep` varchar(120) DEFAULT NULL,
  `created` varchar(120) DEFAULT NULL,
  `modified` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `descr`, `valor`, `rep`, `created`, `modified`) VALUES
(35, 'Gasolina', '50', 'Semanalmente', '12-02-2018', NULL),
(36, 'Putas', '370', 'Diariamente', '12-02-2018', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas_categorias`
--

CREATE TABLE `despesas_categorias` (
  `id` int(11) UNSIGNED NOT NULL,
  `despesa_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `despesas_categorias`
--

INSERT INTO `despesas_categorias` (`id`, `despesa_id`, `categoria_id`) VALUES
(27, 35, 123),
(28, 36, 122);

-- --------------------------------------------------------

--
-- Estrutura da tabela `icons`
--

CREATE TABLE `icons` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(120) DEFAULT '',
  `tag` varchar(120) NOT NULL DEFAULT '',
  `unicode` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `icons`
--

INSERT INTO `icons` (`id`, `nome`, `tag`, `unicode`) VALUES
(1, 'Close', 'close', NULL),
(2, 'Edit', 'pencil', NULL),
(3, 'Users', 'users', 'f0c0'),
(5, 'Folder', 'folder', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `content` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  `class` varchar(120) DEFAULT NULL,
  `level` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `content`, `link`, `class`, `level`) VALUES
(2, 'Despesas', 'despesas/index', NULL, 'normal'),
(3, 'Receitas', 'receitas/index', NULL, 'normal'),
(5, 'Planejamento', 'planejamento/index', NULL, 'normal'),
(6, 'Gerenciamento', 'def', NULL, 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profileImages`
--

CREATE TABLE `profileImages` (
  `id` int(11) UNSIGNED NOT NULL,
  `dir` varchar(240) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) UNSIGNED NOT NULL,
  `descr` varchar(2400) NOT NULL DEFAULT '',
  `categoria` int(11) DEFAULT NULL,
  `valor` varchar(120) NOT NULL DEFAULT '',
  `rep` varchar(120) DEFAULT NULL,
  `created` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `descr`, `categoria`, `valor`, `rep`, `created`) VALUES
(8, 'Pentagono', NULL, '1500', 'Mensalmente', '12-02-2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas_categorias`
--

CREATE TABLE `receitas_categorias` (
  `id` int(11) UNSIGNED NOT NULL,
  `receita_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receitas_categorias`
--

INSERT INTO `receitas_categorias` (`id`, `receita_id`, `categoria_id`) VALUES
(3, 6, 2),
(4, 7, 2),
(5, 8, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(240) DEFAULT NULL,
  `tipo` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `username`, `tipo`) VALUES
(101, 4, 'Alan Carlos Ghizzi', 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_configs`
--

CREATE TABLE `site_configs` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `registration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `site_configs`
--

INSERT INTO `site_configs` (`id`, `name`, `registration`) VALUES
(1, 'Light Finances', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `login` varchar(120) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `tipo` varchar(120) NOT NULL,
  `profileImg` int(11) DEFAULT NULL,
  `desc` varchar(480) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `login`, `email`, `senha`, `tipo`, `profileImg`, `desc`) VALUES
(4, 'Alan Carlos Ghizzi', 'admin', 'alan@pentagono.info', 'admin', '1', NULL, 'Lorem ipsum dolor sit amet lorem amet sit dolor lorem ipsum dolor sit amet lorem ipsum'),
(6, 'Normal', 'normal', 'normal@normaluser.com', 'normal', '2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriasR`
--
ALTER TABLE `categoriasR`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `defTabs`
--
ALTER TABLE `defTabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `despesas_categorias`
--
ALTER TABLE `despesas_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileImages`
--
ALTER TABLE `profileImages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receitas_categorias`
--
ALTER TABLE `receitas_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
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
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `categoriasR`
--
ALTER TABLE `categoriasR`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `defTabs`
--
ALTER TABLE `defTabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `despesas_categorias`
--
ALTER TABLE `despesas_categorias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profileImages`
--
ALTER TABLE `profileImages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `receitas_categorias`
--
ALTER TABLE `receitas_categorias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
