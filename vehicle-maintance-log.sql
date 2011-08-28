# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.8
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2011-08-28 18:35:24
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for vehicle_maintance_log
DROP DATABASE IF EXISTS `vehicle_maintance_log`;
CREATE DATABASE IF NOT EXISTS `vehicle_maintance_log` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vehicle_maintance_log`;


# Dumping structure for table vehicle_maintance_log.vm_maintance_log
DROP TABLE IF EXISTS `vm_maintance_log`;
CREATE TABLE IF NOT EXISTS `vm_maintance_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` int(10) unsigned NOT NULL COMMENT 'vehicle owner name',
  `surname` int(10) unsigned NOT NULL COMMENT 'vehicle owner surname',
  `mark` int(10) unsigned NOT NULL,
  `model` int(10) unsigned NOT NULL,
  `vehicle_reg_number` int(10) unsigned NOT NULL,
  `maintance_date` datetime NOT NULL COMMENT 'date when maintance started',
  `maintance_length` time NOT NULL COMMENT 'maintance length',
  `milage` int(10) unsigned NOT NULL COMMENT 'vehicle milage',
  `maintance_comment` text NOT NULL COMMENT 'what has been done during mantance',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='vihcle maintance log';

# Dumping data for table vehicle_maintance_log.vm_maintance_log: ~0 rows (approximately)
DELETE FROM `vm_maintance_log`;
/*!40000 ALTER TABLE `vm_maintance_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `vm_maintance_log` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
