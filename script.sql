/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.23 : Database - ventas
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ventas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;

USE `ventas`;

/*Table structure for table `detalle` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

 insert into producto values(null,'bolsa de papel 1 lib ','2600','5');
 insert into producto values(null,'bolsa de papel 1/2 lib ','2000','5');
 insert into producto values(null,'bolsa de papel 2 lib','2900',   '5');
 insert into producto values(null,'bolsa de papel 3 lib','3500',   '5');
 insert into producto values(null,'bolsa plastica de 2 kilos','1600', '20');
 insert into producto values(null,'bolsa plastica de 3 kilos','1700', '20');
 insert into producto values(null,'bolsa plastica de 5 kilos','2500', '20');
 insert into producto values(null,'bolsa plastica de 10 kilos','3200','20');
 insert into producto values(null,'bolsa plastica de 15 kilos','5500','20');
 insert into producto values(null,'bolsa plastica de 25 kilos','7500','20');
 insert into producto values(null,'salsas de kilos tomate ','3900','6');
 insert into producto values(null,'salsas de kilos mayonesa','5000','6');
 insert into producto values(null,'salsas de kilos tartara ','5000','6');
 insert into producto values(null,'salsas de kilos gel o piña ','3200','6');
 insert into producto values(null,'salsas de kilos trocito o piña ','4400','6');
 insert into producto values(null,'vasos plastico color  7 onz x 50 bart','1800','6');
 insert into producto values(null,'vasos plastico transp 7 onz  x 25 caribe','1000','6');
 insert into producto values(null,'vasos plastico color 5.5 onz x50','1600','6');
 insert into producto values(null,'vasos plastico transp 5.5 onz x50','1600','6');
 insert into producto values(null,'vasos plastico transp 3.3 onz x50 ','1800','6');
 insert into producto values(null,'vasos plastico color 3.3 onz x50','1400','6');
 insert into producto values(null,'vasos plastico color 2.5 onz x 50','900','6');
 insert into producto values(null,'vasos plastico color 1.5 onz x 50','900','6');  


 insert into producto values(null,'harina elite x 1600 lib ','1600','99999');
 insert into producto values(null,'pan hamburguesa','3400','6');
 insert into producto values(null,'pan super','3500','5');
 insert into producto values(null,'pan mini','2200','6');
 









/*Data for the table `detalle` */

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

/*Data for the table `producto` */

/*Table structure for table `venta` */

/*   2  */

DROP TABLE IF EXISTS `detalle`;

CREATE TABLE `detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta` int(11) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL, 
  `subtotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

select * from producto;
select * from venta;
select * from detalle; 

delete  from detalle;
delete  from producto;
delete  from venta;








/*Data for the table `venta` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
