-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.17-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bd_surtienda
CREATE DATABASE IF NOT EXISTS `bd_surtienda` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_surtienda`;

-- Volcando estructura para tabla bd_surtienda.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `ID_CLIENTES` smallint(6) NOT NULL AUTO_INCREMENT,
  `ID_USUA` smallint(6) DEFAULT NULL,
  `NOMBRE` varchar(80) DEFAULT NULL,
  `APELLIDO_PAT` varchar(80) DEFAULT NULL,
  `APELLIDO_MAT` varchar(80) DEFAULT NULL,
  `DIRECCION` varchar(80) DEFAULT NULL,
  `TELEFONO` varchar(11) DEFAULT NULL,
  `NOM_LOCAL` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ID_CLIENTES`),
  KEY `FK_CLIENTES_REFERENCE_USUARIOS` (`ID_USUA`),
  CONSTRAINT `FK_CLIENTES_REFERENCE_USUARIOS` FOREIGN KEY (`ID_USUA`) REFERENCES `usuarios` (`ID_USUA`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.clientes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`ID_CLIENTES`, `ID_USUA`, `NOMBRE`, `APELLIDO_PAT`, `APELLIDO_MAT`, `DIRECCION`, `TELEFONO`, `NOM_LOCAL`) VALUES
	(1, 3, 'Eric', 'Uscanga', 'Limon', 'Galindo', '9931808288', '....');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.compras
CREATE TABLE IF NOT EXISTS `compras` (
  `ID_COMP` smallint(6) NOT NULL AUTO_INCREMENT,
  `FOLIO` int(11) DEFAULT NULL,
  `NOMBRE` text DEFAULT NULL,
  `IMG` text DEFAULT NULL,
  `CANTIDAD` text DEFAULT NULL,
  `STOTAL` text DEFAULT NULL,
  `TOTAL` text DEFAULT NULL,
  PRIMARY KEY (`ID_COMP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.compras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.itinerario
CREATE TABLE IF NOT EXISTS `itinerario` (
  `ID_FECHA` smallint(6) NOT NULL AUTO_INCREMENT,
  `ID_VENDEDOR` smallint(6) DEFAULT NULL,
  `ID_RUTA` smallint(6) DEFAULT NULL,
  `ID_MATRICULA` smallint(6) DEFAULT NULL,
  `HORA_SALI` time DEFAULT NULL,
  `HORA_LLEG` time DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_FECHA`),
  KEY `FK_ITINERAR_REFERENCE_VENDEDOR` (`ID_VENDEDOR`),
  KEY `FK_ITINERAR_REFERENCE_RUTA` (`ID_RUTA`),
  KEY `FK_ITINERAR_REFERENCE_VEHICULO` (`ID_MATRICULA`),
  CONSTRAINT `FK_ITINERAR_REFERENCE_RUTA` FOREIGN KEY (`ID_RUTA`) REFERENCES `ruta` (`ID_RUTA`),
  CONSTRAINT `FK_ITINERAR_REFERENCE_VEHICULO` FOREIGN KEY (`ID_MATRICULA`) REFERENCES `vehiculo` (`ID_MATRICULA`),
  CONSTRAINT `FK_ITINERAR_REFERENCE_VENDEDOR` FOREIGN KEY (`ID_VENDEDOR`) REFERENCES `vendedores` (`ID_VENDEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.itinerario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `itinerario` DISABLE KEYS */;
/*!40000 ALTER TABLE `itinerario` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.mantenimiento
CREATE TABLE IF NOT EXISTS `mantenimiento` (
  `ID_MANTENIMIENTO` smallint(6) NOT NULL AUTO_INCREMENT,
  `ID_MATRICULA` smallint(6) DEFAULT NULL,
  `MANT` bit(1) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `SUCURSAL` varchar(80) DEFAULT NULL,
  `MONTO_TOT` int(11) DEFAULT NULL,
  `DISPO` bit(1) DEFAULT NULL,
  `DESCRIP` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ID_MANTENIMIENTO`),
  KEY `FK_MANTENIM_REFERENCE_VEHICULO` (`ID_MATRICULA`),
  CONSTRAINT `FK_MANTENIM_REFERENCE_VEHICULO` FOREIGN KEY (`ID_MATRICULA`) REFERENCES `vehiculo` (`ID_MATRICULA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.mantenimiento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mantenimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `mantenimiento` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `ID_MARCAS` tinyint(4) NOT NULL AUTO_INCREMENT,
  `MARCA` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ID_MARCAS`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.marcas: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`ID_MARCAS`, `MARCA`) VALUES
	(1, 'La Costeña'),
	(2, 'Nescafe'),
	(3, 'Marinela'),
	(4, 'Coca-cola'),
	(5, 'Fud'),
	(6, 'Del valle'),
	(7, 'Nissin'),
	(8, 'Sabritas'),
	(9, 'Pepsi'),
	(10, 'Tía Rosa');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `ID_PRO` smallint(6) NOT NULL AUTO_INCREMENT,
  `ID_MARCAS` tinyint(4) DEFAULT NULL,
  `NOMBRE` varchar(80) DEFAULT NULL,
  `DESCRIP` varchar(80) DEFAULT NULL,
  `IMG` varchar(80) DEFAULT NULL,
  `PRECIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PRO`),
  KEY `FK_PRODUCTO_REFERENCE_MARCAS` (`ID_MARCAS`),
  CONSTRAINT `FK_PRODUCTO_REFERENCE_MARCAS` FOREIGN KEY (`ID_MARCAS`) REFERENCES `marcas` (`ID_MARCAS`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.producto: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`ID_PRO`, `ID_MARCAS`, `NOMBRE`, `DESCRIP`, `IMG`, `PRECIO`) VALUES
	(1, 1, 'Duraznos', 'Duraznos en conserva mitades 3kg.', 'img/Productos/durazno.jpeg', 55),
	(2, 2, 'Cafe clasico', 'Nescafe clasico 60g', 'img/Productos/cafe.jfif', 22),
	(3, 3, 'Choco roles', 'Chocoroles sabor piña', 'img/Productos/chocoroles.jpg', 13),
	(4, 4, 'Coca-cola', 'Coca-cola 600ml', 'img/Productos/cocacola.jpg', 15),
	(5, 5, 'Jamón', 'Jamón de pavo y cerdo virginia 290g', 'img/Productos/jamon.jfif', 21),
	(6, 6, 'Jugo del valle', 'Jugo de manzana del valle 413ml', 'img/Productos/jugovalle.jfif', 17),
	(7, 2, 'Cafe dolca', 'Nescafe dolca 22g', 'img/Productos/nefcafe.jfif', 10),
	(8, 7, 'Sopa nissin', 'Sopa nissin camaron picante 64g', 'img/Productos/nissin.jpg', 5),
	(9, 8, 'Papas fritas', 'Papas fritas receta crujiente 170g', 'img/Productos/papas.jpg', 12),
	(10, 9, 'Pepsi', 'Pepsi 600ml', 'img/Productos/pepsi.jpg', 14);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.ruta
