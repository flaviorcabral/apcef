-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2016 às 21:31
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
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `dtnasc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `matricula`, `nome`, `dtnasc`) VALUES
(4, 'teste10', 'Flavio Rodrigo', '10/07/1981'),
(5, '23', 'Josefa Cabral', '10/04/1980'),
(6, '8888', 'Carlos Maria', '11/11/2011'),
(7, '999', 'Marcone Silva', '10/10/2010'),
(8, '201545', 'Testando array', 'masculino'),
(9, '201545', 'Testando array', 'Testando array'),
(10, '201545', 'Testando array', ''),
(11, '201545', 'Testando array', 'Testando array1'),
(12, '201545', 'Testando array', ''),
(13, '201545', 'Testando array', ''),
(14, '201545', 'Testando array', ''),
(15, '201545', 'Testando array', ''),
(16, '201545', 'Testando array', ''),
(17, '201545', 'Testando array', ''),
(18, '201545', 'Testando array', ''),
(19, '201545', 'Testando array', ''),
(20, '201545', 'Testando array', 'masculino'),
(21, '201545', 'Testando array', 'Testando array'),
(22, '201545', 'Testando array', ''),
(23, '201545', 'Testando array', 'Testando array1'),
(24, '201545', 'Testando array', ''),
(25, '201545', 'Testando array', ''),
(26, '201545', 'Testando array', ''),
(27, '201545', 'Testando array', ''),
(28, '201545', 'Testando array', ''),
(29, '201545', 'Testando array', ''),
(30, '201545', 'Testando array', ''),
(31, '201545', 'Testando array', ''),
(32, '201545', 'Testando array1', 'masculino'),
(33, '201545', 'Testando array1', 'Testando array'),
(34, '201545', 'Testando array1', ''),
(35, '201545', 'Testando array1', 'Testando array1'),
(36, '201545', 'Testando array1', ''),
(37, '201545', 'Testando array1', ''),
(38, '201545', 'Testando array1', ''),
(39, '201545', 'Testando array1', ''),
(40, '201545', 'Testando array1', ''),
(41, '201545', 'Testando array1', ''),
(42, '201545', 'Testando array1', ''),
(43, '201545', 'Testando array1', '');

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
(4, 'teste1', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', '0', 'teste', '0', 'teste', 'teste'),
(6, 'teste3', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'aberto', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste'),
(10, 'teste10', '17-11-16', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', ''),
(16, '12346', '17-11-16', 'Flavio', 'masculino', '10/07/1981', '1234567899366', '789456', 'ssdspb', 'teste', 'Maria', 'rua rua', '131', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '2055', '18-11-16', 'Marcone Sergio', 'masculino', '11/08/1985', '12345678911', '185472', 'ssdspb', 'Publico', 'Maria Jose Silva', 'Rua jose Americo', '54', 'Centro', 'Joao Pessoa', 'PB', '58000-000', '8379898456', 'marcone@dodod.com', 'fechado', 'Maria Jose', '10/11/1981', 'Joao Alfredo', '08/05/1978', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '789', '18-11-16', 'Joana da Sila', 'feminino', '11/08/1985', '1111111', '185472', 'ssdspb', 'teste', 'Maria', 'rua rua', '54', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Jose Bezerra', '10/11/1981', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '123467', '18-11-16', 'Maria', 'feminino', '10/07/1981', '1234567899366', '789456', 'ssdspb', 'teste', 'teste', 'rua rua', '54', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Jamilly', '21/12/2009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '23', '18-11-16', 'teste', 'masculino', '11111111111111', '1111111', '11111111111', 'ssdspb', '11111111', 'teste', 'rua rua', '131', '11111111', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Josefa Cabral', '10/04/1980', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '2009', '18-11-16', 'Maria', 'feminino', '10/07/1981', '1234567899366', '185472', 'ssdspb', 'Publico', 'Maria', 'rua rua', '131', 'Centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Nadja Cristine', '09/05/1984', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '8888', '18-11-16', 'Maria', 'feminino', '10/07/1981', '1111111', '11111111111', 'ssdspb', 'Publico', 'Maria', 'rua rua', '131', 'Centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Carlos Maria', '11/11/2011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '999', '18-11-16', 'teste', 'masculino', '10/07/1981', '12345678911', '185472', 'ssdspb', 'teste', 'teste', 'rua rua', '131', 'Centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Marcone Silva', '10/10/2010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '201545', '18-11-16', 'Testando array', 'masculino', 'Testando array', 'Testando array', 'Testando array', 'Testando a', 'Testando array', 'Testando array', 'Testando array', 'Testando a', 'Testando array', 'Testando array', 'Testa', 'Testando array', 'Testando array', '', 'aberto', 'Testando array', 'Testando array', '', '', 'Testando array1', 'Testando array1', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
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
