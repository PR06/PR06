-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 08:17 PM
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
  `alumno_curso` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`alumno_id`, `alumno_nombre`, `alumno_apellido`, `alumno_curso`) VALUES
(1, 'Mike', 'Gomez', 'DAW2'),
(2, 'Musta', 'MKFALFM', 'DAW2'),
(3, 'Javi', 'Acebo', 'DAW2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preguntapublico`
--

CREATE TABLE `tbl_preguntapublico` (
  `prpu_id` int(11) NOT NULL,
  `prpu_tipo` enum('oral','contenido') NOT NULL,
  `prpu_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preguntatribunal`
--

CREATE TABLE `tbl_preguntatribunal` (
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

--
-- Dumping data for table `tbl_profesor`
--

INSERT INTO `tbl_profesor` (`profesor_id`, `profesor_nombre`, `profesor_apellido`, `profesor_correo`, `profesor_password`) VALUES
(1, 'David', 'Marin', 'david.marin@fje.edu', 'asdf');

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
-- Table structure for table `tbl_proyectoalumno`
--

CREATE TABLE `tbl_proyectoalumno` (
  `pa_id` int(11) NOT NULL,
  `pa_alumnoid` int(11) NOT NULL,
  `pa_proyectoid` int(11) NOT NULL,
  `pa_notaTribnal` decimal(4,2) DEFAULT NULL,
  `pa_notaPublico` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_proyectoalumno`
--

INSERT INTO `tbl_proyectoalumno` (`pa_id`, `pa_alumnoid`, `pa_proyectoid`, `pa_notaTribnal`, `pa_notaPublico`) VALUES
(2, 1, 2, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyectoprofesor`
--

CREATE TABLE `tbl_proyectoprofesor` (
  `pp_id` int(11) NOT NULL,
  `pp_profesorid` int(11) NOT NULL,
  `pp_proyectoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_proyectoprofesor`
--

INSERT INTO `tbl_proyectoprofesor` (`pp_id`, `pp_profesorid`, `pp_proyectoid`) VALUES
(1, 1, 2);

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
  `publico_comentario` varchar(300) DEFAULT NULL,
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
-- Indexes for table `tbl_proyectoalumno`
--
ALTER TABLE `tbl_proyectoalumno`
  ADD PRIMARY KEY (`pa_id`);

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
-- AUTO_INCREMENT for table `tbl_preguntatribunal`
--
ALTER TABLE `tbl_preguntatribunal`
  MODIFY `prtri_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  MODIFY `profesor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `proyecto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_proyectoalumno`
--
ALTER TABLE `tbl_proyectoalumno`
  MODIFY `pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_proyectoprofesor`
--
ALTER TABLE `tbl_proyectoprofesor`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_publico`
--
ALTER TABLE `tbl_publico`
  MODIFY `publico_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
