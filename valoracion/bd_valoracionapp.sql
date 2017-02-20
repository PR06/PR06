-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 07:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_valoracionapp`
--
CREATE DATABASE IF NOT EXISTS `bd_valoracionapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_valoracionapp`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(15) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `alumno_id` int(11) NOT NULL,
  `alumno_nombre` varchar(15) NOT NULL,
  `alumno_apellido` varchar(30) NOT NULL,
  `alumno_curso` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pregunta-publico`
--

CREATE TABLE `tbl_pregunta-publico` (
  `prpu_id` int(11) NOT NULL,
  `prpu_tipo` enum('oral','contenido') NOT NULL,
  `prpu_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pregunta-tribunal`
--

CREATE TABLE `tbl_pregunta-tribunal` (
  `prtri_id` int(11) NOT NULL,
  `prtri_tipo` enum('oral','contenido') NOT NULL,
  `prtri_pregunta` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profesor`
--

CREATE TABLE `tbl_profesor` (
  `profesor_id` int(11) NOT NULL,
  `profesor_nombre` varchar(15) NOT NULL,
  `profesor_apellido` varchar(30) NOT NULL,
  `profesor_correo` varchar(50) NOT NULL,
  `profesor_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `proyecto_id` int(11) NOT NULL,
  `proyecto_nombre` varchar(50) NOT NULL,
  `proyecto_imagen` varchar(50) NOT NULL,
  `proyecto_fecha` datetime NOT NULL,
  `proyecto_nota` decimal(4,2) NOT NULL,
  `proyecto_tutor` int(11) NOT NULL,
  `proyecto_comentarioTribunal` int(11) DEFAULT NULL,
  `proyecto_estado` enum('empezar','encurso','finalizado') NOT NULL,
  `proyecto_codigo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyecto-alumno`
--

CREATE TABLE `tbl_proyecto-alumno` (
  `pa_id` int(11) NOT NULL,
  `pa_alumnoid` int(11) NOT NULL,
  `pa_proyectoid` int(11) NOT NULL,
  `pa_notaTribnal` decimal(4,2) NOT NULL,
  `pa_notaPublico` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyecto-profesor`
--

CREATE TABLE `tbl_proyecto-profesor` (
  `pp_id` int(11) NOT NULL,
  `pp_profesorid` int(11) NOT NULL,
  `pp_proyectoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publico`
--

CREATE TABLE `tbl_publico` (
  `publico_id` int(11) NOT NULL,
  `publico_nombre` varchar(15) NOT NULL,
  `publico_apellido` varchar(30) NOT NULL,
  `publico_tipo` enum('alumno','otro') NOT NULL,
  `publico_curso` varchar(15) DEFAULT NULL,
  `publico_notaMedia` decimal(4,2) NOT NULL,
  `publico_comentario` varchar(300) NOT NULL,
  `publico_proyectoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`alumno_id`);

--
-- Indexes for table `tbl_pregunta-tribunal`
--
ALTER TABLE `tbl_pregunta-tribunal`
  ADD PRIMARY KEY (`prtri_id`);

--
-- Indexes for table `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  ADD PRIMARY KEY (`profesor_id`);

--
-- Indexes for table `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD PRIMARY KEY (`proyecto_id`);

--
-- Indexes for table `tbl_proyecto-alumno`
--
ALTER TABLE `tbl_proyecto-alumno`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `tbl_proyecto-profesor`
--
ALTER TABLE `tbl_proyecto-profesor`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `tbl_publico`
--
ALTER TABLE `tbl_publico`
  ADD PRIMARY KEY (`publico_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pregunta-tribunal`
--
ALTER TABLE `tbl_pregunta-tribunal`
  MODIFY `prtri_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  MODIFY `profesor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `proyecto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_proyecto-alumno`
--
ALTER TABLE `tbl_proyecto-alumno`
  MODIFY `pa_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_proyecto-profesor`
--
ALTER TABLE `tbl_proyecto-profesor`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_publico`
--
ALTER TABLE `tbl_publico`
  MODIFY `publico_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
