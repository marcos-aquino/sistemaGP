-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Fev-2019 às 13:12
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE gp;
USE gp;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

-- DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE IF NOT EXISTS `colaboradores` (

  `nome` varchar(40) CHARACTER SET latin1 NOT NULL,
  `setor` varchar(30) NOT NULL,
  `dataEntrada` date NOT NULL,
  `dataSaida` date NOT NULL,
  `tipoColaborador` varchar(20) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `orgao` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataNascimento` date NOT NULL,
  `nacionalidade` varchar(20) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `nomePai` varchar(40) NOT NULL,
  `nomeMae` varchar(40) NOT NULL,
  `endereco` varchar(40) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(30) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(40) CHARACTER SET latin1 NOT NULL,
  `cep` varchar(10) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `celular` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cursoFormacao` varchar(40) NOT NULL,
  `previsaoFormatura` varchar(40) NOT NULL,
  `matricula` varchar(40) NOT NULL,
  `banco` varchar(40) NOT NULL,
  `agencia` varchar(40) NOT NULL,
  `contaCorrente` varchar(40) NOT NULL,
  `lancamentoSiga` varchar(40) NOT NULL,

  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
