-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.6.5-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para siia
CREATE DATABASE IF NOT EXISTS `siia` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `siia`;

-- Volcando estructura para tabla siia.article
CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_category_id` int(11) DEFAULT NULL,
  `article_name` varchar(50) DEFAULT NULL,
  `article_description` varchar(200) DEFAULT NULL,
  `article_price` decimal(20,2) DEFAULT NULL,
  `article_date` date DEFAULT NULL,
  `article_quantity` int(20) DEFAULT NULL,
  `article_photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.article: 16 rows
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`article_id`, `article_category_id`, `article_name`, `article_description`, `article_price`, `article_date`, `article_quantity`, `article_photo`) VALUES
	(1, 1, 'KIT KAT', 'Producto 1 categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(2, 1, 'NESCAFE', 'Producto 2 categoria 1', 12.00, NULL, 50, 'pro_nescafe.jpg'),
	(3, 1, 'PALMOLIVE', 'Producto 3 categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(4, 2, 'KIT KAT', 'Producto 1 categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(5, 2, 'NESCAFE', 'Producto 2 categoria 1', 12.00, NULL, 50, 'pro_nescafe.jpg'),
	(6, 2, 'PALMOLIVE', 'Producto 3 categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(7, 3, 'KIT KAT', 'Producto categoria 3', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(8, 3, 'NESCAFE', 'Producto categoria 3', 12.00, NULL, 50, 'pro_nescafe.jpg'),
	(9, 3, 'PALMOLIVE', 'Producto categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(10, 4, 'KIT KAT', 'Producto categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(11, 4, 'NESCAFE', 'Producto categoria 1', 12.00, NULL, 50, 'pro_nescafe.jpg'),
	(12, 4, 'PALMOLIVE', 'Producto categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(13, 5, 'KIT KAT', 'Producto categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(14, 5, 'NESCAFE', 'Producto categoria 1', 12.00, NULL, 50, 'pro_nescafe.jpg'),
	(15, 5, 'PALMOLIVE', 'Producto categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg'),
	(16, 6, 'KIT KAT', 'Producto categoria 1', 12.00, NULL, 50, 'pro_kitkat.jpg');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Volcando estructura para tabla siia.article_category
CREATE TABLE IF NOT EXISTS `article_category` (
  `article_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_category_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Volcando datos para la tabla siia.article_category: 0 rows
/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;

-- Volcando estructura para tabla siia.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `category_photo` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Volcando datos para la tabla siia.category: 6 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`, `category_name`, `category_photo`) VALUES
	(1, 'Bebidas', 'cat_bebidas.jpg'),
	(2, 'Congelados', 'cat_congelados.jpg'),
	(3, 'Conservas', 'cat_conservas.jpg'),
	(4, 'Frutas', 'cat_frutas.jpg'),
	(5, 'Limpieza', 'cat_limpieza.jpg'),
	(6, 'Ofertas', 'cat_ofertas.jpg');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Volcando estructura para tabla siia.log
CREATE TABLE IF NOT EXISTS `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_date` datetime DEFAULT NULL,
  `log_user_email` varchar(100) DEFAULT NULL,
  `log_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.log: 11 rows
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` (`log_id`, `log_date`, `log_user_email`, `log_description`) VALUES
	(1, '2023-05-10 10:10:32', 'admin@admin.com', 'Inicio de sesion exitoso.'),
	(15, '2023-05-10 17:03:10', 'admin@admin.com', 'Inicio de sesion exitoso.'),
	(14, '2023-05-10 15:51:37', 'admin@admin.com', 'Cierre de sesion exitoso.'),
	(12, '2023-05-10 15:47:06', 'admin@admin.com', 'Cierre de sesion exitoso.'),
	(13, '2023-05-10 15:50:31', 'admin@admin.com', 'Inicio de sesion exitoso.'),
	(16, '2023-05-11 13:48:03', 'admin@admin.com', 'Inicio de sesion exitoso.'),
	(17, '2023-05-11 14:28:02', 'admin@admin.com', 'Cierre de sesion exitoso.'),
	(18, '2023-05-11 14:28:20', 'admin@admin.com', 'Inicio de sesion exitoso.'),
	(19, '2023-05-11 14:29:00', 'admin@admin.com', 'Cierre de sesion exitoso.'),
	(20, '2023-05-11 14:29:13', 'admin@admin.com', 'Inicio de sesion exitoso.'),
	(21, '2023-05-12 01:44:36', 'admin@admin.com', 'Inicio de sesion exitoso.');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;

-- Volcando estructura para tabla siia.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_user_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.order: 0 rows
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Volcando estructura para tabla siia.order_detail
CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_user_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.order_detail: 0 rows
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;

-- Volcando estructura para tabla siia.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(100) DEFAULT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_type` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.user: 3 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_photo`, `user_email`, `user_password`, `user_type`) VALUES
	(1, 'Ruben', 'Martinez', NULL, 'admin@admin.com', 'admin', 1),
	(12, 'pepe', NULL, NULL, 'pepe@pepe.com', 'pepeeee', 2),
	(13, 'aaaaaaaaaaaaaa', NULL, NULL, 'qqqq@qqqq.es', 'wwefwef', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Volcando estructura para tabla siia.user_data
CREATE TABLE IF NOT EXISTS `user_data` (
  `user_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_data_user_id` int(11) DEFAULT NULL,
  `user_data_name` varchar(50) DEFAULT NULL,
  `user_data_lastname` varchar(50) DEFAULT NULL,
  `user_data_direction` varchar(100) DEFAULT NULL,
  `user_data_phone` varchar(10) DEFAULT NULL,
  `user_data_movil` varchar(10) DEFAULT NULL,
  `user_data_document_number` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.user_data: 0 rows
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;

-- Volcando estructura para tabla siia.user_type
CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla siia.user_type: 2 rows
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
	(1, 'Admin'),
	(2, 'Customer');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
