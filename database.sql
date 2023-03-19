-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para database
CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `database`;

-- Volcando estructura para tabla database.Productos
CREATE TABLE IF NOT EXISTS `Productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Procedencia` int(11) NOT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Productos: ~4 rows (aproximadamente)
INSERT INTO `Productos` (`id_producto`, `Nombre`, `Precio`, `Descripcion`, `Procedencia`, `Categoria`, `Imagen`) VALUES
	(1, 'Patatas Bravas', 3.95, 'Patatas fritas en forma de dados con salsa picante. Crujientes por fuera y suaves por dentro. ', 1, 'Entrante', 'assets\\patatas.jpg'),
	(2, 'Macarrones', 5.8, 'Plato de macarrones con tomate y queso', 2, 'Primer plato', 'assets\\macarrones.jpg'),
	(3, 'Tallarines', 6.4, 'Plato de tallarines a la boloñesa', 2, 'Primer plato', 'assets\\tallarines.jpg'),
	(4, 'Tarta de Queso', 4.8, 'Exquisita tarta de queso fría o tarta de queso Philadelphia, una receta muy fácil y muy original para hacer un pastel de queso sin horno.', 1, 'Postre', 'assets\\tarta.jpg');

-- Volcando estructura para tabla database.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `contrasena` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.usuarios: ~1 rows (aproximadamente)
INSERT INTO `usuarios` (`nombre`, `contrasena`) VALUES
	('Adrian', 'GM');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
