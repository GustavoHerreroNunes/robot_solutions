-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Set-2021 às 13:03
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
-- Database: `robot_solutions`
--
CREATE DATABASE IF NOT EXISTS `robot_solutions` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `robot_solutions`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `origem` varchar(10) NOT NULL,
  `data_contato` date NOT NULL,
  `observacao` tinytext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `origem`, `data_contato`, `observacao`) VALUES
(1, 'Paula Souza Lima', '(11) 90000-0000', 'Whatsapp', '2020-07-02', 'Adquiriu 2 produtos'),
(2, 'Caique dos Santos', '(11) 91111-1111', 'Site', '2021-01-21', 'Recebeu um atendimento ruim'),
(3, 'Nilse Lima Carvalho', '(11) 92222-2222', 'Instagram', '2019-03-22', NULL),
(4, 'Vinicius Chico', '(11) 93333-3333', 'E-mail', '2015-11-30', 'Cliente a 5 anos'),
(5, 'Heitor Niza Cabral', '(11) 94444-4444', 'Facebook', '2020-10-11', 'Interessado em automaÃ§Ã£o residencial'),
(6, 'Gilberto de Lima', '(11) 95555-5555', 'Google Ads', '2021-08-26', 'Ex-funcionÃ¡rio de nossa empresa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
