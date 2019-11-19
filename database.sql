-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5740
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hbd
CREATE DATABASE IF NOT EXISTS `hbd` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hbd`;

-- Dumping structure for table hbd.orang
CREATE TABLE IF NOT EXISTS `orang` (
  `id_orang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_orang` varchar(300) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id_orang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hbd.orang: ~1 rows (approximately)
/*!40000 ALTER TABLE `orang` DISABLE KEYS */;
INSERT INTO `orang` (`id_orang`, `nama_orang`, `tgl_lahir`) VALUES
	(1, 'Testing', '2000-11-18');
/*!40000 ALTER TABLE `orang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
