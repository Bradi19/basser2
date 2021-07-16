/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ foryii /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE foryii;

DROP TABLE IF EXISTS tbl_migration;
CREATE TABLE `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS tbl_movement;
CREATE TABLE `tbl_movement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `movement` text,
  `quantity` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `product_title` char(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS tbl_product;
CREATE TABLE `tbl_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `detail` text,
  `price` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `name` varchar(32) DEFAULT NULL,
  `login` varchar(55) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(32) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL COMMENT 'create time',
  `update_time` datetime DEFAULT NULL COMMENT 'update time',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

INSERT INTO tbl_migration(version,apply_time) VALUES('m000000_000000_base',1626334547),('m210715_075409_product',1626335823),('m210715_082238_movement',1626351714);

INSERT INTO tbl_movement(id,product_id,movement,quantity,user_id,created_at,product_title,user_name) VALUES(43,1,X'6172726976616c',2,1,'2021-07-15 00:00:00','dsadas','admin');

INSERT INTO tbl_product(id,title,detail,price,quantity,content) VALUES(1,'dsadas',X'64617364617364',123,404,X'64736664736664736173646673');
INSERT INTO users(id,name,login,email,phone,role,create_time,update_time,password) VALUES(1,'admin','admin','admin@admin.ru','+380632123','administrator','2021-07-09 00:00:00',NULL,'21232f297a57a5a743894a0e4a801fc3'),(2,'moderator','moderator','moderator@gmail.com','+380632235151','moderator','2021-07-13 00:00:00',NULL,'0408f3c997f309c03b08bf3a4bc7b730'),(3,'user','user','user@gmail.com','+3806325554','user','2021-07-14 00:00:00',NULL,'ee11cbb19052e40b07aac0ca060c23ee');