-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2019 às 23:49
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codigosenior`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`, `departamento_id`) VALUES
(3, 'Gerente', 1),
(4, 'Assessor', 3),
(5, 'Presidente', 4),
(6, 'Vice Presidente', 2),
(8, 'Projetista', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `anotacoes` varchar(255) DEFAULT NULL,
  `tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `cpf`, `email`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `anotacoes`, `tipo_id`) VALUES
(1, 'Rita ', 'Gomes', '13878965412', 'RitaGomes@gmail.com', 'Juiz de Fora', 'Centro', 'Avenida Rio Branco', 619, 'Bloco C', 'CEO da empresa de VÃ­deo games Rita-Games, mundialmente conhecida pelo jogo Legends of League.', 1),
(2, 'AndrÃ© Flamengo', 'Junior', '12365489725', 'andrefla@gmail.com', 'Juiz de Fora', 'SÃ£o Pedro', 'Avenida Presidente Costa e Silva', 119, '', 'Um dos fundadores da start-up Edyr.', 2),
(3, 'Zack', 'Asmongod', '74185293536', 'Asmongod@hotmail.com', 'Juiz de Fora', 'Santa Luzia', 'Rua Porto das Flores', 207, '', 'Streamer profissional na plataforma da Twitz', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id`, `nome`) VALUES
(1, 'Projetos'),
(2, 'Administrativo Financeiro'),
(3, 'GestÃ£o de Pessoas'),
(4, 'PresidÃªncia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `nome`, `descricao`) VALUES
(1, 'Site ', 'local na Internet identificado por um nome de domÃ­nio, constituÃ­do por uma ou mais pÃ¡ginas de hipertexto, que podem conter textos, grÃ¡ficos e informaÃ§Ãµes em multimÃ­dia.'),
(2, 'Sistema', 'Um sistema online Ã© uma pÃ¡gina dinÃ¢mica com funÃ§Ãµes administrativas vinculadas, preferimos chamar de sistema e nÃ£o de â€œsoftwareâ€ online, mas a ideia Ã© a mesma.'),
(4, 'Aplicativo', 'Programa de computador ou dispositivo mÃ³vel concebido para processar dados eletronicamente, facilitando e reduzindo o tempo de execuÃ§Ã£o de uma tarefa pelo usuÃ¡rio.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `desconto` float DEFAULT NULL,
  `preco` float NOT NULL,
  `anotacoes` longtext,
  `data_venda` timestamp NULL DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `nome`, `desconto`, `preco`, `anotacoes`, `data_venda`, `cliente_id`, `produto_id`, `usuario_id`) VALUES
(1, 'Sistema de ranking - TNT', 10, 6000, 'Sistema de ranking e armazenamento de dados do novo jogo da Rita Games.', '2019-06-12 03:00:00', 1, 2, 11),
(2, 'Site da Edyr', 0, 1400, 'CriaÃ§Ã£o do site da start-up Edyr.', NULL, 2, 1, 10),
(3, 'Notificador de Stream', 0, 15000, 'Aplicativo que notifica quando Asmongod inicia sua stream na Twitz.', NULL, 3, 4, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'Comum'),
(2, 'VIP'),
(3, 'Especial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `url_imagem` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `cargo_id`, `url_imagem`) VALUES
(10, 'Denner', 'dennerefisio@codejr.com', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'a7b74c69-6d09-49b9-bcf8-6ea35b5a80fd.jpg'),
(11, 'Gustavinho', 'gustavinhoLindo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'a7b74c69-6d09-49b9-bcf8-6ea35b5a80fd.jpg'),
(12, 'Igor', 'Sasaoka@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'a7b74c69-6d09-49b9-bcf8-6ea35b5a80fd.jpg'),
(13, 'Chaves', 'ruivoHering@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'a7b74c69-6d09-49b9-bcf8-6ea35b5a80fd.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento` (`departamento_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipoRef` (`tipo_id`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clienteRef` (`cliente_id`),
  ADD KEY `produtoRef` (`produto_id`),
  ADD KEY `usuarioRef` (`usuario_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargoRef` (`cargo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `servico_ibfk_2` FOREIGN KEY (`produto_id`) REFERENCES `projeto` (`id`),
  ADD CONSTRAINT `servico_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
