-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/02/2024 às 19:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `venturetravel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `Nome` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Senha` varchar(40) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`Nome`, `Email`, `Senha`, `Id`) VALUES
('joao', 'bilinskjoao@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `Id_comentario` int(11) NOT NULL,
  `Id_publicacao` int(11) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Comentario` text DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comentarios`
--

INSERT INTO `comentarios` (`Id_comentario`, `Id_publicacao`, `Usuario`, `Comentario`, `data`) VALUES
(1, 2, 'bilinskjoao@gmail.com', 'judaihuidwa', '2024-02-20 17:46:58'),
(2, 1, 'bilinskjoao@gmail.com', 'muito legal', '2024-02-20 17:47:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `Id` int(11) NOT NULL,
  `Pais` varchar(40) NOT NULL,
  `Cidade` varchar(40) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `publicacao`
--

INSERT INTO `publicacao` (`Id`, `Pais`, `Cidade`, `Foto`, `Texto`) VALUES
(1, 'França', 'Paris', 'c98ddd989b6299873fb385ce96a0aabf.jpg', 'Muito legal a cidade'),
(2, 'Brasil', 'Curitiba', 'ee784895602b4a057b0c3eadf5de487c.jpg', 'cidade muito legal xD'),
(3, 'República Dominicana', 'Nome', 'b103753d9660c6faef5d3c41f29e106d.png', 'muito incrivel');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`Id_comentario`),
  ADD KEY `Id_publicacao` (`Id_publicacao`);

--
-- Índices de tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `Id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`Id_publicacao`) REFERENCES `publicacao` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
