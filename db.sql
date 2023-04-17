CREATE DATABASE  IF NOT EXISTS `phpfullstack`, 
USE `phpfullstack`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `vigente` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES (5,'Rhuan','Cesar','rhuanfullstack@gmail.com','123456','S'),(6,'Aline','Cristo','aline@gmail.com','654321','S'),(7,'Thiago','Rosa','thiago@gmail.com','456123','S');

UNLOCK TABLES;

ALTER TABLE `phpfullstack`.`users` 
ADD UNIQUE INDEX `email_UNIQUE` (`email` ASC);
