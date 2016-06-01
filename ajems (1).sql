-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2016 às 21:29
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajems`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(45) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `rua`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `estado`) VALUES
(1, 'teste', 'teste', 'etste', 'etste', 'tetse', 'teset', 'te');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(15) DEFAULT NULL,
  `pagina_evento` decimal(11,0) DEFAULT NULL,
  `data_evento` datetime DEFAULT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `figuras`
--

DROP TABLE IF EXISTS `figuras`;
CREATE TABLE IF NOT EXISTS `figuras` (
  `id_figuras` int(11) NOT NULL AUTO_INCREMENT,
  `end_figuras` varchar(45) NOT NULL,
  PRIMARY KEY (`id_figuras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_usuario`
--

DROP TABLE IF EXISTS `grupo_usuario`;
CREATE TABLE IF NOT EXISTS `grupo_usuario` (
  `id_grupo` int(11) NOT NULL,
  `nome_grupo` varchar(45) NOT NULL COMMENT 'nome do grupo para separação de acesso em grupo de usuários.',
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupo_usuario`
--

INSERT INTO `grupo_usuario` (`id_grupo`, `nome_grupo`) VALUES
(1, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `tituloNoticia` varchar(30) NOT NULL,
  `resumoNoticia` varchar(100) NOT NULL,
  `descricaoNoticia` varchar(1000) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNoticia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina`
--

DROP TABLE IF EXISTS `pagina`;
CREATE TABLE IF NOT EXISTS `pagina` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_pagina` varchar(20) DEFAULT NULL,
  `head_pagina` varchar(30) DEFAULT NULL,
  `conteudo_pagina` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `nome_slide` varchar(30) NOT NULL,
  `caminho_slide` varchar(30) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `dt_nasc` datetime NOT NULL,
  `grupo_acesso` int(11) DEFAULT NULL,
  `tel_cel` varchar(14) DEFAULT NULL,
  `tel_fixo` varchar(14) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `end_usuario` int(11) DEFAULT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_grupo_idx` (`grupo_acesso`),
  KEY `id_endereco_idx` (`end_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='armazenar dados do usuário do sistema página aje_ms';

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cpf`, `nome`, `empresa`, `dt_nasc`, `grupo_acesso`, `tel_cel`, `tel_fixo`, `email`, `end_usuario`, `senha`) VALUES
(1, 'teste', 'teste', 'teste', '2016-05-18 00:00:00', 1, 'teste', 'teste', 'teste@teste.com', 1, 'teste');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_endereco` FOREIGN KEY (`end_usuario`) REFERENCES `endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_grupo` FOREIGN KEY (`grupo_acesso`) REFERENCES `grupo_usuario` (`id_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
