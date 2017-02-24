-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 08:01 PM
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
CREATE DATABASE IF NOT EXISTS `bd_valoracionapp` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
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

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `alumno_id` int(11) NOT NULL,
  `alumno_nombre` varchar(15) NOT NULL,
  `alumno_apellido` varchar(30) NOT NULL,
  `alumno_curso` varchar(15) NOT NULL,
  `alumno_proyectoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`alumno_id`, `alumno_nombre`, `alumno_apellido`, `alumno_curso`, `alumno_proyectoid`) VALUES
(1, 'Mike', 'Gomez', 'DAW2', 2),
(2, 'Musta', 'MKFALFM', 'DAW2', 2),
(3, 'Javi', 'Acebo', 'DAW2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preguntapublico`
--

CREATE TABLE `tbl_preguntapublico` (
  `prpu_id` int(11) NOT NULL,
  `prpu_tipo` enum('oral','contenido') NOT NULL,
  `prpu_pregunta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_preguntapublico`
--

INSERT INTO `tbl_preguntapublico` (`prpu_id`, `prpu_tipo`, `prpu_pregunta`) VALUES
(1, 'oral', '1. T''ha quedat una idea clara de la part que ha exposat.'),
(2, 'oral', '2. Com valores la seva expressió oral.'),
(3, 'oral', '3. Creus que la presentació està ben estructurada..'),
(4, 'contenido', '4. Com vlores la qualitat del power-point, flash, etc que s''ha fet servir a l''exposició'),
(5, 'contenido', '5. T''ha quedat clar el contigut del projecte.'),
(6, 'contenido', '6. Com valores la qualitat del projecte exposat.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preguntatribunal`
--

CREATE TABLE `tbl_preguntatribunal` (
  `prtri_id` int(11) NOT NULL,
  `prtri_tipo` enum('oral','contenido') NOT NULL,
  `prtri_pregunta` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_preguntatribunal`
--

INSERT INTO `tbl_preguntatribunal` (`prtri_id`, `prtri_tipo`, `prtri_pregunta`) VALUES
(1, 'oral', '1. Estructura de la presentació. (presentació personal, introducció, presentació del projecte, conclusions, preguntes, comiat adequat)'),
(2, 'oral', '2. Temps utilitzat. (duració total, duració de cada part de l''exposició)'),
(3, 'oral', '3. Expressió oral. (to de veu, claredar oral, ritme, vocabulari  adequat ...)'),
(4, 'oral', '4. Presencia adequada. (presencia física, moviment corporal, etc ...)'),
(5, 'contenido', '5. Material utilizat en l''exposició oral. (PowerPoint, fotocopies, vídeo, etc ...)'),
(6, 'contenido', '6. Desenvolupament i procès del projecte.'),
(7, 'contenido', '7. Conclusions ben raonades.'),
(8, 'contenido', '8. Respostes a les preguntes del tribunal.'),
(9, 'contenido', '9. Qualitat del producte obtingut segons l''exposició.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profesor`
--

CREATE TABLE `tbl_profesor` (
  `profesor_id` int(11) NOT NULL,
  `profesor_nombre` varchar(15) NOT NULL,
  `profesor_apellido` varchar(30) NOT NULL,
  `profesor_correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profesor`
--

INSERT INTO `tbl_profesor` (`profesor_id`, `profesor_nombre`, `profesor_apellido`, `profesor_correo`) VALUES
(1, 'David', 'Marin', 'david.marin@fje.edu'),
(2, 'Sergio', 'Jimenez', 'sjimenes@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `proyecto_id` int(11) NOT NULL,
  `proyecto_nombre` varchar(50) NOT NULL,
  `proyecto_imagen` varchar(50) NOT NULL,
  `proyecto_fecha` datetime NOT NULL,
  `proyecto_nota` decimal(4,2) DEFAULT NULL,
  `proyecto_tutor` int(11) NOT NULL,
  `proyecto_comentarioTribunal` int(11) DEFAULT NULL,
  `proyecto_estado` enum('empezar','encurso','finalizado') NOT NULL,
  `proyecto_codigo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_proyecto`
--

INSERT INTO `tbl_proyecto` (`proyecto_id`, `proyecto_nombre`, `proyecto_imagen`, `proyecto_fecha`, `proyecto_nota`, `proyecto_tutor`, `proyecto_comentarioTribunal`, `proyecto_estado`, `proyecto_codigo`) VALUES
(1, 'Prueba', '../images/prueba.png', '2017-02-24 00:00:00', '0.00', 0, NULL, 'empezar', 'asdfgls'),
(2, 'prueba', '../images/prueba.png', '2017-02-28 00:00:00', NULL, 1, NULL, 'encurso', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyectoprofesor`
--

CREATE TABLE `tbl_proyectoprofesor` (
  `pp_id` int(11) NOT NULL,
  `pp_proyectoid` int(11) NOT NULL,
  `pp_usuario` varchar(15) NOT NULL,
  `pp_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_proyectoprofesor`
--

INSERT INTO `tbl_proyectoprofesor` (`pp_id`, `pp_proyectoid`, `pp_usuario`, `pp_password`) VALUES
(1, 2, 'profesor', 'profe'),
(2, 1, 'prueba', 'prueba');

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
  `publico_comentario` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publiconota`
--

CREATE TABLE `tbl_publiconota` (
  `pn_id` int(11) NOT NULL,
  `pn_prpuid` int(11) NOT NULL,
  `pn_publicoid` int(11) NOT NULL,
  `pn_alumnoid` int(11) NOT NULL,
  `pn_nota` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tribunal`
--

CREATE TABLE `tbl_tribunal` (
  `tribunal_id` int(11) NOT NULL,
  `tribunal_profesorid` int(11) NOT NULL,
  `tribunal_ppid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_tribunal`
--

INSERT INTO `tbl_tribunal` (`tribunal_id`, `tribunal_profesorid`, `tribunal_ppid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tribunalnota`
--

CREATE TABLE `tbl_tribunalnota` (
  `tn_id` int(11) NOT NULL,
  `tn_prtriid` int(11) NOT NULL,
  `tn_alumnoid` int(11) NOT NULL,
  `tn_ppid` int(11) NOT NULL,
  `tn_notatribunal` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Indexes for table `tbl_preguntapublico`
--
ALTER TABLE `tbl_preguntapublico`
  ADD PRIMARY KEY (`prpu_id`);

--
-- Indexes for table `tbl_preguntatribunal`
--
ALTER TABLE `tbl_preguntatribunal`
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
-- Indexes for table `tbl_proyectoprofesor`
--
ALTER TABLE `tbl_proyectoprofesor`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `tbl_publico`
--
ALTER TABLE `tbl_publico`
  ADD PRIMARY KEY (`publico_id`);

--
-- Indexes for table `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  ADD PRIMARY KEY (`tribunal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_preguntapublico`
--
ALTER TABLE `tbl_preguntapublico`
  MODIFY `prpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_preguntatribunal`
--
ALTER TABLE `tbl_preguntatribunal`
  MODIFY `prtri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  MODIFY `profesor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `proyecto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_proyectoprofesor`
--
ALTER TABLE `tbl_proyectoprofesor`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_publico`
--
ALTER TABLE `tbl_publico`
  MODIFY `publico_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  MODIFY `tribunal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
