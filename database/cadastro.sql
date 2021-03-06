-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Set-2018 às 22:16
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`) VALUES
('111.111.111-11', 'cliente', 'teste'),
('222.222.222-22', 'cliente 2', 'teste 2'),
('333.333.333-33', 'cliente3', 'teste3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpf_cliente` varchar(14) NOT NULL,
  `id_fornec` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `telefone`, `email`, `cpf_cliente`, `id_fornec`) VALUES
(37, '(11)11111-1111', 'cliente@teste.com', '111.111.111-11', 0),
(38, '(22)22222-2222', 'cliente@tes2.com', '222.222.222-22', 0),
(39, '(33)33333-3333', 'cl@te3.com', '333.333.333-33', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `cidade` varchar(15) NOT NULL,
  `logradouro` varchar(40) NOT NULL,
  `numero` varchar(8) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cep` char(9) NOT NULL,
  `id_fornec` int(11) NOT NULL,
  `cpf_cliente` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `cidade`, `logradouro`, `numero`, `bairro`, `cep`, `id_fornec`, `cpf_cliente`) VALUES
(45, 'SÃ£o Paulo', 'Rua Ãlvaro Pinto', '11', 'Jardim Maria Estela', '04181-010', 0, '111.111.111-11'),
(46, 'SÃ£o Paulo', 'Rua Jeremias Junior', '2', 'Vila Nair', '04282-020', 0, '222.222.222-22'),
(47, 'SÃ£o Paulo', 'Rua EfigÃªnio de Salles', '33', 'Jardim Jabaquara', '04383-030', 0, '333.333.333-33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `sobrenome`, `senha`, `email`, `tipo`) VALUES
('00000000000', 'adm', 'admin', '123456', 'adm@adm.com', 1),
('365.465.465-46', 'func', 'comum', '123456', 'func@comum.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `forma_pagamento` tinyint(4) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `numero` int(11) NOT NULL,
  `status` varchar(8) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `data_pedido` datetime NOT NULL,
  `data_pagamento` datetime NOT NULL,
  `cpf_func` varchar(14) NOT NULL,
  `cpf_cliente` varchar(14) NOT NULL,
  `id_formapaga` tinyint(4) NOT NULL,
  `cod_produto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `preco_unid` varchar(8) NOT NULL,
  `qtd` int(11) NOT NULL,
  `descricao` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `nome`, `preco_unid`, `qtd`, `descricao`) VALUES
(123, 'Coca-cola', '10', 20, 'simples refrigerante'),
(456, 'Pepsi', '9', 20, 'outro simples refri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cpf_cliente` (`cpf_cliente`),
  ADD KEY `fk_id_fornec` (`id_fornec`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_fornec` (`id_fornec`),
  ADD KEY `fk_cpf_cliente` (`cpf_cliente`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`forma_pagamento`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `fk_cpf_func` (`cpf_func`),
  ADD KEY `fk_cpf_cliente` (`cpf_cliente`),
  ADD KEY `fk_id_formapaga` (`id_formapaga`),
  ADD KEY `fk_cod_produto` (`cod_produto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
