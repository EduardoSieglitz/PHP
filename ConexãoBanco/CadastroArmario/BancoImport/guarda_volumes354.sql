-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2024 às 16:10
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `guarda_volumes354`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armarios`
--

CREATE TABLE `armarios` (
  `id_armarios` int(11) NOT NULL,
  `setor` char(1) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `tamanho` char(1) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `status` char(1) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `fechadura` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `armarios`
--
ALTER TABLE `armarios`
  ADD PRIMARY KEY (`id_armarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `armarios`
--
ALTER TABLE `armarios`
  MODIFY `id_armarios` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
