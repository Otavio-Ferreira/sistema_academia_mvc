-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2023 às 22:00
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `default`
--
CREATE DATABASE IF NOT EXISTS `sistemaAcademiaMvc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistemaAcademiaMvc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hash_users`
--

CREATE TABLE `hash_users` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hash_user` varchar(32) NOT NULL,
  `situation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `hash_users`
--

INSERT INTO `hash_users` (`id`, `id_user`, `hash_user`, `situation`) VALUES
(1, 2, '08b6d5562860d155d9dfef69484c3444', 1),
(2, 2, 'd3ab60dd5ec120d0eb5eaa247eaa3cf2', 1),
(3, 2, '08b6d5562860d155d9dfef69484c3444', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `params` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `name`, `params`) VALUES
(1, 'Desenvolvimento', '1,2,3'),
(2, 'Administrador', '1,2,3'),
(3, 'Gerente', '1,2,3,4'),
(3, 'Aluno', '5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_params`
--

CREATE TABLE `permission_params` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `permission_params`
--

INSERT INTO `permission_params` (`id`, `name`, `description`) VALUES
(1, 'add_user', 'adicionar usuario'),
(2, 'add_permission', 'adicionar permissão'),
(3, 'view_dashboard', 'Ver DashBoard'),
(4, 'add_params', 'Adicionar Parâmetro de Permissão'),
(4, 'view_info', 'Ver informações do aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_item` varchar(255) NOT NULL,
  `price_item` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name_item`, `price_item`) VALUES
(1, '1984', '25.00'),
(2, 'Revolução dos bichos', '25.00'),
(3, 'A arte de ligar o fodasse', '25.00'),
(4, 'A arte da guerra', '25.00'),
(5, 'Os Sertões', '25.00'),
(6, 'O poder do agora', '25.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(256) DEFAULT NULL,
  `id_group` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `situation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `id_group`, `type`, `situation`) VALUES
(1, 'admin@gmail.com', 'Otavio Ferreira', '$2y$10$vWa4i57igSBbEBXDwZxmNOo9PvLV1li0lzK9c5wQx3HK4HFRMBWJi', 3, 0, 1),
(2, 'desenvolvimento@sabaojua.com.br', 'desenvolvimento', NULL, 2, 0, 1);

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int auto_increment primary key not null,  
  `nome` varchar(50),  
  `email` varchar(50),  
  `senha` varchar(30), 
  `idade` int,  
  `endereco` varchar(100),  
  `telefone` varchar(50),  
  `mensalidade` double,  
  `inscricao` date,  
  `genero` varchar(20),
  `situacao` varchar(20),
  `personal` varchar(20),
  `objetivo` varchar(20),
  `nivel` varchar(20),
);

CREATE TABLE `info_alunos` (
  `id_info` int auto_increment primary key not null, 
  `id_aluno` int, 
  `idade` int,  
  `endereco` varchar(100),  
  `telefone` varchar(50),  
  `mensalidade` double,  
  `inscricao` date,  
  `genero` varchar(20),
  `situacao` varchar(20),
  `personal` varchar(20),
  `objetivo` varchar(20),
  `nivel` varchar(20),
);

--
-- Estrutura da tabela `avaliação`
--

CREATE TABLE `avaliacao` (
  `id` int auto_increment primary key not null,  
  `dataAvaliacao` date,  
  `peso` float,  
  `altura` float, 
  `cintura` float,  
  `quadril` float,  
  `coxa` float,  
  `gordura` float,  
  `observacoes` varchar(100),  
  `idAluno` int
);

--
-- Estrutura da tabela `treinos`
--

CREATE TABLE `info_treinos` (
  `idTreino` int auto_increment primary key not null,  
  `diaSemana` varchar(20),  
  `idAluno` int,
);

CREATE TABLE `treinos` (
  `id` int auto_increment primary key not null,
  `nomeTreino` varchar(100),  
  `serieTreino` varchar(100),  
  `repeticao` varchar(100), 
  `idTreino` int
);

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidades` (
  `id` int auto_increment primary key not null,  
  `data` date,    
  `valor` double,    
  `situacao` int,    
  `idAluno` int,
);

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `notificacoes` (
  `id` int auto_increment primary key not null,  
  `tipo` int,      
  `idAluno` int
);



--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `hash_users`
--
ALTER TABLE `hash_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `permission_params`
--
ALTER TABLE `permission_params`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
/*ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);*/

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hash_users`
--
ALTER TABLE `hash_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `permission_params`
--
ALTER TABLE `permission_params`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