CREATE TABLE IF NOT EXISTS `ruta` (
  `ID_RUTA` smallint(6) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ID_RUTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.ruta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ruta` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruta` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.ruta_tiendas
CREATE TABLE IF NOT EXISTS `ruta_tiendas` (
  `ID_RUTA` smallint(6) DEFAULT NULL,
  `ID_CLIENTES` smallint(6) DEFAULT NULL,
  KEY `FK_RUTA_TIE_REFERENCE_RUTA` (`ID_RUTA`),
  KEY `FK_RUTA_TIE_REFERENCE_CLIENTES` (`ID_CLIENTES`),
  CONSTRAINT `FK_RUTA_TIE_REFERENCE_CLIENTES` FOREIGN KEY (`ID_CLIENTES`) REFERENCES `clientes` (`ID_CLIENTES`),
  CONSTRAINT `FK_RUTA_TIE_REFERENCE_RUTA` FOREIGN KEY (`ID_RUTA`) REFERENCES `ruta` (`ID_RUTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.ruta_tiendas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ruta_tiendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruta_tiendas` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.sucursales
CREATE TABLE IF NOT EXISTS `sucursales` (
  `ID_SUCURSAL` smallint(6) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(80) DEFAULT NULL,
  `DIRECCION` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_SUCURSAL`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.sucursales: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
INSERT INTO `sucursales` (`ID_SUCURSAL`, `NOMBRE`, `DIRECCION`) VALUES
	(1, 'Surtienda Gaviotas sur', 'Sur Tienda Aquiles Calderón Marchena 416, Gaviotas'),
	(2, 'Surtienda Gaviotas sur', 'Sur Tienda Aquiles Calderón Marchena 416, Gaviotas');
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUA` smallint(6) NOT NULL AUTO_INCREMENT,
  `CORREO_ELEC` varchar(80) DEFAULT NULL,
  `CONTRASENA` varchar(80) DEFAULT NULL,
  `TIPO` bit(1) DEFAULT NULL,
  PRIMARY KEY (`ID_USUA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.usuarios: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`ID_USUA`, `CORREO_ELEC`, `CONTRASENA`, `TIPO`) VALUES
	(1, 'Administrador', '123456', b'0'),
	(2, 'Usuario', '123456', b'1'),
	(3, 'eric0399', '123456', b'1'),
	(4, 'eric0399', '123456', b'1'),
	(5, 'eric0399', '123456', b'1');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.vehiculo
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `ID_MATRICULA` smallint(6) NOT NULL AUTO_INCREMENT,
  `ID_VENDEDOR` smallint(6) DEFAULT NULL,
  `MOTOR` varchar(80) DEFAULT NULL,
  `MODELO` varchar(80) DEFAULT NULL,
  `MATRICULA` smallint(6) DEFAULT NULL,
  `CAPAC` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ID_MATRICULA`),
  KEY `FK_VEHICULO_REFERENCE_VENDEDOR` (`ID_VENDEDOR`),
  CONSTRAINT `FK_VEHICULO_REFERENCE_VENDEDOR` FOREIGN KEY (`ID_VENDEDOR`) REFERENCES `vendedores` (`ID_VENDEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.vehiculo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `vehiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehiculo` ENABLE KEYS */;

-- Volcando estructura para tabla bd_surtienda.vendedores
CREATE TABLE IF NOT EXISTS `vendedores` (
  `ID_VENDEDOR` smallint(6) NOT NULL AUTO_INCREMENT,
  `RFC` varchar(80) DEFAULT NULL,
  `NOMBRE` varchar(80) DEFAULT NULL,
  `APELLIDO_PAT` varchar(80) DEFAULT NULL,
  `APELLIDO_MAT` varchar(80) DEFAULT NULL,
  `TELEFONO` varchar(50) DEFAULT NULL,
  `DIRECCION` varchar(80) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  PRIMARY KEY (`ID_VENDEDOR`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_surtienda.vendedores: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`ID_VENDEDOR`, `RFC`, `NOMBRE`, `APELLIDO_PAT`, `APELLIDO_MAT`, `TELEFONO`, `DIRECCION`, `FECHA_NAC`) VALUES
	(1, 'EAUL', 'Eric Alexis', 'Uscanga', 'Limón', '9931808288', 'Galindo', '1999-09-03');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
