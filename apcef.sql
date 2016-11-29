-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2016 às 22:04
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
(122, 'Flavio Jose Cabral', '171', 'Flavio Jose Cabral', 'masculino'),
(123, 'Flavio Jose Cabral', '171', 'Nadja Cristine', '1984-05-09'),
(124, 'Maria Jose de Souza Albuquerque', '181', 'Maria Jose de Souza Albuquerque', '1982-01-10'),
(125, 'Carla Augusta da Silva', '191', 'Carla Augusta da Silva', 'feminino'),
(126, 'Carla Augusta da Silva', '191', 'Joao Ferreira', '1978-11-21'),
(127, 'Carla Augusta da Silva', '191', 'Manoel Severino', '1974-05-04'),
(128, 'Carla Augusta da Silva', '191', 'Marcos Antonio', '1981-02-01');

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
(47, '181', '2016-11-29', '2016-11-02', 'Maria Jose de Souza Albuquerque', 'feminino', '1982-01-10', '1234567899366', '789456', 'ssdspb', 'teste', 'teste', 'rua rua', '131', 'centro', 'cidade', 'pb', '58000-000', '8379898456', 'adadad@dodod.com', 'aberto', 'Maria Jose', '1981-11-10', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(48, '171', '2016-11-29', '2016-12-10', 'Flavio Jose Cabral', 'masculino', '1981-07-10', '12345678911', '789456', 'ssdspb', 'Estudante', 'Maria de Lourdes', 'Rua da rua', '131', 'Centro', 'Joao Pessoa', 'PB', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Nadja Cristine', '1984-05-09', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(49, '191', '2016-11-29', '2016-11-25', 'Carla Augusta da Silva', 'feminino', '2010-10-10', '12345678911', '185472', 'ssdspb', 'Estudante', 'Maria de Lourdes', 'Rua da rua', '181', 'Centro', 'Joao Pessoa', 'PB', '58000-000', '8379898456', 'adadad@dodod.com', 'fechado', 'Joao Ferreira', '1978-11-21', 'Manoel Severino', '1974-05-04', 'Marcos Antonio', '1981-02-01', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
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
