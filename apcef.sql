-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2016 às 21:59
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apcef`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `titular` varchar(200) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `dtnasc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `titular`, `matricula`, `nome`, `dtnasc`) VALUES
(94, 'Jonnathann', '78945621', 'Jonnathann', 'masculino'),
(95, 'Jonnathann', '78945621', 'Joao Alfredo', '20/07/2006'),
(99, 'Flavio Rodrigo Cabral Pereira', '201546', 'Carlos Maria', '11/11/2011'),
(100, 'Flavio Rodrigo Cabral Pereira', '201546', 'Flavio Rodrigo Cabral Pereira', '10/07/1981'),
(101, 'Flavio Rodrigo Cabral Pereira', '201546', 'Nilda Jamilly', '21/12/2009'),
(102, 'Flavio Rodrigo Cabral Pereira', '201546', 'Josefa Cabral', '10/11/1980'),
(103, 'Flavio Rodrigo Cabral Pereira', '201546', 'Abgahil Silva', '10/07/1981'),
(104, 'Jonnathann', '78945621', 'Jonnathann', '11/08/1985');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `dtabertura` varchar(20) NOT NULL,
  `ntitular` varchar(200) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `dtnasc` varchar(30) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `org` varchar(10) NOT NULL,
  `profissao` varchar(30) NOT NULL,
  `mae` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `num` varchar(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ndep1` varchar(200) NOT NULL,
  `data1` varchar(20) DEFAULT NULL,
  `ndep2` varchar(200) NOT NULL,
  `data2` varchar(20) NOT NULL,
  `ndep3` varchar(200) NOT NULL,
  `data3` varchar(20) NOT NULL,
  `ndep4` varchar(200) NOT NULL,
  `data4` varchar(20) NOT NULL,
  `ndep5` varchar(200) NOT NULL,
  `data5` varchar(20) NOT NULL,
  `ndep6` varchar(200) NOT NULL,
  `data6` varchar(20) NOT NULL,
  `ndep7` varchar(200) NOT NULL,
  `data7` varchar(20) NOT NULL,
  `ndep8` varchar(200) NOT NULL,
  `data8` varchar(20) NOT NULL,
  `ndep9` varchar(200) NOT NULL,
  `data9` varchar(20) NOT NULL,
  `ndep10` varchar(200) NOT NULL,
  `data10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `matricula`, `dtabertura`, `ntitular`, `sexo`, `dtnasc`, `cpf`, `rg`, `org`, `profissao`, `mae`, `endereco`, `num`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `email`, `status`, `ndep1`, `data1`, `ndep2`, `data2`, `ndep3`, `data3`, `ndep4`, `data4`, `ndep5`, `data5`, `ndep6`, `data6`, `ndep7`, `data7`, `ndep8`, `data8`, `ndep9`, `data9`, `ndep10`, `data10`) VALUES
(34, '201546', '22-11-16', 'Flavio Rodrigo Cabral Pereira', 'masculino', '10/07/1981', '123456789', '456789', 'ssdspb', 'Estudante', 'Maria Cabral', 'rua da rua', '181', 'Centro', 'Natuba', 'PB', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Nilda Jamilly', '21/12/2009', 'Josefa Cabral', '10/11/1980', 'Carlos Maria', '11/11/2011', 'Abgahil Silva', '10/07/1981', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '78945621', '28-11-16', 'Jonnathann', 'masculino', '11/08/1985', '1111111', '185472', 'ssdspb', 'Publico', 'Maria', 'rua rua', '131', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Nilda Jamilly', '21/12/2009', 'Joao Alfredo', '20/07/2006', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `login`, `senha`) VALUES
('Flavio', 'flaviorcabral@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricula` (`matricula`);

--
-- Indexes for table `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `planos` (`matricula`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
