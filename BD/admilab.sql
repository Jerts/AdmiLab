-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2017 a las 20:07:48
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admilab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `USUARIO` varchar(50) NOT NULL,
  `CONTRA` varchar(50) NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`USUARIO`, `CONTRA`, `OBSERVACIONES`) VALUES
('akenfo', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('bestia666', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Es Genesis'),
('bobesponja', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('curcobein', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('fematQ', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Profe malo :c'),
('LizzieMcguire', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('magic_lolita', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Problema: Tiende a llenar el formulario 2 veces para iniciar sesion'),
('masterofpuppets', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('matilda', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('patricio', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('pedroperales', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('profJirafales', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('profUtonio', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'No le den la sustancia X'),
('profX', 'b60e56cf374338f1169639c5e921bf9e411a13c3', ''),
('steveJobs', 'b60e56cf374338f1169639c5e921bf9e411a13c3', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `ID_HORARIO` int(5) NOT NULL,
  `ID_MAESTRO` varchar(50) NOT NULL,
  `ID_LABORATORIO` int(3) NOT NULL,
  `ID_MATERIA` varchar(50) NOT NULL,
  `DIA` varchar(10) NOT NULL,
  `HORA_ENTRADA` time NOT NULL,
  `HORA_SALIDA` time NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`ID_HORARIO`, `ID_MAESTRO`, `ID_LABORATORIO`, `ID_MATERIA`, `DIA`, `HORA_ENTRADA`, `HORA_SALIDA`, `OBSERVACIONES`) VALUES
(1, 'PRESIDENTE', 1, 'ANATOMÍA5', 'LUNES', '07:00:00', '08:00:00', NULL),
(2, 'CHINYI', 3, 'ANATOMÍA3', 'LUNES', '08:00:00', '09:00:00', NULL),
(3, 'AMLO', 2, 'QUÍMICA5', 'LUNES', '09:00:00', '10:00:00', NULL),
(4, 'JCARLOS', 8, 'BIOLOGÍA2', 'LUNES', '10:00:00', '11:00:00', NULL),
(5, 'LAURO', 14, 'ANATOMÍA3', 'MARTES', '07:00:00', '08:00:00', NULL),
(6, 'CR7', 6, 'BIOLOGÍA3', 'MARTES', '08:00:00', '09:00:00', NULL),
(7, 'JONA', 3, 'ANATOMÍA3', 'MARTES', '09:00:00', '10:00:00', NULL),
(8, 'JOSE', 3, 'BIOLOGÍA2', 'MARTES', '11:00:00', '12:00:00', NULL),
(9, 'GÉNESIS', 4, 'ANATOMÍA4', 'MARTES', '12:00:00', '14:00:00', NULL),
(10, 'CHUY', 11, 'ANATOMÍA2', 'MARTES', '13:00:00', '15:00:00', NULL),
(11, 'INGARTURO', 3, 'QUÍMICA1', 'MIERCOLES', '07:00:00', '09:00:00', NULL),
(12, 'MARIA', 6, 'BIOLOGÍA3', 'MIERCOLES', '10:00:00', '12:00:00', NULL),
(13, 'NATALIA', 3, 'BIOLOGÍA4', 'JUEVES', '07:00:00', '08:00:00', NULL),
(14, 'GÉNESIS', 6, 'BIOLOGÍA4', 'VIERNES', '07:00:00', '08:00:00', NULL),
(15, 'RODRIGO', 14, 'QUÍMICA4', 'VIERNES', '10:00:00', '12:00:00', NULL),
(16, 'GENESIS', 8, 'BIOLOGÍA1', 'VIERNES', '10:30:00', '12:30:00', NULL),
(17, 'JOSE', 12, 'ANATOMÍA3', 'LUNES', '12:00:00', '18:00:00', NULL),
(18, 'JOSE', 5, 'QUÍMICA5', 'MARTES', '07:00:00', '14:00:00', NULL),
(19, 'JOSE', 10, 'QUÍMICA1', 'MARTES', '09:00:00', '18:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `ID_LABORATORIO` int(3) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`ID_LABORATORIO`, `NOMBRE`, `OBSERVACIONES`) VALUES
(1, 'LAB1', 'LABORATORIO DE QUÍMICA'),
(2, 'LAB2', 'LABORATORIO DE QUÍMICA'),
(3, 'LAB3', 'LABORATORIO DE QUÍMICA'),
(4, 'LAB4', 'LABORATORIO DE QUÍMICA'),
(5, 'LAB5', 'LABORATORIO DE QUÍMICA'),
(6, 'LAB6', 'LABORATORIO DE BIOLOGÍA'),
(7, 'LAB7', 'LABORATORIO DE BIOLOGÍA'),
(8, 'LAB8', 'LABORATORIO DE BIOLOGÍA'),
(9, 'LAB9', 'LABORATORIO DE BIOLOGÍA'),
(10, 'LAB10', 'LABORATORIO DE BIOLOGÍA'),
(11, 'LAB11', 'LABORATORIO DE ANATOMÍA'),
(12, 'LAB12', 'LABORATORIO DE ANATOMÍA'),
(13, 'LAB13', 'LABORATORIO DE ANATOMÍA'),
(14, 'LAB14', 'LABORATORIO DE ANATOMÍA'),
(15, 'LAB15', 'LABORATORIO DE ANATOMÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `ID_MAESTRO` varchar(50) NOT NULL,
  `CONTRA` varchar(40) NOT NULL,
  `NOMBRE(S)` varchar(50) NOT NULL,
  `P_APELLIDO` varchar(50) NOT NULL,
  `S_APELLIDO` varchar(50) NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`ID_MAESTRO`, `CONTRA`, `NOMBRE(S)`, `P_APELLIDO`, `S_APELLIDO`, `OBSERVACIONES`) VALUES
('AMLO', 'holis123', 'ANDRES MANUEL', 'LOPEZ', 'OBRADOR', 'PEJELAGARTOO'),
('CHINYI', 'holis123', 'SHINJI', 'IKARI', 'MARIK', 'GET IN THE ROBOT!'),
('CHUY', 'holis123', 'JESUS', 'REYES', 'MENDOZA', 'MAESTRO NUEVO'),
('CR7', 'holis123', 'CRISTIANO', 'RONALDO', 'FUCHO', 'ODIA A MESSI'),
('FEMAT', 'holis123', 'CARLOS ALAN', 'FEMAT', 'QUINTERO', 'CASI DIRECTOR'),
('GÉNESIS', 'holis123', 'GÉNESIS', 'MAYORQUÍN', 'LUNA', 'ES CHIDO'),
('INGARTURO', 'holis123', 'ARTURO', 'INGENIERO', 'FISICO', '¿COMO SE MANIFIESTA LA FÍSICA AQUÍ?'),
('JCARLOS', 'holis123', 'JUAN CARLOS', 'MEDINA', 'LLAMAS', 'NO ME ACUERDO DE SUS APELLIDOS'),
('JONA', 'holis123', 'JONATHAN', 'BELMONTES', 'ZACARIAS', 'SALTE PALACIOS'),
('JOSE', 'holis123', 'JUAN', 'PÉREZ', 'LOPEZ', 'AUSENTE 1 SEMANA'),
('LAURO', 'holis123', 'LAURO IVÁN', 'ARTEAGA', 'MURILLO', 'QUE PUES, DONDE ANDA?'),
('MARIA', 'holis123', 'ROSA MARIA', 'GUADALUPE', 'CRUZ', NULL),
('MESSI', 'holis123', 'LIONEL', 'MESSI', 'PULGA', 'THE VERY BEST'),
('NATALIA', 'holis123', 'NATALIA', 'CARRILLO', 'LÓPEZ', NULL),
('PRESIDENTE', 'holis123', 'ENRIQUE', 'PEÑA', 'NIETO', 'LO BUENO CASI NO SE CUENTA PERO CUENTA MUCHO'),
('RAFELA', 'holis123', 'RAFELA', 'RODRIGUEZ', 'PEREIRA', 'NO SE SUS APELLIDOS XD'),
('RODRIGO', 'holis123', 'RODRIGO', 'SÁNCHEZ', 'PÉREZ', 'ADMINISTRACIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_MATERIA` varchar(50) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_MATERIA`, `NOMBRE`, `DESCRIPCION`, `OBSERVACIONES`) VALUES
('ANATOMÍA1', 'ANATOMÍA1', 'MATERIA LABORATORISTA', 'MATERIA ÚNICA PARA LA CARRERA TÉCNICA DE LABORATORISTAS QUÍMICOS'),
('ANATOMÍA2', 'ANATOMÍA2', 'MATERIA LABORATORISTA', 'MATERIA ÚNICA PARA LA CARRERA TÉCNICA DE LABORATORISTAS QUÍMICOS CON DIFERENTES HORARIOS'),
('ANATOMÍA3', 'ANATOMÍA3', 'MATERIA LABORATORISTA', 'DIFERNTE HORARIO'),
('ANATOMÍA4', 'ANATOMÍA4', 'MATERIA LABORATORISTA', 'DIFERNTE HORARIO (VESPERTINO)'),
('ANATOMÍA5', 'ANATOMÍA5', 'MATERIA LABORATORISTA', 'MATERIA PARA ALUMNOS CON ADEUDOS'),
('BIOLOGÍA1', 'BIOLOGÍA1', 'MATERIA GENERAL', 'MATERIA A TODOS LOS CURSANTES DE 2° SEMESTRE'),
('BIOLOGÍA2', 'BIOLOGÍA2', 'MATERIA GENERAL', 'MATERIA GENERAL PARA ALUMNOS REGULARES'),
('BIOLOGÍA3', 'BIOLOGÍA3', 'MATERIA GENERAL', 'MATERIA CON HORARIOS DIFERNTES'),
('BIOLOGÍA4', 'BIOLOGÍA4', 'MATERIA GENERAL', 'MATERIA PARA ALUMNOS CON ADEUDOS'),
('BIOLOGÍA5', 'BIOLOGÍA5', 'MATERIA GENERAL', 'MATERIA PARA ALUMNOS CON RETRASO MENTAL'),
('QUÍMICA1', 'QUÍMICA', 'MATERIA GENERAL', 'SE IMPARTE A TODOS LOS ALUMNOS SIN IMPORTAR SU CARRERA TÉCNICA'),
('QUÍMICA2', 'QUÍMICA2', 'MATERIA GENERAL', 'MISMA MATERIA DIFERENTE MAESTRO'),
('QUÍMICA3', 'QUÍMICA3', 'MATERIA GENERAL', 'MISMA MATERIA DIFERENTES HORARIOS'),
('QUÍMICA4', 'QUÍMICA4', 'MATERIA GENERAL', 'HORARIOS AJUSTADOS A ALUMNOS CON ADEUDO DE MATERIAS'),
('QUÍMICA5', 'QUÍMICA5', 'MATERIA GENERAL', 'MATERIA CON CONOCIMIENTOS AVANZADOS ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `ID_MATERIAL` int(50) NOT NULL,
  `USUARIO_ADMIN` varchar(50) NOT NULL,
  `DESCRIPCION` mediumtext NOT NULL,
  `MARCA` varchar(50) NOT NULL,
  `PROVEDOR` varchar(50) NOT NULL,
  `CANTIDAD` varchar(10) NOT NULL,
  `UNIDAD` varchar(50) NOT NULL,
  `FECHA_ENTREGA` date NOT NULL,
  `FECHA_ACTUALIZACION` date NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`ID_MATERIAL`, `USUARIO_ADMIN`, `DESCRIPCION`, `MARCA`, `PROVEDOR`, `CANTIDAD`, `UNIDAD`, `FECHA_ENTREGA`, `FECHA_ACTUALIZACION`, `OBSERVACIONES`) VALUES
(1, 'bestia666', 'ANAQUEL ABIERTO 5 NIVELES', 'DESCONOCIDO', 'DESCONOCIDO', '1', 'PIEZA', '2017-02-13', '2017-06-07', NULL),
(2, 'akenfo', 'ASA BATERIOLOGICA SIN MANGO', 'DESCONOCIDO', 'DESCONOCIDO', '30', 'PIEZA', '2017-03-02', '2017-06-07', NULL),
(3, 'profUtonio', 'ATOMIZADORES', 'DESCONOCIDO', 'DESCONOCIDO', '10', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(4, 'fematQ', 'BALANZA GRANATARIA CON PLATILLO DE ACERO INOX', 'OHAUS', 'CTR SCIENTIFIC', '1', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(5, 'profUtonio', 'BARRA MAGNETICA OCTA 9.5X25.4MM', 'BELART', 'CTR SCIENTIFIC', '6', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(6, 'profJirafales', 'BOTELLA AMBAR 100 ML PYREX', 'DESCONOCIDO', 'DESCONOCIDO', '30', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(7, 'LizzieMcguire', 'BULBO 3 VIAS ROJO ', 'HERTHROW', 'CTR SCIENTIFIC', '8', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(8, 'steveJobs', 'BURETA ACCU-RED CLASE A LLAVE TEFLON 25ML', 'PYREX', 'CTR SCIENTIFIC', '6', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(9, 'magic_lolita', 'CAJA PETRI (PYREX) 100 X 15', 'DESCONOCIDO', 'DESCONOCIDO', '2', 'CAJA', '2017-02-02', '2017-02-02', NULL),
(10, 'patricio', 'CAPSULA DE PORCELANA 120ML', 'COORS', 'CTR SCIENTIFIC', '8', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(11, 'akenfo', 'CINTA MASKING', 'DESCONOCIDO', 'DESCONOCIDO', '1', 'PIEZA', '2017-02-02', '2017-06-07', NULL),
(12, 'patricio', 'CINTA METRICA DE COSTURERA', 'DESCONOCIDO', 'DESCONOCIDO', '5', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(13, 'masterofpuppets', 'CRISOL PORCELANA 30ML', 'COORS', 'CTR SCIENTIFIC', '8', 'PIEZA', '2017-02-02', '2017-02-02', NULL),
(14, 'profX', 'CUBRE OBJETOS 22X22MM', 'DESCONOCIDO', 'DESCONOCIDO', '5', 'CAJA', '2017-02-02', '2017-02-02', NULL),
(15, 'pedroperales', 'CUBRE OBJETOS 24X50 AMM', 'CORNING', 'DESCONOCIDO', '5', 'CAJA', '2017-02-02', '2017-02-02', NULL),
(18, 'bestia666', 'Cosav++', 'Playstation', 'esta', '787878', 'PIEZA', '2017-05-23', '2017-06-06', NULL),
(19, 'bestia666', 'Cosa13', 'asdasd', 'asddadsa', '57', 'PIEZA', '2017-06-05', '2017-06-06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_practica`
--

CREATE TABLE `material_practica` (
  `ID_PRACTICA` varchar(50) NOT NULL,
  `ID_MATERIAL` int(50) NOT NULL,
  `ID_HORARIO` int(5) NOT NULL,
  `ID_TECNICO` varchar(50) DEFAULT NULL,
  `CANTIDAD_USADA` varchar(10) NOT NULL,
  `UNIDAD` varchar(50) NOT NULL,
  `ESTADO` varchar(20) NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `material_practica`
--

INSERT INTO `material_practica` (`ID_PRACTICA`, `ID_MATERIAL`, `ID_HORARIO`, `ID_TECNICO`, `CANTIDAD_USADA`, `UNIDAD`, `ESTADO`, `OBSERVACIONES`) VALUES
('PRACTICA01_GENESIS_ANATOMIA', 1, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 2, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 3, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 4, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 5, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 6, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 7, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 8, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 9, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 10, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 11, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 12, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 13, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA01_GENESIS_ANATOMIA', 14, 8, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA03_BIOLOGÍA', 2, 8, NULL, '2', 'PIEZA', 'PENDIENTE', NULL),
('PRACTICA03_BIOLOGÍA', 11, 8, NULL, '1', 'PIEZA', 'PENDIENTE', NULL),
('PRACTICA03_BIOLOGÍA', 3, 8, NULL, '3', 'PIEZA', 'PENDIENTE', NULL),
('PRACTICA03_BIO', 1, 19, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL),
('PRACTICA03_BIO', 11, 19, 'CarlosFemat', '2', 'PIEZA', 'APROBADO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `ID_TECNICO` varchar(50) NOT NULL,
  `CONTRA` varchar(40) NOT NULL,
  `NOMBRE(S)` varchar(50) NOT NULL,
  `P_APELLIDO` varchar(50) NOT NULL,
  `S_APELLIDO` varchar(50) NOT NULL,
  `OBSERVACIONES` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`ID_TECNICO`, `CONTRA`, `NOMBRE(S)`, `P_APELLIDO`, `S_APELLIDO`, `OBSERVACIONES`) VALUES
('1', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Ramiro', 'Estrada', 'Garcia', 'Guapo'),
('10', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Jaime', 'Agricultor', 'Castañeda', ''),
('11', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Kurt', 'Donald', 'Cobain', ''),
('12', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'David', 'Estrada', 'Garcia', 'El hermano de Ramiro'),
('13', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Thomas', 'Alva', 'Edison', ''),
('14', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'John', 'Von', 'Neumann', ''),
('15', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Robert', 'Norton', 'Noice', 'De Intel Amigos'),
('2', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Luis Mario', 'Trejo', 'Hinojosa', 'Guapo x2'),
('3', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Daniel', 'Garnica', 'Sanchez', 'Guapo x3'),
('5', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Ludovico', 'P.', 'Luche', ''),
('6', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Federica', 'Davalos', 'de P. Luche', ''),
('7', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Junior', 'P. Luche', 'Davalos', ''),
('8', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Bibiana', 'P. Luche', 'Davalos', ''),
('9', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Ludoviquito', 'P. Luche', 'Davalos', ''),
('CarlosFemat', 'b60e56cf374338f1169639c5e921bf9e411a13c3', 'Carlos Alan', 'Femat', 'Quintero', 'Profe malo :c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`ID_HORARIO`),
  ADD KEY `ID_MAESTRO` (`ID_MAESTRO`),
  ADD KEY `ID_LABORATORIO` (`ID_LABORATORIO`),
  ADD KEY `ID_MATERIA` (`ID_MATERIA`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`ID_LABORATORIO`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`ID_MAESTRO`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_MATERIA`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`ID_MATERIAL`),
  ADD KEY `USUARIO_ADMIN` (`USUARIO_ADMIN`);

--
-- Indices de la tabla `material_practica`
--
ALTER TABLE `material_practica`
  ADD KEY `ID_MATERIAL` (`ID_MATERIAL`),
  ADD KEY `ID_HORARIO` (`ID_HORARIO`),
  ADD KEY `ID_TECNICO` (`ID_TECNICO`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`ID_TECNICO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `ID_HORARIO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `ID_LABORATORIO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `ID_MATERIAL` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `FK_ID_LABORATORIO` FOREIGN KEY (`ID_LABORATORIO`) REFERENCES `laboratorio` (`ID_LABORATORIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_MAESTRO` FOREIGN KEY (`ID_MAESTRO`) REFERENCES `maestro` (`ID_MAESTRO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_MATERIA` FOREIGN KEY (`ID_MATERIA`) REFERENCES `materia` (`ID_MATERIA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `FK_USUARIO_ADMIN` FOREIGN KEY (`USUARIO_ADMIN`) REFERENCES `administrador` (`USUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `material_practica`
--
ALTER TABLE `material_practica`
  ADD CONSTRAINT `FK_ID_HORARIO` FOREIGN KEY (`ID_HORARIO`) REFERENCES `horario` (`ID_HORARIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_MATERIAL` FOREIGN KEY (`ID_MATERIAL`) REFERENCES `material` (`ID_MATERIAL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_TECNICO` FOREIGN KEY (`ID_TECNICO`) REFERENCES `tecnico` (`ID_TECNICO`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
