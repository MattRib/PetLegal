-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Ago-2018 às 02:36
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_petlegal`
--
CREATE DATABASE IF NOT EXISTS `bd_petlegal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_petlegal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `usuario` char(20) NOT NULL,
  `senha` char(20) NOT NULL,
  `status` enum('ativo','inativo') NOT NULL DEFAULT 'ativo',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `senha`, `status`) VALUES
(0, '1234', '1234', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

DROP TABLE IF EXISTS `artigo`;
CREATE TABLE IF NOT EXISTS `artigo` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` char(30) NOT NULL,
  `titulo` char(30) NOT NULL,
  `resumo` char(200) NOT NULL,
  `data` datetime NOT NULL,
  `autor` char(50) NOT NULL,
  `conteudo` longtext NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_artigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='informacoes para o admin inserir no site';

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`id_artigo`, `categoria`, `titulo`, `resumo`, `data`, `autor`, `conteudo`, `status`) VALUES
(1, 'fofinho', 'EHAREHE', 'ADBS', '2018-08-07 12:12:00', 'EWHWRHE', 'DSB', '1'),
(2, 'EHRWHEJ', 'RWHERJH', 'WHRH', '2018-08-07 12:12:00', 'WEHWRH', 'EWGHWH', '1'),
(3, 'reh', 'rherh', 'eghreh', '2018-08-07 12:12:00', 'rjtj', 'rhre', '1'),
(4, 'reh', 'rherh', 'eghreh', '2018-08-07 12:12:00', 'rjtj', 'rhre', '1'),
(5, 'wgeg', 'wgeg', 'wgeg', '2018-08-07 12:12:00', 'wgwg', 'wgqwg', '1'),
(6, 'wgeg', 'wgeg', 'wgeg', '2018-08-07 12:12:00', 'wgwg', 'wgqwg', '1'),
(7, 'wgeg', 'wgeg', 'wgeg', '2018-08-07 12:12:00', 'wgwg', 'wgqwg', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(50) NOT NULL,
  `email_contato` varchar(50) NOT NULL,
  `ass_contato` varchar(50) NOT NULL,
  `text_contato` varchar(360) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Tabela do form contato';

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome_contato`, `email_contato`, `ass_contato`, `text_contato`) VALUES
(1, 'ufjruj', 'jgkrht', 'lihhtk', ''),
(2, 'sb;khldb', 'khlhfbfblih', 'lkjpÃ§fjberbhi', 'hifbrebroihb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
