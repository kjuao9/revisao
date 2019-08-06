-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Ago-2019 às 14:56
-- Versão do servidor: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.0.33-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` varchar(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `carga_horaria` char(3) NOT NULL,
  `id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `carga_horaria`, `id_escola`) VALUES
('bio', 'biologia', '60', 4),
('info ', 'Teste módulo I', '20', 1),
('info2', 'DW2', '80', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`id`, `nome`, `endereco`) VALUES
(1, '', 'Rua dos Pinguços, Bairro do Suvaco, Peidópolis - MG'),
(2, 'Escola Estadual Teste Testando', 'Rua dos Pinguços, Bairro do Suvaco, Peidópolis - MG'),
(3, 'Escola Estadual Teste Testando', 'Rua dos Pinguços, Bairro do Suvaco, Peidópolis - MG'),
(4, 'IFNMG', 'Avenida Brasil, Centro, Janaúba - MG'),
(6, 'EEMAA', 'Avenida Manoel Athaide, Centro, Janaúba - MG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_escola` (`id_escola`);

--
-- Indexes for table `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `escola`
--
ALTER TABLE `escola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_escola`) REFERENCES `escola` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
