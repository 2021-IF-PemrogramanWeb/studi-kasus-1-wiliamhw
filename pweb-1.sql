/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `graph_data`;
CREATE TABLE `graph_data` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `on` varchar(63) NOT NULL,
  `off` varchar(63) NOT NULL,
  `act_by` varchar(63) NOT NULL,
  `reason` varchar(63) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `graph_data` (`id`, `amount`) VALUES
(1, 2);
INSERT INTO `graph_data` (`id`, `amount`) VALUES
(2, 3);
INSERT INTO `graph_data` (`id`, `amount`) VALUES
(3, 4);
INSERT INTO `graph_data` (`id`, `amount`) VALUES
(4, 1),
(5, 2),
(6, 5),
(7, 6),
(8, 7),
(9, 1),
(10, 1),
(11, 1),
(12, 2),
(13, 3),
(14, 2),
(15, 1),
(16, 9);

INSERT INTO `logs` (`id`, `on`, `off`, `act_by`, `reason`) VALUES
(1, 'Kamis, 25//02/2021, 19:41:50', 'Kamis, 25/02/2021, 21:00:50', 'Act: Audiyatra\r\nDis: Rizaldy, Gathot', '1. Interlock Hose Reel Front');
INSERT INTO `logs` (`id`, `on`, `off`, `act_by`, `reason`) VALUES
(2, 'Minggu, 01/03/2021, 19:41:50', 'Minggu, 01/03/2021, 22:41:50', '', '2. Interlock Hose Reel Rear');
INSERT INTO `logs` (`id`, `on`, `off`, `act_by`, `reason`) VALUES
(3, 'Minggu, 01/03/2021, 23:30:00', 'Minggu, 01/03/2021, 00:30:00', '', '3. Interlock Input Coupler Stow');
INSERT INTO `logs` (`id`, `on`, `off`, `act_by`, `reason`) VALUES
(4, 'Selasa, 03/03/2021, 08:30:30', 'Selasa, 03/03/2021, 09:30:30', '', '4. Interlock Input Hose Boom Stow'),
(5, 'Kamis, 05/03/2021, 08:30:30', 'Kamis, 05/03/2021, 10:30:30', '', '9. Interlock Bonding Static Reel Front'),
(6, 'Jumat, 06/03/2021, 08:30:30', 'Jumat, 06/03/2021, 08:45:30', '', '10. Interlock Bonding Static Reel Rear'),
(7, 'Senin, 08/03/2021, 08:30:30', 'Senin, 08/03/2021, 08:30:30', '', '15. Interlock System Fault'),
(8, 'Selasa, 16/03/2021, 08:30:30', 'Selasa, 16/03/2021, 08:30:30', '', '16. Breakdown');

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;