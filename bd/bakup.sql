-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-04-2020 a las 23:05:31
-- Versión del servidor: 5.0.15
-- Versión de PHP: 5.0.5
-- 
-- Base de datos: `preguntas`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `reporte`
-- 

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(60) collate latin1_general_ci default NULL,
  `apellido` varchar(60) collate latin1_general_ci default NULL,
  `curp` varchar(18) collate latin1_general_ci default NULL,
  `rfc` varchar(20) collate latin1_general_ci default NULL,
  `folio` varchar(20) collate latin1_general_ci default NULL,
  `estacion_servicio` char(4) collate latin1_general_ci default 'no',
  `correo` varchar(30) collate latin1_general_ci default NULL,
  `telefono` bigint(20) default NULL,
  `texto` text collate latin1_general_ci,
  `Fecha` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `reporte`
-- 

