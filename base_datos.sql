-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla primero.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cli_apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cli_producto` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`cli_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla primero.clientes: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cli_id`, `cli_nombres`, `cli_apellidos`, `cli_producto`) VALUES
	(1, 'Luis', 'Perez', '(Caja Mascarillas) KN95'),
	(2, 'Bryan', 'Morales', '(Caja Mascarillas) N95'),
	(3, 'Johan', 'Morales', '(Caja Mascarillas)  FFP2'),
	(4, 'Esteban', 'Zurita', '(Caja Mascarillas) AIRNATECH'),
	(6, 'Misael', 'Estrella', '(Caja de Mascarillas) TBOC');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla primero.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `ven_id` int(11) NOT NULL AUTO_INCREMENT,
  `ven_producto` varchar(50) NOT NULL,
  `ven_precio` varchar(50) NOT NULL,
  `ven_comprador` varchar(50) NOT NULL,
  PRIMARY KEY (`ven_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla primero.ventas: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` (`ven_id`, `ven_producto`, `ven_precio`, `ven_comprador`) VALUES
	(1, '(Caja de Mascarillas) KN95', '25$', 'Luis Perez'),
	(2, '(Caja de Mascarillas) KN95', '20$', 'Bryan Morales'),
	(3, '(Caja de Mascarillas) FFP2', '20$', 'Johan Morales'),
	(4, '(Caja de Mascarillas) AIRNATECH', '25$', 'Esteban Zurita'),
	(6, '(Caja de Mascarillas) TBOC', '10$', 'Misael Estrella');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
