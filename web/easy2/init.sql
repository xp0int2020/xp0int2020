DROP DATABASE IF EXISTS `ctf`;

CREATE DATABASE `ctf`;

use `ctf`;


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) NOT NULL,
  `password` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `users` (`username`,`password`) VALUES
  ('Xp0int','9b7a2cfe65468a38c5246f858653c8f'),
  ('Donek1','9b7a2cfe65468a38c5246f858653c8f');


DROP TABLE IF EXISTS `flag`;

CREATE TABLE `flag` (
  `ctf` VARCHAR(128) NOT NULL,
  `enjoy_Sq1i11_qu3ryy` VARCHAR(128) NOT NULL
);

INSERT INTO `flag` (`ctf`,`enjoy_Sq1i11_qu3ryy`) VALUES ('flag','flag is in columns');

DROP USER IF EXISTS 'ctf'@'localhost';

CREATE USER 'ctf'@'localhost' IDENTIFIED BY 'XXp0int2020..';
GRANT SELECT ON `ctf`.`users` TO 'ctf'@'localhost';
GRANT SELECT ON `ctf`.`flag` TO 'ctf'@'localhost';

