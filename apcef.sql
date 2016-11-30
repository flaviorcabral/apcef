-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2016 às 16:41
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
(124, 'Maria Jose de Souza Albuquerque', '181', 'Maria Jose de Souza Albuquerque', '1982-01-10'),
(129, 'Maria Jose de Souza Albuquerque', '181', 'Maria Jose', '1981-11-10'),
(137, 'Maria Alcinda de Negreiros', '111', 'Maria Alcinda de Negreiros', '1982-01-10'),
(138, 'Flavio Rodrigo Cabral Pereira', '12346', 'Flavio Rodrigo Cabral Pereira', 'masculino'),
(139, 'Flavio Rodrigo Cabral Pereira', '12346', 'Joao Ferreira', '1966-12-31'),
(140, 'Flavio Rodrigo Cabral Pereira', '12346', 'Joao Alfredo', '1979-04-05'),
(141, 'Maria Alcinda de Negreiros', '111', 'Juliana Freita', '2010-01-01'),
(142, 'Maria Jose de Souza Albuquerque', '181', 'Nilda Jamilly', '2009-12-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `dtabertura` date NOT NULL,
  `dtvencimento` date NOT NULL,
  `ntitular` varchar(200) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `dtnasc` date NOT NULL,
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
  `data1` date DEFAULT NULL,
  `ndep2` varchar(200) NOT NULL,
  `data2` date NOT NULL,
  `ndep3` varchar(200) NOT NULL,
  `data3` date NOT NULL,
  `ndep4` varchar(200) NOT NULL,
  `data4` date NOT NULL,
  `ndep5` varchar(200) NOT NULL,
  `data5` date NOT NULL,
  `ndep6` varchar(200) NOT NULL,
  `data6` date NOT NULL,
  `ndep7` varchar(200) NOT NULL,
  `data7` date NOT NULL,
  `ndep8` varchar(200) NOT NULL,
  `data8` date NOT NULL,
  `ndep9` varchar(200) NOT NULL,
  `data9` date NOT NULL,
  `ndep10` varchar(200) NOT NULL,
  `data10` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `matricula`, `dtabertura`, `dtvencimento`, `ntitular`, `sexo`, `dtnasc`, `cpf`, `rg`, `org`, `profissao`, `mae`, `endereco`, `num`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `email`, `status`, `ndep1`, `data1`, `ndep2`, `data2`, `ndep3`, `data3`, `ndep4`, `data4`, `ndep5`, `data5`, `ndep6`, `data6`, `ndep7`, `data7`, `ndep8`, `data8`, `ndep9`, `data9`, `ndep10`, `data10`) VALUES
(47, '181', '2016-11-29', '2016-11-30', 'Maria Jose de Souza Albuquerque', 'feminino', '1982-01-10', '123', '123', 'ssdspb', 'teste', 'teste', 'rua rua', '131', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Maria Jose', '1981-11-10', 'Nilda Jamilly', '2009-12-21', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(48, '111', '2016-11-29', '2016-12-30', 'Maria Alcinda de Negreiros', 'feminino', '1982-01-10', '123', '123', 'ssdspb', 'teste', 'teste', 'rua rua', '131', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Maria Jose', '1981-11-10', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(51, '12346', '2016-11-30', '2016-12-01', 'Flavio Rodrigo Cabral Pereira', 'masculino', '1981-07-10', '1234567899366', '789456', 'ssdspb', 'Estudante', 'Maria de Lourdes', 'Rua da rua', '181', 'Centro', 'Joao Pessoa', 'PB', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Joao Ferreira', '1966-12-31', 'Joao Alfredo', '1979-04-05', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `planos` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
