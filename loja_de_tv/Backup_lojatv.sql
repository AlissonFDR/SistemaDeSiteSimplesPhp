SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojatv`
--

-- -----------------------------------------------------
-- Schema lojatv
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lojatv` DEFAULT CHARACTER SET utf8 ;
USE `lojatv` ;

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionarios` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `funcao` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'ATIVO',
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `data_admissao` date NOT NULL,
  `salario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionarios`, `nome`, `cpf`, `email`, `endereco`, `funcao`, `status`, `login`, `senha`, `telefone`, `data_admissao`, `salario`) VALUES
(1, 'Administrador do Sistema', '', NULL, NULL, 'administrador', 'ATIVO', 'admin', '1', NULL, '0000-00-00', 0.00),
(2, 'José Carlos', '123.456.789-10', 'jose@gmail.com', 'Taguatinga-DF', 'estoquista', 'ATIVO', 'j', '1', '(61)12345-6789', '2024-12-04', 2300.00),
(3, 'Maria Candida', '123.456.789-11', 'maria@gmail.com', 'Gama-DF', 'estoquista', 'ATIVO', 'm', '1', '(61)12345-6710', '2024-12-01', 2750.50),
(4, 'Vitor Fernandez', '123.456.789-12', 'vitor@gmail.com', 'Asa Sul-DF', 'estoquista', 'ATIVO', 'v', '1', '(61)12345-6711', '2024-11-21', 2650.25),
(5, 'Pedro Rodriguez', '123.456.789-13', 'pedro@gmail.com', 'Ceilândia-DF', 'vendedor', 'ATIVO', 'p', '1', '(61)12345-6712', '2024-12-02', 3500.00),
(6, 'Ana Clara', '123.456.789-14', 'ana@gmail.com', 'Guara-DF', 'vendedor', 'ATIVO', 'a', '1', '(61)12345-6713', '2024-12-03', 3200.00),
(7, 'Carolina Santos', '123.456.789-15', 'carolina@gmail.com', 'Asa Norte-DF', 'vendedor', 'INATIVO', 'c', '1', '(61)12345-6714', '2020-09-10', 3950.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `televisor`
--

CREATE TABLE `televisor` (
  `id_tv` int(11) NOT NULL,
  `marca_tv` varchar(45) NOT NULL,
  `modelo_tv` varchar(45) NOT NULL,
  `tipo_tela_tv` varchar(45) NOT NULL,
  `resolucao_tv` varchar(45) NOT NULL,
  `preco_tv` decimal(10,2) NOT NULL,
  `foto_tv` varchar(100) NOT NULL,
  `fila_compra_tv` varchar(1) NOT NULL DEFAULT 'n',
  `venda_id_venda` int(11) DEFAULT NULL,
  `tamanho_tela_tv` varchar(45) NOT NULL,
  `entradas_tv` varchar(45) NOT NULL,
  `voltagem_tv` varchar(45) NOT NULL,
  `sistema_operacional_tv` varchar(45) NOT NULL,
  `processador_tv` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `televisor`
--

INSERT INTO `televisor` (`id_tv`, `marca_tv`, `modelo_tv`, `tipo_tela_tv`, `resolucao_tv`, `preco_tv`, `foto_tv`, `fila_compra_tv`, `venda_id_venda`, `tamanho_tela_tv`, `entradas_tv`, `voltagem_tv`, `sistema_operacional_tv`, `processador_tv`) VALUES
(1, 'Furrion', 'FCDT-2345', 'oled', '1920x1080', 3699.99, 'img/tv1.png', 'n', NULL, '42', 'HDMI, Ethernet e USB', '220v', 'Linux', 'a5 4k'),
(2, 'Samsung', 'SR4T-4000', 'qled', '3840x2160', 3849.00, 'img/tv2.png', 'v', 1, '49', 'HDMI, Ethernet, USB e VGA', '220v', 'Linux', 'Exynos 8895'),
(3, 'Philco', 'PSR2-5437', 'led', '1920x1080', 2899.99, 'img/tv3.png', 'n', NULL, '40', 'HDMI, Ethernet, USB,RCA e AV', '220v', 'Roku', 'RK3288'),
(4, 'Philco', 'P342-5645', 'led', '1920x1080', 2599.99, 'img/tv4.png', 'n', NULL, '32', 'HDMI, Ethernet, AV e USB', '110v', 'Android', 'MT5670'),
(5, 'Sony', 'S008-HGTY', 'qled', '3840x2160', 5670.99, 'img/tv5.png', 'n', NULL, '60', 'HDMI, Ethernet e USB', '220v', 'Android', 'X1 Ultimate'),
(6, 'LG', 'LG44-UUIA', 'qled', '3840x2160', 4500.00, 'img/tv6.png', 'n', NULL, '50', 'HDMI, Ethernet, AV e USB', '110v', 'Linux', 'a7 AI Processor'),
(7, 'Samsung', 'SA70-00AI', 'qled', '5120x2880', 7999.99, 'img/tv7.png', 'n', NULL, '70', 'HDMI, Ethernet, AV e USB', '220v', 'Android', 'Quantum Processor'),
(8, 'Sony', 'SS55-Y76', 'led', '1920x1080', 2300.00, 'img/tv8.png', 'n', NULL, '32', 'HDMI, Ethernet, USB e VGA', '110v', 'Roku', 'Cognitive Processor XR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `funcionarios_id_funcionarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `data_venda`, `valor_total`, `funcionarios_id_funcionarios`) VALUES
(1, '2024-12-06', 3849.00, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionarios`);

--
-- Índices de tabela `televisor`
--
ALTER TABLE `televisor`
  ADD PRIMARY KEY (`id_tv`),
  ADD KEY `fk_televisor_venda1_idx` (`venda_id_venda`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `fk_venda_funcionarios1_idx` (`funcionarios_id_funcionarios`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `televisor`
--
ALTER TABLE `televisor`
  MODIFY `id_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `televisor`
--
ALTER TABLE `televisor`
  ADD CONSTRAINT `fk_televisor_venda1` FOREIGN KEY (`venda_id_venda`) REFERENCES `venda` (`id_venda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_funcionarios1` FOREIGN KEY (`funcionarios_id_funcionarios`) REFERENCES `funcionarios` (`id_funcionarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
