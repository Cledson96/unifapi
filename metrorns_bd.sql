-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2023 at 06:51 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrorns_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imgs`
--

CREATE TABLE `tbl_imgs` (
  `id_imgs` int(15) NOT NULL,
  `id_obra` int(15) NOT NULL,
  `nome_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_imgs`
--

INSERT INTO `tbl_imgs` (`id_imgs`, `id_obra`, `nome_img`) VALUES
(1, 1, 'formosa-do-oeste01.jpeg'),
(2, 1, 'formosa-do-oeste02.jpeg'),
(3, 2, 'banner02.jpeg'),
(4, 2, 'formosa-do-oeste01.jpeg'),
(5, 3, 'banner01.jpeg'),
(6, 3, 'banner02.jpeg'),
(7, 3, 'empreendimentos.jpeg'),
(8, 3, 'formosa-do-oeste01.jpeg'),
(9, 1, 'anuncio.webp'),
(10, 2, 'anuncio.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obra`
--

CREATE TABLE `tbl_obra` (
  `id_obra` int(5) NOT NULL,
  `id_imgs` int(15) NOT NULL,
  `tipo_obra` varchar(100) NOT NULL,
  `titulo_obra` varchar(200) NOT NULL,
  `descricao_obra` varchar(500) NOT NULL,
  `valor_obra` varchar(15) NOT NULL,
  `status_obra` varchar(50) NOT NULL,
  `mostrar_site` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_obra`
--

INSERT INTO `tbl_obra` (`id_obra`, `id_imgs`, `tipo_obra`, `titulo_obra`, `descricao_obra`, `valor_obra`, `status_obra`, `mostrar_site`) VALUES
(2, 10, 'Residência', 'CASA NA PLANTA ', 'Projeto de uma obra unifamiliar a ser edificada no bairro Green Portugal, frg, construção 50m², forro de laje, faixada com pé direito 3,50m, sala, cozinha, banheiro pé direito 4m, 3 quartos, área de serviço, 1 vaga garagem', '280.000,00', 'Na planta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `usuarioLogin` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ativo` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `usuarioLogin`, `senha`, `nome`, `ativo`, `tipo`, `email`) VALUES
(2, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', 'S', 'A', 'contato@cwbpartners.com.br'),
(3, 'Corretor01', 'e10adc3949ba59abbe56e057f20f883e', 'Corretor 01', 'S', 'C', 'contato@cwbpartners.com.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_imgs`
--
ALTER TABLE `tbl_imgs`
  ADD PRIMARY KEY (`id_imgs`);

--
-- Indexes for table `tbl_obra`
--
ALTER TABLE `tbl_obra`
  ADD PRIMARY KEY (`id_obra`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_imgs`
--
ALTER TABLE `tbl_imgs`
  MODIFY `id_imgs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_obra`
--
ALTER TABLE `tbl_obra`
  MODIFY `id_obra` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
